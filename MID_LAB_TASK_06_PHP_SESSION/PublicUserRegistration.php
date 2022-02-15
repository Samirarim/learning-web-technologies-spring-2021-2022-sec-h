<html>
<head>
	<title>Registration</title>
</head>
<body>

		<table border='1' height=100% width=100%>
				<tr>
					<td height="50px" weight="20px">
						<img src="x.png" width="90px" height="90px"><b>Company</b>
					</td>
					<td colspan="2" align="right">
						<a href="PublicUserHome.php"> Home </a> |
						<a href="PublicUserLogin.php"> Login </a> |
						<a href="PublicUserRegistration.php"> Registration </a>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center" >
						<form method="POST" action="RegCheck.php" style="width: 50%">
							<fieldset>
								<legend><b>REGISTRATION</b></legend>
								<table  width=80%>
									<tr>
										<td>Name</td>
										<td align="center">:<input type="text" name="username" value=""> </td>
									</tr>
									<tr>
										<td colspan='2'><hr></td>
									<tr>
									<tr>
										<td>Email</td>
										<td align="center">:<input type="email" name="email" value=""> </td>
									</tr>
									<tr>
										<td colspan='2'><hr></td>
									<tr>
									<tr>
										<td>Password</td>
										<td align="center">:<input type="password" name="Pass" value=""> </td>
									</tr>
									<tr>
										<td colspan='2'><hr></td>
									<tr>
									<tr>
										<td>Confirm Password</td>
										<td align="center">:<input type="password" name="CPass" value=""> </td>
									</tr>
									<tr>
										<td colspan='2'><hr></td>
									<tr>
									<tr>
										<td colspan="2">
										<fieldset>
											<legend>Gender</legend>
													<input type="radio" name="Male" value="<?=$gender?>"> Male
													<input type="radio" name="Female" value="<?=$gender?>"> Female
													<input type="radio" name="Other" value="<?=$gender?>"> Other
										</fieldset>
										</td>
									</tr>
									<tr>
										<td colspan='2'><hr></td>
									<tr>
									<tr>
										<td colspan="2">
										<fieldset>
											<legend>Date of Birth</legend>
												<input type="date" name="dob" value="<?=$dob?>">
										</fieldset>
										</td>
									</tr>
									<tr>
										<td colspan='2'><hr></td>
									<tr>
									<tr>
										<td colspan='2' align="left">
											<input type="submit" name="submit" value="Submit">
											<input type="reset" name="reset" value="Reset">
										</td>
									</tr>
								</table>
							</fieldset>
						</form>
					</td>
				</tr>
				<tr height="35px">
						<td colspan="2" align="center"> Copyright@2017</td>
				</tr>
		</table>
		
</body>
</html>