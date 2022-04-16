<?php  
	require('../model/ClientModel.php');
	session_start();

	if(isset($_REQUEST['upload'])){

		//print_r($_FILES['myfile']);

		$src = $_FILES['myfile']['tmp_name'];
		$des = "../model/".$_FILES['myfile']['name'];

		if(move_uploaded_file($src, $des)){
			echo "<script>alert('success')</script>";
		}else{
			echo "<script>alert('error')</script>";
		}
	}
      if(isset($_POST['update'])){
      	$conn=getConnection();
        $name = $_POST['username'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
      	$query = "UPDATE ClientInfo SET C_Name = '$name',
                      C_Gender = '$gender', C_dob = '$dob', C_Email= '$email'
                      WHERE C_ID = '$id'";
                    $result = mysqli_query($conn, $query);
         echo "<script>alert('Update Successfull')</script> ";
                     header('location:../views/Profile.php'); 
             }

        if(isset($_POST['delete'])){

				      	$delete = $_POST['id'];
						$status= DeleteClient($delete);
						if($status)
						{
							$_SESSION['status']=true;
						}
             }
		
?>