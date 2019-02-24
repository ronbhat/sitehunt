<?php
	require("authorization.php");
	require("../../../services/db_connect.php");
	
	if(checkRequest()) {
		header("Content-Type: application/json; charset=UTF-8");
		
		$cname = testInput($_POST["cname"], $conn);
		$sname = testInput($_POST["sname"], $conn);
		$uid = $user["uid"];
		$resObj = new \stdClass();
		
		$sql = "INSERT INTO classes (class_name, sub_name, teacher_code) VALUES ('$cname', '$sname', $uid)";
		
		if($conn->query($sql)) {
			$resObj->result = true;
		} else {
			$resObj->result = false;
			$resObj->msg = "Error: " . $sql . "\n" . mysqli_error($conn);  
		}
		
		echo json_encode($resObj);
	} else {
		header('HTTP/1.0 400 Bad Request');
	}
	
	
	function checkRequest() {
		$res = false;
		
		if($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST["cname"]) || isset($_POST["sname"])) {
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