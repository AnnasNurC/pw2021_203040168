<?php
/*
    Annas Nur Cholifah
    203040168
    https://github.com/AnnasNurC/pw2021_203040168
    pertemuan 5 == 3 Maret 2021
    belajar array
    */
$mahasisa=[
    ["maman","020202","teknik","email"],
    ["baban","0202023","sospol","email"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Dftar mahasiswa</h2>

    <?php  foreach($mahasisa as $mhs ): ?>
        <ul>
                <li>Nama = <?= $mhs[0];?></li>
                <li>NRP = <?= $mhs[1];?></li>
                <li>Jurusn = <?= $mhs[2];?></li>
                <li>Email = <?= $mhs[3];?></li>
                

        </ul>
    <?php endforeach;?>


</body>
</html>