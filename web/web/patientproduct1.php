<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

if($_SESSION['status']!="Active")
{
    header("location:../../login/web/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />


<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->

<script src="js/imagezoom.js"></script>
<!-- //js --> 
<style>
	.avatar{
		vertical-align: middle;
		width:300px;
		height:300px;
		border-radius: 200%;
	}
</style>
</head>
<body>
<?php
						require_once("../../db.class.php");
						$ob=new db_operations();
						$productid=$_GET['id1'];
						$email=$_SESSION['user_name'];
						$sel="select * from product where product_id='$productid'";
						$res=$ob->db_read($sel);
						$arr=mysqli_fetch_array($res);
						$id=$arr['product_id'];
						$name=$arr['product_name'];
						
						$code=$arr['product_code'];
						$stock=$arr['stock'];
						$date=$arr['expiry_date'];
						$offer=$arr['offer'];
						
						$pic=$arr['image'];
				
						if(isset($_POST['cart']))
						{
							
							$insert1="insert into cart(product_id,user_name) values('$productid','$email')";
							$res2=$ob->db_read($insert1);
						?>
						<script>
							alert("Product add to cart");
							window.location='patientproduct.php'
							</script>;<?php
						}
						?>
						
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index2.php"><img src="images/products.png" alt=" " /><h1>PRODUCT<span>GALLERY</span></h1></a>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
							
						<li class="dropdown ">
							
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												
										
											</ul>						
										</div>
										<div class="col-sm-4 w3l">
											
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li class="dropdown">
								
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												
										
											</ul>
											
										</div>
										<div class="col-sm-4">
											
											<ul class="multi-column-dropdown">
												
										
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		
		
		<div class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="../../userprofile/userprofiletemplate/examples/dashboard.php">Back to dashboard</a></div>
	</div>
</div>
<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/s1.jpg">
									<div class="thumb-image detail_images"> <?php
									echo("<img class=avatar src=../../uploads/".$pic);?>
			 </div>
								</li>
								
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<?php
						echo("<h3>".$name."</h3>");
						echo("<h3>Product Code:".$code."</h3></p>");?>
						<div class="single-rating">
							<ul>
								
								
								<li><a href="../../userprofile/userprofiletemplate/examples/view.php?id1=<?php echo $productid?>">View reviews</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul><li><h4 style="font-size: 25px;">
								<?php
								echo("</h4>Stock:".$stock."</h4></br>");
								echo("</h4>Offer:".$offer."%</h4>");?></h4></li> 
								<br><br>
							<div>
								<li style="font-size: 25px;"><a href="#">
								<?php
								echo("</h4>Expiry Date:".$date."</h4></br>");
							
								
						
						
						
					
						?></a>
						</li></div></ul></div>	<br><br>
						
						<form action="address.php?id=<?php echo $id;?>" method="post">
						 <button type="submit" name="buy" class="w3ls-cart">Buy now</button>
				<a data-toggle="modal" data-target="#myModal1">	<button type="submit" name="cart" class="w3ls-cart" >Add to cart</button></a>
						</form>
					
					</div>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				
			<!-- collapse-tabs -->
			
		</div>
	</div>
<!-- newsletter -->
	
	<!-- cart-js --><div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">&times;</a>
                             <h3 style="margin: 0 auto;"></h3>
                            </div>
                            <form action="" method="POST" name="myForm">
                            <div class="modal-body">
                                <p><b>Are you sure you want to add to cart</b>
                                    </p>
                               <div><div><p>
                              
                            <div class="modal-footer">
                            <button type="submit" name="cart" class="btn btn-danger btn-fill">Ok</button>&nbsp;&nbsp;&nbsp;&nbsp;
 <a href="patientproduct1.php"><button type="submit"  class="btn btn-danger btn-fill pull-right">Cancel</button></a>

                        </p></div></p></div></div>
                                
                            
                            
                       </div>
                       </form> 
                   </div>
                    </div>
                </div>
	
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>
