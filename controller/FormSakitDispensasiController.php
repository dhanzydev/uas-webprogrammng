<?php

include "./model/FormSakitDispensasi.php";
$FormSakitDispensasi = new formsakitdispensasi();
error_reporting(E_ALL);


if ($_GET['page'] == "store-form-sakit-dispensasi") {
    if (isset($_POST['submit'])) {


        $data = array(
            'nama' => $_POST['nama'],
            'program_studi' => $_POST['program_studi'],
            'alamat' => $_POST['alamat'],
            'no_hp' => $_POST['no_hp'],
            'nama_matakuliah' => $_POST['nama_matakuliah'],
            'kelas' => $_POST['kelas'],
            'tanggal' => $_POST['tanggal'],
            'pertemuan' => $_POST['pertemuan'],
            'alasan' => $_POST['alasan'],
        );

        $total = count($_POST['nama_matakuliah']);

        $exec = $FormSakitDispensasi->storeData($data, $total);
        if ($exec) {
            echo "<script>alert('Data Berhasil Terkirim ke Akademik');window.location = 'index.php?page=add-form-sakit-dispensasi'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else if ($_GET['page'] == "form-cuti-setuju" && $_GET['id']) {
    if (isset($_POST['setuju'])) {
        $data = array(
            'id' => $_GET['id'],
            'status' => 'Setuju',
        );
        $exec = $formAkademikCuti->updateData($data);
        if ($exec) {
            echo "<script>alert('Form Telah Berhasil anda setujui');window.location = 'index.php?page=data-form-cuti'</script>";
        } else {
            echo "Gagal insert!";
        }
    } else {
        $data = array(
            'id' => $_GET['id'],
            'status' => 'Ditolak',
        );
        $exec = $formAkademikCuti->updateData($data);
        if ($exec) {
            echo "<script>alert('Form Telah Berhasil anda tolak');window.location = 'index.php?page=data-form-cuti'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
}
