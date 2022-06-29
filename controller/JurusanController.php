<?php

include "./model/jurusan.php";
$jurusan = new jurusan();


if ($_GET['page'] == "store-jurusan") {
    if (isset($_POST['submit'])) {
        $data = array(
            'id_jurusan' => $_POST['id_jurusan'],
            'jurusan' => $_POST['jurusan'],
        );

        $exec = $jurusan->storeData($data);
        if ($exec) {
            echo "<script>alert('Data Berhasil Disimpan');window.location = 'index.php?page=data-jurusan'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else if ($_GET['page'] == "update-jurusan" && $_GET['id']) {
    if (isset($_POST['submit'])) {
        $data = array(
            'id_jurusan' => $_GET['id'],
            'jurusan' => $_POST['jurusan'],
        );
        $exec = $jurusan->updateData($data);
        if ($exec) {
            echo "<script>alert('Data Berhasil Diubah');window.location = 'index.php?page=data-jurusan'</script>";
        } else {
            echo "Gagal insert!";
        }
    }
} else {
    $id = $_GET['id'];
    $jurusan->deleteData($id);
    echo "<script>alert('Data Berhasil Dihapus');window.location = 'index.php?page=data-jurusan'</script>";
}
