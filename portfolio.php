<?php session_start() ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Sitehunt</title>

	<!-- Include Header Libs -->
	<?php require_once('./fragments/header_libs.php') ?>
</head>

<body>
	<!-- banner -->
	<div class="bannerbg-w3l bannerbg-w3l-inner">
		<!-- header -->
		<header>
			<div class="header_topw3layouts_bar">
				<div class="container">
					<!-- header-top -->
					<div class="row border-bottom py-lg-4 py-3">
						<div class="col-xl-7 col-lg-6 header_agileits_left">
							<ul>
								<li class="mr-3">
									<i class="fas fa-phone mr-2"></i> +(010) 221 918 811</li>
								<li>
									<i class="fas fa-envelope mr-2"></i>
									<a href="mailto:info@example.com">info@example.com</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-5 col-lg-6 header_right text-center mt-lg-0 mt-2">
							<div class="row">
								<!-- social icons -->
								<div class="col-4 w3social-icons">
									<ul>
										<li>
											<a href="#" class="rounded-circle">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="px-2">
											<a href="#" class="rounded-circle">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" class="rounded-circle">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li class="pl-2">
											<a href="#" class="rounded-circle">
												<i class="fab fa-dribbble"></i>
											</a>
										</li>
									</ul>
								</div>
								<!-- //social icons -->
								<?php require_once('fragments/nav_buttons.php')?>
							</div>
						</div>
					</div>
					<!--// header-top -->

					<!-- Navigation Include -->
					<?php require_once('./fragments/navigation.php') ?>
				</div>
			</div>
		</header>
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-w3ltext about-w3bnr">
			<div class="container">
				<h1 class="text-white text-center">
					<a href="index.html">Home</a> / Portfolio</h1>
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- Login Model-->
	<?php require_once('./fragments/login_model.php');?>

	<!-- Registeration Model -->
	<?php require_once('./fragments/reg_model.php');?>
	<!-- //banner -->

	<!-- gallery -->
	<section class="wthree-row w3-gallery py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2">Portfolio</h3>
				<p>See Our Portfolio</p>
			</div>
			<ul class="portfolio-categ filter mb-5 pb-4 text-center border-bottom">
				<li class="port-filter all active">
					<a href="#">All</a>
				</li>
				<li class="cat-item-1">
					<a href="#" title="Category 1">Bedroom</a>
				</li>
				<li class="cat-item-2">
					<a href="#" title="Category 2">Bathroom</a>
				</li>
				<li class="cat-item-3">
					<a href="#" title="Category 3">Kitchen</a>
				</li>
				<li class="cat-item-4">
					<a href="#" title="Category 4">Living Room</a>
				</li>
				<li class="cat-item-5">
					<a href="#" title="Category 5">Office</a>
				</li>
				<li class="cat-item-6">
					<a href="#" title="Category 6">Pool</a>
				</li>
			</ul>
			<ul class="portfolio-area clearfix">
				<li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
					<span class="image-block">
						<a class="image-zoom" href="images/g1.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g1.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">
					<span class="image-block">
						<a class="image-zoom" href="images/g2.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g2.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">
					<span class="image-block">
						<a class="image-zoom" href="images/g3.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g3.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-4">
					<span class="image-block">
						<a class="image-zoom" href="images/g4.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g4.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
					<span class="image-block">
						<a class="image-zoom" href="images/g5.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g5.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-6" data-type="cat-item-6">
					<span class="image-block">
						<a class="image-zoom" href="images/g6.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g6.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
					<span class="image-block">
						<a class="image-zoom" href="images/g7.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g7.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-4" data-type="cat-item-4">
					<span class="image-block">
						<a class="image-zoom" href="images/g8.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g8.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
				<li class="portfolio-item2" data-id="id-5" data-type="cat-item-5">
					<span class="image-block">
						<a class="image-zoom" href="images/g9.jpg" data-gal="prettyPhoto[gallery]">
							<img src="images/g9.jpg" class="img-fluid w3layouts agileits" alt="Traventure">
						</a>
					</span>
				</li>
			</ul>
			<!--end portfolio-area -->
		</div>
		<!-- //gallery container -->
	</section>
	<!-- //gallery -->

	<!-- footer top -->
	<div class="footer-top py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<h2 class="text-white mb-4">Select Your Dream Property</h2>
			<h5 class="text-white mb-sm-5 mb-4 pb-sm-5 pb-4">Contact Us</h5>
			<i class="fas fa-map-marker-alt"></i>
		</div>
	</div>
	<!-- //footer top -->

	<!-- footer -->
	<div class="footer py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<div class="address row mb-4">
				<div class="col-lg-4 address-grid">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="far fa-envelope"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">Email</h6>
							<p>
								<a href="mailto:example@email.com"> mail 1@example.com</a>
							</p>
							<p>
								<a href="mailto:example@email.com"> mail 2@example.com</a>
							</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 address-grid my-lg-0 my-4">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">call us</h6>
							<p>+1 234 567 8901</p>
							<p>+1 567 567 9876</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 address-grid">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="far fa-map"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">Address</h6>
							<p> 786 Main Road, hollies</p>
							<p> California, USA</p>
						</div>
					</div>
				</div>
			</div>
			<!-- social icons footer -->
			<div class="w3social-icons-footer text-center pt-sm-5 pt-3">
				<ul>
					<li>
						<a href="#" class="rounded-circle">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li class="px-2">
						<a href="#" class="rounded-circle">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" class="rounded-circle">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li class="px-2">
						<a href="#" class="rounded-circle">
							<i class="fab fa-dribbble"></i>
						</a>
					</li>
					<li>
						<a href="#" class="rounded-circle">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
					<li class="px-2">
						<a href="#" class="rounded-circle">
							<i class="fab fa-behance"></i>
						</a>
					</li>
					<li class="">
						<a href="#" class="rounded-circle">
							<i class="fab fa-vimeo-v"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- //social icons footer -->
		</div>
	</div>
	<!-- footer -->

	<!-- copyright -->
	<div class="copy_right py-4 text-center">
		<p class="text-white">© 2018 All rights reserved.
		</p>
	</div>
	<!-- //copyright -->

	<!-- Include Footer Libs -->
	<?php require_once('./fragments/footer_libs.php') ?>
</body>

</html>