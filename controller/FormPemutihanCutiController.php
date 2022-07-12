<?php

include "./model/FormPemutihanCuti.php";
$formPemutihanCuti = new formpemutihancuti();

if ($_GET['page'] == "store-form-pemutihan-cuti") {
    if (isset($_POST['submit'])) {
        $data = array(
            'nama' => $_POST['nama'],
            'nim' => $_POST['nim'],
            'fakultas' => $_POST['fakultas'],
            'program_studi' => $_POST['program_studi'],
            'no_hp' => $_POST['no_hp'],
            'tahun_akademik' => $_POST['tahun_akademik'],
        );

        $exec = $formPemutihanCuti->storeData($data);
        if ($exec) {
            echo "<script>alert('Data Berhasil Terkirim ke Akademik, Silahkan Tunggu Konfirmasi dari Kami melalui No HP anda');window.location = 'index.php?page=add-form-pemutihan-cuti'</script>";
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
} else {
    $id = $_GET['id'];
    $jurusan->deleteData($id);
    echo "<script>alert('Data Berhasil Dihapus');window.location = 'index.php?page=data-jurusan'</script>";
}
