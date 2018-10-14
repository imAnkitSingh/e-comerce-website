<!DOCTYPE  html>
<html>
    <head>

        <title>TODO supply a title</title>  
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link  rel="stylesheet" type="text/css" href="extt.css">
         
    </head>

    	<body>
		<?php require 'header.php' if(isset($_SESSION['email']); {?>
 <?php header('location:products.php'); exit;}
			<div class="container">
				<div class="row row-style">
				
						<div class="col-xs-4 col-xs-offset-4">
						
							
						
							<div class="form">
								<h1 id ="id3">Sign Up</h1>
								<form class="form-group" method="POST" action=signup_script.php>
									<label for="Name"></label>
									<input type="text" class="form-control" value="Name" name="name">
									<label for="email"></label>
									<input type="email" pattern="[a-z0-9._% +-]+@[a-z0-9.-]+\.[a-z]{2,3}$" "class="form-control" value="Email" name="email">
									<div><?php $_GET['email_error'] ?></div>
									<label for="password"></label>
									<input type="password" class="form-control" value="Password" pattern={4,}; name="password">
									<div><?php $_GET['password_error'] ?></div>
									<label for="contact"></label>
									<input type="contect" class="form-control" value="Contect" name="contect">
									<label for="city"></label>
									<input type="city" class="form-control" value="City" name="city">
									<label for="address"></label>
									<input type="address" class="form-control" value="Address" name"address">
										<div id="id2">
											<center>
												<button type="button" class="btn btn-primary">Submit</button>
											</center>
										</div>
								</div>
								</form>
							</div>
																		
					</div>
					
					
				</div>
			</div>
				
		<?php require 'footer.php'?>
	</body>
</html>