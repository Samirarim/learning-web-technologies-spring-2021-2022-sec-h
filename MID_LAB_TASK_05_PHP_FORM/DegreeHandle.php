<?php 

	$error = "";
	$degree = "";

	if(isset($_REQUEST['submit']))
	{

		if($_REQUEST['SSC'] == null || $_REQUEST['HSC'] == null || $_REQUEST['BSc.'] == null || $_REQUEST['MSc.'] == null)
		{
			$error  = "invalid choice";
		}else 
		{
			if($_REQUEST['SSC'] == true)
			{
				$degree = $_REQUEST['SSC'];
			}
			else if($_REQUEST['HSC'] == true)
			{
				$degree = $_REQUEST['HSC'];
			}
			else if($_REQUEST['BSc.'] == true)
			{
				$degree = $_REQUEST['BSc.'];
			}
			else
			{
				$degree = $_REQUEST['MSc.'];
			}
		}
		
	}

?>
<html>
	<head>
		<title>Date of Birth</title>
	</head>
	<body>
		<form method="GET" action="Page.php">
			<fieldset>
				<legend>Degree</legend>
						<input type="checkbox" name="SSC" value=""> SSC
						<input type="checkbox" name="HSC" value=""> HSC 
						<input type="checkbox" name="BSc." value=""> BSc
						<input type="checkbox" name="MSc." value=""> MSc
			</fieldset>
			<input type="submit" name="submit" value="Submit"> <br>
			
		</form>

	</body>
</html>