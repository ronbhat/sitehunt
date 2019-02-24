<?php
	require_once("authorization.php");
    require_once("../../services/db_connect.php");
	
	$userId = $user["uid"];
	
	$sql = "SELECT * FROM assignments WHERE uploaded_by = $userId";
	
	if(!($assResults = $conn->query($sql))) {
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}
	
	
	$sql = "SELECT * FROM materials WHERE uploaded_by = $userId";
	
	if(!($matResults = $conn->query($sql))) {
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}
	
	
	$sql = "SELECT * FROM questions_table INNER JOIN classes ON questions_table.class_id = classes.class_id WHERE classes.teacher_code = $userId AND questions_table.answered = true";
	
	if(!($quesResults = $conn->query($sql))) {
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}
	
	
	$sql = "SELECT * FROM classes WHERE teacher_code = $userId";
	
	if($result = $conn->query($sql)) {
		$classMemList = "";
		while($row = $result->fetch_assoc()) {
			$classMemList = $classMemList . "," . $row["members"];
		}
		
		$memList = explode(",", trim($classMemList, ","));
		$memListCopy = array();
		
		foreach($memList as $mem) {
			$mem = trim($mem);
			
			if(!(in_array($mem, $memListCopy))) {
				$memListCopy[] = $mem;
			}
		}
		
		$stuCount = count($memListCopy);
		
	} else {
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}
	
	
	$sql = "SELECT * FROM questions_table INNER JOIN classes ON questions_table.class_id = classes.class_id WHERE classes.teacher_code = $userId";
	
	if($result = $conn->query($sql)) {
		$totalQuestions = $result->num_rows;
		
		$questionsAnswered = 0;
		$questionsNotAnswered = 0;
		
		if($totalQuestions > 0) {
			while($row = $result->fetch_assoc()) {
				if($row["answered"] == 0) {
					$questionsNotAnswered++;
				} else {
					$questionsAnswered++;
				}
			}
		}
	} else {
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}
?>