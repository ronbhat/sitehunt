<?php
	require_once("authorization.php");
	
	if(checkRequest()) {
		require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");
		
		$fname = testInput($_POST["fname"], $conn);
		$lname = testInput($_POST["lname"], $conn);
		$desg = testInput($_POST["desg"], $conn);
		$mno = testInput($_POST["mno"], $conn);
		$email = testInput($_POST["email"], $conn);
		$addr = testInput($_POST["addr"], $conn);
		$uid = $user["uid"];
		$dp_path = "";
		
		if($_FILES["profile"]["tmp_name"] !== "") {
			$dp_path = "img/contacts/" . $_FILES["profile"]["name"];
		} else  {
			$dp_path = "img/defaultProfilePic.jpg";
		}
		
		
		$obj = new \stdClass();
		
		if(uploadFile("profile")) {
			$sql = "INSERT INTO contacts (fname, lname, desg, mobile, email, addr, dp_path, stored_by) VALUES ('$fname', '$lname', '$desg', '$mno', '$email', '$addr', '$dp_path', $uid)";
			
			if($conn->query($sql)){
                $obj->result = true;
            } else{
                $obj->result = false;
                $obj->msg = "Error inserting file into database!!";
                header('HTTP/1.0 500 Internal Server Error');
            }
		} else {
			$obj->result = false;
			$obj->msg = "ERROR UPLOADING DP";
		}
		
		echo json_encode($obj);
	} else {
        header('HTTP/1.0 400 Bad Request');
    }
	
	
	function checkRequest() {
		$result = false;
		
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["desg"]) && isset($_POST["mno"]) && isset($_POST["email"]) && isset($_POST["addr"])) {
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
	
	function uploadFile($feildName) {
        $result = false;

		if($_FILES[$feildName]["tmp_name"] == "") {
			return true;
		}
		
		if(!(getimagesize($_FILES[$feildName]["tmp_name"]))) {
			return true;
		}
		
        $targetDir = "../../../img/contacts/";
        $targetFile = $targetDir . ($_FILES[$feildName]["name"]);

        if(!(file_exists($targetDir))) {
            mkdir($targetDir);
        }

        $sourcePath = $_FILES[$feildName]['tmp_name']; 
        
		if(move_uploaded_file($sourcePath, $targetFile)) {
			$result = true;
		}

        return $result;
    }