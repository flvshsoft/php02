<?php
include '../koneksi.php';
?>
<h4>Data User</h4>
<a href="tambah_form.php">Tambah User</a>
<br>

<table border="1">
    <tr>
        <td>No</td>
        <td>id user</td>
        <td>username</td>
        <td>Aksi</td>
    </tr>
    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $no = 1;
        while ($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td>
                    <?php echo $no++ ?>
                </td>
                <td>
                    <?php echo "id: " . $row["id_user"] ?>
                </td>
                <td>
                    <?php echo $row["username"] ?>
                </td>
                <td>
                    <a href="edit_form.php?id_user=<?php echo $row["id_user"] ?>">Edit</a>
                    <a href="hapus.php?id_user=<?php echo $row["id_user"] ?>">Hapus</a>
                </td>
            </tr>
    <?php
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>