<?php
    require_once("authorization.php");

    if(checkRequest()) {
        require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $dp_path = "img/profiles/" . $_FILES["profile"]["name"];
        $uid = $user["uid"];
        $obj = new \stdClass();

        if(uploadFile("profile")) {
            $sql = "UPDATE users SET profileImg = '$dp_path' WHERE uid = $uid";

            if($conn->query($sql)) {
                $_SESSION["user"]["profileImg"] = $dp_path;
                $obj->result = true;
            } else {
                $obj->result = false;
                $obj->msg = "Error updating the profile!!";    
            }
        } else {
            $obj->result = false;
            $obj->msg = "Error uploading the file to server!!";
        }
        
        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
    }

    function checkRequest() {
        $result = false;
        
		if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_FILES["profile"])) {
                $result = true;
            }
        }

        return $result;
    }

    function uploadFile($feildName) {
        $result = false;

		if(!(getimagesize($_FILES[$feildName]["tmp_name"]))) {
			return false;
		}
		
        $targetDir = "../../../img/profiles/";
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