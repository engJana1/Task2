<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_direction";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}