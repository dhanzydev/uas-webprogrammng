<?php
error_reporting(0);
include "./model/FormPemutihanCuti.php";
$formcuti = new formcuti();
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $data = $formcuti->print($id);
}
include 'sidebar-admin.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .sidebar-wrapper {
            display: none;
        }
    </style>
    <title>Document</title>
</head>

<body onload="window.print();">
    <p>Bersama ini, saya:</p>
    <p>Nama : <?php echo $data['nama'] ?></p>
    <p>NIM : <?php echo $data['nim'] ?></p>
    <p>Fakultas : <?php echo $data['fakultas'] ?></p>
    <p>Program Studi : <?php echo $data['program_studi'] ?></p>
    <p>No HP : <?php echo $data['no_hp'] ?></p>
    <p>Mengajukan permohonan untuk menggunakan hak cuti pemutihan untuk sekali saja selama perkuliahan.
        Cuti pemutihan ini untuk Semester <b>Ganjil / Genap</b> pada Tahun Akademik <?php echo $data['tahun_akademik'] ?>. <br>
        Untuk itu saya bersedia mematuhi persyaratan administrasi yang berlaku.
    </p>
</body>

</html>