<?php 

	$error = "";
	$name = "";

	if(isset($_REQUEST['submit']))
	{

		if($_REQUEST['name'] == null)
		{
			$error  = "invalid name";
		}else{
			$name = $_REQUEST['name'];
		}
	}	

?>
<html>
	<head>
		<title>Name</title>
	</head>

	<body>
		<form method="POST" action="#">
				Name<br>
			<input type="text" name="name" value="<?=$name?>"/> <br>
			<input type="submit" name="submit" value="Submit"> <br>
		</form>
	</body>
</html>