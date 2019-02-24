<?php
    require("authorization.php");
    require("../../../services/db_connect.php");

    if(checkRequest()) {
        header("Content-Type: application/json; charset=UTF-8");

        $matId = $_POST["matId"];
        $obj = new \stdClass();

        $sql = "DELETE FROM materials WHERE mat_id = $matId";
        
        if($conn->query($sql)) {
            $obj->result = true;
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
            if(isset($_POST["matId"])) {
                $result = true;
            }       
        }

        return $result;
    }