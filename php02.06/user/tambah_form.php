<?php
include '../header.php';
?>

<!-- Content -->
<div class="content">
    <div class="container mt-3">
        <h4>Tambah User</h4>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <br>
        <form action="tambah_save.php" method="post">
            <div class="mb-3 mt-3">
                <label for="username">Username:</label>
                <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" autofocus>
            </div>
            <div class="mb-3 mt-3">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Masukkan password">
            </div>
            <div class="mb-3 mt-3">
                <label>Role</label>
                <input type="text" class="form-control" name="role" placeholder="Masukkan role">
            </div>
            <div class="mb-3 mt-3">
                <br>
                <input type="submit" value="Simpan" class="btn btn-success">
            </div>
        </form>
    </div>
    </body>

    </html>