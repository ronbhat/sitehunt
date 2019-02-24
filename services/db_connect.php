<?php
	class Db {
		private const SERVERNAME = "localhost";
		private const USERNAME = "root";
		private const PASSWORD = "";
		private const DBNAME = "sitehunt";
		
		private static $conn = NULL;
		
		private function __construct() {}
		
		private function __clone() {}
		
		public static function getInstance() {
			if(!isset(self::$conn)) {
				//Create connection
				self::$conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DBNAME);
				
				//Check connection
				if(self::$conn->connect_error) {
					die("Connection failed: " . self::$conn->connect_error);
				}
			}
			return self::$conn;
		}
	}

	$conn = Db::getInstance();
?>