<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "users_db";

$conn = new mysqli($host, $user, $password, $database, 8889);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>