<?php 
	session_start();

	$conn = mysqli_connect('localhost', 'root', '', 'sqlpractice');
	//$check = "Select * from register where C_email = $email";

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$gender = $_REQUEST['gender'];
		$DOB = $_REQUEST['dob'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['pass'];
		$Cpassword = $_REQUEST['Cpass'];
		$matching = mysqli_query($conn, "Select * from register where C_email = '$email'");
		if(mysqli_num_rows($matching)>0) 
		{
			echo "Email has already taken";
		}
		else if($password <= 3)
			{
				echo "Password required length greater than 3";
			}
		else if($password!=$Cpassword)
		{
			echo "Password Confirm Failed";
		}
		else
		{

							if($username != null && $gender != null && $DOB != null && $email != null && $password != null && $Cpassword != null)
								{

										if(isset($_REQUEST['condition']))
										{
												header('location:../views/Header.php');*/
												$query = "Insert into register Values('','$username','$gender','$DOB','$email','$password')";
												mysqli_query($conn,$query);
												echo "Registration Successful";
										}
										else
										{
											echo "Please Agree to our Terms and Condition";
										}


								}
								else
								{
									echo "Information Missing";
								}
		}
		
	}	
?>