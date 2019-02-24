<?php
    session_start();

    if(isset($_SESSION["user"])) {
        $role = $_SESSION["user"]["role"];

        switch($role) {
            case 'teacher' :    header("Location: ../views/teacher/");
                                break;

            case 'student' :    header("Location: ../views/student/");
                                break;

            default        :    header('HTTP/1.0 404 Not Found');
        }
    } else {
        header('HTTP/1.0 400 Bad Request');
    }   