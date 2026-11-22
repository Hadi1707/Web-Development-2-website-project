<?php

$conn = new mysqli("localhost", "root", "", "projectdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>