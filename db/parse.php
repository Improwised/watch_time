<?php
// Function to parse .env file
function parseEnv($file)
{
    $env = [];

    // Read the .env file
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        // Ignore comments and invalid lines
        if (strpos($line, '=') !== false && $line[0] !== '#') {
            list($key, $value) = explode('=', $line, 2);
            $env[$key] = trim($value);
        }
    }

    return $env;
}
?>