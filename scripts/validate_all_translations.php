<?php

/**
 * CI validation script for all PanelAlpha translations.
 *
 * Validates:
 * - File count parity (each language has same files as en)
 * - Key parity (no missing keys in any language)
 * - JSON syntax validity for all .json files
 * - PHP syntax validity for all .php files
 * - Spot-check: warn if too many values are identical to English (heuristic)
 *
 * Exit code: 0 on success, 1 on failure
 */

$languages = ['de', 'es', 'fr', 'he', 'it', 'nl', 'pt_BR'];
$base_dir = __DIR__ . '/../panelalpha/translations';
$en_dir = $base_dir . '/en';

$errors = false;
$warnings = false;

function validate_php_file($file_path) {
    $output = shell_exec("php -l \"$file_path\" 2>&1");
    if (strpos($output, 'No syntax errors detected') === false) {
        echo "[ERROR] PHP Syntax Error in $file_path:\n$output\n";
        return false;
    }
    return true;
}

function validate_json_file($file_path) {
    $content = file_get_contents($file_path);
    json_decode($content);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "[ERROR] JSON Error in $file_path: " . json_last_error_msg() . "\n";
        return false;
    }
    return true;
}

function get_all_files($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS));
    foreach ($iterator as $file) {
        if ($file->isFile() && in_array($file->getExtension(), ['php', 'json'])) {
            $relative_path = str_replace($dir . DIRECTORY_SEPARATOR, '', $file->getPathname());
            // Skip email templates
            if (strpos($relative_path, 'email-templates') !== false) {
                continue;
            }
            $files[] = $relative_path;
        }
    }
    sort($files);
    return $files;
}

function load_translation_file($file_path) {
    $ext = pathinfo($file_path, PATHINFO_EXTENSION);
    if ($ext === 'php') {
        return include $file_path;
    } elseif ($ext === 'json') {
        return json_decode(file_get_contents($file_path), true);
    }
    return null;
}

function get_missing_keys($main, $target, $prefix = '') {
    $missing = [];
    foreach ($main as $key => $value) {
        $path = $prefix ? $prefix . '.' . $key : $key;
        if (!isset($target[$key])) {
            $missing[] = $path;
        } elseif (is_array($value) && is_array($target[$key])) {
            $missing = array_merge($missing, get_missing_keys($value, $target[$key], $path));
        }
    }
    return $missing;
}

function count_flat_keys($array, $prefix = '') {
    $count = 0;
    foreach ($array as $key => $value) {
        $path = $prefix ? $prefix . '.' . $key : $key;
        if (is_array($value)) {
            $count += count_flat_keys($value, $path);
        } else {
            $count++;
        }
    }
    return $count;
}

function count_identical_values($main, $target) {
    $identical = 0;
    $total = 0;
    foreach ($main as $key => $value) {
        if (is_array($value) && isset($target[$key]) && is_array($target[$key])) {
            $sub = count_identical_values($value, $target[$key]);
            $identical += $sub['identical'];
            $total += $sub['total'];
        } elseif (!is_array($value)) {
            $total++;
            if (isset($target[$key]) && $target[$key] === $value) {
                $identical++;
            }
        }
    }
    return ['identical' => $identical, 'total' => $total];
}

$en_files = get_all_files($en_dir);

echo "=== PanelAlpha Translation Validation ===\n\n";

foreach ($languages as $lang) {
    $lang_dir = $base_dir . '/' . $lang;
    echo "--- Validating $lang ---\n";

    if (!is_dir($lang_dir)) {
        echo "[ERROR] Language directory '$lang' not found.\n";
        $errors = true;
        continue;
    }

    $lang_files = get_all_files($lang_dir);

    // File count parity
    $missing_files = array_diff($en_files, $lang_files);
    $extra_files = array_diff($lang_files, $en_files);

    if ($missing_files) {
        echo "[ERROR] Missing files in $lang:\n";
        foreach ($missing_files as $file) {
            echo "  - $file\n";
        }
        $errors = true;
    }

    if ($extra_files) {
        echo "[WARN] Extra files in $lang (not in en):\n";
        foreach ($extra_files as $file) {
            echo "  - $file\n";
        }
        $warnings = true;
    }

    // Syntax and key validation
    foreach ($en_files as $relative_path) {
        $lang_file = $lang_dir . '/' . $relative_path;

        if (!file_exists($lang_file)) {
            continue; // Already reported as missing file
        }

        // Syntax validation
        $ext = pathinfo($relative_path, PATHINFO_EXTENSION);
        if ($ext === 'php') {
            if (!validate_php_file($lang_file)) {
                $errors = true;
            }
        } elseif ($ext === 'json') {
            if (!validate_json_file($lang_file)) {
                $errors = true;
            }
        }

        // Key parity
        $en_data = load_translation_file($en_dir . '/' . $relative_path);
        $lang_data = load_translation_file($lang_file);

        if ($en_data === null || $lang_data === null) {
            echo "[ERROR] Error loading file: $relative_path\n";
            $errors = true;
            continue;
        }

        $missing_keys = get_missing_keys($en_data, $lang_data);
        if ($missing_keys) {
            echo "[ERROR] Missing keys in $lang/$relative_path:\n";
            foreach ($missing_keys as $key) {
                echo "  - $key\n";
            }
            $errors = true;
        }

        // Spot-check: warn if >70% of values are identical to English
        $identical_check = count_identical_values($en_data, $lang_data);
        if ($identical_check['total'] > 0) {
            $ratio = $identical_check['identical'] / $identical_check['total'];
            if ($ratio > 0.70) {
                echo "[WARN] Spot-check: " . round($ratio * 100, 1) . "% of values in $lang/$relative_path are identical to English (possible untranslated content).\n";
                $warnings = true;
            }
        }
    }

    echo "\n";
}

// Summary
echo "=== Validation Summary ===\n";
if ($errors) {
    echo "Result: FAILED (errors found)\n";
    exit(1);
} elseif ($warnings) {
    echo "Result: PASSED with warnings\n";
    exit(0);
} else {
    echo "Result: PASSED (all checks clean)\n";
    exit(0);
}
