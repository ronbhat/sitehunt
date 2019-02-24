<?php 
    require_once("authorization.php");

    if(checkRequest()) {
        require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $classId = testInput($_POST["classId"], $conn);
        $ques = testInput($_POST["question"], $conn);
        $uid = $user["uid"];
        $obj = new \stdClass();

        $sql = "INSERT INTO questions_table (question, class_id, asked_by, answered) VALUES ('$ques', $classId, $uid, 'false')";

        if($conn->query($sql)) {
            $sql = "UPDATE classes SET questions_posted = questions_posted + 1 WHERE class_id = $classId";

            if($conn->query($sql)) {
                $obj->result = true;
            } else {
                $obj->result = false;
                $obj->msg = "Error: " . $sql . "\n" . mysql_error($conn);
            }

        } else {
            $obj->result = false;
            $obj->msg = "Error: " . $sql . "\n" . mysql_error($conn);
        }

        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
        require './error-pages/400.html';
    }


    function checkRequest() {
        $result = false;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if((isset($_POST["classId"])) && (isset($_POST["question"]))) {
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
        $data=htmlspecialchars($data);
        return $data;
    }