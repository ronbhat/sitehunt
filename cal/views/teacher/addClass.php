<?php
	require("services/authorization.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Add Class:Teacher</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../../css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
		
		<!-- START PLUGINS -->
        <script type="text/javascript" src="../../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <?php require_once("navbar.php") ?>
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li> 
					<li><a href="">Classes</a></li> 					
                    <li class="active">Add Class</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-files-o"></span> Create New Class</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

							<form id="form-add-class" class="form-horizontal">
								<div class="panel panel-default">
									<div class="panel-body">                                                                        
										
										<div class="form-group">
											<label class="col-md-2 control-label">Classroom Name</label>
											<div class="col-md-8">
												<input type="text" name="cname" class="form-control" placeholder="Classroom Name" required/> 
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-2 control-label">Subject Name</label>
											<div class="col-md-8">
												<input type="text" name="sname" class="form-control" placeholder="Subject Name" required/>
											</div>
										</div>
									   
										<div class="panel-footer">
											<button class="btn btn-primary pull-right">Submit</button>
										</div>
									</div>
								</div>
                            </form>

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="../../services/logout.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="../../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../../audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        

        <!-- THIS PAGE PLUGINS -->

        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>        
        <!-- END TEMPLATE -->
		
		<!-- AJAX FORM SUBMIT STARTS -->
		<script type="text/javascript">
			$('document').ready(function() {
				$('#form-add-class').submit(function(e) {
					e.preventDefault();
					
					$.ajax({
						url: "services/addClass.php", 
						type: "POST",        
						data: new FormData(this),
						contentType: false,      
						cache: false,            
						processData:false,       
						success: function(res)  
						{
							if(res.result) {
								alert("Class Added");
								location.reload();
							} else {
								alert("There was an error. Please try again!!");
								console.error("Error: " + res.msg);
							}
						},
						error: function(XMLHttpRequest, textStatus, errorThrown) {
							alert("Some network error occued")	;
							var error = "Sorry a network error occurred while registering the user.\n";
							var error = error + "Status: " + textStatus + "\n";
							var error = error + "Error Thrown: " + errorThrown;
							console.error(error);
						}
					});
				});
			});
		</script>
		<!-- AJAX FORM SUBMIT STARTS -->
		
    <!-- END SCRIPTS -->         
    </body>
</html>






