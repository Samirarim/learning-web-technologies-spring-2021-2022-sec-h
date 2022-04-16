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
		
				if($username != null && $dob != null && $email != null && $password != null && $Cpassword != null)
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
									header('location: ../views/SignUp.php');
								}


							
		
	}	
?>