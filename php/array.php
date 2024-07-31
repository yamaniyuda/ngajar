<?php
$artikels = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "petanikode",
        "juara" => [ 1, 2, "three" => "lksdfjls" ]
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "petanikode",
        "hobi" => [
                        "berenang", 
                        "lari" => ["lari 20m", "lari 10m"]
                    ],
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        
    ]
];

echo $artikels[0]["juara"]["three"];