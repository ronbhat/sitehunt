<?php
	session_start();
	
	if(!(isset($_SESSION["user"]))) {
		header('HTTP/1.0 403 Forbidden');
        die();
	}
	
	if(checkRequest()) {
        require("db_connect.php");
        header("Content-Type: application/json; charset=UTF-8");
	
		$title = testInput($_GET["title"], $conn);
		$client_name = testInput($_GET["clientName"], $conn);
		$client_contact = testInput($_GET["clientContact"], $conn);
		$start = date("Y-m-d", strtotime($_GET["start"]));
		$end = date("Y-m-d", strtotime($_GET["end"]));
		$uid = $_SESSION["user"]["uid"];
		$obj = new \stdClass();
		
		$sql = "INSERT INTO bookings (event_title, client_name, contact, start_date, end_date, uid) VALUES ('$title', '$client_name', '$client_contact', '$start', '$end', $uid)";
		
		if($conn->query($sql)) {
			$obj->result = true;
		} else {
			$obj->result = false;
            $obj->msg = "Error inserting the event!!";
		}
		
		echo json_encode($obj);
	} else {
		header('HTTP/1.0 400 Bad Request');
	}
	
	
	function checkRequest() {
		$result = false;
		
		if($_SERVER["REQUEST_METHOD"] == "GET") {
			if(isset($_GET["title"]) && isset($_GET["start"]) && isset($_GET["end"])) {
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