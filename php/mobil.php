<?php
include_once './kendaraan.php';

class Mobil extends Kendaraan {
    var string $kacaspion;
    var string $jendela;

    function __construct(string $kacaspion, int $jendela, $ban, $kenalpot, $kursi, $jenisMaterial, $nama)
    {
        parent::__construct($ban, $kenalpot, $kursi, $jenisMaterial, $nama);
        $this->kacaspion = $kacaspion;
        $this->jendela = $jendela;
        $this->hidupkanMesin();
    }

}

$avanza = new Mobil("spieon", 2, 4, 1, 8, 'alumunium', "k");
echo $avanza->jendela;
echo "<br>";
echo $avanza->ban;
echo "<br>";