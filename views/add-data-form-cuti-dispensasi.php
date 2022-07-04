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
                    <h4 class="card-title">Pengajuan Cuti</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?page=store-form-akademik-cuti" method="post">
                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <input type="text" required name="nama" class="form-control" placeholder="Masukkan Nama" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Program Studi</label>
                            <input type="text" required name="program_studi" class="form-control" placeholder="Masukkan Program Studi" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Alamat</label>
                            <input type="text" required name="alamat" class="form-control" placeholder="Masukkan Alamat" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">No HP</label>
                            <input type="number" required name="no_hp" class="form-control" placeholder="Masukkan Nomor HP" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Masukkan Fakultas</label>
                            <input type="text" required name="fakultas" class="form-control" placeholder="Masukkan Fakultas" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Tidak Bisa Hadir Karena : </label>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-check mb-3">
                                    <input type="radio" class="form-check-input dispensasi" id="dispensasi" name="alasan" value="Sakit">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Dispensasi
                                    </label>
                                </div>
                                <div class="d-none" id="dispensasi-reason">
                                    <div class="form-check">
                                        <input class="form-check-input" value="Dispensasi Kampus" type="radio" name="alasan" id="dispensi">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Dispensasi Kampus
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="Dispensasi Tempat Kerja" type="radio" name="alasan" id="dispensi">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Dispensasi Tempat Kerja
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="Dispensasi Lainnya" type="radio" name="alasan" id="dispensi">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Dispensasi Lainnya (Formal dan bukan dispensasi pribadi)
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="sakit" name="alasan" value="Sakit">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Sakit
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="submit" onclick="return confirm('Apakah data sudah terisi dengan benar ?')" class="btn btn-primary" value="Submit">
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>