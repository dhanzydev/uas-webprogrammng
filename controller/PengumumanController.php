<?php
include "./model/Pengumuman.php";
$pengumuman = new pengumuman();
error_reporting(E_ALL);

$file = '';
if (isset($_FILES['file_pengumuman']) && $_FILES['file_pengumuman']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['file_pengumuman']['tmp_name'];
    $fileName = $_FILES['file_pengumuman']['name'];
    $fileSize = $_FILES['file_pengumuman']['size'];
    $fileType = $_FILES['file_pengumuman']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileName = md5(time() . $fileName) . '.' . $fileNameCmps[1];
    $fileExtension = strtolower(end($fileNameCmps));
    $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'pdf');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        $file = 'file/' . $fileName;
        move_uploaded_file($fileTmpPath, $file);
    }
}

if ($_GET['page'] == "store-pengumuman") {
    if (isset($_POST['submit'])) {
        $data = array(
            'judul_pengumuman' => $_POST['judul_pengumuman'],
            'isi_pengumuman' => $_POST['isi_pengumuman'],
            'file_pengumuman' => $file,
        );

        $exec = $pengumuman->storeData($data);
        if ($exec) {
            echo "<script>alert('Data Berhasil Disimpan');window.location = 'index.php?page=data-pengumuman'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else if ($_GET['page'] == "update-pengumuman" & $_GET['id']) {
    if (isset($_POST['submit'])) {
        $data = array(
            'id' => $_GET['id'],
            'judul_pengumuman' => $_POST['judul_pengumuman'],
            'isi_pengumuman' => $_POST['isi_pengumuman'],
            'file_pengumuman' => $file,
        );
        $exec = $pengumuman->updateData($data);
        if ($exec) {
            echo "<script>alert('Data Berhasil Diubah');window.location = 'index.php?page=data-pengumuman'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else {
    $id = $_GET['id'];
    $pengumuman->deleteData($id);
    echo "<script>alert('Data Berhasil Dihapus');window.location = 'index.php?page=data-pengumuman'</script>";
}
