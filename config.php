<?php
// Database Configuration
$hostname = 'localhost'; // Replace with your database host
$database = 'sulaimanp'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

// Create a database connection
$connection = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Set the character set for the connection (optional but recommended)
if (!$connection->set_charset("utf8")) {
    die("Error loading character set utf8: " . $connection->error);
}

// Session Configuration
session_start();

// Website Configuration
$siteTitle = 'Online Portfolio';
$siteUrl = 'http://localhost/olportfolio'; // Replace with your website URL

// Paths
define('ROOT_PATH', __DIR__);
define('ASSETS_PATH', ROOT_PATH . '/assets');
define('CSS_PATH', ASSETS_PATH . '/css');
define('JS_PATH', ASSETS_PATH . '/js');
define('TEMPLATES_PATH', ROOT_PATH . '/templates');

// Function to escape user input (to prevent SQL injection)
function escape($value) {
    global $connection;
    return $connection->real_escape_string($value);
}
