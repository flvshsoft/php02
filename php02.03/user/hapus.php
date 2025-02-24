<?php
include '../koneksi.php';

$id_user = $_GET['id_user'];

$sql = "DELETE FROM users WHERE id_user='$id_user'";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record deleted successfully";
    header("Location: index.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
