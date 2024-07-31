<?php
include_once './koneksi.php';

if (!@$_GET['id']) {
    echo <<<SCRIPT
            <script>
                alert('Tidak ada barang yang ingin dihapus')
                window.location.href = 'list-barang.php'
            </script>
        SCRIPT;
}

$sql = <<<SQL
    DELETE FROM barang 
        WHERE `id` = '{$_GET['id']}'
SQL;

$result = $conn->query($sql);
if (empty($result)) {
    echo <<<SCRIPT
        <script>
            alert('Gagal menghapus ke db')
            window.location.href = 'list-barang.php'
        </script>
    SCRIPT;
} else {
    echo <<<SCRIPT
        <script>
            alert('Berhasil menghapus  ke db')
            window.location.href = 'list-barang.php'
        </script>
    SCRIPT;
}