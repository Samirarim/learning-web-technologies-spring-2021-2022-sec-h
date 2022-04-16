<?php 
	
	include('Condition.php');
	require('../model/ClientModel.php');
	  $conn=getConnection();
	  $id=$_SESSION['id'];
	  $query=mysqli_query($conn,"SELECT * FROM ClientInfo where C_ID='$id'");
	  $row=mysqli_fetch_array($query);
?>
<html>
	<head>
		<title>Online Marketplace</title>
		<script type="text/javascript" src="Script.js"></script>
	</head>
	<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="LoginView.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
		<form method="POST" action="../controller/ProfileCheck.php" enctype="multipart/form-data">
			<center>
				<fieldset style="height:120%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 6%; text-align:left; " ><b>Profile</b></legend>
					<table align="center" width="80%">
						<tr>
							<td>
								<img src="../model/default.png" style="height:150px;width:150px;">
							</td>
							<td>
								<input type="file" name="myfile">
								<input type="submit" name="upload" value="Upload">
							</td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Name</b></td>

							<td width="50%"><input type="text" name="username" value="<?= $row['C_Name']; ?>"></td>
										
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Gender</b></td>
										
							<td width="50%">
								<input type="text" name="gender" value="<?= $row['C_Gender']; ?>">
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						<tr>
							<td style="color:green;font-size:20;"><b>Date of Birth</b></td>
										
							<td width="50%"><input type="date" name="dob" value="<?= $row['C_DOB']; ?>"></td>
											
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Email</b></td>
										
							<td width="50%"><input type="email" name="email" value="<?= $row['C_Email']; ?>"></td>
											
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Password</b></td>
										
							<td><input type="password" name="pass" value="<?= $row['C_Pass']; ?>"></td>
											
						</tr>
						<tr>
							<td><input type="submit" name="update" value="Edit Profile" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;margin:15%;"></td>
							<td><input type="submit" name="delete" onclick="Checker()" value="Delete Profile" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;"></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<a href="../views/ResetPass.php" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;"> Change Password </a>
							</td>
						</tr>
				</fieldset>
			</center>
		</form>
	</body>
</html>
