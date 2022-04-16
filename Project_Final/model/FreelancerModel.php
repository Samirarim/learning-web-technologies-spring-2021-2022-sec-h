<?php 

	require('../model/Connection.php');

	function getAllFreelancer(){
		$conn = getConnection();
		$sql= "Select * From FreelancerInfo";
		$result= mysqli_query($conn, $sql); 
		if($result)
		{
			while(mysqli_fetch_assoc($result))
			{
						$ID = $row['F_ID'];
						$Name = $row['F_Name'];
						$Gender = $row['F_Gender'];
						$Dob = $row['F_Dob'];
						$Email = $row['F_Email'];
						$Category = $row['F_Category'];
			}
		}


	}
	function getFreelancerUnderClient($cilent)
	{

	}
	function FreelancerSearch($filter)
	{
		$conn = getConnection();
		$sql= "Select * From FreelancerInfo Where CONCAT(F_Name,F_Email) Like '%$filter%'";
		$result= mysqli_query($conn, $sql);
		/*$row=mysqli_num_rows($result);
		if($result)
		{
			foreach ($result as $info) {
				
			}
		}*/
	}

	function DeleteFreelancer($id)
	{
		$conn = getConnection();
		$sql= "Delete from FreelancerInfo where F_ID=$id";
		$result=mysqli_query($conn,$sql);
			if($result==TRUE)
			{
				header('location:../views/EmployeeList.php');
			}
	
	}


?>