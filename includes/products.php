
<?php 
$con=mysqli_connect("localhost","root","","store");
SESSION_start();
?>
<!DOCTYPE  html>
<html>
    <head>

        <title>TODO supply a title</title>  
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link  rel="stylesheet" type="text/css" href="css/stylek.css">
	
         
    </head>

    	<body>
		<?php require 'header.php';
			require  'check-if-added.php';
		?>
			<div class="container">
				<div class="jumbotron jt-style">
					<h1>Welcome to our Lifestyleb Store!</h1>
					<p>We have the best Cameras.watches and shirts for you.No need to hunt around.We have all in one place </p>
				</div>
			</div>
				<div class="container">
					<div class="row row-style1">
						<div class="col-xs-3 ">
							<div class="thumbnail">
								<img src="1.1.jpg" alt="cameras" class="img-resposive">
									<div class="caption">
										<h3 class="id4">Cannon EOS</h3>
										<p> Price:Rs.36000.00 </p>
										<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(1)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=1" name="add" value="add">ADD to Cart</button> <?php } }?> 
										
									</div>
							</div>
						</div>
							<div class="col-xs-3 ">
								<div class="thumbnail">
									<img src="imgg/2.jpg" alt="loading...." class="img-resposive">
										<div class="caption">
											<h3>Sony DSLR</h3>
											<p>Price:Rs.40000.00</p>
											<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(2)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=2" name="add" value="add">ADD to Cart</a> <?php } }?>
										</div>
								</div>
							</div>
								<div class="col-xs-3">
									<div class="thumbnail">
										<img src="imgg/3.jpg" alt="loading......">
											<div class="caption">
												<h3>Sony DSLR</h3>
												<p>Price:Rs.50000.00</p>
												<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(3)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=3" name="add" value="add">ADD to Cart</button> <?php } }?>
											</div>
									</div>
				
								</div>
									<div class="col-xs-3">
										<div class="thumbnail">
											<img src="imgg/4.jpg" alt="loading.........">
												<div class="caption">
													<h3>Olympus DSLR</h3>
													<p>Price:Rs.80000.00</p>
													<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(4)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=4" name="add" value="add">ADD to Cart</button> <?php } }?>
												</div>
										</div>
									</div>
					</div>
						<div class="row row-style1">
						<div class="col-xs-3">
							<div class="thumbnail">
								<img src="w.jpg" alt="watches">
									<div class="caption">
										<h3 class="id4">Titan Model #301</h3>
										<p>Price:Rs.13000.00</p>
											<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(5)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=5" name="add" value="add">ADD to Cart</button> <?php } }?>
										
									</div>
							</div>
						</div>
							<div class="col-xs-3">
								<div class="thumbnail">
									<img src="imgg/19.jpg" alt="watches">
										<div class="caption">
											<h3>Titan Model #201</h3>
											<p>Price:Rs.3000.00</p>
											<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(6)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=6" name="add" value="add">ADD to Cart</button> <?php } }?>
										</div>
								</div>
							</div>
								<div class="col-xs-3">
									<div class="thumbnail">
										<img src="imgg/20.jpg" alt="watch">
											<div class="caption">
												<h3>HMT Milan</h3>
												<p>Price:Rs.8000.00</p>
												<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(7)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=7" name="add" value="add">ADD to Cart</button> <?php } }?>
											</div>
									</div>
				
								</div>
									<div class="col-xs-3">
										<div class="thumbnail">
											<img src="imgg/21.jpg" alt>
												<div class="caption">
													<h3>Faber Luba #111</h3>
													<p>Price:Rs.180000.00</p>
													<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(8)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=8" name="add" value="add">ADD to Cart</button> <?php } }?>
												</div>
										</div>
									</div>
					</div>
						<div class="row row-style1">
						<div class="col-xs-3">
							<div class="thumbnail">
								<img src="s.jpg" alt="shirt">
									<div class="caption">
										<h3 class="id4">H&W</h3>
										<p>Price:Rs.800.00</p>
											<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(9)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=9" name="add" value="add">ADD to Cart</button> <?php } }?>
										
									</div>
							</div>
						</div>
							<div class="col-xs-3">
								<div class="thumbnail">
									<img src="imgg/23.jpg" alt>
										<div class="caption">
											<h3>Luis Phil</h3>
											<p>Price:Rs.1000.00</p>
											<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(10)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=10" name="add" value="add">ADD to Cart</button> <?php } }?>
										</div>
								</div>
							</div>
								<div class="col-xs-3">
									<div class="thumbnail">
										<img src="imgg/24.jpg" alt>
											<div class="caption">
												<h3>Jhon Zok</h3>
												<p>Price:Rs.1500.00</p>
												<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(11)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=11" name="add" value="add">ADD to Cart</button> <?php } }?>
											</div>
									</div>
				
								</div>
									<div class="col-xs-3">
										<div class="thumbnail">
											<img src="imgg/25.jpg" alt="shirt">
												<div class="caption">
													<h3>Jhalsani</h3>
													<p>Price:Rs.1300.00</p>
													<?php if(!isset($_SESSION['email']))
											{?> 	<div>
												 <p><a role="button" class="btn btn-primary btn-block" href="form.php">BUY </a></p>
												</div> <?php } else {   if(check_if_added_to_cart(12)) {
											 
											echo  '<a href="#" class="btn btn-sucess btn-block" disabled> Added to Cart</a>';
											}  else {?>
											<a  class="btn btn-primary btn-block" href="cart-add.php?id=12" name="add" value="add">ADD to Cart</button> <?php } }?>
												</div>
										</div>
									</div>
					</div>
				</div>
						<?php require 'footer.php'?>
	</body>
</html>
				