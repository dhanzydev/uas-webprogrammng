<?php

include "./model/Dosen.php";
$dosen = new dosen();

if ($_GET['page'] == "store-dosen") {
    if (isset($_POST['submit'])) {
        $data = array(
            'nidn' => $_POST['nidn'],
            'nama_dosen' => $_POST['nama_dosen'],
            'pendidikan' => $_POST['pendidikan'],
            'tgl_lahir' => $_POST['tgl_lahir'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'alamat' => $_POST['alamat'],
            'no_hp' => $_POST['no_hp'],
            'email' => $_POST['email'],
        );

        $exec = $dosen->storeData($data);
        echo $exec;
        if ($exec) {
            echo "<script>alert('Data Berhasil Disimpan');window.location = 'index.php?page=data-dosen'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else if ($_GET['page'] == "search-dosen") {
    if (isset($_POST['cari']) && $_POST['nama_dosen'] != "") {
        $data =  $_POST['nama_dosen'];
        $exec = $dosen->searchingData($data);
        if ($exec) {
            echo "<script>window.location = 'index.php?page=display-data-dosen&data=$data'</script>";
        }
    } else if (isset($_POST['cari']) && $_POST['nama_dosen'] == "") {
        $exec = $dosen->displayData();
        if ($exec) {
            echo "<script>window.location = 'index.php?page=data-dosen'</script>";
        }
    } else {
        echo "<script>window.location = 'index.php?page=data-dosen'</script>";
    }
} else if ($_GET['page'] == "update-dosen" && $_GET['id']) {
    if (isset($_POST['submit'])) {
        $data = array(
            'id_dosen' => $_GET['id'],
            'dosen' => $_POST['dosen'],
        );
        $exec = $dosen->updateData($data);
        if ($exec) {
            echo "<script>alert('Data Berhasil Diubah');window.location = 'index.php?page=data-dosen'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else {
    $id = $_GET['id'];
    $dosen->deleteData($id);
    echo "<script>alert('Data Berhasil Dihapus');window.location = 'index.php?page=data-dosen'</script>";
}
