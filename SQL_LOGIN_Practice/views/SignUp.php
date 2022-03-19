<html>
	<head>
		<title>SignUp</title>
	</head>
	<body>
		<form method="POST" action="../controller/SignUpCheck.php">
			<center>
				<fieldset style="height:85%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 6%; text-align:left; " ><b>Sign Up</b></legend>
					<table align="center" width="80%" >
						<tr>
							<td style="color:green;font-size:20;"><b>Name</b></td>
							<td width="50%"><input type="text" name="username" value=" "></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Gender</b></td>
							<td width="50%">
								<input type="radio" name="gender" value="female"> Female
								<input type="radio" name="gender" value="male"> Male
								<input type="radio" name="gender" value="other"> Other
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						<tr>
							<td style="color:green;font-size:20;"><b>Date of Birth</b></td>
							<td width="50%"><input type="date" name="dob" value=""></td>
						</tr>
						<tr>
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
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
							<td colspan="2"><hr style="height:5px;background-color:mediumseagreen;"></td>
						</tr>
						<tr>
							<td style="color:green;font-size:20;"><b>Confirm Password</b></td>
							<td> <input type="password" name="Cpass" value=""></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="checkbox" name="condition" value=" " > I agree to the terms and condition
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center" >
								<input type="submit" name="submit" value="Register" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">
							</td>
						</tr>
				</fieldset>
			</center>
		</form>
	</body>
</html>