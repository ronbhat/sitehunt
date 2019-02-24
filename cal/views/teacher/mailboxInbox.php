<?php
	require("services/authorization.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Mailbox:Teacher</title>            
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
                    <li><a href="Index.php">Home</a></li>
                    
                    <li><a href="">Mailbox</a></li>
                    <li class="active">Inbox</li>
                </ul>
                <!-- END BREADCRUMB -->                
                                
                <!-- START CONTENT FRAME -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-inbox"></span> Inbox <small>(3 unread)</small></h2>
                        </div>                                                                                
                        
                                              
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class="content-frame-left">
					
                        <div class="block">
                            <a href="mailboxCompose.php" class="btn btn-danger btn-block btn-lg"><span class="fa fa-edit"></span> COMPOSE</a>
                        </div>
                        
                       
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        
                        <div class="panel panel-default">
                           
                            <div class="panel-body mail">
                                
                                <div class="mail-item mail-unread mail-info">                                    
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">Dmitry Ivaniuk</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">Product development</a>                                    
                                    <div class="mail-date">Today, 11:21</div>
                                </div>
                                
                                <div class="mail-item mail-unread mail-danger">                                    
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">John Doe</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">New Windows 9 App</a>                                    
                                    <div class="mail-date">Today, 10:36</div>
                                </div>
                                
                                <div class="mail-item mail-success">
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">Nadia Ali</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">Check my new song</a>                                    
                                    <div class="mail-date">Yesterday, 20:19</div>
                                </div>
                                
                                <div class="mail-item mail-warning">
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star starred">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">Brad Pitt</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">How are you? Need some work?</a>                                    
                                    <div class="mail-date">Sep 15</div>
                                </div>
                                
                                <div class="mail-item mail-info">
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">Dmitry Ivaniuk</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">Can you check this docs?</a>                                    
                                    <div class="mail-date">Sep 14</div>
                                    <div class="mail-attachments">
                                        <span class="fa fa-paperclip"></span> 11Kb
                                    </div>
                                </div>
                                
                                <div class="mail-item">
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star starred">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">HTC</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">New updates on your phone HD7</a>
                                    <div class="mail-date">Sep 13</div>
                                    <div class="mail-attachments">
                                        <span class="fa fa-paperclip"></span> 58Mb
                                    </div>
                                </div>
                                
                                <div class="mail-item mail-unread">
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">Unknown</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">You won $15,000,000</a>
                                    <div class="mail-date">Sep 13</div>
                                </div>
                                
                                <div class="mail-item mail-success">
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">Nadia Ali</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">Your tickets</a>
                                    <div class="mail-date">Sep 11</div>
                                    <div class="mail-attachments">
                                        <span class="fa fa-paperclip"></span> 1.2Mb
                                    </div>
                                </div>
                                
                                <div class="mail-item mail-info">
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">Dmitry Ivaniuk</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">New bug founded</a>
                                    <div class="mail-date">Sep 11</div>
                                </div>
                                
                                <div class="mail-item">
                                    <div class="mail-checkbox">
                                        <input type="checkbox" class="icheckbox"/>
                                    </div>
                                    <div class="mail-star">
                                        <span class="fa fa-star-o"></span>
                                    </div>
                                    <div class="mail-user">Darth Vader</div>                                    
                                    <a href="mailboxMessage.php" class="mail-text">Where drawings of the new spaceship?</a>
                                    <div class="mail-date">Sep 10</div>
                                </div>                                
                                
                            </div>
                            <div class="panel-footer">                                
                                                   
                        </div>
                        
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                </div>
                <!-- END CONTENT FRAME -->
                
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
                        <p>Press No if you want to continue work. Press Yes to logout current user.</p>
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
        
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-datepicker.js"></script>     
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>