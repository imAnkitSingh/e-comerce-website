<?php 
require 'common.php';

    if(!isset($_SESSION['email']))
		{header('location:index.php');
	exit;}
else
{  $select_query5="SELECT * FROM users_item ui INNER JOIN item i ON ui.`item-id`=i.id";

$select_query5_result = mysqli_query($select_query5) or die(mysqli_error($con));

while($row5=mysqli_fetch_array($select_query5_result))
{id==1;
$update_query= " UPDATE users_item SET status= 'Confirmed' WHERE users_item.`item-id` ='".$row5['id']."' "; 
   }
$update_query_result=mysqli_query($update_query);
} 
?>
<!DOCTYPE  html>
<html>
    <head>

        <title>TODO supply a title</title>  
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link  rel="stylesheet" type="text/css" href="ext.css">
         
    </head>

    	<body>
		<?php require 'header.php'; ?>
			
			<div class="container">
				<div class="jumbotron jt-style">
					<center>
						<h2>Your Order Is Confirmed.</h2>
						<h3>Thank You For Shopping With Us
						<a href="#product.html">click here</a> to Purchase Any Other Item </h3>
					</center>  
					
				</div>
			</div>
					<?php require 'footer.php'; ?>
				
	</body>
</html>