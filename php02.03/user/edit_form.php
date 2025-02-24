<?php
// Koneksi ke database
include '../koneksi.php';

// Ambil ID user dari parameter URL
$id_user = $_GET['id_user'] ?? null;

if (!$id_user) {
    die("ID tidak ditemukan.");
}

// Query untuk mendapatkan data user
$sql = "SELECT * FROM users WHERE id_user = $id_user";
$result = $conn->query($sql);

// Jika data ditemukan
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    die("User tidak ditemukan.");
}

// Tutup koneksi
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashsoft</title>
</head>

<body>
    <h4>Edit User</h4>
    <a href="index.php">Kembali</a>
    <br>
    <form action="edit_save.php" method="post">
        <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">

        <div style="display: block;">
            <h4>Username</h4>
            <input type="text" name="username" value="<?= $user['username'] ?>">
        </div>
        <div style="display: block;">
            <h4>Password</h4>
            <input type="text" name="password" placeholder="Masukkan password" value="<?= $user['password'] ?>">
        </div>
        <div style="display: block;">
            <h4>Role</h4>
            <input type="text" name="role" placeholder="Masukkan role" value="<?= $user['role'] ?>">
        </div>
        <div style="display: block;">
            <br>
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>

</html>