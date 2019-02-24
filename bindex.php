<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SiteHunt</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	
    <link rel="stylesheet" type="text/css" id="theme" href="css/fullcalendar.css"/>

	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!-- //Web-Fonts -->
	<!-- //Table Style -->
	
	<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}

.calendar-frame {
	margin: 20px auto;
}
</style>
	
	<!-- //Table Style -->
	
	
	
	
	
</head>

<body>
	<!-- banner -->
	<div class="bannerbg-w3l">
		<!-- header -->
		<header>
			<div class="header_topw3layouts_bar">
				<div class="container">
					<!-- header-top -->
					
					
					
					
					
					
					
					
					
					<!--// header-top -->

					<!-- navigation -->
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#">
						<img src="images/logo.png" alt="" style="width: 300px;"/>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						    aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto"style="margin-top: 10px;">
								
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="#">About Us</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#bookings">View Bookings</a>
								</li>
								<li class="nav-item">
								
									<a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter3" href="#">Update Details</a>
								</li>
							</ul>
						</div>
					</nav>
					<!-- //navigation -->
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
	
	
	
	
	
	
	
	
	
		<!-- Update Details -->
	<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="login px-4 mx-auto mw-100">
						<h5 class="text-center mb-4">Update Details</h5>
						<form action="#" method="post">
							<div class="form-group">
								<label>Update Address</label>
								<textarea cols="50" rows="3" maxlength="10" placeholder=""></textarea>
							</div>
							<div class="form-group">
								<label>Update Contact</label>
								<input type="text" class="form-control" name="contact" placeholder="" >
							</div>
							<div class="form-group">
								<label>Update Email</label>
								<input type="email" class="form-control" name="email" placeholder="" >
							</div>
							
							<div class="form-group" >
								<label>Upload Business image</label>
								<input type="file" class="form-control" name="pic" placeholder="" accept="image/png,image/Png,image/PNG,image/JPEG,image/Jpeg,image/Jpg,image/JPG,image/jpeg">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Update</button>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Update Details -->
	
	
	
	<!-- //banner -->

	<!-- banner-bottom -->
	<div class="serach-w3agile py-5">
	<a name="bookings"></a>
		<div class="container py-xl-4 py-lg-3">
		
			<h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold text-center">Booking Details</h3>
			
			<div>
			<table id="t01">
  <tr>
    <th>Event ID</th>
    <th>Cient Name</th> 
    <th>Contact</th>
	<th>Start Date</th>
	 <th>End Date</th>
  </tr>
  <tr>
    <td>Book_001</td>
    <td>Sahil</td>
    <td>9596650999</td>
	<td>yaha se </td>
	<td>yaha tak</td>
  </tr>
  
</table>
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
				
				
				
				
				
				
				
				
				
				
			</div>
		</div>
	</div>
	<!-- //middle section -->

	<!-- START CONTENT FRAME -->
	<div class="container">
		<div class="content-frame calendar-frame">            
			<!-- START CONTENT FRAME TOP -->
			<div class="content-frame-top">                        
				<div class="page-title">                    
				<center>	<h2><span class="fa fa-calendar"></span> Booking Calendar</h2>	</center>
				</div>  <br><br>
																						   
			</div>
			<!-- END CONTENT FRAME TOP -->
		
			<!-- START CONTENT FRAME BODY -->
			<div class="row">
				<div class="col-md-12">
					<div id="alert_holder"></div>
					<div class="calendar">                                
						<div id="calendar"></div>                            
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT FRAME BODY -->
	</div>               
	<!-- END CONTENT FRAME -->    
	
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
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id quod possimus, Nam Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil impedit omnis voluptas".</p>
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
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id quod possimus, Nam Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil impedit omnis voluptas".</p>
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
									<p>"Nam Cumque nihil impedit quo minuslibero tempore, nihil impedit quo minus id quod possimus, Nam Cumque nihil impedit
										quo minuslibero tempore, cum soluta nobis est eligendi optio cumque nihil impedit omnis voluptas".</p>
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
			
		</div>
	</div>
	<!-- footer -->

	<!-- copyright -->
	<div class="copy_right py-4 text-center">
		<p class="text-white">© 2018 All rights reserved.
		</p>
	</div>
	<!-- //copyright -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/district.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->
	<script src="plugins/moment.min.js"></script>
	<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
	<script>
		var fullCalendar = function(){
		var calendar = function(){
            
            if($("#calendar").length > 0){
                function prepare_external_list(){
                    
                    $('#external-events .external-event').each(function() {
                            var eventObject = {title: $.trim($(this).text())};

                            $(this).data('eventObject', eventObject);
                            $(this).draggable({
                                    zIndex: 999,
                                    revert: true,
                                    revertDuration: 0
                            });
                    });                    
                    
                }
                
                
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();

                prepare_external_list();

                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month'
                    },
                    editable: true,
                    eventSources: {url: "/teacherszone/services/getCalendarEvents.php"},
                    droppable: true,
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true
                            );
							var st = new Date(start),
								en = new Date(end);
						
							var startDate = st.getFullYear() + "/" + (st.getMonth() + 1) + "/" + st.getDate(),
								endDate = en.getFullYear() + "/" + (en.getMonth() + 1) + "/" + en.getDate();
							
							//AJAX EVENT HERE
							console.log("title: " + title + "\n");
							console.log("Start: " + startDate + "\n");
							console.log("end: " + endDate + "\n");
							console.log("allDay: " + allDay + "\n");
							
							$.ajax({
								url: "/teacherszone/services/addCalEvent.php", 
								type: "GET",        
								data: {
									title: title,
									start: startDate,
									end: endDate,
								},
								success: function(res)  
								{
									if(res.result) {
										alert("Event Added Successfully!!");
									} else {
										alert("There was an error. Please try again!!");
										console.error("Error: " + res.msg);
									}
								},
								error: function(XMLHttpRequest, textStatus, errorThrown) {
									alert("Some network error occued")	;
									var error = "Sorry a network error occurred while adding the event.\n";
									var error = error + "Status: " + textStatus + "\n";
									var error = error + "Error Thrown: " + errorThrown;
									console.error(error);
								}
							});
                        }
                        calendar.fullCalendar('unselect');
                    },
                    drop: function(date, allDay) {

                        var originalEventObject = $(this).data('eventObject');

                        var copiedEventObject = $.extend({}, originalEventObject);

                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;

                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);


                        if ($('#drop-remove').is(':checked')) {
                            $(this).remove();
                        }

                    }
                });
                
                $("#new-event").on("click",function(){
                    var et = $("#new-event-text").val();
                    if(et != ''){
                        $("#external-events").prepend('<a class="list-group-item external-event">'+et+'</a>');
                        prepare_external_list();
                    }
                });
                
            }            
        }
        
		calendar();
    }();
	</script>
</body>

</html>