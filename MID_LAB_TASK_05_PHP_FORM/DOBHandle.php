<?php 

	$error = "";
	$dob = "";

	if(isset($_REQUEST['submit']))
	{

		if($_REQUEST['dob'] == null)
		{
			$error  = "invalid DOB";
		}else{
			$dob = $_REQUEST['dob'];
		}
	}	

?>
<html>
	<head>
		<title>Date of Birth</title>
	</head>

	<body>
		<form method="POST" action="Page.php">
			<fieldset>
				<legend>Date of Birth</legend>
					<input type="date" name="dob" value="">
					<hr>
					<input type="submit" name="submit" value="Submit"> <br>
			</fieldset>
			
		</form>

	</body>
</html>