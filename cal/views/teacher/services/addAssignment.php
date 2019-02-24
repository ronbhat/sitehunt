<?php
    require_once("authorization.php");

    if(checkRequest()) {
        require("../../../services/db_connect.php");

        header("Content-Type: application/json; charset=UTF-8");

        $classId = testInput($_POST["classId"], $conn);
        $assName = testInput($_POST["assName"], $conn);
        $duedate = returnDueDate($_POST["duedate"]);
        $desc = testInput($_POST["desc"], $conn);
        
        $mime = uploadFile("assignfile", $classId);
        $fileName = $_FILES["assignfile"]["name"];
        $fileUploadLoc = "assignments/" . $classId . "/" . $fileName;
		$uid = $user["uid"];
        
        $obj = new \stdClass();

        if($mime != null) {
            $sql = "INSERT INTO assignments (assign_name, due_date, assign_desc, assign_path, mime, class_id, uploaded_by) VALUES ('$assName', '$duedate', '$desc', '$fileUploadLoc', '$mime', '$classId', '$uid')";

            if($conn->query($sql)){
                $sql = "UPDATE classes SET assigments = assigments + 1 WHERE class_id = $classId";

                if($conn->query($sql)){
                    $obj->result = true;
                } else {
                    $obj->result = false;
                    $obj->msg = "Error updating the database!!";
                }
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
    }

    function checkRequest() {
        $result = false;

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["assName"]) && isset($_POST["duedate"]) && isset($_POST["desc"]) && isset($_POST["classId"])) {
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


    function returnDueDate($date) {
        $timestamp = strtotime($date);
        $datestr = date("Y-m-d", $timestamp);

        return $datestr;
    }


    function uploadFile($feildName, $classId) {
        $result = null;

        $targetDir = "../../../assignments/" . $classId . "/";
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