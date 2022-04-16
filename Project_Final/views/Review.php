<?php 
	include_once('Condition.php');
?>
<html>
	<head>
		<title>Online Marketplace</title>
		<script type="text/javascript" src="jScript.js"></script>
	</head>
	<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="LoginView.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
		<form method="POST" name="review" onsubmit="">
			<center>
				<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>Review</b></legend>
					<table align="center" width="80%" >
						<tr>
							<td style="color:green;font-size:20;"><b>Rate</b></td>
							<td>
										<select name="category">
											<option value="">1</option>
											<option value="">2</option>
											<option value="">3</option>
											<option value="">4</option>
											<option value="">5</option>
										</select> 
							</td>
						</tr>
						<tr><br></tr>
						<tr><br></tr>
						<tr><br></tr>
						<tr>
							<td style="color:green;font-size:20;"><b> Comments: </b></td>
							<td>
								<textarea>  </textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center" >
								<input type="submit" name="review" value="Review" style="background-color: mediumseagreen; color: white; font-size:30; font-family:Times New Roman;width:80%;">
							</td>
						</tr>
					</table>
				</fieldset>
			</center>
		</form>
	</body>
</html>