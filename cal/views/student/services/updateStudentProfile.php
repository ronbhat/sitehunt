<?php
    require_once("authorization.php");

    if(checkRequest()) {
        require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $name = testInput($_POST["name"], $conn);
        $phone = testInput($_POST["phone"], $conn);
        $addr = testInput($_POST["addr"], $conn);
        $uid = $user["uid"];
        $obj = new \stdClass();

        $sql = "UPDATE users SET name = '$name', phone = '$phone', addr = '$addr' WHERE uid = $uid";

        if($conn->query($sql)) {
           $_SESSION["user"]["name"] = $name;
           $_SESSION["user"]["phone"] = $phone;
           $_SESSION["user"]["addr"] = $addr;
           $obj->result = true;
        } else {
            $obj->result = false;
            $obj->msg = "There was an error updating the profile.";
        }

        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
    }

    function checkRequest() {
        $result = false;
		
		if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["addr"])) {
                $result = true;
            }
        }

        return $result;
    }


    //function to prep data	
    function testInput($data, $conn) {
        $date = mysqli_real_escape_string($conn, $data);
        $data=trim($data);
        $data=stripslashes($data);
        //$data=htmlspecialchars($data);
        return $data;
    }