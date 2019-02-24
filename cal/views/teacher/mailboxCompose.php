<?php
	require("services/authorization.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Mail Compose:Teacher</title>            
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
                    <li><a href="index.php">Home</a></li>
                    
                    <li><a href="mailboxInbox.php">Mailbox</a></li>
                    <li class="active">Compose</li>
                </ul>
                <!-- END BREADCRUMB -->                
                
                <!-- START CONTENT FRAME -->
                <div class="content-frame">                                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">
                        <div class="page-title">                    
                            <h2><span class="fa fa-pencil"></span> Compose</h2>
                        </div>                         
                        
                       
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class="content-frame-left">
                        <div class="block">
                                                    
                        </div>
                        
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body">
                        <div class="block">
                        <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                   
                                                                       
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">From:</label>
                                <div class="col-md-10">                                        
                                    <select class="form-control select">
                                        <option>Dmitry (dmitryivaniuk@domain.com)</option>
                                        <option>Incognito (otheremail@domain.com)</option>                                        
                                    </select>
                                </div>
                            </div>                        
                            <div class="form-group">
                                <label class="col-md-2 control-label">To:</label>
                                <div class="col-md-9">                                        
                                    <input type="text" class="tagsinput" value="John (johndoe@domain.com)" data-placeholder="add email"/>                                
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-link toggle" data-toggle="mail-cc">Cc</button>
                                </div>
                            </div>
                            <div class="form-group hidden" id="mail-cc">
                                <label class="col-md-2 control-label">Cc:</label>
                                <div class="col-md-10">                                        
                                <input type="text" class="tagsinput" value="" data-placeholder="add email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Subject:</label>
                                <div class="col-md-10">                                        
                                    <input type="text" class="form-control" value="Re: Lorem ipsum dolor sit amet"/>                                
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Attachments:</label>
                                <div class="col-md-10">                                        
                                    <input type="file" class="file" data-filename-placement="inside"/>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">                            
                                    <textarea class="summernote_email"><p>Hello Dmitry,</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ligula risus, viverra sit amet purus id, ullamcorper venenatis leo. Ut vitae semper neque. Nunc vel lacus vel erat sodales ultricies sed sed massa. Duis non elementum velit. Nunc quis molestie dui. Nullam ullamcorper lectus in mattis volutpat. Nunc egestas felis sit amet ultrices euismod. Donec lacinia neque vel quam pharetra, non dignissim arcu semper. Donec ultricies, neque ut vehicula ultrices, ligula velit sodales purus, eget eleifend libero risus sed turpis. Fusce hendrerit vel dui ut pulvinar. Ut sed tristique ante, sed egestas turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Fusce sit amet dui at nunc laoreet facilisis. Proin consequat orci sollicitudin sem cursus, quis vehicula eros ultrices. Cras fermentum justo at nibh tincidunt, consectetur elementum est aliquam.</p>
<p>Nam dignissim convallis nulla, vitae porta purus fringilla ac. Praesent consectetur ex eu dui efficitur sollicitudin. Mauris libero est, aliquam a diam maximus, dignissim laoreet lacus.</p>
<p>Nulla ac nisi sodales, auctor dui et, consequat turpis. Cras dolor turpis, sagittis vel elit in, varius elementum arcu. Mauris aliquet lorem ac enim blandit, nec consequat tortor auctor. Sed eget nunc at justo congue mollis eget a urna. Phasellus in mauris quis tortor porta tristique at a risus.</p>
<p><strong>Best Regards<br/>John Doe</strong></p>                                        
                                    </textarea>                            
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    
                                    <div class="pull-right">
                                        <button class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
                                    </div>                                    
                                </div>
                            </div>
                        </form>
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
        
        <script type="text/javascript" src="../../js/plugins/summernote/summernote.js"></script>
        <script type="text/javascript" src="../../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>       
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-select.js"></script>        
        <script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
		<script type="text/javascript" src="../../js/plugins.js"></script>        
        <script type="text/javascript" src="../../js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






