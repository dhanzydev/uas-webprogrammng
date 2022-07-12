<?php
include 'sidebar-mahasiswa.php';
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
                    <h4 class="card-title">Pengajuan Pemutihan Cuti</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=store-form-pemutihan-cuti" method="post">
                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <input type="text" required name="nama" class="form-control" placeholder="Masukkan Nama" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">NIM</label>
                            <input type="text" required name="nim" class="form-control" placeholder="Masukkan NIM" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Fakultas</label>
                            <input type="text" required name="fakultas" class="form-control" placeholder="Masukkan Fakultas" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Program Studi</label>
                            <input type="text" required name="program_studi" class="form-control" placeholder="Masukkan Program Studi" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">No HP</label>
                            <input type="number" required name="no_hp" class="form-control" placeholder="Masukkan Nomor HP" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tahun Akademik</label>
                            <input type="text" required name="tahun_akademik" class="form-control" placeholder="Masukkan Tahun Akademik" id="">
                        </div>
                        <input type="submit" name="submit" onclick="return confirm('Apakah data sudah terisi dengan benar ?')" class="btn btn-primary" value="Submit">
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>