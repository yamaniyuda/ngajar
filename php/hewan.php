<?php

class Hewan {
    // properti
    var $nama;
    var $kaki;
    var $beratBadan;
    var $jenisHewan;

    function __construct($nama, $kaki, $beratBadan, $jenisHewan)
    {
        $this->nama = $nama;
        $this->kaki = $kaki;
        $this->beratBadan = $beratBadan;
        $this->jenisHewan = $jenisHewan;
    }
    
    // method
    function berjalan() {
        echo "hewan $this->nama sedang berjalan";
    }

    function makan() {
        echo "Sekarang makan";
    }
    
    /**
     * Buat satu method didalam class person
     * method ini memiliki tiga argumen yang mana
     * argumen pertama adalah nama teman, argumen 
     * kedua adalah jarak dan argumen ketiga adalah kota 
     * argumen ini menampilkan output seperti ini
     * 
     * kendaraan opsi:
     *  jarak > 10 km = kereta
     *  jarak > 100 km = mobil
     *  jarak > 500 km = pesawat
     * 
     * {$this->name} mengunjungi {nama teman} yang berada di kota
     * {kota} dengan jarak {jarak} dengan menaiki kendaraan {kendaraan}
     */
}


$hewanKucing = new Hewan("kucing", 4, "1.5 kg", "Karnivora");
echo $hewanKucing->nama;
echo '<br>';
$hewanKucing->berjalan();

echo '<br>';

$hewanKepiting = new Hewan("Kepiting", 4, "1.5 kg", "herbivora");
echo $hewanKepiting->nama;
echo '<br>';
$hewanKepiting->berjalan();