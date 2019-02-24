<?php
    session_start();
    
    if(checkRequest()) {
        require("db_connect.php");
        
        header("Content-Type: application/json; charset=UTF-8");

        $fname = testInput($_POST["fname"], $conn);
        $lname = testInput($_POST["lname"], $conn);
        $uname = testInput($_POST["uname"], $conn);
        $contact = testInput($_POST["contact"], $conn);
        $email = testInput($_POST["email"], $conn);
        $city = testInput($_POST["city"], $conn);
        $addr = testInput($_POST["addr"], $conn);
        $buss_type = testInput($_POST["buss_type"], $conn);
        $pass = testInput($_POST["pass"], $conn);

        $sql = "INSERT INTO users (fname, lname, uname, contact, email, city, address, business_type, password) VALUES ('$fname', '$lname', '$uname', '$contact', '$email', '$city', '$addr', '$buss_type', '$pass')";

        $obj = new \stdClass();

        if($conn->query($sql)) {
            $last_id = $conn->insert_id;
            $sql = "SELECT * FROM users WHERE uid = $last_id";
            if($result = $conn->query($sql)) {
                $obj->result = true;
                $_SESSION["user"] = $result->fetch_assoc();
            } else {
                $obj->result = false;
                $obj->msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            $obj->result = false;
            $obj->msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
    }

    function checkRequest() {
        $res = false;
        if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["uname"]) && isset($_POST["contact"]) && isset($_POST["email"]) && isset($_POST["city"]) && isset($_POST["addr"]) && isset($_POST["buss_type"]) && isset($_POST["pass"])) {
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