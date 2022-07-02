<?php

include "./model/Mahasiswa.php";
$mahasiswa = new mahasiswa();
error_reporting(E_ALL);
$foto = '';

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['foto']['tmp_name'];
    $fileName = $_FILES['foto']['name'];
    $fileSize = $_FILES['foto']['size'];
    $fileType = $_FILES['foto']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileName = md5(time() . $fileName) . '.' . $fileNameCmps[1];
    $fileExtension = strtolower(end($fileNameCmps));
    $allowedfileExtensions = array('jpg', 'jpeg', 'png');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        $foto = 'foto/' . $fileName;
        move_uploaded_file($fileTmpPath, $foto);
    }
}

if ($_GET['page'] == "store-mahasiswa") {
    if (isset($_POST['submit'])) {
        $data = array(
            'nim' => $_POST['nim'],
            'nama_mhs' => $_POST['nama_mhs'],
            'jurusan' => $_POST['jurusan'],
            'dosen_wali' => $_POST['dosen_wali'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'no_hp' => $_POST['no_hp'],
            'alamat' => $_POST['alamat'],
            'tgl_lahir' => $_POST['tgl_lahir'],
            'email' => $_POST['email'],
            'foto' => $foto,
        );

        $exec = $mahasiswa->storeData($data);
        echo $exec;
        if ($exec) {
            echo "<script>alert('Data Berhasil Disimpan');window.location = 'index.php?page=data-mahasiswa'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else if ($_GET['page'] == "search-mahasiswa") {
    if (isset($_POST['cari']) && $_POST['nama_mahasiswa'] != "") {
        $data =  $_POST['nama_mahasiswa'];
        $exec = $mahasiswa->searchingData($data);
        if ($exec) {
            echo "<script>window.location = 'index.php?page=display-data-mahasiswa&data=$data'</script>";
        }
    } else if (isset($_POST['cari']) && $_POST['nama_mahasiswa'] == "") {
        $exec = $mahasiswa->displayData();
        if ($exec) {
            echo "<script>window.location = 'index.php?page=data-mahasiswa'</script>";
        }
    } else {
        echo "<script>window.location = 'index.php?page=data-mahasiswa'</script>";
    }
} else if ($_GET['page'] == "update-mahasiswa" && $_GET['id']) {
    if (isset($_POST['submit'])) {
        $data = array(
            'nim' => $_GET['id'],
            'nama_mhs' => $_POST['nama_mhs'],
            'jurusan' => $_POST['jurusan'],
            'dosen_wali' => $_POST['dosen_wali'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'no_hp' => $_POST['no_hp'],
            'alamat' => $_POST['alamat'],
            'tgl_lahir' => $_POST['tgl_lahir'],
            'email' => $_POST['email'],
            'foto' => $foto,
        );
        $exec = $mahasiswa->updateData($data);
        if ($exec) {
            echo "<script>alert('Data Berhasil Diubah');window.location = 'index.php?page=data-mahasiswa'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else {
    $id = $_GET['id'];
    $mahasiswa->deleteData($id);
    echo "<script>alert('Data Berhasil Dihapus');window.location = 'index.php?page=data-mahasiswa'</script>";
}
