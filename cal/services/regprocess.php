<?php
    if(checkRequest()) {
        require("db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $name = testInput($_POST["name"], $conn);
        $role = testInput($_POST["role"], $conn);
        $number = testInput($_POST["number"], $conn);
        $email = testInput($_POST["email"], $conn);
        $pass = testInput($_POST["pass"], $conn);
        $addr = testInput($_POST["addr"], $conn);
        $desg = "";
        $profileImg = "img/defaultProfilePic.jpg";

        if($role == "teacher") {
            $desg = testInput($_POST["desg"], $conn);
        }

        $sql = "INSERT INTO users (name, role, desg, phone, mail, pass, addr, profileImg) VALUES ('$name', '$role', '$desg', '$number', '$email', '$pass', '$addr', '$profileImg')";

        $obj = new \stdClass();

        if($conn->query($sql)) {
            $obj->result = true;
        } else {
            $obj->result = false;
            $obj->msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
        require './error-pages/400.html';
    }

    function checkRequest() {
        if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["name"]) && isset($_POST["role"]) && isset($_POST["number"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["cpass"]) && isset($_POST["addr"])) {
            if($_POST["role"] == "teacher") {
                if(isset($_POST["desg"])) {
                    return true;
                }
            } else {
                return true;
            }

        } 
        return false;
    }

    //function to prep data	
    function testInput($data, $conn) {
        $date = mysqli_real_escape_string($conn, $data);
        $data=trim($data);
        $data=stripslashes($data);
        //$data=htmlspecialchars($data);
        return $data;
    }