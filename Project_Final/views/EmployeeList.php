<?php 
	include_once('Condition.php');
	require('../model/FreelancerModel.php');

?>
<html>
<head>
	<title>Online Market</title>
	<script type="text/javascript" src="Script.js"></script>
</head>
<body>
		<h1 style="height:60px;background-color:mediumseagreen;text-align: right; word-spacing: 15px; position: sticky;">
		 	<a href="LoginView.php" style="color: white; ">Home</a>
		 	<a href="About.php" style="color: white;">About</a>
		 	<a href="Contact.php" style="color: white;">Contact</a>
		 	<a href="../controller/LogOut.php" style="color:white;">LogOut</a>
		</h1>
	<form method="POST" action="../controller/Search.php">
		<center>
			<fieldset style="height:80%;width:50%;border-width:10px;border-color:mediumseagreen;">
				<legend style="color:green; font-size:50;margin: 10%; text-align:left; " ><b>Employee Details</b></legend>
						

						<table border="5" align="center" style="border-color: mediumseagreen; height:80%;width:100%;">
		
							<tr>
								<td colspan="5" align="center">
									<b>Search:</b><input type="text" name="search"  value="" placeholder="Search">
									<input type="submit" name="search" value="Search">
								</td>
										
								<td colspan="2" align="center">
									<b> Category: </b>
										<select name="category">
											<option value="">Logo Designer</option>
											<option value="">Web Developer</option>
											<option value="">Web Designer</option>
											<option value="">Content Creater</option>
										</select> 
								</td>
							</tr>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Gender</th>
								<th>DOB</th>
								<th>Email</th>
								<th>Category</th>
								<th>ACTION</th>
							</tr>
									<?php
									$conn = getConnection();
									$sql= "Select * From FreelancerInfo";
									$result= mysqli_query($conn, $sql);
											if($result)
											{
												foreach ($result as $row) 
												{
									?>
													<tr>
															<td><?=$row['F_ID']?></td>
															<td><?=$row['F_Name']?></td>
															<td><?=$row['F_Gender']?></td>
															<td><?=$row['F_DOB']?></td>
															<td><?=$row['F_Email']?></td>
															<td><?=$row['F_Category']?></td>
															<td>
															<a href="../views/Edit.php?updateid=<?=$row['F_ID']?>"> EDIT </a> | 
															<a href="../controller/Remove.php?deleteid=<?=$row['F_ID']?>" onclick="Checker()"> DELETE </a>  
														</td>
													</tr>
									<?php
												}
											}
											else
											{
												echo "No Record Found";
											}

									?>

											
						</table>
			</fieldset>
		</center>
				
	</form>
</body>