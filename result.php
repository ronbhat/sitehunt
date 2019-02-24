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