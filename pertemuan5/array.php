<?php
/*
    Annas Nur Cholifah
    203040168
    https://github.com/AnnasNurC/pw2021_203040168
    pertemuan 5 == 3 Maret 2021
    belajar tentang array
    */


// Array 
// variabel yang memiliki banyak nilai 
// elemenr pada array boleh berbeda tipe data 


// membuat array

// Cara 1
$bulan = array("january","feb","march");

// Cara 2
$hari = ["senin","selasa","rabu","kamis","jumat","sabtu","minggu"];


// menampilkan semua array 
// bisa menngunakan var_dump dan print_r

var_dump ($hari);

echo "<br>";
echo "<br>";

print_r($bulan);

echo "<br>";
echo "<br>";


// menampilkan 1 element pada array
// gunakan echo dan index nya 
echo $hari[0];

echo "<br>";
echo "<br>";

// menambahkan element baru pada array  

$bulan[]="Desember";
print_r($bulan);

?>