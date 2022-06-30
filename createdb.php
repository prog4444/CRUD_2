<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Пайваст нашуд: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE root2";
if ($conn->query($sql) === TRUE) {
    echo "База сохта шуд";
} else {
    echo "Хато: " . $conn->error;
}

$conn->close();

?>