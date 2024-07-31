<?php
$login = true;
$username = "Budi";
$password = "123";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+PE:wght@100..400&display=swap" rel="stylesheet">
</head>

<body class="p-5">
    <h1>Aplikasi sederhana</h1>

    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <?php $genap = $i % 2 === 0 ? "alert alert-success" : "alert alert-danger" ?>
        
        <div 
            class="<?= $genap ?>"
            style="font-family: 'Playwrite PE', cursive;" 
            role="alert"
        >
            <h4><?= $i ?></h4>
            Username : <?= $username ?>
            <br>
            Password : <?= $password ?>
        </div>

    <?php endfor ?>
</body>

</html>