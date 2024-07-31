<?php
include_once './koneksi.php';

if (!@$_REQUEST['name'] || !@$_REQUEST['gendert']) {
    header('Location: index.php');
    exit();
}

$sql = <<<SQL
    INSERT INTO user
        (`id`, `name`, `gender`)
        VALUES
        (UUID(), '{$_REQUEST["name"]}', '{$_REQUEST["gender"]}')
SQL;

/** @var TYPE_NAME $conn */
$result = $conn->query($sql);
if (empty($result)) echo <<<SCRIPT
        <script>
            alert('Gagal kesimpan  ke db')
            window.location.href = 'index.php'
        </script>
    SCRIPT;
    
else echo <<<SCRIPT
        <script>
            alert('Berhasil kesimpan  ke db')
            window.location.href = 'index.php'
        </script>
    SCRIPT;

?>
