<?php
    require("authorization.php");
    require("../../../services/db_connect.php");
    
    if(checkRequest()) {
        header("Content-Type: application/json; charset=UTF-8");

        $assId = $_POST["assId"];
        $classId = $_POST["classId"];
        $obj = new \stdClass();

        $sql = "DELETE FROM assignments WHERE assign_id = $assId";

        if($conn->query($sql)) {
            $sql = "UPDATE classes SET assigments = assigments - 1 WHERE class_id = $classId";

            if($conn->query($sql)){
                $obj->result = true;
            } else {
                $obj->result = false;
                $obj->msg = "Error updating the database!!";
            }
        } else {
            $obj->result = false;
			$obj->msg = "Error: " . $sql . "\n" . mysqli_error($conn);  
        }

        echo json_encode($obj);
    } else {
		header('HTTP/1.0 400 Bad Request');
	}

    function checkRequest() {
        $result = false;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["assId"]) && isset($_POST["classId"])) {
                $result = true;
            }
        }

        return $result;
    }