<?php
	require_once("authorization.php");
    require_once("../../services/db_connect.php");
	
	$userId = $user["uid"];
	
	$sql = "SELECT * FROM contacts WHERE stored_by = $userId";
	
	if(!($contResult = $conn->query($sql))) {
		header('HTTP/1.0 500 Internal Server Error');
		die();
	}