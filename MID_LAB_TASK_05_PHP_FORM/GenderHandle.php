<?php 

	$error = "";
	$gender = "";

	if(isset($_REQUEST['submit']))
	{

		if($_REQUEST['Male'] == null || $_REQUEST['Female'] == null || $_REQUEST['Other'] == null)
		{
			$error  = "invalid option";
		}else 
		{
			if($_REQUEST['Male'] == true)
			{
				$gender = $_REQUEST['Male'];
			}
			else if($_REQUEST['Female'] == true)
			{
				$gender = $_REQUEST['Female'];
			}
			else
			{
				$gender = $_REQUEST['Other'];
			}
		}
		
	}	

?>
<html>
	<head>
		<title>Gender</title>
	</head>

	<body>
		<form method="POST" action="Page.php">

			<fieldset>
				<legend>Gender</legend>
						<input type="radio" name="Male" value=""> Male
						<input type="radio" name="Female" value=""> Female
						<input type="radio" name="Other" value=""> Other
			</fieldset>
			<input type="submit" name="submit" value="Submit"> <br>
			
		</form>

	</body>
</html>