<?php
include "./model/Dosen.php";
$dosen = new dosen();
?>
<div class="row" id="table-striped">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-4">Data Dosen</h4>
                <a href="index.php?page=add-data-dosen" class="btn btn-primary">Input Dosen</a>
                <form class="row g-3 mb-4 mt-4" method="POST" action="index.php?page=search-dosen">
                    <div class="col-8 d-flex">
                        <input type="text" class="form-control" name="nama_dosen" id="inputAddress" placeholder="Masukkan Nama Dosen">
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
                                <th>NIDN</th>
                                <th>Nama Dosen</th>
                                <th>Pendidikan</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dosen->displayData() as $data) {
                            ?>
                                <tr>
                                    <td><?php echo $data['nidn'] ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td>
                                        <?php
                                        if ($data['pendidikan'] == 'S1') {
                                            echo 'Sarjana 1';
                                        } else if ($data['pendidikan'] == 'S2') {
                                            echo 'Sarjana 2';
                                        } else {
                                            echo 'Sarjana 3';
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $data['tgl_lahir'] ?></td>
                                    <td>
                                        <?php
                                        if ($data['gender'] == 1) {
                                            echo 'Laki - Laki';
                                        } else {
                                            echo 'Perempuan';
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $data['alamat'] ?></td>
                                    <td><?php echo $data['no_hp'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td>
                                        <a href="index.php?page=edit-data-dosen&id=<?php echo $data['nidn'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="index.php?page=delete-data-dosen&id=<?php echo $data['nidn'] ?>" onclick="return confirm('Apakah anda ingin menghapus data ?')" class="btn btn-danger">Hapus</a>
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