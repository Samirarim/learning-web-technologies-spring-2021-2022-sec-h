<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['Pass'];
		$CPass = $_REQUEST['CPass'];
		$email = $_REQUEST['email'];

		if($username != null && $password != null && $CPass != null && $email != null)
		{
			$user = ['username'=>$username, 'Pass'=>$password, 'CPass'=>$CPass, 'email'=>$email];

			if($password==$CPass)
			{
				$_SESSION['user'] = $user;
				header('location: PublicUserLogin.php');
			}
			else
			{
				echo "Confirm Password does not match";
			}

		}else{
			echo "Submission Error";
		}
	}	
?>