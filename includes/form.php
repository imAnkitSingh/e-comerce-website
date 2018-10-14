<?php require 'common.php'; if(isset($_SESSION['email']))
{
header('location:index.php'); exit;}

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
		<?php require 'header.php';  ?> 
			<div class="container">
				<div class="row row-style">
					<div class="col-xs-4">
						<div class="panel panel-default">
							<div class="panel-heading">
							</div>
								<div class="panel-body form form-default">
									<center>
										<p class="text-warning">Login to Make a Purchase</p>
											<form class="form-group" method="POST" action="login_submit.php">
												<label for="email">Email:</label>
												<input type="email" name="email" class="form-control" value="akwebsite@gmail.om">
												<label for="password">Password:</label>
												<input type="password" class="form-control" name="password" value="12345">
													<div id="id1">
														<button input="submit" class="btn btn-primary">Submit</button>
													</div>
											
											</form>
									</center>
									
								</div>
									<div class="panel-footer">
										<div>
										<p class="text-primary">Don't have an Acoount?<a href="#">Register</a></p>
										</div>
									
									</div>
						</div>
					</div>
				</div>
			</div>
			<?php	require 'footer.php'?>
				
	</body>
</html>