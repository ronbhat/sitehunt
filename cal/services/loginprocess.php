<?php
    session_start();

    if(checkRequest()) {
        require("db_connect.php");
        header("Content-Type: application/json; charset=UTF-8");

        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $sql = "SELECT * FROM users WHERE mail = '$email'";

        $obj = new \stdClass();

        if($result = $conn->query($sql)) {
            if(mysqli_num_rows($result) == 1) {
                $row = $result->fetch_assoc();

                if($row["pass"] == $pass) {
                    $obj->result = true;
                    $obj->code = 0;

                    $_SESSION["user"] = $row;
                } else {
                    $obj->result = false;
                    $obj->code = 1;
                    $obj->msg = "Wrong password";    
                }

            } else {
                $obj->result = false;
                $obj->code = 2;
                $obj->msg = "Wrong username";
            }
        } else {
            $obj->result = false;
            $obj->code = 3;
            $obj->msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
    }

    function checkRequest() {
        if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["email"]) && isset($_POST["pass"])) {
            return true;
        }        

        return false;
    }