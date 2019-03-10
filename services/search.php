<?php
    if(checkRequest()) {
        require("db_connect.php");
        
        header("Content-Type: application/json; charset=UTF-8");

        $city = testInput($_POST["city"], $conn);
        $buss_type = testInput($_POST["buss_type"], $conn);
        $date = date("Y-m-d", strtotime(str_replace('/', '-', testInput($_POST["date"], $conn))));
        $data = array();
        $sql = "SELECT * FROM users WHERE city = '$city' AND business_type = '$buss_type'";
        
        $obj = new \stdClass();

        if($result = $conn->query($sql)) {
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
                    $uid = $row['uid'];
                    $sql = "SELECT * FROM bookings WHERE uid = $uid AND start_date <= '$date' AND end_date >= '$date'";
                    if($booking_result = $conn->query($sql)) {
                        if($booking_result->num_rows == 0) {
                            $data[] = $row;
                        }
                    }
				}
            }
            $obj->result = true;
            $obj->data = $data;
		} else {
            $obj->result = false;
            $obj->msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        echo json_encode($obj);
    } else {
        header('HTTP/1.0 400 Bad Request');
    }

    function checkRequest() {
        $res = false;
        if(($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST["city"]) && isset($_POST["buss_type"]) && isset($_POST["date"])) {
            $res = true;
        } 
        return $res;
    }

    //function to prep data	
    function testInput($data, $conn) {
        $date = mysqli_real_escape_string($conn, $data);
        $data=trim($data);
        $data=stripslashes($data);
        //$data=htmlspecialchars($data);
        return $data;
    }
?>