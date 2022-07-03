<?php
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
                    <h4 class="card-title">Tambah Pengumuman</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=store-pengumuman" method="post" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="">Judul Pengumuman</label>
                            <input type="text" required name="judul_pengumuman" class="form-control" placeholder="Masukkan Judul Pengumuman" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Isi Pengumuman</label>
                            <textarea name="isi_pengumuman" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">File Pengumuman</label>
                            <input type="file" name="file" class="form-control" id="">
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