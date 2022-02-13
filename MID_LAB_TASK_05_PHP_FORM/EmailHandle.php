<?php 

	$error = "";
	$email = "";

	if(isset($_REQUEST['submit']))
	{

		if($_REQUEST['email'] == null)
		{
			$error  = "invalid email";
		}else{
			$email = $_REQUEST['email'];
		}
	}	

?>
<html>
	<head>
		<title>Email</title>
	</head>

	<body>
		<form method="POST" action="page.php">
				Email<br>
			<input type="email" name="email" value="<>"/> <br>
			<input type="submit" name="submit" value="Submit"> <br>
			
		</form>

	</body>
</html>