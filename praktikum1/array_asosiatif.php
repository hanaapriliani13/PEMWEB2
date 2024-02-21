<?php
// array asosiatif (terdiri atas key & value)
$mhs = [
    'nama' => 'Hana',
    'NIM' => '0110', 
    'Prodi' => 'SI',
    'IPS' => [
        1 => 3.40,
        2 => 3.70,
        3 => 4.0,
    ]
];

// memanggil array asosiatif
echo "Nama : " . $mhs['nama'];
echo "<br> IPS semester 1: " . $mhs ['IPS']['1'];
echo "<br> IPS semester 2: " . $mhs ['IPS']['2'];
echo "<br> IPS semester 3: " . $mhs ['IPS']['3'];
