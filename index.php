<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/css.css" type="text/css">

    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container-fluid"><br><br><br><br>
			<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 1</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/1.jpg">
                                        <div class="caption">
											<p>realme 5 pro 4GB RAM Rs.12500</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 2</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/2.jpg">
                                        <div class="caption">
											<p>Real me 3 pro 4GB RAM. RS.11500</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                         <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 3</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/3.jpg">
                                        <div class="caption">
											<p>Realme X 128 GB. Rs.15899.</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
                    </div>
				</div>
					
				<div class="container-fluid">
					<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 4</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/4.jpg">
                                        <div class="caption">
											<p>Realme 3i   3GB RAM 64GB(ROM) Rs.8999.</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 5</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/5.jpg">
                                        <div class="caption">
											<p>Realme 5. Rs. 10,999</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 6</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/6.jpg">
                                        <div class="caption">
											<p>Realme 6pro 128GB(ROM). Rs.16,999.</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
						
                    </div>
				</div>
                
       
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
