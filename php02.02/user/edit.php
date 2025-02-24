<?php
include '../koneksi.php';

$sql = "UPDATE users SET username='admin_fs' WHERE id_user = '1'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
