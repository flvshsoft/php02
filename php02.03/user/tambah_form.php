<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashsoft</title>
</head>

<body>
    <h4>Tambah User</h4>
    <a href="index.php">Kembali</a>
    <br>
    <form action="tambah_save.php" method="post">
        <div style="display: block;">
            <h4>Username</h4>
            <input type="text" name="username">
        </div>
        <div style="display: block;">
            <h4>Password</h4>
            <input type="text" name="password" placeholder="Masukkan password">
        </div>
        <div style="display: block;">
            <h4>Role</h4>
            <input type="text" name="role" placeholder="Masukkan role">
        </div>
        <div style="display: block;">
            <br>
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>

</html>