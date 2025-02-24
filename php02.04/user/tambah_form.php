<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flashsoft</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
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