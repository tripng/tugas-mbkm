<?php 
    require_once 'Model/KategoriRuangan.php';
    require_once 'connection.php';
    $fasilitas = new KategoriRuangan();
    $id = $_GET['id'];
    $data = $fasilitas->getById([$id]);
?>

<section class="box-content box-style-1">
    <div class="container">
        <div class="row">
            <div class="col-md-10 box-item wow fadeInLeft">
                <h3>Edit Data</h3>
                <form id="ff" name="form1" method="post" action="Controllers/kategoriRuanganController.php">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="id" id="subject"
                                    value="<?= $id ?>" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="nama" id="subject"
                                    value="<?= $data['nama'] ?>" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" name="ket" id="subject"
                                    value="<?= $data['keterangan'] ?>" required="required" />
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-skin btn-lg page-scroll wow fadeInUp"
                                name="submitcontact" id="submitcontact">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>