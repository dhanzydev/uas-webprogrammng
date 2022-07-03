<?php
include "./model/Jurusan.php";
$pengumuman = new jurusan();

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
                                        <th>Pengumuman</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($jurusan->displayData() as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['id_jurusan'] ?></td>
                                            <td><?php echo $data['jurusan'] ?></td>
                                            <td>
                                                <a href="index.php?page=edit-pengumuman&id=<?php echo $data['id_jurusan'] ?>" class="btn btn-warning">Edit</a>
                                                <a href="index.php?page=delete-pengumuman&id=<?php echo $data['id_jurusan'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')" class="btn btn-danger">Hapus</a>
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