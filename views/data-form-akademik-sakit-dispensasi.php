<?php
include "./model/FormSakitDispensasi.php";
$data = new formsakitdispensasi();

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
                                        <th>Nama</th>
                                        <th>Program Studi</th>
                                        <th>Alamat</th>
                                        <th>Alasan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data->displayData() as $data) { ?>
                                        <tr>
                                            <td><?php echo $data['nama'] ?></td>
                                            <td><?php echo $data['program_studi'] ?></td>
                                            <td><?php echo $data['alamat'] ?></td>
                                            <td><?php echo $data['alasan'] ?></td>
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