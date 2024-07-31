<?php
include_once './kendaraan.php';

class Pesawat extends Kendaraan {
    var string $sayap;
    var string $jendela;

    function __construct(string $sayap, int $jendela, $ban, $kenalpot, $kursi, $jenisMaterial, $nama)
    {
        parent::__construct($ban, $kenalpot, $kursi, $jenisMaterial, $nama);
        $this->sayap = $sayap;
        $this->jendela = $jendela;
    }

    function terbang(string $dariKota, string $keKota) {
        echo "Pesawat $this->nama akan terbang dari kota $dariKota menuju kota $keKota akan terbang";
        echo "<br>";
        $this->hidupkanMesin();
    }
}

$airline = new Pesawat("2 sayap", 50, 6, 1, 8, 'alumunium', "Airines");
echo "<br>";
echo $airline->sayap;
echo "<br>";
echo $airline->ban;
echo "<br>";
$airline->terbang("Medan", "Jakarta");