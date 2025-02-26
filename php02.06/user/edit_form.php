<?php
// Koneksi ke database
include '../header.php';

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


    <!-- Content -->
    <div class="content">
        <div class="container mt-3">
            <h4>Edit User</h4>
            <a href="index.php" class="btn btn-primary">Kembali</a>
            <br>
            <form action="edit_save.php" method="post">
                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">

                <div class="mb-3 mt-3">
                    <label for="text">Username:</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?= $user['username'] ?>" autofocus>
                </div>
                <div class="mb-3 mt-3">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Masukkan password" value="<?= $user['password'] ?>">
                </div>
                <div class="mb-3 mt-3">
                    <label>Role</label>
                    <input type="text" class="form-control" name="role" placeholder="Masukkan role" value="<?= $user['role'] ?>">
                </div>

                <div class="mb-3 mt-3">
                    <br>
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
</body>

</html>