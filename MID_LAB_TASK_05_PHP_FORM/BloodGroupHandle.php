<?php 

	$error = "";
	$Bgroup = "";

	if(isset($_REQUEST['submit']))
	{

		if($_REQUEST['BGroup'] == null )
		{
			$error  = "invalid choice";
		}
		else 
		{
			$Bgroup = $_REQUEST['BGroup'];
		}
		
	}

?>
<html>
	<head>
		<title>Blood Group</title>
	</head>

	<body>
		<form method="POST" action="Page.php">
				Blood Group
						<select name="BGroup">
							<option name="A+" value="">A+</option>
							<option name="B+" value="">B+</option>
							<option name="AB+" value="">AB+</option>
							<option name="O+" value="">O+</option>
							<option name="A-" value="">A-</option>
							<option name="B-" value="">B-</option>
							<option name="AB-" value="">AB-</option>
							<option name="O-" value="">O-</option>
						</select>
			<hr>
			<input type="submit" name="submit" value="Submit"> <br>
			
		</form>

	</body>
</html>