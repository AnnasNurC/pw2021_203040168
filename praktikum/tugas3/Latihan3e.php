<?php
/*
    Annas Nur Cholifah
    203040168
    Jumat,13.00
*/
?>

<?php 
$books = [
    [
        "Judul" => "MENULIS ARAB OTODIDAK",
        "Pengarang" => "Prof. Dr. Aiman Amin Abdulghani",
        "Terbit" => "8 Maret 2017",
        "Dimensi" => "1000 halaman",
        "gambar" => "1.png"
    ],
    [
        "Judul" => "INDAHNYA BAHASA DAN SASTRA INDONESIA",
        "Pengarang" => "H. Suyatno",
        "Terbit" => "9 Februari 2015",
        "Dimensi" => "200 Halaman",
        "gambar" => "2.png"
    ],
    [
        "Judul" => "",
        "Pengarang" => "",
        "Terbit" => "4 Mei 2019",
        "Dimensi" => "345 halaman",
        "gambar" => "3.png"
    ],
    [
        "Judul" => "BAHASA INGGRIS",
        "Pengarang" => "T.Wibowo",
        "Terbit" => "5 Desember 2015",
        "Dimensi" => "357 halaman",
        "gambar" => "4.png"
    ],
    [
        "Judul" => "BAHASA SUNDA",
        "Pengarang" => "Sujimat",
        "Terbit" => "Februari 2020",
        "Dimensi" => "234 halaman",
        "gambar" => "5.png"
    ],
    [
        "Judul" => "SINAU BAHASA JAWA",
        "Pengarang" => "Sawali",
        "Terbit" => "2 Juli 2020",
        "Dimensi" => "224 halaman",
        "gambar" => "6.png"
    ],
    [
        "Judul" => "FIQIH",
        "Pengarang" => "-",
        "Terbit" => "Maret 2017",
        "Dimensi" => "125 halaman",
        "gambar" => "7.png"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Terbit</th>
      <th scope="col">Dimensi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="gambar/<?= $book["gambar"]; ?>"></td>
      <td><?= $book["Judul"] ?></td>
      <td><?= $book["Pengarang"] ?></td>
      <td><?= $book["Terbit"] ?></td>
      <td><?= $book["Dimensi"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>