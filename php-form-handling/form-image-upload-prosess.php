<?php

$nameFile = $_FILES["berkas"]["name"]; // google.jpg
$locateTemp = $_FILES["berkas"]["tmp_name"];

$locateStorage = "storage/";
$currentLocationFile = $locateStorage . $nameFile; // storage/google.jpg

$uplaod = move_uploaded_file($locateTemp, $currentLocationFile);
if ($uplaod) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$locateStorage.$nameFile."'>".$nameFile."</a>";
} else {
    echo "Upload Gagal!";
}
$nilai = 100;

switch ($nilai) {
    case 70:
        echo "C";
        break;
    case 80:
        echo "B+";
        break;
    case 90:
        echo "A";
        break;
    case 100:
        echo "A++";
        break;
    default:
        echo "KKM";
}