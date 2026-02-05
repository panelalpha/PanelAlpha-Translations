<?php

/**
 * Script to validate translation files for syntax and completeness.
 * Checks PHP syntax for .php files and JSON validity for .json files.
 * Also checks for missing keys compared to English.
 *
 * Usage: php validate_translations.php <lang>
 * Example: php validate_translations.php de
 */

function validate_php_file($file_path) {
    $output = shell_exec("php -l \"$file_path\" 2>&1");
    if (strpos($output, 'No syntax errors detected') === false) {
        echo "PHP Syntax Error in $file_path:\n$output\n";
        return false;
    }
    return true;
}

function validate_json_file($file_path) {
    $content = file_get_contents($file_path);
    json_decode($content);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "JSON Error in $file_path: " . json_last_error_msg() . "\n";
        return false;
    }
    return true;
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
    echo "Usage: php validate_translations.php <lang>\n";
    echo "Example: php validate_translations.php de\n";
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

$errors = false;

foreach ($iterator as $file) {
    if ($file->isFile() && in_array($file->getExtension(), ['php', 'json'])) {
        $relative_path = str_replace($default_dir . '/', '', $file->getPathname());
        
        // Skip email templates
        if (strpos($relative_path, 'email-templates') !== false) {
            continue;
        }
        
        $lang_file = $lang_dir . '/' . $relative_path;

        if (!file_exists($lang_file)) {
            echo "File missing: $relative_path\n";
            $errors = true;
            continue;
        }

        // Validate syntax
        if ($file->getExtension() === 'php') {
            if (!validate_php_file($lang_file)) {
                $errors = true;
            }
        } elseif ($file->getExtension() === 'json') {
            if (!validate_json_file($lang_file)) {
                $errors = true;
            }
        }

        // Check for missing keys
        $main = load_translation_file($file->getPathname());
        $target = load_translation_file($lang_file);

        if ($main === null || $target === null) {
            echo "Error loading file: $relative_path\n";
            $errors = true;
            continue;
        }

        $missing = get_missing_keys($main, $target);
        if ($missing) {
            echo "Missing keys in $relative_path:\n";
            foreach ($missing as $key) {
                echo "  $key\n";
            }
            echo "\n";
            $errors = true;
        }
    }
}

if (!$errors) {
    echo "All validations passed for language '$lang'.\n";
} else {
    echo "Validation failed for language '$lang'. Please fix the issues.\n";
}

?>