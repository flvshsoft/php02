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
    <title>Data User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: rgb(35, 152, 236);
            color: white;
            position: fixed;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 20px;
            display: block;
            color: white;
            text-decoration: none;
        }

        .sidebar a:hover,
        .sidebar .active {
            background: rgb(27, 79, 132);
        }

        .content {
            margin-left: 260px;
            padding: 20px;
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">Menu</h4>
        <a href="index.php" class="active">Home</a>

        <!-- Dropdown Surat -->
        <div class="dropdown">
            <a class="dropdown-toggle" data-bs-toggle="collapse" href="#suratMenu" role="button" aria-expanded="false">
                Surat
            </a>
            <div class="collapse ms-3" id="suratMenu">
                <a href="#surat_masuk.php">- Surat Masuk</a>
                <a href="#surat_keluar.php">- Surat Keluar</a>
            </div>
        </div>

        <a href="#unit.php">Unit</a>
        <a href="#user.php">User</a>
        <a href="#laporan.php">Laporan</a>
        <a href="#logout.php" class="text-danger">Logout</a>
    </div>

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