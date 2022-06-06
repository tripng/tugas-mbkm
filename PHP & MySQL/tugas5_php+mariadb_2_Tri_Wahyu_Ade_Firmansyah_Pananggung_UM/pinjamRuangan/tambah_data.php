	<?php require_once "navbar.php" ?>
	</header>

	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">

	    <!-- ////////////Content Box -->
	    <section class="box-content box-style-1">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6 box-item wow fadeInLeft">
	                    <h3>Tambah Data Gedung</h3>
	                    <form id="ff" name="form1" method="post" action="Controllers/gedungController.php">
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="form-group">
	                                    <input type="text" class="form-control input-lg" name="kode" id="subject"
	                                        placeholder="Kode" required="required" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="form-group">
	                                    <input type="text" class="form-control input-lg" name="nama" id="subject"
	                                        placeholder="Nama" required="required" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="form-group">
	                                    <input type="text" class="form-control input-lg" name="alamat" id="subject"
	                                        placeholder="Alamat" required="required" />
	                                </div>
	                            </div>
	                            <div class="col-md-12 text-center">
	                                <button type="submit" class="btn btn-skin btn-lg page-scroll wow fadeInUp"
	                                    name="tambah" id="submitcontact">Simpan</button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	                <div class="col-md-6 wow fadeInRight">
	                    <h3>Tambah Data Kategori Ruangan</h3>
	                    <form id="ff" name="form1" method="post" action="Controllers/kategoriRuanganController.php">
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="form-group">
	                                    <input type="text" class="form-control input-lg" name="nama" id="subject"
	                                        placeholder="Nama" required="required" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="form-group">
	                                    <input type="text" class="form-control input-lg" name="keterangan" id="subject"
	                                        placeholder="Keterangan" required="required" />
	                                </div>
	                            </div>
	                            <div class="col-md-12 text-center">
	                                <button type="submit" class="btn btn-skin btn-lg page-scroll wow fadeInUp"
	                                    name="tambah" id="submitcontact">Simpan</button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
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

	<!-- Google Map -->
	<script>
$('.maps').click(function() {
    $('.maps iframe').css("pointer-events", "auto");
});

$(".maps").mouseleave(function() {
    $('.maps iframe').css("pointer-events", "none");
});
	</script>
	</body>

	</html>