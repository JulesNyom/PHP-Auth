<?php
// Using UNIX socket (recommended for MAMP)
$db_host = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock'; // Socket path
$db_user = '';
$db_password = ''; // Use your actual password
$db_db = '';

// Alternative TCP connection (use either this or socket)
// $db_host = '127.0.0.1'; // Don't use 'localhost' for TCP
// $db_port = 8889;        // MAMP's MySQL port

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
    // $db_port           // Uncomment for TCP
);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>