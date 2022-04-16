<?php  
	include_once('Condition.php');
	$data="";
	if(isset($_REQUEST['submit'])){
		$data=$_POST['data'];;
	}

?>
<html>
	<head>
		<title>Online Marketplace</title>
		<link rel="stylesheet" type="text/css" href="Style.css">
		<script type="text/javascript" src="Script.js"></script>
	</head>
	<body>
		<h1 style="height:80px;background-color:mediumseagreen;text-align: right; word-spacing: 15px;">
		 	<a href="LoginView.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
		<h1 style="color:mediumseagreen; font-family:Lucida Handwriting;">Welcome to the Marketplace</h1>
		<form method="POST" name="NF">
		<table align="left">
			<tr>
				<td>
					<input type="text" id="data" name="data" placeholder="Enter your Post"> 
				</td>
					<input type="submit" name="submit" value="Post" onclick="Checker()">
				</td>
			</tr>
			<tr>
				<td style="color:mediumseagreen; font-size:20; font-family:Times New Roman;margin: 20%;">NewsFeed</td>
				<td>
					
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<div class="newsFeed">
					<textarea name="detailspost" style="height:80px;width:400px;margin: 50px; color:green;">
						<?= $data; ?>
					</textarea>
				</div>
				</td>
			</tr>
		</table>	
	</body>
</html>