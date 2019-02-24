<?php
    require_once("authorization.php");

    if(checkRequest()) {
        require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $oldPass = testInput($_POST["oldPass"], $conn);
        $newPass = testInput($_POST["newPass"], $conn);
        $uid = $user["uid"];
        $obj = new \stdClass();

        if($oldPass == $user["pass"]) {
            $sql = "UPDATE users SET pass = '$newPass' WHERE uid = $uid";

            if($conn->query($sql)) {
                $_SESSION["user"]["pass"] = $newPass;
                $obj->result = true;
                $obj->code = 0;
            } else {
                $obj->result = false;
                $obj->code = 2;
                $obj->msg = "Error updating the password!!";
            }
        } else {
            $obj->result = false;
            $obj->code = 1;
            $obj->msg = "Wrong Password";
        }

        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
    }

    function checkRequest() {
        $result = false;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["oldPass"]) && isset($_POST["newPass"])) {
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