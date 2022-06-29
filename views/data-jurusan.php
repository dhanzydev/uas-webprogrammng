<?php
include "./model/Jurusan.php";
$jurusan = new jurusan();
error_reporting(E_ALL);
?>
<div class="row" id="table-striped">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-5">Data Jurusan</h4>
                <a href="index.php?page=add-data-jurusan" class="btn btn-primary">Input Jurusan</a>
            </div>
            <div class="card-content">
                <!-- table striped -->
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jurusan</th>
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
                                        <a href="index.php?page=edit-data-jurusan&id=<?php echo $data['id_jurusan'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="index.php?page=delete-data-jurusan&id=<?php echo $data['id_jurusan'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')" class="btn btn-danger">Hapus</a>
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