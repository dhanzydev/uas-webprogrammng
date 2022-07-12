<?php
error_reporting(E_ALL);
include "./model/FormPemutihanCuti.php";
$formaktifkuliah = new formpemutihancuti();
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
    <p>Program Studi : <?php echo $data['program_studi'] ?></p>
    <p>NIM : <?php echo $data['nim']; ?></p>
    <p>Fakultas : <?php echo $data['fakultas']; ?></p>
    <p>Program Studi : <?php echo $data['program_studi']; ?></p>
    <p>No HP : <?php echo $data['no_hp']; ?></p>
    <p>Tahun Akademik : <?php echo $data['tahun_akademik']; ?></p>
</body>

</html>