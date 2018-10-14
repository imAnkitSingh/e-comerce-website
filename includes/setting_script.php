<?php
   require 'common.php';
   if(!isset($_SESSION['email']))
   { header('location:index.php'); }
    $new_pass = $_POST['newpassword'];
    $new_pass1 = $_POST['retype-newpassword'];
$select_query = " SELECT email ,password FROM users WHERE email='".$_SESSION['email']."' ";	
   $select_query_result= mysqli_query($con,$select_query) or die(mysqli_error($con));
   $no_rows = mysqli_num_rows($select_query_result);
   $row=mysqli_fetch_array($select_query_result);
   $old_pass=$_POST['oldpassword'];
   if($old_pass==$row['password'])
   {
	   if($new_pass = $new_pass1)
	   {
		   $update_query = " UPDATE  users SET password='$new_pass' WHERE email ='".$_SESSION['email'] ."' ";
			$upate_query_result=mysqli_query($con,$update_query) or die(mysqli_error($con));
	   }
	   else 
		{  echo "reinsert password correctly";}
	
   } 
   else 
   { echo "wrong password try again";}
 echo "paassword updated sussesfuly";
 
?>