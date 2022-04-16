<?php 
	require('../model/FreelancerModel.php');
	if(isset($_GET['deleteid']))
	{
		$deleteid=$_GET['deleteid'];
		$status= DeleteFreelancer($deleteid);
		if($status)
		{
			$_SESSION['status']=true;
		}
	}
?>