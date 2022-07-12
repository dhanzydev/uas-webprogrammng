<?php
include 'sidebar-mahasiswa.php';
include "./model/Pengumuman.php";
$pengumuman = new pengumuman();
?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-content">
        <?php
        foreach ($pengumuman->displayData() as $data) {
        ?>
            <div class="col-12 col-lg-20 col-md-12">
                <div class="card">
                    <div class="card-body px-3 py-6-7">
                        <div class="row">
                            <div class="col-md-4">
                            </div>
                            <div class=" fro text-center ">
                                <h3 class="fs-30">PENGUMUMAN</h3>
                                <p class="mb-0"><?php echo $data['judul_pengumuman'] ?></p>
                                <p class="mb-0"><?php echo $data['isi_pengumuman'] ?>
                                    <?php if ($data['file'] != "") { ?>
                                        <a href="<?php echo $data['file'] ?>">Download
                                </p></a>
                            <?php } else { ?>
                                <a href="#" class="d-none"></a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>