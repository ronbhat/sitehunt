<?php
	require_once("services/addressBookUtils.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Address Book</title>            
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
		
		<style>
			.error {
				color: #f00;
			}
		</style>
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
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
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
                   
                    <li class="active">Address Book</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-users"></span> Address Book <small><?php echo $contResult->num_rows?> contacts</small></h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <p>Use search to find contacts by name.</p>
                                    <form id="cont-search-form" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="fa fa-search"></span>
                                                    </div>
                                                    <input type="text" name="search-key" class="form-control" placeholder="Who are you looking for?" required/>
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="btn btn-success btn-block" id="add-cont-btn"><span class="fa fa-plus"></span> Add new contact</button>
                                            </div>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="row" id="contact-container">
						<?php
							if($contResult->num_rows > 0) {
								while($row = $contResult->fetch_assoc()) {
						?>
									<div class="col-md-3">
										<!-- CONTACT ITEM -->
										<div class="panel panel-default">
											<div class="panel-body profile">
												<div class="profile-image">
													<img src="../../<?php echo $row["dp_path"]?>" alt="Nadia Ali"/>
												</div>
												<div class="profile-data">
													<div class="profile-data-name"><?php echo $row["fname"] . " " . $row["lname"]?></div>
													<div class="profile-data-title"><?php echo $row["desg"]?></div>
												</div>
												
											</div>                                
											<div class="panel-body">                                    
												<div class="contact-info">
													<p><small>Mobile</small><br/><?php echo $row["mobile"]?></p>
													<p><small>Email</small><br/><?php echo $row["email"]?></p>
													<p><small>Address</small><br/><?php echo $row["addr"]?></p>                                   
												</div>
											</div>                                
										</div>
										<!-- END CONTACT ITEM -->
									</div>
						<?php
								}
							}
						?>	
						
                                                
                    </div>
                    <!--<div class="row">
                        <div class="col-md-12">
                            <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>                                    
                                <li><a href="#">»</a></li>
                            </ul>                            
                        </div>
                    </div>-->

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

		<!-- MODAL STARTS -->        
        <div class="modal" id="add-cont-modal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header center-block">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title text-center" id="defModalHead">ADD NEW CONTACT</h4>
                    </div>
                    <div class="modal-body">
                        <form id="smt-form" class="form-horizontal" role="form" method="post">   
									<div class="form-group">
										<label style="text-align: left" class="col-md-10 control-label">Feilds marked with <span class="error">*</span> are mandatory</label>
									</div>
						
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">First Name <span class="error">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="fname" placeholder="Enter the persons first name..." required/>
                                        </div>
                                    </div>
                                          
									<div class="form-group">
                                        <label class="col-md-3 control-label">Last Name <span class="error">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="lname" placeholder="Enter the persons last name..." required/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 control-label">Designation <span class="error">*</span></label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="desg" placeholder="Enter the persons designation..." required/>
                                        </div>
                                    </div>
										  
									<div class="form-group">
                                        <label class="col-md-3 control-label">Mobile <span class="error">*</span></label>
                                        <div class="col-md-9">
                                            <input type="number" class="form-control" name="mno" placeholder="Enter the persons mobile..." required/>
                                        </div>
                                    </div>
										  
									<div class="form-group">
                                        <label class="col-md-3 control-label">E-Mail <span class="error">*</span></label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" name="email" placeholder="Enter the persons e-mail..." required/>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 control-label">Address <span class="error">*</span></label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="addr" placeholder="Enter the persons address..." rows="5" required></textarea>
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 control-label">Display Picture</label>
                                        <div class="col-md-9">
                                            <input type="file" class="fileinput" name="profile" title="Select Image" accept="image/*"/>
                                        </div>
                                    </div>
									
									<input type="hidden" name="uid" value="<?php echo $user["uid"]?>">
									
									<input id="smt-btn-hdn" class="hidden" type="submit">
                                </form>
                    </div>
                    <div class="modal-footer">
						<button type="button" class="btn btn-success" id="cont-sbt-btn">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
		<!-- MODAL ENDS -->        
		
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="../../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../../audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->          
        
    <!-- START SCRIPTS -->
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='../../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->   
        <script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>        
		
		<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <!-- END TEMPLATE -->

		<script type="text/javascript">
			$(document).ready(function() {
				//Script to open add contact dialog starts
				$('#add-cont-btn').click(function(e) {
					e.preventDefault();
					$("#add-cont-modal").modal("show");
				});
				//Script to open add contact dialog ends
				
				
				$('#cont-sbt-btn').click(function() {
					$('#smt-btn-hdn').click();
				});
			
				
				$('#smt-form').submit(function(e) {
					e.preventDefault();
					 
					var mno = $('[name="mno"]').val();
					var fileName = $('[name="profile"]').val().split('\\').pop();
					var ext = fileName.split('.').pop();
					
					if((mno < 1000000000) && (mno > 9999999999)) {
						alert("Invalid mobile number");
						return;
					}
					
					if(fileName != "") {
						if(!((ext == 'jpg') || (ext == 'png') || (ext == 'jpeg'))) {
							alert("Only .jpg and .png files are allowed!!");
							return;
						}
					}
					
					var conf = confirm("Please make sure all the details are connect. Press OK to confirm.");
					
					if(conf) {
						$.ajax({
							url: "services/addContact.php", 
							type: "POST",        
							data: new FormData(this),
							contentType: false,      
							cache: false,            
							processData:false,       
							success: function(res)  
							{
								if(res.result) {
									alert("Contact Added!!");
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
			});
		</script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#cont-search-form').submit(function(e) {
					e.preventDefault();
					var searchKey = $('[name = "search-key"]').val();
					
					$.ajax({
							url: "services/searchContact.php", 
							type: "GET",        
							data: {
								key: searchKey,
							},       
							success: function(res)  
							{
								if(res.result) {
									var contactContainer = $('#contact-container');
									
									if(res.found > 0) {
										contactContainer.html("");
										var data = res.data;
										for(var i = 0; i < data.length; i++) {
											var str = '<div class="col-md-3"><div class="panel panel-default"><div class="panel-body profile"><div class="profile-image"><img src="../../' + data[i].dp_path + '" alt="DP"/></div><div class="profile-data"><div class="profile-data-name">' + data[i].fname + ' ' + data[i].lname + '</div>	<div class="profile-data-title">' + data[i].desg + '</div></div><div class="profile-controls"><a href="#" class="profile-control-left"><span class="fa fa-info"></span></a><a href="#" class="profile-control-right"><span class="fa fa-phone"></span></a></div></div><div class="panel-body"><div class="contact-info"><p><small>Mobile</small><br/>' + data[i].mobile + '</p><p><small>Email</small><br/>' + data[i].email +'</p><p><small>Address</small><br/>' + data[i].addr + '</p>                   </div></div></div></div>';
											
											contactContainer.append(str);
										}
									} else {
										alert("Your search fetched no results!!");
									}
								} else {
									alert("There was an error. Please try again!!");
									console.log("Error: " + res.msg);
								}
							},
							error: function(XMLHttpRequest, textStatus, errorThrown) {
								alert("Some network error occued")	;
								var error = "Sorry a network error occurred while searching the user.\n";
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






