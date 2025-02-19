<?php
$host = 'localhost';
$dbname = 'belajar';
$user = 'root';
$password = '';

try {
    // Membuat koneksi
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Koneksi berhasil!';
} catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
}
