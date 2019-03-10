<?php
    if(checkRequest()) {
        require("db_connect.php");
        
        header("Content-Type: application/json; charset=UTF-8");

    } else {
        header('HTTP/1.0 400 Bad Request');
    }

    function checkRequest() {
        $res = false;
        if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["fname"]) && isset($_POST[""])) {
            $res = true;
        } 
        return $res;
    }

    //function to prep data	
    function testInput($data, $conn) {
        $date = mysqli_real_escape_string($conn, $data);
        $data=trim($data);
        $data=stripslashes($data);
        //$data=htmlspecialchars($data);
        return $data;
    }
?>