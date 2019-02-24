<?php
    require_once("authorization.php");

    if(checkRequest()) {
        require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $classId = testInput($_POST["classId"], $conn);
        $uid = $user["uid"];
        $obj = new \stdClass();

        $sql = "SELECT members FROM classes WHERE class_id = $classId";

        if($result = $conn->query($sql)) {
            if($result->num_rows == 1) {
                while($row = $result->fetch_assoc()) {
                    $memberIds = explode(",",$row["members"]);
                    $flag = true;
                    for($i = 0; $i < count($memberIds); $i++) {
                        if(trim($memberIds[$i]) == $uid) {
                            $flag = false;
                        }
                    }
                    
                    if($flag) {
                        if($row["members"] == "") {
                            $sql = "UPDATE classes SET members = '$uid' WHERE class_id = $classId";        
                        } else {
                            $memberIdStr = $row["members"] . ", $uid";
                            $sql = "UPDATE classes SET members = '$memberIdStr' WHERE class_id = $classId";
                        }
                        
                        if($conn->query($sql)) {
                            $obj->result = true;
                            $obj->code = 0;    
                        } else {
                            $obj->result= false;
                            $obj->code = 2;    
                            $obj->msg = "Error " . $sql . "\n" . mysqli_error($conn);
                        }
                    }
                }
            } else {
                $obj->result= false;
                $obj->code = 1;    
                $obj->msg = "Class not found";
            }
        } else {
            $obj->result= false;
            $obj->msg = "Error " . $sql . "\n" . mysql_error($conn);
            $obj->code = 2;    
        }

        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
        require './error-pages/400.html';
    }

    function checkRequest() {
        $result = false;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["classId"])) {
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