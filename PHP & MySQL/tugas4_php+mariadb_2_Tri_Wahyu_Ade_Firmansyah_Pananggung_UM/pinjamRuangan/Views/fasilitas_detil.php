<?php 
    require_once 'Model/Fasilitas.php';
    require_once 'connection.php';
    $fasilitas = new Fasilitas();
    $data = $fasilitas->getFasilitas([$_GET['id']]);
    ?>
</header>
<!-- /////////////////////////////////////////Content -->
<div id="page-content">

    <!-- ////////////Content Box -->
    <section class="box-content">
        <div class="container">
            <div class="post">
                <h1 class="entry-title">Fasilitas <?= $data['nama_gedung'] ?></h1>
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/<?= $data['foto'] ?>" class="img-responsive" alt="About">
                    </div>
                    <div class="col-md-8">
                        <h2><?= $data['nama_ruangan'] ?></h2>
                        <p><?= $data['status'] ?></p>
                        <h2><?= $data['nama_kategori'] ?></h2>
                        <p><?= $data['kategori_keterangan'] ?></p>
                        <h2><?= $data['nama_fasilitas'] ?></h2>
                        <p><?= $data['ket_fasilitas'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>