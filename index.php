<?php session_start() ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SiteHunt</title>

	<!-- Include Header Libs -->
	<?php require_once('./fragments/header_libs.php') ?>

</head>

<body>
	<!-- banner -->
	<div class="bannerbg-w3l">
		<!-- header -->
		<header>
			<div class="header_topw3layouts_bar">
				<div class="container">
					<!-- header-top -->
					<div class="row border-bottom py-lg-4 py-3">
						<div class="col-xl-7 col-lg-6 header_agileits_left">
							<ul>
								<li class="mr-3">
									<i class="fas fa-phone mr-2"></i> +(91)95966650999</li>
								<li>
									<i class="fas fa-envelope mr-2"></i>
									<a href="mailto:contact@BanQuest.com">contact@SiteHunt.com</a>
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
		<!-- banner text -->
		<div class="banner-text-agile">
			<div class="container">
				<div class="banner-w3lstexts text-white text-center">
					<h1>Finding Tailored Deals</h1>
					<h4 class="text-uppercase mt-md-3 mt-2 mb-md-4 mb-3">With a Click</h4>
					<p class="text-white">
					</p>
					<a href="#" class="banner-button btn mt-md-5 mt-4">Know More</a>
				</div>
			</div>
		</div>
		<!-- //banner text -->
	</div>

	<!-- Search Results -->

	<div class="modal fade" tabindex="-1" role="dialog" id="search-modal">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<h2>Search Results</h2>
						<br><br>
						<table id="t01">
							<thead>
								<tr>
									<th>Result</th>
									<th>Address</th>
									<th>Contact</th>
									<th>Action</th>

								</tr>
							</thead>
							<tbody id="search-results">
								<tr>
									<td><a href="Portfolio.html"><b>Kangra Fort</b></a></td>
									<td>Barnai Muthi</td>
									<td>9596650999</td>
									<td><input class='btn btn-success' type='button' value='Book Now' /></td>

								</tr>
							</tbody>
						</table>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

					</div>
				</div><!-- /.modal-content -->
			
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- //Search Results -->

	<!-- Login Model-->
	<?php require_once('./fragments/login_model.php');?>

	<!-- Registeration Model -->
	<?php require_once('./fragments/reg_model.php');?>

	<!-- //banner -->

	<!-- banner-bottom -->
	<div class="serach-w3agile py-5">
		<div class="container py-xl-4 py-lg-3">
			<h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold text-center">Begin Your Search</h3>
			<div class="place-grids">

				<form class="form-inline" id="search-form">
					<div class="form-group" style="margin-right: 50px;">
						<label for="city">Choose City:</label>
						<select class="form-control" name="city" id="city">
							<option value="Jammu">Jammu </option>
							<option value="Delhi">New Delhi</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Chandigarh">Chandigarh</option>
						</select>
					</div>
					<div class="form-group" style="margin-right: 50px;">
						<label for="type">Choose Type:</label>
						<select class="form-control" name="buss_type" id="type">
							<option value="Hall">Banquet Hall</option>
							<option value="Party">Mini Party</option>
							<option value="Resort">Resorts</option>
							<option value="Conference">Conference Halls</option>
						</select>
					</div>
					<div class="form-group" name="date" style="margin-right: 50px;">
						<label for="date">Date:</label><br>
						<input type="date" name="date" class="form-control" id="date">
					</div>

					<button type="submit" class="btn btn-success">Submit</button>
				</form>

			</div>
		</div>
	</div>
	<!-- //banner-bottom -->

	<!-- middle section -->
	<div class="middle-w3l">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-4 button">

				</div>
				<div class="col-lg-6 col-md-8 left-build-wthree py-5 px-sm-5 px-4">
					<div class="py-xl-5 py-lg-3 px-xl-4">
						<h4>Why Choose SiteHunt ?</h4>
						<h6 class="mt-3 mb-xl-5 mb-4">Whats Our USP !!</h6>
						<p>
							We At SiteHunt believe in Creating an experience for both our Customers & the Service
							Providers to create
							a movement towards Digitization in the Traditional Event organising ways !!

						</p>
						<ul class="list-beach mt-lg-5 mt-4">
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>Ease of Access to all party places with Just a click !! </p>
									</div>
								</div>
							</li>
							<li class="my-3">
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>Tailored Deals to match your needs & Budget</p>
									</div>
								</div>
							</li>
							<li class="my-3">
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>A personal assistant to make your Event a Success</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p>A Wide Range of Options to Choose from with 24x7 support </p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

	<!-- services -->
	<div class="what-w3ls py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-md-5 mb-4">
				<h3 class="tittle mb-sm-2">What we Trust</h3>
				<p>Some words about our Beliefs</p>
			</div>
			<div class="what-grids">
				<div class="row">
					<div class="col-md-6 what-grid1">
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-key"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Totally Secured Portal</h4>
								<p class="mt-2"></p>
							</div>
						</div>
						<div class="row what-top my-md-5 my-4">
							<div class="col-2 what-left">
								<i class="far fa-money-bill-alt"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Top Venues & Deals</h4>
								<p class="mt-2"></p>
							</div>
						</div>
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-user-secret"></i>
							</div>
							<div class="col-10 what-right">
								<h4>24x7 Access & Availability</h4>
								<p class="mt-2"></p>
							</div>
						</div>
					</div>
					<div class="col-md-6 what-grid1 my-md-0 my-4">
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="far fa-building"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Booking Management Portal </h4>
								<p class="mt-2"></p>
							</div>
						</div>
						<div class="row what-top my-md-5 my-4">
							<div class="col-2 what-left">
								<i class="fas fa-clipboard-list"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Learning Portal for Event Enthusiasts</h4>
								<p class="mt-2"></p>
							</div>
						</div>
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-wrench"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Value for Money</h4>
								<p class="mt-2"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- pricing -->
	<section class="pricing py-5" id="pricings">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2 text-white">Our Financial Model</h3>
				<p class="test-title-paara">A few word about our Plans</p>
			</div>
			<div class="inner-sec">
				<div class="card-deck text-center row mt-5">
					<div class="price-info-grid col-lg-4">
						<div class="price-inner">
							<div class="price-header">
								<h4>Basic</h4>
							</div>
							<div class="price-body">
								<h5 class="pricing-title">
									<span class="dolor">INR</span><br> 500/-
									<label>Per Month</label>

								</h5>

								<ul class="list-unstyled mt-3 mb-4">
									<li class="py-2 border-bottom">Advertising</li>
									<li class="py-2 border-bottom">Branding Services</li>
									<li class="py-2 border-bottom">Online Marketing</li>
									<li class="py-2 border-bottom"></li>
									<li class="py-2">-</li>
								</ul>
								<a href="#" class="btn btn-block py-2" data-toggle="modal"
									data-target="#exampleModalCenter2">
									<i class="far fa-user"></i> Get Started</a>
							</div>
						</div>
					</div>
					<div class="price-info-grid col-lg-4 my-lg-0 my-3">
						<div class="price-inner">
							<div class="price-header">
								<h4>Advanced</h4>
							</div>
							<div class="price-body">
								<h5 class="pricing-title">
									<span class="dolor">INR</span><br>750/-
									<label>Per Month</label>
								</h5>
								<ul class="list-unstyled mt-3 mb-4">
									<li class="py-2 border-bottom">Advertising</li>
									<li class="py-2 border-bottom">Branding Services</li>
									<li class="py-2 border-bottom">Online Marketing</li>
									<li class="py-2 border-bottom">Online Assistant</li>
									<li class="py-2">-</li>
								</ul>
								<a href="#" class="btn btn-block btn-outline-primary py-2" data-toggle="modal"
									data-target="#exampleModalCenter2">
									<i class="far fa-user"></i> Get Started</a>
							</div>
						</div>
					</div>
					<div class="price-info-grid col-lg-4">
						<div class="price-inner">
							<div class="price-header">
								<h4>Premium</h4>
							</div>
							<div class="price-body">
								<h5 class="pricing-title">
									<span class="dolor">INR</span><br>1000/-
									<label>Per Month</label>

								</h5>
								<ul class="list-unstyled mt-3 mb-4">
									<li class="py-2 border-bottom">Advertising</li>
									<li class="py-2 border-bottom">Branding Services</li>
									<li class="py-2 border-bottom">Online Marketing</li>
									<li class="py-2 border-bottom">Creative Marketing</li>
									<li class="py-2 border-bottom">Online Assistant</li>
									<li class="py-2">-</li>
								</ul>
								<a href="#" class="btn btn-block btn-outline-primary py-2" data-toggle="modal"
									data-target="#exampleModalCenter2">
									<i class="far fa-user"></i> Get Started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //pricing -->

	<!-- stats section -->
	<div class="middlesection-agile py-5">
		<div class="container-fluid py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 left-build-wthree aboutright-agilewthree mt-0">
					<h4>Some Approximations</h4>
					<h6 class="mt-3 mb-5">Some words about our Strategy</h6>
					<p>If we consider only 1000 cities initially out of 4000 in India with an average of 30 Service
						Providers
						listed in each being charged at a nominal subscription of INR 750/month. Then the Total Revenue
						Generated
						will be around : 1000*30*750 = INR 2,25,00,000/month and this also makes it 11,25,00,000/year if
						we only
						expect 5 months of Efficient working due to seasonal market interference.</p>
				</div>
				<div class="col-lg-6 text-lg-left text-center mt-lg-0 mt-md-5 mt-4">
					<img src="images/middle.jpg" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
	<!-- //stats -->

	<!-- testimonials -->
	<div class="testimonials py-5" id="clients">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2 text-white">People's Review About Us</h3>
				<p class="test-title-paara">A few word from our Clients</p>
			</div>
			<div class="w3_testimonials_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_testimonials_grid">
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id
										quod possimus, Nam
										Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil
										impedit omnis voluptas".
									</p>
									<ul class="testi-w3ls-rate mt-4">
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											<img src="images/te1.jpg" alt=" " class="img-fluid rounded-circle" />
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>John Frank</h5>
											<p>Tempore Quo</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid">
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id
										quod possimus, Nam
										Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil
										impedit omnis voluptas".
									</p>
									<ul class="testi-w3ls-rate mt-4">
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											<img src="images/te2.jpg" alt=" " class="img-fluid rounded-circle" />
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>John Frank</h5>
											<p>Tempore Quo</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid">
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id
										quod possimus, Nam
										Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil
										impedit omnis voluptas".
									</p>
									<ul class="testi-w3ls-rate mt-4">
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											<img src="images/te3.jpg" alt=" " class="img-fluid rounded-circle" />
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>John Frank</h5>
											<p>Tempore Quo</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>

			</div>
		</div>
	</div>
	<!-- //testimonials -->

	<!-- footer top -->
	<div class="footer-top py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<h2 class="text-white mb-4">Select Your Dream Venue</h2>
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
								<a href="mailto:contact@BanQuest.com"> contact@SiteHunt.com</a>
							</p>
							<p>
								<a href="info@BanQuest.com"> info@SiteHunt.com</a>
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
							<p>+91 9596650999</p>
							<p>+91 7889402043</p>
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
							<p> The Business School, University of Jammu</p>
							<p> Jammu, J&K</p>
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