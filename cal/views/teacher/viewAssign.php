<?php
    require_once("services/authorization.php");
    require_once("../../services/db_connect.php");

    if(checkRequest()) {
        $assId = $_POST["assId"];

        $sql = "SELECT * FROM assignments WHERE assign_id = $assId";

        if($result = $conn->query($sql)) {
            $row = $result->fetch_assoc();
            $filedisplay = "../../" . $row["assign_path"];
            $mime = $row["mime"];

            $tmp = explode("/", $row["assign_path"]);
            $filename = array_pop($tmp);
            
            header("Content-type:$mime");
            header('Content-Disposition: filename=' . $filename);
            header('content-Transfer-Encoding:binary');
            header('Accept-Ranges:bytes');

            $myfile = fopen($filedisplay, "r");
            echo fread($myfile,filesize($filedisplay));
            fclose($myfile);
        } else {
            header('HTTP/1.0 500 Internal Server Error');
        }
    } else {
        header('HTTP/1.0 400 Bad Request');
    }

    function checkRequest() {
        $result = false;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["assId"])) {
                $result = true;
            }
        }

        return $result;
    }