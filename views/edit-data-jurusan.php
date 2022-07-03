<?php
include "./model/Jurusan.php";
$jurusan = new jurusan();
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $data = $jurusan->editData($id);
}

include 'sidebar-admin.php';
?>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-content">
        <section class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data Jurusan</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=update-jurusan&id=<?php echo $data['id_jurusan'] ?>" method="post">
                        <div class="form-group mb-3">
                            <label for="">ID Jurusan</label>
                            <input type="text" value="<?php echo $data['id_jurusan'] ?>" disabled name="id_jurusan" class="form-control" placeholder="Masukkan ID Jurusan" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama Jurusan</label>
                            <input type="text" value="<?php echo $data['jurusan'] ?>" name="jurusan" class="form-control" placeholder="Masukkan Nama Jurusan" id="">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>