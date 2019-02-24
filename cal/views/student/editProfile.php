<?php
	require_once("services/authorization.php");
	require_once("../../services/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Edit Profile:Student</title>            
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
                    <li class="active">Update Profile</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="glyphicon glyphicon-user"></span> Profile Page</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Edit Profile</h3>
									</div>
									
									<div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        <form class="form-horizontal" id="profile-form">
											<div class="col-md-6">
												
												<div class="form-group">
													<label class="col-md-3 control-label">Name</label>
													<div class="col-md-9">                                            
														<div class="input-group">
															<span class="input-group-addon"><span class="fa fa-user"></span></span>
															<input type="text" name="name" class="form-control" value="<?php echo $user["name"]?>" required/>
														</div>                                            
														<span class="help-block">Change to update your name</span>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-md-3 control-label">Role</label>
													<div class="col-md-9">                                                                                            
														<select class="form-control select" disabled>
															<option value="">Student</option>
														</select>
														<span class="help-block">Your Role (Cannot be changed).</span>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-md-3 control-label">Contact Number</label>
													<div class="col-md-9">                                            
														<div class="input-group">
															<span class="input-group-addon"><span class="fa fa-user"></span></span>
															<input type="number" name="phone" class="form-control"  value="<?php echo $user["phone"]?>" required/>
														</div>                                            
														<span class="help-block">Change to update your contact number</span>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-md-3 control-label">E-Mail</label>
													<div class="col-md-9">                                            
														<div class="input-group">
															<span class="input-group-addon"><span class="fa fa-user"></span></span>
															<input type="email" name="email" value="<?php echo $user["mail"]?>" class="form-control" disabled/>
														</div>                                            
														<span class="help-block">Your E-Mail (Cannot be changed)</span>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-md-3 control-label">Address</label>
													<div class="col-md-9 col-xs-12">                                            
														<textarea name="addr" class="form-control" rows="5" required><?php echo $user["addr"]?></textarea>
														<span class="help-block">Change to update your address</span>
													</div>
												</div>
												
												<button class="btn btn-primary pull-right">Submit</button>
											</div>
											
										</form>
										<form class="form-horizontal" id="profile-pic-form">
											<div class="col-md-6">
												<div class="form-group">
													<label class="col-md-3 control-label">Profile Picture</label>
													<div class="col-md-9">                                                    
														<input type="file" class="fileinput btn-primary" name="profile" id="filename" title="Choose Image" accept="image/*" required/>
														<span class="help-block">Only .png and .jpg files are allowed</span>
													</div>
												</div>	
												
												<button class="btn btn-primary pull-right">Update Image</button>
											
											</div>
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
			$(document).ready(function() {
				$('#profile-form').submit(function(e) {
					e.preventDefault();
					
					var phone = $('[name="phone"]').val();
					
					if((phone < 1000000000) || (phone > 9999999999)) {
						alert("Invalid mobile number");
						return;
					}
					
					var conf = confirm("Make sure you have entered the information correctlly. Press OK to confirm.");
					
					if(conf) {
						$.ajax({
							url: "services/updateStudentProfile.php", 
							type: "POST",        
							data: new FormData(this),
							contentType: false,      
							cache: false,            
							processData:false,       
							success: function(res)  
							{
								if(res.result) {
									alert("Profile Updated!!");
									location.reload();;
								} else {
									alert("There was an error. Please try again!!");
									console.log("Error: " + res.msg);
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
					}
				});
				
				
				$('#profile-pic-form').submit(function(e) {
					e.preventDefault();
					
					var fileName = $('[name="profile"]').val().split('\\').pop();
					var ext = fileName.split('.').pop();
					
					if(!((ext === 'jpg') || (ext == 'png') || (ext == 'jpeg'))) {
						alert("Invalid image format!!");
						return;
					}
					
					$.ajax({
						url: "services/updateProfilePic.php", 
						type: "POST",        
						data: new FormData(this),
						contentType: false,      
						cache: false,            
						processData:false,       
						success: function(res)  
						{
							if(res.result) {
								alert("Profile Pic Updated!!");
								location.reload();;
							} else {
								alert("There was an error. Please try again!!");
								console.log("Error: " + res.msg);
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






