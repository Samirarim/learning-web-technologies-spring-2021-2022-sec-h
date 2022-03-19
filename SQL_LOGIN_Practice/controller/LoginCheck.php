<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'sqlpractice');
	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['email'];
		$password = $_REQUEST['pass'];
		$matching = mysqli_query($conn, "Select * from register where C_email = '$email'");
		$row = mysqli_fetch_assoc($matching);
		

		if($email != null && $password != null)
		{

			if(mysqli_num_rows($matching)>0)
				{
					if($password==$row["C_Pass"])
					{
						if(isset($_REQUEST['remind']))
							{
								setcookie('status', 'true', time()+2500, '/');
								header('location: ../views/Welcome.php');
							}
							else
							{
								$_SESSION['status'] = 'true';
								header('location: ../views/Welcome.php');
							}
					}
				}
			else
			{
				echo "Not registered yet";
			}
		}
		else
		{
			echo "Information Missing";
		}
	}	
?>