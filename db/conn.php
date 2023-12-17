<?php
require 'parse.php';

getConnection(); // To check connection

function getConnection() {
    $env = parseEnv('../.env');

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
        echo "Connection failed.";
        return NULL;
    } else {
        echo "Connected successfully\n";
        return $conn;
    }
}
?>