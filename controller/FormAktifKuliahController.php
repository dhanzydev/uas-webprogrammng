<?php
error_reporting(E_ALL);
include "./model/FormAktifKuliah.php";
$formAktifKuliah = new formaktifkuliah();

if ($_GET['page'] == "store-form-aktif-kuliah") {
    if (isset($_POST['submit'])) {
        $data = array(
            'program_studi' => $_POST['program_studi'],
            'nim' => $_POST['nim'],
            'nama' => $_POST['nama'],
            'tempat_lahir' => $_POST['tempat_lahir'],
            'tgl_lahir' => $_POST['tgl_lahir'],
            'alamat' => $_POST['alamat'],
            'no_hp' => $_POST['no_hp'],
            'semester' => $_POST['semester'],
            'tahun_ajaran' => $_POST['tahun_ajaran'],
            'alasan' => $_POST['alasan'],
        );

        $exec = $formAktifKuliah->storeData($data);
        if ($exec) {
            echo "<script>alert('Data Berhasil Terkirim ke Akademik, Silahkan Tunggu Konfirmasi dari Kami melalui No HP anda');window.location = 'index.php?page=add-form-aktif-kuliah'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else if ($_GET['page'] == "form-aktif-kuliah" && $_GET['id']) {
    if (isset($_POST['setuju'])) {
        $data = array(
            'id' => $_GET['id'],
            'status' => 'Setuju',
        );
        $exec = $formAktifKuliah->updateData($data);
        if ($exec) {
            echo "<script>alert('Form Telah Berhasil anda setujui');window.location = 'index.php?page=data-form-aktif-kuliah'</script>";
        } else {
            echo "Gagal insert!";
        }
    } else {
        $data = array(
            'id' => $_GET['id'],
            'status' => 'Ditolak',
        );
        $exec = $formAktifKuliah->updateData($data);
        if ($exec) {
            echo "<script>alert('Form Telah Berhasil anda tolak');window.location = 'index.php?page=data-form-aktif-kuliah'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else {
    $id = $_GET['id'];
    $jurusan->deleteData($id);
    echo "<script>alert('Data Berhasil Dihapus');window.location = 'index.php?page=data-form-aktif-kuliah'</script>";
}
