<?php

//Array index
$animals = ['Macan', 'Kucing', 'Beruang', 'Ayam'];

// Menambahkan data ke array
array_push($animals, "kucing")

// Mengakses array index
echo $animals[2];

// Array Assosiatif
$Animals = [
    'nama' => $animals[1],
    'jenis' => 'Karnivora',
    'usia' => "4 bulan"
];

// mengakses array assosiatif
echo  $animal['jenis'];