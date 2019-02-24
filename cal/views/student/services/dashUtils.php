<?php
	require_once("authorization.php");
    require_once("../../services/db_connect.php");
	
	$userId = $user["uid"];
	
	$sql = "SELECT * FROM classes";
	
	if($result = $conn->query($sql)) {
		$classList = array();
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$classMemberList = explode(",", $row["members"]);
				
				foreach($classMemberList as $member) {
					$mem = trim($member);
					
					if($mem == $user["uid"]) {
						$classList[] = $row["class_id"];
					}
				}
			}
		}
		
		$cond ="";
		
		if(count($classList) > 0) {
			foreach($classList as $class) {
				$cond = $cond . "class_id = $class OR ";
			}
			
			$cond = trim($cond, "OR ");
			
			$sql = "SELECT * FROM classes WHERE " . $cond;
			
			if(!($classResult = $conn->query($sql))) {
				echo "Error: " . $sql . "<br/>" . mysqli_error($conn);
				header('HTTP/1.0 500 Internal Server Error');
				die();
			}
		}
		
	} else {
		echo "Error: " . $sql . "<br/>" . mysqli_error($conn);
		header('HTTP/1.0 500 Internal Server Error');
        die();
	}
	
	$sql = "SELECT uid FROM users WHERE role = 'student'";
	
	if(!($stuResult = $conn->query($sql))) {
		echo "Error: " . $sql . "<br/>" . mysqli_error($conn);
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}
	
?>