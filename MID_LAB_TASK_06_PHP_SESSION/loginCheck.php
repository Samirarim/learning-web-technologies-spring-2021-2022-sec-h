<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['Pass'];
		if($username != null && $password != null)
		{
		
			if(isset($_SESSION['user']))
			{
				$user = $_SESSION['user'];
			}		
			if($user['username'] == $username && $user['Pass'] == $password){
				$_SESSION['status'] = 'true';
				header('location: PublicUserHome.php');
				if(isset($_COOKIE['remember']))
					{
						$cache	  = $_REQUEST['remember'];
						if($cache['remember']==$cache)
						{
							setcookie('remember', 'true', time()+780000, '/');
							header('location: PublicUserHome.php');
						}
						else
						{
							echo "Invalid Request";
						}
					}
			}
			else{
				echo "!invalid username or password";
			}

		}
		else
		{
			echo "Please fill the Required Information";
		}
	}	
?>