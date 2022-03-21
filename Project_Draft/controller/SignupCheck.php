<?php 
	session_start();
	require('../model/ClientModel.php');

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['pass'];
		$Cpassword = $_REQUEST['Cpass'];

		if($password <= 5)
			{
				echo "Password required length greater than 5";
			}
		else if($password!=$Cpassword)
		{
			echo "Password Confirm Failed";
		}
		else if(!isset($_REQUEST['condition']))
		{
			echo "Please agree to the terms and condition";
		}
		else
		{

							if($username != null && $gender != null && $dob != null && $email != null && $password != null && $Cpassword != null)
								{
									
										$status = SignUp($username, $gender, $dob, $email, $password);
											if($status)
											{
												header('location: ../views/Header.php');
											}else{
												header('location: ../views/SignUp.php');
											}
								}
								else
								{
									echo "Information Missing";
								}
		}
		
	}	
?>