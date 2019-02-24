<?php
	require("services/authorization.php");
	
	if(!isset($_GET["classId"])) {
		header('HTTP/1.0 400 Bad Request');
        die();
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Ask Question</title>            
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

					<!-- SIGN OUT -->
					<li class="xn-icon-button pull-right">
						<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
					</li>
					<!-- END SIGN OUT -->					
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="javascript:void(0)">Home</a></li>                    
                    <li class="active">Ask Question</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-file"></span> Ask Question</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" id="question-form">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><strong>Ask</strong> A Question</h3>	
									</div>
									
									<input type="hidden" name="classId" value="<?php echo $_GET["classId"]?>">
									
									<div class="panel-body">                                                                        
										<div class="form-group">
											<label class="col-md-3 col-xs-12 control-label">Question</label>
											<div class="col-md-8 col-xs-12">                                            
												<textarea name="question" class="form-control" rows="10" required></textarea>
												<span class="help-block">Write your question here.</span>
											</div>
										</div>
										
									</div>
									<div class="panel-footer">
										<button class="btn btn-primary pull-right">Submit</button>
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
		<script type='text/javascript' src='../../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="../../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>        
        <!-- END TEMPLATE -->
		
		<script type="text/javascript">
			$('document').ready(function() {
				$('#question-form').submit(function(e) {
					e.preventDefault();
					
					$.ajax({
						url: "services/addQuestion.php", 
						type: "POST",        
						data: new FormData(this),
						contentType: false,      
						cache: false,            
						processData:false,       
						success: function(res)  
						{
							if(res.result) {
								window.location.href = "viewClass.php?classId=" + $('[name = "classId"]').val();
								alert("Question Added Successfully");
							} else {
								alert("There was an error. Please try again!!");
								console.log("Error: " + res.msg);
								
							}
						},
						error: function(XMLHttpRequest, textStatus, errorThrown) {
							alert("Some network error occued")	;
							var error = "Sorry a network error occurred while saving the question.\n";
							var error = error + "Status: " + textStatus + "\n";
							var error = error + "Error Thrown: " + errorThrown;
							console.error(error);
						}
					});
				});
			});
		</script>
    <!-- END SCRIPTS -->         
    </body>
</html>