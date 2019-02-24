<?php
	require_once("services/dashUtils.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META SECTION -->
    <title>Home:Teacher</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="../../css/theme-default.css" />
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
            <?php require_once("navbar.php")?>
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
                <li><a href="">Dashboard</a></li>
                <li class="active">Home</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <!-- START WIDGETS -->
                <div class="row">
                    <div class="col-md-3">

                        <!-- START WIDGET SLIDER -->
                        <div class="widget widget-default widget-carousel">
                            <div class="owl-carousel" id="owl-example">
                                <div>
                                    <div class="widget-title">Total Assignments</div>
                                    <div class="widget-subtitle"></div>
                                    <div class="widget-int"><?php echo $assResults->num_rows?></div>
                                </div>
                                <div>
                                    <div class="widget-title">Uploaded Materials</div>
                                    <div class="widget-subtitle"></div>
									<div class="widget-int"><?php echo $matResults->num_rows?></div>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET SLIDER -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET MESSAGES -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count"><?php echo $quesResults->num_rows?></div>
                                <div class="widget-title">Questions</div>
                                <div class="widget-subtitle">Answered</div>
                            </div>
                        </div>
                        <!-- END WIDGET MESSAGES -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count"><?php echo $stuCount?></div>
                                <div class="widget-title">Students</div>
                                <div class="widget-subtitle">Enrolled</div>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET CLOCK -->
                        <div class="widget widget-info widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>
                            <div class="widget-subtitle plugin-date">Loading...</div>
                            
                            <div class="widget-buttons widget-c3">
                                <div class="col">
                                    <a href="addressBook.php"><span class="fa fa-users"></span></a>
                                </div>
                                <div class="col">
                                    <a href="mailboxInbox.php"><span class="fa fa-envelope"></span></a>
                                </div>
                                <div class="col">
                                    <a href="calendar.php"><span class="fa fa-calendar"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- END WIDGET CLOCK -->

                    </div>
                </div>
                <!-- END WIDGETS -->

                <div class="row">

                    <div class="col-md-6">

                        <!-- START VISITORS BLOCK -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title-box">
                                    <h3>Questions Tally</h3>
                                    <span>for various classes</span>
                                </div>
                                <ul class="panel-controls" style="margin-top: 2px;">
                                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                </ul>
                            </div>
                            <div class="panel-body padding-0">
                                <div class="chart-holder" id="dashboard-donut-1" style="height: 200px;"></div>
                            </div>
                        </div>
                        <!-- END VISITORS BLOCK -->

                    </div>

                    <!-- START DASHBOARD CHART -->
                    <div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
                    <div class="block-full-width">

                    </div>
                    <!-- END DASHBOARD CHART -->

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

        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='../../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/scrolltotop/scrolltopcontrol.js"></script>

        <script type="text/javascript" src="../../js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="../../js/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="../../js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='../../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='../../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
        <script type='text/javascript' src='../../js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="../../js/plugins/owl/owl.carousel.min.js"></script>

        <script type="text/javascript" src="../../js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->

        <script type="text/javascript" src="../../js/plugins.js"></script>
        <script type="text/javascript" src="../../js/actions.js"></script>

        <script type="text/javascript" src="../../js/demo_dashboard.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				Morris.Donut({
					element: 'dashboard-donut-1',
					data: [
						{label: "Total", value: <?php echo $totalQuestions?>},
						{label: "Answered", value: <?php echo $questionsAnswered?>},
						{label: "Not Answered", value: <?php echo $questionsNotAnswered	?>}
					],
					colors: ['#33414E', '#1caf9a', '#FEA223'],
					resize: true
				});
			});
		</script>
		
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->
</body>

</html>