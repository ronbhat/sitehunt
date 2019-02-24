<?php
    require_once("authorization.php");

    if(checkRequest()) {
        require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $classId = testInput($_POST["classId"], $conn);
        $matName = testInput($_POST["matName"], $conn);
        $matDesc = testInput($_POST["matDesc"], $conn);
        $mime = uploadFile("material", $classId);
		$uid = $user["uid"];

        $fileName = $_FILES["material"]["name"];
        $fileUploadLoc = "materials/" . $classId . "/" . $fileName;

        $obj = new \stdClass();

        if($mime != null) {
            $sql = "INSERT INTO materials (mat_name, mat_desc, mime, path, class_id, uploaded_by) VALUES ('$matName', '$matDesc', '$mime', '$fileUploadLoc', $classId, $uid)";

            if($conn->query($sql)){
                $obj->result = true;
            } else{
                $obj->result = false;
                $obj->msg = "Error inserting file into database!!";
                header('HTTP/1.0 500 Internal Server Error');
            }
        } else {
            $obj->result = false;
            $obj->msg = "Error uploading file to server!!";
            header('HTTP/1.0 500 Internal Server Error');
        }

        echo json_encode($obj);

    } else {
        header('HTTP/1.0 400 Bad Request');
        require './error-pages/400.html';
    }

    function checkRequest() {
        $result = false;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["matName"]) && isset($_POST["matDesc"]) && isset($_POST["classId"])) {
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

    function uploadFile($feildName, $classId) {
        $result = null;

        $targetDir = "../../../materials/" . $classId . "/";
        $targetFile = $targetDir . ($_FILES[$feildName]["name"]);

        if(!(file_exists($targetDir))) {
            mkdir($targetDir);
        }

        $sourcePath = $_FILES[$feildName]['tmp_name']; 
        
        $mime = getMimeType($sourcePath);

        if($mime != null) {
            if(move_uploaded_file($sourcePath, $targetFile)) {
                $result = $mime;
            }
        }

        return $result;
    }

    function getMimeType($sourcePath) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        return(finfo_file($finfo, $sourcePath));
    }