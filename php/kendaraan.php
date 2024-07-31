<?php

class Kendaraan
{
    var string $nama;
    var string $ban;
    var string $kenalpot;
    var string $kursi;
    var string $jenisMaterial;

    function __construct($ban, $kenalpot, $kursi, $jenisMaterial, $nama)
    {
        $this->nama = $nama;
        $this->ban = $ban;
        $this->kenalpot = $kenalpot;
        $this->kursi = $kursi;
        $this->jenisMaterial = $jenisMaterial;
    }

    function hidupkanMesin()
    {
        echo "Mesin dihidupkan";
    }
}

