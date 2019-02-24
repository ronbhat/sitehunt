<?php
	session_start();
	
	if(!(isset($_SESSION["user"]))) {
		header('HTTP/1.0 403 Forbidden');
        die();
	}
	
	if(checkRequest()) {
		require("db_connect.php");
        header("Content-Type: application/json; charset=UTF-8");
		
		$start = date("Y-m-d", strtotime($_GET["start"]));
		$end = date("Y-m-d", strtotime($_GET["end"]));
		$uid = $_SESSION["user"]["uid"];
		$data = array();
		
		$sql = "SELECT * FROM cal_events WHERE start >= '$start' AND end <= '$end' AND uid = $uid";
		
		if($result = $conn->query($sql)) {
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$data[] = array('title'=>$row["title"], 'start'=>$row["start"], 'end'=>$row["end"]);
				}
			}
		} else {
			header('HTTP/1.0 400 Bad Request');
		}
		
		echo json_encode($data);
	} else {
		header('HTTP/1.0 400 Bad Request');
	}
	
	function checkRequest() {
		$result = false;
		
		if($_SERVER["REQUEST_METHOD"] == "GET") {
			if(isset($_GET["start"]) && isset($_GET["end"])) {
				$result = true;
			}
		}
		
		return $result;
	}