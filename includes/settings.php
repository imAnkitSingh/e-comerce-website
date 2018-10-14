<?php require 'common.php';
	if(!isset($_SESSION['email']))
		{ header('location:products.php');
	exit;

} ?>
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
						<div class="form form-default">
							<form class="form-group" method="POST" 	action="setting_script.php">
							
								<label for="oldpassword"></label>
									<input type="text" name="oldpassword" value="Old Password" class="form-control">
									<label for="newpassword"></label><input type= "text" value="New Password" name="newpassword" class="form-control">
									<label for="retype-newpassword"></label><input type= "text" value="Re-type New Password" name="retype-newpassword" class="form-control">
									<input type="submit"  class="btn btn-primary bt1" value="Conferm">
								
							
								
							</form>
						</div>
				</div>
				
			</div>
			</div>
				<?php require 'footer.php'; ?>
			
	</body>
</html>