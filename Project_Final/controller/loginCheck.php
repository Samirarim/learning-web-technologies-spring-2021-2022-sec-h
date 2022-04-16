<?php 
	session_start();
	require('../model/ClientModel.php');

	if(isset($_REQUEST['submit']))
	{

		$email = $_REQUEST['email'];
		$password = $_REQUEST['pass'];

		if($email != null && $password != null)
		{

							$status = SignIn($email, $password);

							if($status)
							{
								if(isset($_REQUEST['remind']))
								{
								setcookie('status', 'true', time()+2500, '/');
								//echo "Welcome";
								header('location: ../views/LoginView.php');
								}
								else
								{
									$_SESSION['status'] = 'true';
									header('location: ../views/LoginView.php');
								}
								
								
							}
							else
							{
								echo "<script>alert('Invalid username/password');</script>";
							}


		}
		else
		{
			echo "<script>alert('Information Missing');</script>";
		}
	}	
?>