<?php
	require_once("services/authorization.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>To-do:Teachers</title>            
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
        <div class="page-container page-navigation-toggled">
            
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
                <ul class="breadcrumb push-down-0">
                    <li><a href="index.php">Home</a></li>
                    
                    <li class="active">Tasks</li>
                </ul>
                <!-- END BREADCRUMB -->                                                
                                
                <!-- START CONTENT FRAME -->
                <div class="content-frame">     
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-arrow-circle-o-left"></span> Tasks</h2>
                        </div>                                                
                        <div class="pull-right">
                            <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                        </div>                                
                        
                        
                    </div>                    
                    <div class="content-frame-left">
                        <div class="form-group">
                            <h4>Add new task:</h4>
                            <textarea class="form-control push-down-10" id="new_task" rows="4" placeholder="Your task text here..."></textarea>                            
                            <button class="btn btn-primary" id="add_new_task"><span class="fa fa-edit"></span> Add</button>
                        </div>                        
                        
                        
                        
                        
                    </div>       
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                                                
                        <div class="row push-up-10">
                            <div class="col-md-4">
                                
                                <h3>To-do List</h3>
                                
                                <div class="tasks" id="tasks">

                                    <div class="task-item task-primary">                                    
                                        <div class="task-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum velit vel erat fermentum, a dignissim dolor malesuada.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 1h 30min</div>                                    
                                        </div>                                    
                                    </div>

                                    <div class="task-item task-success">                                    
                                        <div class="task-text">Suspendisse a tempor eros. Curabitur fringilla maximus lorem, eget congue lacus ultrices eu. Nunc et molestie elit. Curabitur consectetur mollis ipsum, id hendrerit nunc molestie id.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 1h 45min</div>
                                            <div class="pull-right"><a href="#"><span class="fa fa-chain"></span></a> <a href="#"><span class="fa fa-comments"></span></a></div>
                                        </div>                                    
                                    </div>

                                    <div class="task-item task-warning">                                    
                                        <div class="task-text">Donec lacus lacus, iaculis nec pharetra id, congue ut tortor. Donec tincidunt luctus metus eget rhoncus.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 1day ago</div>
                                        </div>                                    
                                    </div>

                                    <div class="task-item task-danger">                                    
                                        <div class="task-text">Pellentesque faucibus molestie lectus non efficitur. Vestibulum mattis dignissim diam, eget dapibus urna rutrum vitae.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 2days ago</div>
                                            <div class="pull-right"><a href="#"><span class="fa fa-chain"></span></a> <a href="#"><span class="fa fa-comments"></span></a></div>
                                        </div>                                    
                                    </div>

                                    <div class="task-item task-info">                                    
                                        <div class="task-text">Quisque quis ipsum quis magna bibendum laoreet.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 3days ago</div>
                                            <div class="pull-right"><a href="#"><span class="fa fa-chain"></span></a> <a href="#"><span class="fa fa-comments"></span></a></div>
                                        </div>                                    
                                    </div>
                                    
                                </div>                            

                            </div>
                            <div class="col-md-4">
                                <h3>In Progress</h3>
                                <div class="tasks" id="tasks_progreess">

                                    <div class="task-item task-warning">
                                        <div class="task-text">In mauris nunc, blandit a turpis in, vehicula viverra metus. Quisque dictum purus lorem, in rhoncus justo dapibus eget. Aenean pretium non mauris et porttitor.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 2h 55min</div>
                                            <div class="pull-right"><span class="fa fa-pause"></span> 4:51</div>
                                        </div>                                    
                                    </div>                            
                                    
                                    <div class="task-drop push-down-10">
                                        <span class="fa fa-cloud"></span>
                                        Drag your task here to start it tracking time
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3>Completed</h3>
                                <div class="tasks" id="tasks_completed">
                                    <div class="task-item task-danger task-complete">                                    
                                        <div class="task-text">Donec maximus sodales feugiat.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 15min</div>                                    
                                        </div>                                    
                                    </div>
                                    <div class="task-item task-info task-complete">                                    
                                        <div class="task-text">Aliquam eget est a dui tincidunt commodo in nec ante.</div>
                                        <div class="task-footer">
                                            <div class="pull-left"><span class="fa fa-clock-o"></span> 35min</div>                                    
                                        </div>                                    
                                    </div>
                                    <div class="task-drop">
                                        <span class="fa fa-cloud"></span>
                                        Drag your task here to finish it
                                    </div>                                    
                                </div>
                            </div>
                        </div>                        
                                                
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                    
                </div>
                <!-- END CONTENT FRAME -->

            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MODALS -->        
        <div class="modal fade" id="taskEdit" tabindex="-1" role="dialog" aria-labelledby="taskEditModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="taskEditModalHead">Edit Task</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Task description</label>
                            <textarea class="form-control" id="task-text" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Task group</label>
                            <select class="form-control select">
                                <option>Work</option>
                                <option>Home</option>
                                <option>Friends</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">                        
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>        
        <!-- END MODALS -->
        
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
        
        <script type="text/javascript" src="../../js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-select.js"></script> 
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE --> 
        <script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>
        <script type="text/javascript" src="../../js/demo_tasks.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






