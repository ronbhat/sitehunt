<?php
	require_once("services/classUtil.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head> 
		
        <!-- META SECTION -->
        <title>View Class</title>            
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
					
					<li class="xn-icon-button pull-right">
						<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
					</li>
					<!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>                    
                    <li class="active">View Class</li>
                </ul>
                <!-- END BREADCRUMB -->                
             
                <div class="page-title">                    
                    <h2><span class="fa fa-files-o"></span> <?php echo $class["class_name"]?><br/><small>Class Id: <?php echo $class["class_id"]?></small></h2>
                </div>                   
             
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
						
                    <div class="row">
                        <div class="col-md-8">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="push-down-0">New Questions</h3>
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group border-bottom">
										<?php
											if($questionsResult->num_rows > 0) {
												while($row = $questionsResult->fetch_assoc()) {
													if($row["answered"] == 0) {
										?>
										
													<li class="list-group-item"><?php echo $row["question"] ?>
														<a class="pull-right answer-ques" href="answer.php?quesId=<?php echo $row["qid"] ?>">
															<span class="badge badge-info">Answer Question</span>
														</a>
													</li>
										
										<?php
													} else {
														$answeredQues[] = $row;
													}
												}
											}
										?>
										
                                        
                                    </ul>                                
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">Answered Questions</h3>
                                </div>
                                <div class="panel-body faq">
                                    
									<?php
										if(isset($answeredQues)) {
											foreach($answeredQues as $answeredQue) {
									?>
												<div class="faq-item">
													<div class="faq-title"><span class="fa fa-angle-down"></span>
														<?php echo $answeredQue["question"]?>
													</div>
													<div class="faq-text">
														<?php echo $answeredQue["answer"]?>
													</div>
												</div>
									<?php
											}
										} else {
									?>
										<div class="faq-item">
											<div class="faq-title">No Questions Found</div>
										</div>
									<?php
										}
									?>
									
                                </div>
                            </div>
							
							<div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">Assignments</h3>
                                </div>
                                <div class="panel-body panel-body-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th>name</th>
                                                    <th width="100">due date</th>
                                                    <th width="110">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
												<?php
													if($assignResult->num_rows > 0) {
														while($row = $assignResult->fetch_assoc()) {
															$date = date("d/m/Y" ,strtotime($row["due_date"]));
												?>
															<tr>
																<td><strong><?php echo $row["assign_name"]?></strong></td>
																<td><?php echo $date?></td>
																<td>
																	<button class="btn btn-default btn-rounded btn-sm dw-assign" data-id="<?php echo $row["assign_id"]?>"><span class="fa fa-download"></span></button>
																	<button class="btn btn-danger btn-rounded btn-sm del-assign" data-id="<?php echo $row["assign_id"]?>"><span class="fa fa-times"></span></button>
																</td>
															</tr>
												<?php
														}
													}
												?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="push-down-0">Class Materials</h3>
                                </div>
                                <div class="panel-body panel-body-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th>Material Name</th>
                                                    <th width="100">Material Description</th>
                                                    <th width="110">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
												<?php
													if($matResult->num_rows > 0) {
														while($row = $matResult->fetch_assoc()) {
												?>
															<tr>
																<td><strong><?php echo $row["mat_name"]?></strong></td>
																<td><?php echo $row["mat_desc"]?></td>
																<td>
																	<button class="btn btn-default btn-rounded btn-sm dw-mat" data-id="<?php echo $row["mat_id"]?>"><span class="fa fa-download"></span></button>
																	<button class="btn btn-danger btn-rounded btn-sm del-mat" data-id="<?php echo $row["mat_id"]?>"><span class="fa fa-times"></span></button>
																</td>
															</tr>
												<?php
														}
													}
												?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>                        
                        <div class="col-md-4">
                            
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="push-down-0">Students</h3>
                                </div>
                                <div class="panel-body list-group list-group-contacts">                                
                                    <?php
										if($membersResult->num_rows > 0) {
											while($row = $membersResult->fetch_assoc()) {
									?>
									
												<a href="javascript:void(0)" class="list-group-item">                                    
													<img src="../../<?php echo $row["profileImg"]?>" class="pull-left" alt="Profile Image"/>
													<span class="contacts-title"><?php echo $row["name"]?></span>                          
												</a>                                
									
									<?php
											}
										}
									?>
									
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

		<form class="hidden" id="file-form" action="viewAssign.php" method="post" target="_blank" enctype="multipart/form-data">
			<input type="hidden" name="assId"/>
		</form>
		
		<form class="hidden" id="mat-form" action="viewMaterial.php" method="post" target="_blank" enctype="multipart/form-data">
			<input type="hidden" name="matId"/>
		</form>
		
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
		<script type="text/javascript" src="../../js/faq.js"></script>
        <!-- END TEMPLATE -->
		
		<!-- DOWNLOAD ASSIGNMENT JS STARTS -->
		<script type="text/javascript">
			$('document').ready(function() {
				$('.dw-assign').click(function(e) {
					e.preventDefault();
					
					var assId = $(this).data('id');
					$('[name="assId"]').val(assId);
					
					$('#file-form').submit();
				});
			});
		</script>
		<!-- DOWNLOAD ASSIGNMENT JS ENDS -->
		
		<!-- DELETE ASSIGNMENT JS STARTS -->
		<script type="text/javascript">
			$(document).ready(function() {
				$('.del-assign').click(function(e) {
					e.preventDefault();
					
					var assId = $(this).data('id');
					
					$.ajax({
						url: "services/deleteAssign.php", 
						type: "POST",        
						data: {
							assId : assId,
							classId : <?php echo $_GET["classId"]?>
						},
						success: function(res)  
						{
							if(res.result) {
								alert("Assignment Deleted");
								location.reload();
							} else {
								alert("There was an error. Please try again!!");
								console.error("Error: " + res.msg);
							}
						},
						error: function(XMLHttpRequest, textStatus, errorThrown) {
							alert("Some network error occued")	;
							var error = "Sorry a network error occurred while deleting the user.\n";
							var error = error + "Status: " + textStatus + "\n";
							var error = error + "Error Thrown: " + errorThrown;
							console.error(error);
						}
					});
				});
			});
		</script>
		<!-- DELETE ASSIGNMENT JS ENDS -->
		
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('.dw-mat').click(function(e) {
					e.preventDefault();
					
					var matId = $(this).data('id');
					$('[name="matId"]').val(matId);
					
					$('#mat-form').submit();
				});
			});
		</script>
		
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('.del-mat').click(function(e) {
					e.preventDefault();
					
					var matId = $(this).data('id');
					
					$.ajax({
						url: "services/deleteMaterial.php", 
						type: "POST",        
						data: {
							matId : matId,
						},
						success: function(res)  
						{
							if(res.result) {
								alert("Material Deleted");
								location.reload();
							} else {
								alert("There was an error. Please try again!!");
								console.error("Error: " + res.msg);
							}
						},
						error: function(XMLHttpRequest, textStatus, errorThrown) {
							alert("Some network error occued")	;
							var error = "Sorry a network error occurred while deleting the material.\n";
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