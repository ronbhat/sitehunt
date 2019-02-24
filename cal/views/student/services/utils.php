<?php
    require_once("authorization.php");
    require_once("../../services/db_connect.php");

    if(!isset($_GET["classId"])) {
		header('HTTP/1.0 400 Bad Request');
        die();
	}
	
    $classId = $_GET["classId"];
    $userId = $_SESSION["user"]["uid"];

	$sql = "SELECT * FROM classes WHERE class_id = $classId";
	
	if(!($result = $conn->query($sql))) {
		echo "Error " . $sql . "\n" . mysqli_error($conn);
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}
	
	$class = $result->fetch_assoc();  
    
    /* 
     *Fetching the questions of the class.
    */
    $sql1 = "SELECT * FROM questions_table WHERE class_id = $classId";

    if(!($questionsResult = $conn->query($sql1))) {
		echo "Error " . $sql . "\n" . mysqli_error($conn);
        header('HTTP/1.0 500 Internal Server Error');
        die();
    }


    /* 
     *Fetching the class members.
    */
    $classMembers = $class["members"];
    $classMemberList = explode(",", $classMembers);

    $cond = "";

    foreach($classMemberList as $member) {
        $mem = trim($member);
        
        if($mem != $userId) {
            $cond = $cond . " uid = $mem OR";            
        }

    }
	
	if(count($classMemberList) > 1) {
    $cond = trim($cond, "OR");

		$sql = "SELECT * FROM users WHERE (" . $cond . ") AND role = 'student'";

		if(!($membersResult = $conn->query($sql))) {
			echo "Error " . $sql . "\n" . mysqli_error($conn);
			header('HTTP/1.0 500 Internal Server Error');
			die();
		}
	}


    /*
     * Fetching the class assignments.
    */ 
    $sql = "SELECT * FROM assignments WHERE class_id = $classId ORDER BY due_date";
    if(!($assignResult = $conn->query($sql))) {
		echo "Error " . $sql . "\n" . mysqli_error($conn);
        header('HTTP/1.0 500 Internal Server Error');
        die();
    }


    /*
     * Fetching the class materials
    */
    $sql = "SELECT * FROM materials WHERE class_id = $classId";
    if(!($matResult = $conn->query($sql))) {
		echo "Error " . $sql . "\n" . mysqli_error($conn);
        header('HTTP/1.0 500 Internal Server Error');
        die();
    }
?>