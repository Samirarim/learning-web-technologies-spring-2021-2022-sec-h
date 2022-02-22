<html>
<head>
	<title>Add User</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>
	<br><br>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Name</td>
			<td>Password</td>
			<td>Email</td>
			<td>Action</td>
		</tr>
		<tr>
			<td>1</td>
			<td>admin</td>
			<td>1234</td>
			<td>admin@gmail.com</td>
			<td>
				<a href="edit.php?id=1">Edit</a> |
				<a href="delete.php?id=1">Delete</a>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>employee</td>
			<td>5678</td>
			<td>employee@gmail.com</td>
			<td>
				<a href="edit.php?id=2">Edit</a> |
				<a href="delete.php?id=2">Delete</a>
			</td>
		</tr>
	</table>
</body>
</html>