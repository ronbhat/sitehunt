<?php
    session_start();

    $auth = false;
	
    if(isset($_SESSION["user"]) && isset($_SESSION["user"]["role"])) {
        if($_SESSION["user"]["role"] == "teacher") {
            $user = $_SESSION["user"];
            $auth = true;
        }
    }

    if(!$auth) {
        header('HTTP/1.0 403 Forbidden');
        die();
    }
?>