<?php
	
function check_if_added_to_cart($item_id)
	{
		
		$user_id = $_SESSION['id'];
		$con=mysqli_connect("localhost","root","","store" ) or die(mysqli_error($con));
	$Select_query2="SELECT * FROM users_item WHERE `item-id`='$item_id' AND `user-id`='$user_id' AND status='Added to cart'";
	$Select_query2_result=mysqli_query($con, $Select_query2) or die(mysqli_error($con));
	$no_rows2=mysqli_num_rows($Select_query2_result);
	if($no_rows2>=1)
		{
		return 1;
		}
 		 else
			{
				return 0;
		}	}
?>