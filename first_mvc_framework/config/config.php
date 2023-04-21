<?php
define('SITE_NAME', 'http://localhost:8888/');

define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '../public/index.php');
define('URL_SUBFOLDER', '');

define('DB_HOST', 'localhost');
define('DB_USER', 'customer');
define('DB_PASS', '');
define('DB_NAME', 'portal');

$mysqli = @new mysqli(
    DB_HOST,
    DB_USER,
    DB_PASS,
    DB_NAME
);

if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}

$mysqli->close();

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}