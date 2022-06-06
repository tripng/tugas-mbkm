	<?php require_once "navbar.php" ?>

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
	                        <h1>WELCOME TO US!</h1>
	                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quo. Aenean feugiat in
	                            ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta
	                            non.</span><br><br>
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
	                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quo. Aenean feugiat in
	                            ante et blandit. Vestibulum posuere molestie risus, ac interdum magna porta
	                            non.</span><br><br>
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
	                    <h2>CONTACT</h2>
	                    <hr class="line02">
	                    <div class="intro">Lorem ipsum dolor sit amet</div>
	                </div>
	            </div>
	            <div class="row">
	                <div class='embed-container maps'>
	                    <iframe
	                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434"
	                        width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
	                </div>
	                <div class="col-md-4 box-item wow fadeInLeft">
	                    <h3>Contact Info</h3>
	                    <span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE
	                        LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
	                    <p>JL.Kemacetan timur no.23. block.Q3<br>
	                        Jakarta-Indonesia</p>
	                    <p>+6221 888 888 90 <br>
	                        +6221 888 88891</p>
	                    <p>info@yourdomain.com</p>
	                </div>
	                <div class="col-md-8 wow fadeInRight">
	                    <h3>Contact Form</h3>
	                    <form id="ff" name="form1" method="post" action="contact.php">
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="text" class="form-control input-lg" name="name" id="name"
	                                        placeholder="Enter name" required="required" />
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="email" class="form-control input-lg" name="email" id="email"
	                                        placeholder="Enter email" required="required" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="form-group">
	                                    <input type="text" class="form-control input-lg" name="subject" id="subject"
	                                        placeholder="Subject" required="required" />
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
	                            <div class="col-md-12 text-center">
	                                <div class="form-group">
	                                    <textarea name="message" id="message" class="form-control" rows="4" cols="25"
	                                        required="required" placeholder="Message"></textarea>
	                                </div>
	                                <button type="submit" class="btn btn-skin btn-lg page-scroll wow fadeInUp"
	                                    name="submitcontact" id="submitcontact">Submit</button>
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