<?php
include '../koneksi.php';
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
        <a href="../home/index.php">Home</a>

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
        <a href="../user/index.php" class="active">User</a>
        <a href="#laporan.php">Laporan</a>
        <a href="#logout.php" class="text-danger">Logout</a>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="container mt-3">
            <h2>Data User</h2>
            <p>Ini adalah halaman tambah user</p>
            <a href="tambah_form.php" class="btn btn-primary">Tambah User</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row["username"] ?></td>
                                <td><?php echo $row["password"] ?></td>
                                <td><?php echo $row["role"] ?></td>
                                <td>
                                    <a href="edit_form.php?id_user=<?php echo $row["id_user"] ?>" class="btn btn-warning">Edit</a>
                                    <a href="hapus.php?id_user=<?php echo $row["id_user"] ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='4' class='text-center'>Tidak ada data</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>