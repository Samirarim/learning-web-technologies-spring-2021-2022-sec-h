<html>
<head>
	<title>Login</title>
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
						<form method="POST" action="loginCheck.php" style=" width:30%">
							<fieldset >
								<legend><b>LOGIN</b></legend>
								<table  width=80%>
									<tr>
										<td>User Name</td>
										<td align="center">:<input type="text" name="username" value=""> </td>
									</tr>
									<tr>
										<td>Password</td>
										<td align="center">:<input type="password" name="Pass" value=""> </td>
									</tr>
									<tr>
										<td colspan='2'><hr></td>
									<tr>
									<tr>
										<td colspan='2' align="left">
											<input type="checkbox" name="remember" value=""> Remember Me
										</td>
									<tr>
									<tr>
										<td colspan='2' align="left">
											<input type="submit" name="submit" value="Submit">
											<a href="ForgotPassword.php"> Forgot Password </a>
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