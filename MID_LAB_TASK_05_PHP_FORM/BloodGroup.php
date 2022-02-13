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
		<form method="POST" action="#">
				Blood Group
						<select name="BGroup">
							<option value="<?=$Bgroup?>">A+</option>
							<option value="<?=$Bgroup?>">B+</option>
							<option value="<?=$Bgroup?>">AB+</option>
							<option value="<?=$Bgroup?>">O+</option>
							<option value="<?=$Bgroup?>">A-</option>
							<option value="<?=$Bgroup?>">B-</option>
							<option value="<?=$Bgroup?>">AB-</option>
							<option value="<?=$Bgroup?>">O-</option>
						</select>
			<hr>
			<input type="submit" name="submit" value="Submit"> <br>
			
		</form>

	</body>
</html>