<?php

/**
 * Script to compare translation files between languages.
 * Default language is English ('en').
 * Compares all .php and .json files recursively.
 * Displays missing keys in the target language compared to English.
 * Generates a CSV file with missing translations.
 *
 * Usage: php compare_translations.php <lang>
 * Example: php compare_translations.php de
 */

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

function load_translation_file($file_path) {
    $ext = pathinfo($file_path, PATHINFO_EXTENSION);
    if ($ext === 'php') {
        return include $file_path;
    } elseif ($ext === 'json') {
        return json_decode(file_get_contents($file_path), true);
    }
    return null;
}

$base_dir = __DIR__ . '/../panelalpha/translations';
$default_lang = 'en';

$lang = $argv[1] ?? null;
if (!$lang) {
    echo "Usage: php compare_translations.php <lang>\n";
    echo "Example: php compare_translations.php de\n";
    exit(1);
}

$default_dir = $base_dir . '/' . $default_lang;
$lang_dir = $base_dir . '/' . $lang;

if (!is_dir($default_dir)) {
    echo "Default language directory '$default_lang' not found.\n";
    exit(1);
}

if (!is_dir($lang_dir)) {
    echo "Language '$lang' not found.\n";
    exit(1);
}

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($default_dir, RecursiveDirectoryIterator::SKIP_DOTS));

$missing_data = [];
$has_missing = false;

foreach ($iterator as $file) {
    if ($file->isFile() && in_array($file->getExtension(), ['php', 'json'])) {
        $relative_path = str_replace($default_dir . '/', '', $file->getPathname());
        $lang_file = $lang_dir . '/' . $relative_path;

        if (!file_exists($lang_file)) {
            echo "File missing: $relative_path\n";
            $missing_data[] = [$relative_path, 'FILE_MISSING'];
            $has_missing = true;
            continue;
        }

        $main = load_translation_file($file->getPathname());
        $target = load_translation_file($lang_file);

        if ($main === null || $target === null) {
            echo "Error loading file: $relative_path\n";
            continue;
        }

        $missing = get_missing_keys($main, $target);
        if ($missing) {
            echo "Missing keys in $relative_path:\n";
            foreach ($missing as $key) {
                echo "  $key\n";
                $missing_data[] = [$relative_path, $key];
            }
            echo "\n";
            $has_missing = true;
        }
    }
}

if (!$has_missing) {
    echo "All translations are complete for language '$lang'.\n";
} else {
    $csv_file = __DIR__ . "/missing_translations_{$lang}.csv";
    $fp = fopen($csv_file, 'w');
    fputcsv($fp, ['File', 'Missing Key']);
    foreach ($missing_data as $row) {
        fputcsv($fp, $row);
    }
    fclose($fp);
    echo "CSV file generated: $csv_file\n";
}

?>