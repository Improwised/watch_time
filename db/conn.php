<?php
require 'parse.php';

function getConnection($env_path) {
    $env = parseEnv($env_path);

    // Get environment variables
    $host = $env['DB_HOST'] ?? '';
    $port = $env['DB_PORT'] ?? '';
    $dbname = $env['DB_NAME'] ?? '';
    $user = $env['DB_USER'] ?? '';
    $password = $env['DB_PASSWORD'] ?? '';

    // Establish a connection
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
    // Check the connection
    if (!$conn) {
        return NULL;
    } else {
        return $conn;
    }
}
?>