<?php
include './model/Mahasiswa.php';
$mahasiswa = new mahasiswa();
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
            <div class="row" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Mahasiswa</h4>
                            <a href="index.php?page=add-data-mahasiswa" class="btn btn-primary">Input Mahasiswa</a>
                            <form class="row g-3 mb-4 mt-4" method="POST" action="index.php?page=search-mahasiswa">
                                <div class="col-8 d-flex">
                                    <input type="text" class="form-control" name="nama_mahasiswa" id="inputAddress" placeholder="Masukkan Nama Mahasiswa">
                                    <input type="submit" value="Cari" name="cari" class="btn btn-primary ms-4">
                                </div>
                            </form>
                        </div>
                        <div class="card-content">
                            <!-- table striped -->
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Jurusan</th>
                                            <th>Dosen Wali</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($mahasiswa->displayData() as $data) { ?>
                                            <tr>
                                                <td><?php echo $data['nim']; ?></td>
                                                <td><?php echo $data['nama_mhs']; ?></td>
                                                <td><?php echo $data['jurusan']; ?></td>
                                                <td><?php echo $data['nama'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($data['jenis_kelamin_mhs'] == 1) {
                                                        echo 'Laki - Laki';
                                                    } else {
                                                        echo 'Perempuan';
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $data['no_hp_mhs']; ?></td>
                                                <td><?php echo $data['alamat_mhs']; ?></td>
                                                <td><?php echo $data['tgl_lahir_mhs']; ?> </td>
                                                <td><?php echo $data['email_mhs']; ?></td>
                                                <td>
                                                    <a href="index.php?page=edit-data-mahasiswa&id=<?php echo $data['nim'] ?>" class="btn btn-warning">Edit</a>
                                                    <a href="index.php?page=delete-data-mahasiswa&id=<?php echo $data['nim'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>