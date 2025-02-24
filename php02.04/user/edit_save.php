<?php
include '../koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "UPDATE users SET `username`='$username', `password`='$password', `role`='$role' WHERE id_user='$id_user'";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
    header("Location: index.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
