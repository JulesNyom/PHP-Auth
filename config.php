<?php

$host = getenv('DB_HOST');
$database = $_ENV['DB_DATABASE'];
$name = $_ENV['DB_USERNAME'];
$password = getenv('DB_PASSWORD');

$conn = new mysqli($host, $name, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: ". $conn ->connect_error);
}