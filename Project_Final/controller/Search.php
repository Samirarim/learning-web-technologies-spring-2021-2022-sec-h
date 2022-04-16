<?php 
	require('../model/FreelancerModel.php');
	if(isset($_REQUEST['search']))
	{
		$filter=$_GET['search'];
		$conn = getConnection();
		$sql= "Select * From FreelancerInfo Where CONCAT(F_Name,F_Email) Like '%$filter%'";
		$result= mysqli_query($conn, $sql);
		$row=mysqli_num_rows($result);
		if($result)
		{
			foreach ($result as $info) 
			{
				$info['F_Name'];
				$info['F_Gender'];
				$info['F_DOB'];
				$info['F_Email'];
				$info['F_Category'];
			}
		}
	}
?>