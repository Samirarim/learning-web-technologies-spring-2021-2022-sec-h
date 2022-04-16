<?php
	
	function getConnection(){
		$host = "localhost";
		$dbname= "final_project";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

?>