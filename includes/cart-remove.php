<?php 
	require 'common.php';
	$_GET['id'];
		$delete_query ="DELETE for users_table  where user-id=$_SESSION AND item-id=$_GET['id'];"
		$delete_query=mysqli_query($delete_query);
		 header('location:cart.php');


?>