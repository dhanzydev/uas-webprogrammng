<?php
include './model/Mahasiswa.php';
$mahasiswa = new mahasiswa();
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $data = $mahasiswa->editData($id);
}
?>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Tambah Data Mahasiswa</h4>
    </div>
    <div class="card-body">
        <form action="index.php?page=update-mahasiswa&id=<?php echo $data['nim'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="">NIM</label>
                <input type="text" value="<?php echo $data['nim'] ?>" readonly name="nim" class="form-control" placeholder="Masukkan NIM Mahasiswwa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Nama Mahasiswa</label>
                <input type="text" value="<?php echo $data['nama_mhs'] ?>" required name="nama_mhs" class="form-control" placeholder="Masukkan Nama Mahasiswaw" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Jurusan</label>
                <select class="form-control" required name="jurusan" id="exampleSelectGender">
                    <option value="0" selected>Silahkan Pilih Jurusan Mahasiswa</option>
                    <?php foreach ($mahasiswa->jurusanData() as $jurusan) { ?>
                        <option value="<?php echo $jurusan['id_jurusan'] ?>" <?php if ($jurusan['id_jurusan'] == $data['kode_jurusan']) {
                                                                                    echo 'selected';
                                                                                } ?>><?php echo $jurusan['jurusan'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Dosen Wali</label>
                <select class="form-control" required name="dosen_wali" id="exampleSelectGender">
                    <option value="0" selected>Silahkan Pilih Dosen Wali Mahasiswa</option>
                    <?php foreach ($mahasiswa->dosenData() as $dosen) { ?>
                        <option value="<?php echo $dosen['nidn'] ?>" <?php if ($dosen['nidn'] == $data['nidn_dosen']) {
                                                                            echo 'selected';
                                                                        } ?>><?php echo $dosen['nama'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="">Jenis Kelamin Mahasiswa</label>
                <div class="d-flex gap-4">
                    <div class="form-check">
                        <input class="form-check-input" <?php if ($data['jenis_kelamin_mhs'] == 1) {
                                                            echo 'checked';
                                                        } ?> type="radio" name="jenis_kelamin" value="1" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" <?php if ($data['jenis_kelamin_mhs'] == 0) {
                                                                            echo 'checked';
                                                                        } ?> name="jenis_kelamin" value="0" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="">Nomor HP Mahasiswa</label>
                <input type="number" value="<?php echo $data['no_hp_mhs'] ?>" required name="no_hp" class="form-control" placeholder="Masukkan No HP Mahasiswa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Alamat Mahasiswa</label>
                <input type="text" required name="alamat" value="<?php echo $data['alamat_mhs'] ?>" class="form-control" placeholder="Masukkan Alamat Mahasiswa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal Lahir Mahasiswa</label>
                <input type="date" required name="tgl_lahir" value="<?php echo $data['tgl_lahir_mhs'] ?>" class="form-control" placeholder="Masukkan Tanggal Lahir Mahasiswa" id="">
            </div>
            <div class="form-group mb-3">
                <label for="">Email Mahasiswa</label>
                <input type="email" required name="email" value="<?php echo $data['email_mhs'] ?>" class="form-control" placeholder="Masukkan Email Mahasiswa" id="">
            </div>
            <p class="mb-3">Foto Mahasiswa Sekarang</p>
            <img src="<?php echo $data['foto'] ?>" class="img-fluid w-25 h-25 mb-5" alt="">
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