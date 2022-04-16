<?php 
	require('../model/Connection.php');
	session_start();

	if(isset($_REQUEST['submit']))
	{
		
		$email = $_POST['email'];
        $pass = $_POST['pass'];
        $Cpass = $_POST['Cpass'];
        if($email!=null && $pass!=null && $Cpass!=null)
        {
        	$conn=getConnection();
        	$result = mysqli_query($conn,"SELECT C_Pass FROM ClientInfo WHERE C_email='$email'");
				        if(!$result)
				        {
				        echo "<script>alert('Email does not Exist');</script>";
				        //header('location: ../views/ResetPass.php');
				        }
				        else
				        {
				        	if($pass==$Cpass)
				        	{
				        		$sql=mysqli_query($conn,"UPDATE ClientInfo SET C_Pass='$pass' where C_Email='$email'");
							        	if($sql)
									        {
									        echo "<script>alert('Password have been Changed');</script>";
									        header('location: ../views/Header.php');
									        }

				        	}
				        	else
				        	{
				        	
							 echo "<script>alert('Password do not Match');</script>";
							// header('location: ../views/ResetPass.php');
				        	}
				        
        				}
	       
		}
		 else
	        {
	        	echo "<script>alert('Information Missing');</script>";
	        	//header('location: ../views/ResetPass.php');
	        }
	 }
       	
?>