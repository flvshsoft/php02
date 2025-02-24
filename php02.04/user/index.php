<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
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
                    // output data of each row
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
                    echo "0 results";
                }
                $conn->close();
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>