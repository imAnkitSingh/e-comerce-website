<?php $con=mysqli_connect("localhost","root","","store");
		session_start();
 if(!isset($_SESSION['email'])){
	header('location:index.php');}
 ?>
<!DOCTYPE  html>
<html>
    <head>

        
        <title>TODO supply a title</title>  
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link  rel="stylesheet" type="text/css" href="css/styles.css">
         
    </head>

    	<body>
		
		<?php require 'header.php'; ?>
			<div class="container">
				<div class="row row-style2">
					<div class="col-xs-4 col-xs-offset-4 col-style">
						<table  class="table table-default table-hover"> <!-- show table only if there are items added in the cart Initially when 
						i defined it above it which resulted my query to display infinete tables but now i am limiting there headers here 
						 by defining conditions to define table -->
						   <?php  
						   
						      $user_id=$_SESSION['id'];
								$sum=0;
								
							$select_query4 = "SELECT i.id ,i.name ,i.price FROM users_item ui INNER JOIN item i ON ui.`item-id`=i.id WHERE status='Added to cart' AND ui.`user-id`=$user_id";
								$select_query4_result=mysqli_query($con,$select_query4) or die(mysqli_error($con));
								$no_rows=mysqli_num_rows($select_query4_result);
								
						    if($no_rows>=1)
							{ ?>	 <thead>
										<tr>
											<th>Item Number</th>
											<th>Item Name</th>
											<th>Price</th>
												
										 </tr>
									</thead>
										<tbody>
										<?php
											while($rows4=mysqli_fetch_array($select_query4_result))
											{ $sum+= $rows4['price'];
											$id = $rows4['id'].", ";?>
 									<tr>
										<td><?php echo "# ".$rows4['id']; ?></td>
										<td> <?php echo $rows4['name']; ?></td>
										<td><?php echo $rows4['price'];?></td>
										<td> <a href="cart-remove.php?id={$rows4['id']}" class="remove_item_link"><?php echo "Remove" ?></a>
									</tr>
											<?php } 
											$id = rtrim($id, ", ");
												echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>"; 
											 ?>
										</tbody> <?php } 
						                    else 
											 {  echo "please insert the 1st entry";}
														?> 
									 
									
											
									
										
								
						</table>
				</div>
				
			</div>
		
			

				
			</div>
				
					<?php require 'footer.php'; ?>
			
	</body>
</html>