<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Home</title>
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
        <a href="../home/index.php" class="active">Home</a>

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
        <a href="../user/index.php">User</a>
        <a href="#laporan.php">Laporan</a>
        <a href="#logout.php" class="text-danger">Logout</a>
    </div>

    <!-- Content -->
    <div class="content">
        <div class="container mt-3">
            <h2>Dashboard</h2>
            <p>Selamat datang di dashboard admin.</p>

            <div class="row">
                <!-- Total Users -->
                <div class="col-md-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <h2><?php echo 10; ?></h2> <!-- Data statis -->
                        </div>
                    </div>
                </div>

                <!-- Total Surat Masuk -->
                <div class="col-md-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Surat Masuk</h5>
                            <h2><?php echo 25; ?></h2> <!-- Data statis -->
                        </div>
                    </div>
                </div>

                <!-- Total Surat Keluar -->
                <div class="col-md-4">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title">Surat Keluar</h5>
                            <h2><?php echo 15; ?></h2> <!-- Data statis -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>