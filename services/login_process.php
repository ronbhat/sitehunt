<?php
    session_start();

    if(checkRequest()) {
        require("db_connect.php");
        
        header("Content-Type: application/json; charset=UTF-8");

        $uname = testInput($_POST["uname"], $conn);
        $pass = testInput($_POST["pass"], $conn);

        $sql = "SELECT * FROM users WHERE uname = '$uname'";

        $obj = new \stdClass();

        if($result = $conn->query($sql)) {
            if(mysqli_num_rows($result) == 1) {
                $row = $result->fetch_assoc();

                if($row["password"] == $pass) {
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
        if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["uname"]) && isset($_POST["pass"])) {
            return true;
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
?>