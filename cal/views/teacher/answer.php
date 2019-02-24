<?php
	require_once("services/authorization.php");
	require_once("../../services/db_connect.php");
	
	$sql = "SELECT * FROM questions_table WHERE qid = " . $_GET["quesId"];
	
	if(!($result = $conn->query($sql))) {
		header('HTTP/1.0 500 Bad Request');
        die();
	}
	
	if($result->num_rows > 0) {
		$quesRow = $result->fetch_assoc();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Answer</title>            
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
                    <li><a href="javascript: void(0)">Classes</a></li>                    
                    <li class="active">Answer Question</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-edit"></span> Answer Question</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo $quesRow["question"]?></h3>
                                </div>
								
								<input type="hidden" name="qid" value="<?php echo $_GET["quesId"]?>"/>
								
                                <div class="panel-body">
                                    <div class="block">
										<textarea id="ans-block" class="summernote"></textarea>
									</div>
                                </div>
								
								<div class="panel-footer">
									<button id="submit-ans-btn" class="btn btn-primary pull-right">Submit Answer</button>
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
		<script type="text/javascript" src="../../js/plugins/summernote/summernote.js"></script>
		<!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>        
        <!-- END TEMPLATE -->
		
		<script type="text/javascript">
			$('document').ready(function() {
				var classId = <?php echo $quesRow["class_id"]?>;
				
				$('#submit-ans-btn').click(function(e) {
					e.preventDefault();
					var answerCode = $('#ans-block').html($('#ans-block').code());
					var answerText = answerCode[0].textContent;
					
					$.ajax({
						url: "services/addAnswer.php", 
						type: "POST",        
						data: {
							qid : $('[name="qid"]').val(),
							ans : answerText,
							classId : <?php echo $quesRow["class_id"]?>
						},
						success: function(res)  
						{
							if(res.result) {
								alert("Question Answered");
								window.location.href = "viewClass.php?classId=" + classId;
							} else {
								alert("There was an error. Please try again!!");
								console.error("Error: " + res.msg);
							}
						},
						error: function(XMLHttpRequest, textStatus, errorThrown) {
							alert("Some network error occued")	;
							var error = "Sorry a network error occurred while submitting the answer.\n";
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