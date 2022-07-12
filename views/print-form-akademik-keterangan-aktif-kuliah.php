<?php
error_reporting(0);
include "./model/FormAktifKuliah.php";
$formaktifkuliah = new formaktifkuliah();
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $data = $formaktifkuliah->print($id);
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
    <p>Saya yang bertanda tangan di bawah ini : </p>
    <p>Program Studi : <?php echo $data['program_studi'] ?></p>
    <p>NIM : <?php echo $data['nim'] ?></p>
    <p>Nama Lengkap: <?php echo $data['nama'] ?></p>
    <p>Tempat Lahir : <?php echo $data['tempat_lahir'] ?></p>
    <p>Tanggal Lahir : <?php echo $data['tgl_lahir'] ?></p>
    <p>Alamat : <?php echo $data['alamat'] ?></p>
    <p>
        Dengan ini saya mengajukan permohonan untuk dibuatkan surat keterangan aktif kuliah pada Semester <?php echo $data['semester'] ?>
        Tahun Ajaran <?php echo $data['tahun_ajaran'] ?>
        Yang digunakan untuk keperluan : <?php echo $data['alasan'] ?>
    </p>
</body>

</html>