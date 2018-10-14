<?php require 'common.php';
	if(!isset($_SESSION['email']))
		{ header('location:form.php');
		
		}
 SESSION_DESTROY();
 
 header('location:index.php');
exit;


 ?>