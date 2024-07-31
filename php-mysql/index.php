<?php include_once './tamplate/header.php' ?>
<?php include_once './connection.php' ?>
<?php
$sql = <<<SQL
    SELECT * FROM user;
SQL;

$result = $conn->query($sql);
$values = [];

if ($result->num_rows === 0) echo "Data tidak ada";
else {
    while ($row = $result->fetch_assoc()) {
        array_push($values, $row);
    }
}
?>

<div class="p-5">
    <table class="table table-striped p-5">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($values as $value): ?>
                <tr>
                    <td>
                        <?= $value["id"] ?>
                    </td>
                    <td>
                        <?= $value["name"] ?>
                    </td>
                    <td>
                        <?= $value["gender"] ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include_once './tamplate/footer.php' ?>