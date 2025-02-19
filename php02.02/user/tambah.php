<?php
include '../koneksi.php';

$sql = "INSERT INTO users (username, password, role)
VALUES ('admin', '123123', 'admin')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
