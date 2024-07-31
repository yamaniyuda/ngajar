<?php
include_once './koneksi.php';

if (@$_GET['id']) {
    $sql = <<<SQL
        SELECT * FROM barang 
        WHERE `id` = '{$_GET['id']}'
    SQL;

    $result = $conn
                ->query($sql)
                ->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./simpan-barang-proses.php?id=<?= @$_GET['id'] ?>" method="post">
        <div>
            <label>Nama</label>
            <input type="text" name="name" value="<?= $result['name'] ?? '' ?>">
        </div>
        <div>
            <label>Harga</label>
            <input type="text" name="price" value="<?= $result['price'] ?? '' ?>">
        </div>
        <div>
            <button type="submit">
                Kirim
            </button>
        </div>
    </form>
</body>

</html>
