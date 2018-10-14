<?php require 'common.php'; 
 if (isset($_SESSION['email']))
 { header('location:products.php');}
?>
<!DOCTYPE  html>
<html lang="en">
   <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/stylek.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head> 

    	<body>	
		<?php require 'header.php'; ?>
			
			
						   <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
			</div>
			
		
				<div class="container">
						<div class="row">
							<div class="col-xs-4">
								<div class="thumbnail">
									<img src="1.1.jpg" alt="camera">
									<div class="caption">
										<h3>cameras</h3>
										<p>Choose Among Best Available in The World</p>
									</div>
								</div>
							</div>
								<div class="col-xs-4">
									<div class="thumbnail">
										<img src="w.jpg" alt="watches">
										<div class="caption">
										<h3>watches</h3>
										<p>Original Watches From the Best Brand</p>
										</div>
									</div>
								</div>
									<div class="col-xs-4">
									
										<div class="thumbnail">
											<img src="s.jpg" alt="shirts">
											<div class="caption">
												<h3>Shirts</h3>
												<p>Our exxquilsite Collection Of Shirts.</p> 
											</div>
										</div>
									</div>
								
						</div>
					</div>
		<?php require 'footer.php';?>
	</body>
</html>