<?php

/*
    Annas Nur Cholifah
    203040168
    https://github.com/AnnasNurC/pw2021_203040168
    pertemuan 6 == 18 Maret 2021
    array asosiatif
    */


// $mahasisa=[
//     ["maman","020202","teknik","email@"],
//     ["baban","0202023","sospol","email@"]
// ];

// Array Asosiatif 
// key-nya adalah string yang di buat sendiri 
// seperti dicionary pada python 

$mahasiswa = [
    [
    "nama"  => "maman",
    "nrp"   => "20202",
    "kelas" => "D",
    "jurusan"=> "teknik",
    "gambar"=> "foto.jpg"]
    // ,
    // "tugas" => [9,2,3,4] 
    // [
    // "nama"  => "joni",
    // "nrp"   => "20202",
    // "kelas" => "a",
    // "jurusan"=> "teknik"],
    // [
    // "nama"  => "saman",
    // "nrp"   => "20202",
    // "kelas" => "b",
    // "jurusan"=> "teknik"
    //  ]
    
    ];

// menampilkan elemenet pada aray 
echo $mahasiswa[0]["nama"];
echo " <br>";
// echo $mahasiswa[2]["tugas"][0];
?>


<?php  foreach($mahasiswa as $mhs ): ?>
        <ul>
                <li><img src="img/<?=  $mhs["gambar"]; ?> " alt=""></li>
                <li>Nama = <?= $mhs["nama"];?></li>
                <li>NRP = <?= $mhs["nrp"];?></li>
                <li>Jurusn = <?= $mhs["kelas"];?></li>
                <li>Email = <?= $mhs["jurusan"];?></li>
        </ul>
    <?php endforeach;?>