<?php
include "./model/FormAktifKuliah.php";
$formAktifKuliah = new formaktifkuliah();
error_reporting(E_ALL);
include 'sidebar-admin.php';
?>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-content">
        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-5">Data Form Akademik Mahasiswa</h4>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Program studi</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>NO HP</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Alasan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($formcuti->displayData() as $data) { ?>
                                        <tr>
                                            <td><?php echo $data['id'] ?></td>
                                            <td><?php echo $data['program_studi'] ?></td>
                                            <td><?php echo $data['nim'] ?></td>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['tempat_lahir'] ?></td>
                                            <td><?php echo $data['tgl_lahir'] ?></td>
                                            <td><?php echo $data['alamat'] ?></td>
                                            <td><?php echo $data['no_hp'] ?></td>
                                            <td><?php echo $data['tahun_ajaran'] ?></td>
                                            <td><?php echo $data['alasan'] ?></td>
                                            <td>
                                                <?php
                                                if ($data['status'] == 'Setuju') {
                                                ?>
                                                    <span class="badge bg-success">Success</span>
                                                <?php } else if ($data['status'] == 'Ditolak') { ?>
                                                    <span class="badge bg-danger">Ditolak</span>
                                                <?php } else { ?>
                                                    <span class="badge bg-warning">Menunggu Persetujuan</span>
                                                <?php } ?>
                                            </td>
                                            <form action="index.php?page=form-aktif-kuliah-setuju&id=<?php echo $data['id'] ?>" method="post">
                                                <td>
                                                    <input type="submit" name="setuju" onclick="return confirm('Apakah anda yakin menyetujui form ini ?')" class="btn btn-success" value="Setuju">
                                                    <input type="submit" name="tolak" onclick="return confirm('Apakah anda yakin menolak form ini ?')" class="btn btn-danger" value="Tolak">
                                                    <a href="index.php?page=print-form-aktif-kuliah&id=<?php echo $data['id'] ?>" target="_blank" class="btn btn-primary">Print</a>
                                                </td>
                                            </form>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>