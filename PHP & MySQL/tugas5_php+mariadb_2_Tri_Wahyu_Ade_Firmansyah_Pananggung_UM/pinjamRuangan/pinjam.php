<?php 
    require_once "navbar.php";
    require_once "connection.php";
    require_once "Model/Gedung.php";
    require_once "Model/Fasilitas.php";
    require_once "Model/KategoriRuangan.php";
    $gedung = new Gedung();
    $fasilitas = new Fasilitas();
    $kategoriRuangan = new KategoriRuangan();
?>
<div class="box-shadow">
    <!-- Carousel -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/banner1.jpg" alt="First slide">
                <!-- Static Header -->
                <div class="header-text hidden-xs">
                    <div class="col-md-12">
                        <h1>SPEND YOUR DREAM HOLIDAY!</h1>
                        <span>Large selection of vacation rentals worldwide for each budget and interest. Since
                            1996 we belong to the pioneers and the global leaders in providing vacation rentals
                            on the Internet.</span><br><br>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div><!-- /header-text -->
            </div>
            <div class="item">
                <img src="images/banner2.jpg" alt="Third slide">
                <!-- Static Header -->
                <div class="header-text hidden-xs">
                    <div class="col-md-12">
                        <h1>SPEND YOUR DREAM HOLIDAY!</h1>
                        <span>Large selection of vacation rentals worldwide for each budget and interest. Since
                            1996 we belong to the pioneers and the global leaders in providing vacation rentals
                            on the Internet.</span><br><br>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div><!-- /header-text -->
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div><!-- /carousel -->
</div>
</header>


<!-- /////////////////////////////////////////Content -->
<div id="page-content">

    <!-- ////////////Content Box -->
    <section class="box-content box-style-1">

        <div class="container">
            <div class="row heading">
                <div class="col-lg-12">
                    <h2>Pinjam Ruangan</h2>
                    <hr class="line02">
                    <div class="intro">Berikut Gedung Yang Tersedia</div>
                </div>
            </div>
            <div class="row">
                <?php 
                $img = 3;
                foreach($gedung->getAll() as $key => $statemant) : 
                ?>
                <div class="post" style="background: #fff;">
                    <div class="col-lg-6 fix-right" style="padding: 0;">
                        <div class="art-header">
                            <img src="images/<?= ++$img ?>-thumb.jpg" />
                        </div>
                    </div>
                    <div class=" col-lg-6">
                        <div class="t-center" style="padding: 70px 0;">
                            <h3><?= $statemant['nama'] ?></h3>
                            <p><?= $statemant['alamat'] ?></p>
                            <form action="Controllers/gedungController.php" method="POST">
                                <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Gedung?')"
                                    class="btn btn-skin" name="hapusGedung">Delete</button>
                                <input type="hidden" name="idx" value="<?= $statemant['id'] ?>">
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</div>

<!-- FOOTER -->
<?php require_once "footer.php" ?>
<!-- jQuery -->
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/agency.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<script src="js/lightbox-plus-jquery.min.js"></script>
</body>

</html>