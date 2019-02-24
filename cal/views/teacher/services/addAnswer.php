<?php
    require_once("authorization.php");

    if(checkRequest()) {
        require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $qid = testInput($_POST["qid"], $conn);
        $ans = testInput($_POST["ans"], $conn);
        $classId = testInput($_POST["classId"], $conn);
        $obj = new \stdClass();

        $sql = "UPDATE questions_table SET answer = '$ans', answered = true WHERE qid = $qid";

        if($conn->query($sql)) {
            $sql = "UPDATE classes SET questions_answered = questions_answered + 1 WHERE class_id = $classId";
            
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
    }

    function checkRequest() {
        $result = false;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["qid"]) && isset($_POST["ans"]) && isset($_POST["classId"])) {
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