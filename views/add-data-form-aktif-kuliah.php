<?php
include 'sidebar-mahasiswa.php';
error_reporting(E_ALL);
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
                    <h4 class="card-title">Form Aktif Kuliah</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=store-form-aktif-kuliah" method="post">
                        <div class="form-group mb-3">
                            <label for="">Program Studi</label>
                            <input type="text" required name="program_studi" class="form-control" placeholder="Masukkan Program Studi" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">NIM</label>
                            <input type="text" required name="nim" class="form-control" placeholder="Masukkan NIM" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <input type="text" required name="nama" class="form-control" placeholder="Masukkan Nama" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tempat Lahir</label>
                            <input type="text" required name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" required name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Alamat</label>
                            <input type="text" required name="alamat" class="form-control" placeholder="Masukkan Alamat" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">No HP</label>
                            <input type="text" required name="no_hp" class="form-control" placeholder="Masukkan NO HP" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Semester</label>
                            <input type="number" required name="semester" class="form-control" placeholder="Masukkan Semester" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Tahun Ajaran</label>
                            <input type="text" required name="tahun_ajaran" class="form-control" placeholder="Masukkan Tahun Ajaran" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Digunakan Untuk : </label>
                            <textarea name="alasan" id="" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" name="submit" onclick="return confirm('Apakah data sudah terisi dengan benar ?')" class="btn btn-primary" value="Submit">
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>