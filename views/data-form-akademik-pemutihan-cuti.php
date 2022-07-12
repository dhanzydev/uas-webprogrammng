<?php
include "./model/FormPemutihanCuti.php";
$formcuti = new formpemutihancuti();

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
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Fakultas</th>
                                        <th>Program Studi</th>
                                        <th>No HP</th>
                                        <th>Tahun Akademik</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($formcuti->displayData() as $data) { ?>
                                        <tr>
                                            <td><?php echo $data['id'] ?></td>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['nim'] ?></td>
                                            <td><?php echo $data['fakultas'] ?></td>
                                            <td><?php echo $data['program_studi'] ?></td>
                                            <td><?php echo $data['no_hp'] ?></td>
                                            <td><?php echo $data['tahun_akademik'] ?></td>
                                            <td>
                                                <a href="index.php?page=print-form-pemutihan-cuti&id=<?php echo $data['id'] ?>" target="_blank" class="btn btn-primary">Print</a>
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
    </div>
</div>