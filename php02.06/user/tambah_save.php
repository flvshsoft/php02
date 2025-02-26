<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "INSERT INTO users (`username`, `password`, `role`)
VALUES ('$username', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: index.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
