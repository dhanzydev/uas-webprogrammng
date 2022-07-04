<?php
include 'sidebar-admin.php';
include './model/Pengumuman.php';
$pengumuman = new pengumuman();
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $data = $pengumuman->editData($id);
}
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
                    <h4 class="card-title">Edit Pengumuman</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=update-pengumuman&id=<?php echo $data['id'] ?> " method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="">Judul Pengumuman</label>
                            <input type="text" value="<?php echo $data['judul_pengumuman'] ?>" name="judul_pengumuman" class="form-control" placeholder="Masukkan Judul Pengumuman" id="">
                            <div class="form-group mb-3">
                                <label for="">Isi Pengumuman</label>
                                <textarea name="isi_pengumuman" id="" class="form-control" cols="30" rows="10"><?php echo $data['isi_pengumuman'] ?></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">File Pengumuman</label>
                                <input type="file" name="file_pengumuman" class="form-control" id="">
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <a href="index.php?page=pengumuman" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>