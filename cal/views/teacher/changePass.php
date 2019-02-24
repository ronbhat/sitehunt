<?php
	require("services/authorization.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Change Password:Teacher</title>            
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
                    <li><a href="index.php">Home</a></li>                    
                    <li class="active">Change Password</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-key"></span> Password</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Update Passwords</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
										<form class="form-horizontal" id="change-pass-form">
											
											<div class="form-group">
												<label class="col-md-3 control-label">Old Password</label>
												<div class="col-md-9">                                            
													<div class="input-group">
														<span class="input-group-addon"><span class="fa fa-key"></span></span>
														<input type="password" name="oldPass" class="form-control" required/>
													</div>                                            
													<span class="help-block">Enter your old password</span>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-3 control-label">New Password</label>
												<div class="col-md-9">                                            
													<div class="input-group">
														<span class="input-group-addon"><span class="fa fa-key"></span></span>
														<input type="password" name="newPass" class="form-control" required/>
														<span class="glyphicon glyphicon-remove form-control-feedback hidden"></span>
													</div>                                            
													<span class="help-block">Enter new password</span>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-md-3 control-label">Confirm New Password</label>
												<div class="col-md-9">                                            
													<div class="input-group">
														<span class="input-group-addon"><span class="fa fa-key"></span></span>
														<input type="password" name="confrmNewPass" class="form-control" required/>
														<span class="glyphicon glyphicon-remove form-control-feedback hidden"></span>
													</div>                                            
													<span class="help-block">Confirm new password</span>
												</div>
											</div>
											
											<button class="btn btn-primary pull-right" id="update-pass-btn">Update Password</button>
										</form>
									</div>
                                </div>
                            </div>

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
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('[name="confrmNewPass"]').blur(function() {
					var pass = $('[name="newPass"]').val(),
						confirmPass = $(this).val();
						
					if(pass === confirmPass) {
						$('[name="newPass"]').closest(".form-group").removeClass('has-error has-feedback');
						$('[name="newPass"]').siblings(".form-control-feedback").addClass('hidden');
						$(this).closest(".form-group").removeClass('has-error has-feedback');
						$(this).siblings(".form-control-feedback").addClass('hidden');
						$('#update-pass-btn').prop('disabled', false);
					} else {
						$('[name="newPass"]').closest(".form-group").addClass('has-error has-feedback');
						$('[name="newPass"]').siblings(".form-control-feedback").removeClass('hidden');
						$(this).closest(".form-group").addClass('has-error has-feedback');
						$(this).siblings(".form-control-feedback").removeClass('hidden');
						$('#update-pass-btn').prop('disabled', true);
					}
				});
				
				
				$('#change-pass-form').submit(function(e) {
					e.preventDefault();
					
					$.ajax({
						url: "services/updatePass.php", 
						type: "POST",        
						data: new FormData(this),
						contentType: false,      
						cache: false,            
						processData:false,       
						success: function(res)  
						{
							if(res.result) {
								alert("Password Updated Successfully!!");
								location.reload();;
							} else {
								if(res.code == 1) {
									alert("Wrong Password");
								} else {
									alert("There was an error. Please try again!!");
									console.log("Error: " + res.msg);
								}
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
    <!-- END SCRIPTS -->         
    </body>
</html>