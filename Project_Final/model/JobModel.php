<?php 

	require('../model/Connection.php');

	function getJobDetails(){
		$conn = getConnection();
		$sql= "Select * From JobInfo";
		$result= mysqli_query($conn, $sql); 
		if($result)
		{
			while(mysqli_fetch_assoc($result))
			{
						$ID = $row['Job_ID'];
						$Salary = $row['Salary'];
						$HireDate = $row['Hire_Date'];
						$Category = $row['Job_Category'];
			}
		}


	}

	function DeleteJobInfo($id)
	{
		$conn = getConnection();
		$sql= "Delete from JobInfo where Job_ID=$id";
		$result=mysqli_query($conn,$sql);
			if($result==TRUE)
			{
				header('location:../views/EmployeeList.php');
			}
	
	}

		function getCLientByID($id)
	{
		$conn = getConnection();
		$sql="Select * From FreelancerInfo Where C_ID=$id";
		$result=mysqli_query($conn,$sql);
			if($result==True)
			{
				header('location:../views/EmployeeList.php?client=$id')
			}
		
	}


?>