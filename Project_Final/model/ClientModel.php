<?php 

	//session_start();

	require('../model/Connection.php');


	function SignIn($email, $password){
		$conn = getConnection();
		$sql = "select * from clientinfo where C_email='{$email}' and C_pass='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}
	function function_alert($message) 
	{
      
    echo "<script>alert('$message');</script>";
	}

	function SignUp($username, $gender, $dob, $email, $password)
	{
		$conn = getConnection();
		$duplicate= "Select * from clientinfo  where C_email = '$email'";
		$matching = mysqli_query($conn,$duplicate);
		$sql = "Insert into clientinfo values('', '{$username}', '{$gender}', '{$dob}',  '{$email}', '{$password}')";
		echo $sql;
		if(mysqli_num_rows($matching))
		{
			//header('location: ../views/SignUp.php?msg=error');
			function_alert("Email Already Exist");
			//echo '<script>alert("Email Already Exist")</script>';
			header('location: ../views/SignUp.php');
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

	function DeleteClient($id)
	{
		$conn = getConnection();
		$sql= "Delete from ClientInfo where C_ID=$id";
		$result=mysqli_query($conn,$sql);
			if($result==TRUE)
			{
				header('location:../views/Header.php');
			}
	
	}
	


?>