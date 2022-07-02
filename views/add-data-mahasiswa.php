<?php
include './model/Mahasiswa.php';
$mahasiswa = new mahasiswa();
?>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tambah Data Mahasiswa</h4>
    </div>
    <div class="card-body">
        <form action="index.php?page=store-mahasiswa" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="">NIM</label>
                <input type="text" required name="nim" class="form-control" placeholder="Masukkan NIM Mahasiswwa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Nama Mahasiswa</label>
                <input type="text" required name="nama_mhs" class="form-control" placeholder="Masukkan Nama Mahasiswaw" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Jurusan</label>
                <select class="form-control" required name="jurusan" id="exampleSelectGender">
                    <option value="0" selected>Silahkan Pilih Jurusan Mahasiswa</option>
                    <?php foreach ($mahasiswa->jurusanData() as $data) { ?>
                        <option value="<?php echo $data['id_jurusan'] ?>"><?php echo $data['jurusan'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Dosen Wali</label>
                <select class="form-control" required name="dosen_wali" id="exampleSelectGender">
                    <option value="0" selected>Silahkan Pilih Dosen Wali Mahasiswa</option>
                    <?php foreach ($mahasiswa->dosenData() as $data) { ?>
                        <option value="<?php echo $data['nidn'] ?>"><?php echo $data['nama'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Jenis Kelamin Mahasiswa</label>
                <div class="d-flex gap-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="0" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="">Nomor HP Mahasiswa</label>
                <input type="number" required name="no_hp" class="form-control" placeholder="Masukkan No HP Mahasiswa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Alamat Mahasiswa</label>
                <input type="text" required name="alamat" class="form-control" placeholder="Masukkan Alamat Mahasiswa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Lahir Mahasiswa</label>
                <input type="date" required name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir Mahasiswa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Email Mahasiswa</label>
                <input type="email" required name="email" class="form-control" placeholder="Masukkan Email Mahasiswa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Foto Mahasiswa</label>
                <input type="file" required name="foto" class="form-control" placeholder="Masukkan Foto Mahasiswa" id="">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            <button type="reset" class="btn btn-warning">Reset</button>
            <a href="index.php?page=data-mahasiswa" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>