<?php
	require_once("authorization.php");
	
	if(checkRequest()) {
		require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");
		
		$key = testInput($_GET["key"], $conn);
		$obj = new \stdClass();
		
		$name = explode(" ", $key);
		$fname = array_pop($name);
		$lname = array_pop($name);
		
		if(isset($lname)) {
			$sql = "SELECT * FROM contacts WHERE fname LIKE '%$fname%' AND lname LIKE '%$lname%'";
		} else {
			$sql = "SELECT * FROM contacts WHERE fname LIKE '%$fname%'";
		}
		
		if($result = $conn->query($sql)) {
			$obj->result = true;
			$obj->found = $result->num_rows;
			$obj->data = $result->fetch_all(MYSQLI_ASSOC);
		} else {
			$obj->result = false;
			$obj->msg = "Error searching for contacts!!";
		}
		
		echo json_encode($obj);
	} else {
		header('HTTP/1.0 400 Bad Request');
	}
	
	function checkRequest() {
		$result = false;
		
		if($_SERVER["REQUEST_METHOD"] == "GET") {
			if(isset($_GET["key"])) {
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