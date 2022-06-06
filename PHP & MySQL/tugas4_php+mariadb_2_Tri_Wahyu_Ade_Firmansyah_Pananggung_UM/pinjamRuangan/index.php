		<?php 
			require_once "navbar.php";
			if(!isset($_GET['hal']) || $_GET['hal']=='home') require_once 'home.php';
			else if ($_GET['hal']=='about') require_once 'about.php';
			else if ($_GET['hal']=='tambah_data') require_once 'tambah_data.php';
			else if ($_GET['hal']=='gallery') require_once 'gallery.php';
			else if ($_GET['hal']=='pinjam') require_once 'pinjam.php';
			else if ($_GET['hal']=='fasilitas') require_once 'Views/fasilitas.php';
			else if ($_GET['hal']=='kategori_ruangan') require_once 'Views/kategori_ruangan.php';
			else if ($_GET['hal']=='fasilitas_detil') require_once 'Views/fasilitas_detil.php';
			else if ($_GET['hal']=='edit_fasilitas') require_once 'Views/edit_fasilitas.php';
			else if ($_GET['hal']=='edit_kr') require_once 'Views/edit_kr.php';
			else header('Location:error.php');
		?>
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

		<script type="text/javascript" src="js/wow.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.js"></script>
		<script type="text/javascript" src="js/main.js"></script>


		<!-- carousel -->
		<script src="owl-carousel/owl.carousel.js"></script>
		<script>
$(document).ready(function() {
    $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items: 6,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 2],
        navigation: true,
        navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>',
            '<i class="fa fa-chevron-right fa-5x"></i>'
        ],
        pagination: false
    });
});
		</script>

		</body>

		</html>