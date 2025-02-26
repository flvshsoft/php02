<?php
include '../header.php';
?>

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