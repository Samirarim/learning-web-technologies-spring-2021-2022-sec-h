<?php 

	//session_start();

	require('../model/Connection.php');


	function SignIn($email, $password){
		$conn = getConnection();
		$sql = "select * from clientinfo where C_email='{$email}' C_pass='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}
	function SignUp($username, $gender, $dob, $email, $password)
	{
		$conn = getConnection();
		$duplicate= "Select * from clientinfo  where C_email = '$email'";
		$matching = mysqli_query($conn,$duplicate);
		$sql = "insert into clientinfo values('', '{$username}', '{$gender}', '{$dob}',  '{$email}', '{$password}')";
		echo $sql;
		if(mysqli_num_rows($matching))
		{
			header('location: ../views/SignUp.php?msg=error');
		}
		else
		{
			if(mysqli_query($conn, $sql)){
			return true;
			}
			else{
			return false;
			}
		} 
	}

	/*function getAllUser(){
		$conn = getConnection();
	}

	function getUserById($id){
		$conn = getConnection();
	}

	function updateUser($user){
		$conn = getConnection();
	}*/

?>