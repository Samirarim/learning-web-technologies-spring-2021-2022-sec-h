<html>
	<head>
		<title>Online Marketplace</title>
	</head>
	<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="Home.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		</h1>
		<form method="POST" action="../controller/loginCheck.php">
			<center>
				<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>LOGIN</b></legend>
				<h1 style="color:mediumseagreen; font-family:Lucida Handwriting;">Welcome to the Marketplace</h1>
					<table align="center" width="80%" >
						<tr>
							<td style="color:green;font-size:20;"><b>Email</b></td>
							<td width="50%"><input type="email" name="email" value=" "></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Password</b></td>
							<td><input type="password" name="pass" value=""></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="remind" value="">Remember me</td>
							<td align="left">
								<a href="../views/ResetPass.php">Forget Password
							</td>
						</tr>
						<tr>
							<td colspan="2" align="right" height="50px">
								<input type="submit" name="submit" value="Submit" style="font-size:20;">
								<input type="reset" name="reset" value="Reset" style="font-size:20;">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center" height="50px" style="background:mediumseagreen;">
								<a href="../views/SignUp.php" style="color: white;font-size:30;width:50%;height:100%;">Sign Up</a>
							</td>
						</tr>
					</table>
				</fieldset>
			</center>
		</form>
	</body>
</html>