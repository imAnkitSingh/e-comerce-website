<?php
require 'common.php';
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
		<?php require 'header.php' ?>
			<div class="container">
				<div class="row row-style">
				
						<div class="col-xs-4 col-xs-offset-4">
						
							
						
							<div class="form" >
								<h1 id ="id3">Sign Up</h1>
								<form class="form-group" method="POST" action="signup_script.php">
									<label for="name"></label>
									<input type="text" class="form-control" value="Name" name="name">
									<label for="email"></label>
									<input type="email" class="form-control" value="Email" name="email">
									<label for="password"></label>
									<input type="password" class="form-control"  name="password" required="yes">
									<label for="contact"></label>
									<input type="contect" class="form-control"  name="contect">
									<label for="city"></label>
									<input type="text" class="form-control" value="City" name="city">
									<label for="address"></label>
									<input type="text" class="form-control" value="Address" name = "address">
										<div id="id2">
											<center>
												<input type="submit" class="btn btn-primary" value ="Submit">
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