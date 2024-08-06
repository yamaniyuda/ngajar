<?php
include_once './koneksi.php';

session_start();
echo $_SESSION['name'];

$sql = <<<SQL
    SELECT * FROM barang
SQL;

$result = $conn->query($sql);
$result->num_rows

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <td>Nama Barang</td>
            <td>Harga Barang</td>
            <td>Aksi</td>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) :?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td>
                        <a href="./form-barang.php?id=<?= $row['id'] ?>">Perbarui</a> |
                        <a href="./hapus-barang-proses.php?id=<?= $row['id'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>
</body>
</html>