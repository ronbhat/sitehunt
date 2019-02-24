<?php
	require("services/authorization.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>TITLE</title>            
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
                    <li class="active">Add Assignment</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-file"></span> Add Assignment</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form id="assign-form" class="form-horizontal" method="post" action="services/addAssignment.php">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title"><strong>Upload</strong> Assignment</h3>
										
									</div>
									
									<div class="panel-body">                                                                        
										
										<input type="hidden" name="classId" value="<?php echo $_GET["classId"]?>">
										
										<div class="form-group">
											<label class="col-md-3 col-xs-12 control-label">Assignment Name</label>
											<div class="col-md-6 col-xs-12">                                            
												<div class="input-group">
													<span class="input-group-addon"><span class="fa fa-pencil"></span></span>
													<input type="text" name="assName" class="form-control" required/>
												</div>                                            
											</div>
										</div>
										
										<div class="form-group">                                        
											<label class="col-md-3 col-xs-12 control-label">Due Date</label>
											<div class="col-md-6 col-xs-12">
												<div class="input-group">
													<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
													<input type="text" name="duedate" class="form-control datepicker" required>                                            
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-3 col-xs-12 control-label">Assignment Description</label>
											<div class="col-md-6 col-xs-12">                                            
												<textarea class="form-control" name="desc" rows="5" required></textarea>
												<span class="help-block">Add some description/instructions about the assignment</span>
											</div>
										</div>
										
										<div class="form-group">
											<label class="col-md-3 col-xs-12 control-label">Attach File</label>
											<div class="col-md-6 col-xs-12">                                                                                                                                        
												<input type="file" class="fileinput btn-primary" name="assignfile" id="filename" title="Browse file" required/>
											</div>
										</div>
										
										<div id="uploadProgressBar" class="progress hidden">
											<div id="fileUploadProgress" class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" ></div>
										</div>   
									</div>
									<div class="panel-footer">
										<button class="btn btn-default">Clear Form</button>                                    
										<button id="submit-btn" class="btn btn-primary pull-right">Submit</button>
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
		
		<script type='text/javascript' src='../../js/plugins/noty/jquery.noty.js'></script>
		<script type='text/javascript' src='../../js/plugins/noty/layouts/topCenter.js'></script>
		
		<script type='text/javascript' src='../../js/plugins/noty/themes/default.js'></script>
        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>     

		
        <!-- END TEMPLATE -->
		
		<!---------------- JS To support file upload to server starts ---------------->
		<script type="text/javascript" src="../../js/jquery.form.js"></script> 
		
		<script type="text/javascript">
			$(document).ready(function() {
				
				$('#assign-form').ajaxForm({
					beforeSend: function() {
						$('#submit-btn').prop('disabled', true);
						var percentVal = '0% Uploaded';
						$("#uploadProgressBar").removeClass("hidden");
						$("#fileUploadProgress").html(percentVal);
						$("#fileUploadProgress").css("width", "0%");
					},
					uploadProgress: function(event, position, total, percentComplete) {
						var percentVal = percentComplete + '%';
						$("#fileUploadProgress").html(percentVal + " Uploaded");
						$("#fileUploadProgress").css("width", percentVal);
					},
					complete: function(xhr) {
						var res = JSON.parse(xhr.responseText);
						if(xhr.status === 200) {
							if(res.result == true) {					
								$("#fileUploadProgress").addClass("progress-bar-success");
								noty({
									text: 'Assignment Uploaded Successfully', 
									layout: 'topCenter', 
									type: 'success',
									id: "upload-noty"
								});
							} else {
								noty({
									text: 'A network error occurred!!', 
									layout: 'topCenter', 
									type: 'error'
								});
								console.error(res.msg);
							}
						} else if(xhr.status === 500) {
							noty({
								text: 'A network error occurred!!', 
								layout: 'topCenter', 
								type: 'error'
							});
							console.error("A server error occured!!");
						} else {
							noty({
								text: 'A network error occurred!!', 
								layout: 'topCenter', 
								type: 'error'
							});
							console.error("An unknown error occured!!");
						}
					} 
				});
				
			});
		</script>
		<!---------------- JS To support file upload to server ends ---------------->
		
		<!-- END SCRIPTS -->         
    </body>
</html>