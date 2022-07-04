<?php
include "./model/Pengumuman.php";
$pengumuman = new pengumuman();

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
                        <h4 class="card-title mb-5">Pengumuman</h4>
                        <a href="index.php?page=add-pengumuman" class="btn btn-primary">Input Pengumuman</a>
                    </div>
                    <div class="card-content">
                        <!-- table striped -->
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul Pengumuman</th>
                                        <th>Isi Pengumuman</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pengumuman->displayData() as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['id'] ?></td>
                                            <td><?php echo $data['judul_pengumuman'] ?></td>
                                            <td><?php echo $data['isi_pengumuman'] ?></td>
                                            <td>
                                                <a href="index.php?page=edit-pengumuman&id=<?php echo $data['id'] ?>" class="btn btn-warning">Edit</a>
                                                <a href="index.php?page=delete-pengumuman&id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')" class="btn btn-danger">Hapus</a>
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