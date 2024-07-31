<?php
include_once './koneksi.php';


// Codingan untuk Update
if (@$_GET['id']) {
    $sql = <<<SQL
        UPDATE barang SET
            `name`  = '{$_REQUEST["name"]}',
            `price` = '{$_REQUEST["price"]}'
        WHERE `id` = '{$_GET["id"]}'
    SQL;

    $result = $conn->query($sql);
    if (empty($result)) {
        echo <<<SCRIPT
            <script>
                alert('Gagal kesimpan  ke db')
                window.location.href = 'list-barang.php'
            </script>
        SCRIPT;
    } else {
        echo <<<SCRIPT
            <script>
                alert('Berhasil kesimpan  ke db')
                window.location.href = 'list-barang.php'
            </script>
        SCRIPT;
    }
}