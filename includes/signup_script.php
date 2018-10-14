<?php

	require 'common.php';
	$Email= $_POST['email'];
	$pattern_name="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.{a-z0-9+)*(\.[a-z]{2,3})$/";
		if(preg_match($pattern_name,$Email))
			{header('location:index.php?email_error=ENTER CORRECT EAMIL');}		
		$Email=mysqli_real_escape_string($con,$_POST['email']);
		$Name= $_POST['name'];
		$Name=mysqli_real_escape_string($con,$_POST['name']);
		$Password=$_POST['password'];
		$Password=mysqli_real_escape_string($con,$_POST['password']);
		$Contect=$_POST['contect'];
		$Contect=mysqli_real_escape_string($con,$_POST['contect']);
		$City=mysqli_real_escape_string($con,$_POST['city']);
		$Address=mysqli_real_escape_string($con,$_POST['address']);
		$select_query="SELECT * FROM users WHERE email='$Email'";
		$select_query_result=mysqli_query($con,$select_query);
		$no_rows=mysqli_num_rows($select_query_result);
			if($no_rows)
				{ echo "EMAIL IS ALL READY USED";}
			else
				{
				$insert_query="INSERT INTO users (name,email,password,contect,city,address) VALUES ('" . $Name ."','". $Email ."','". $Password ."','". $Contect ."','". $City ."','". $Address ."')";
				
				$insert_query_result=mysqli_query($con , $insert_query) or die(mysqli_error($con));
					echo "Thank you for signing up";

				$_SESSION['email']= $Email;
				$_SESSION['id']=mysqli_insert_id($con);
				
				header('location:products.php');}
?>