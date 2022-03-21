<?php 
include_once('Condition.php');
	$id =  $_REQUEST['id'];
	$file = fopen('../model/EmpInfo.txt', 'r');
	while(!feof($file))
	{
		$user = fgets($file);
		$userArray = explode('|', $user);
		if(trim($userArray[0]) == $id)
		{
			$editUser = $userArray;
			break;
		}	
	}

	if(isset($_REQUEST['submit'])){
		
		$username = $_REQUEST['username'];
		$email = $_REQUEST['email'];
		$id = $_REQUEST['id'];
		$gender= $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];

		if($username != null && $password != null && $email != null){
			
			$file = fopen('../model/EmpInfo.txt', 'r');
			$user = "";

			while(!feof($file)){
				$update = fgets($file);
				$userArray = explode('|', $upUser);
				
				if($userArray[0] == $id){
					$update = $id."|".$username."|".$gender."|".$email."|".$dob."|".$category."\r\n";
				}
				$user .= $update;
				
			}

			$file = fopen('../model/EmpInfo.txt', 'w');
			fwrite($file, $user);
			header('location: ../views/EmpInfo.php');

		}else{
			echo "null submission";
		}
	}
?>
<html>
<head>
	<title>Online Market</title>
</head>
<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
	<form method="POST" action="../controller/Update.php">
		<center>
			<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>Edit Employee</b></legend>
						<table border="5" align="center" style="border-color: mediumseagreen; height:40%;width:80%;">
								<tr>
									<td>Username</td>
									<td><input type="text" name="username" value="<?=$userArray[1]?>"></td>
								</tr>
								<tr>
									<td>Gender</td>
									<td>
										<input type="text" name="gender" value="<?=$userArray[2]?>">
					
									</td>
								</tr>
								<tr>
									<td>Email</td>
									<td><input type="email" name="email" value="<?=$userArray[3]?>"></td>
								</tr>
								<tr>
									<td>Date Of Birth</td>
									<td>
										<input type="text" name="dob" value="<?=trim($userArray[4])?>">
									</td>
								</tr>
								<tr>
									<td>Category</td>
									<td>
										<input type="text" name="Category" value="<?=trim($userArray[5])?>">
									</td>
								</tr>
								<tr>
										<td colspan="2" align="center">
													<input type="submit" name="update" value="Update" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">
										</td>
								</tr>
						</table>
			</fieldset>
		</center>
				
	</form>
</body>