<?php
	require 'common.php';

		$Email=mysqli_real_escape_string($con,$_POST['email']);
		$Password=mysqli_real_escape_string($con,$_POST['password']);
		$select_query="select email,id from users where email='$Email' and Password='$Password'";
		$select_query_result=mysqli_query($con,$select_query) or mysqli_error($con);
		$no_of_rows =mysqli_num_rows($select_query_result);
			if($no_of_rows==0)
				{ echo "inavalid user or Wrong Password";
			}
					else 
					
					{
					$row=mysqli_fetch_array($select_query_result)or mysqli_error($con); 
					$Email=$row['email'];
						$_SESSION['email']=$Email;
						$_SESSION['id']=$row['id'];
						header('location:products.php');
					
					 }
?>
