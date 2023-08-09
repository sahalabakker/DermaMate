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

<style>

	.item {
    position:relative;
    padding-top:20px;
    display:inline-block;
}
.notify-badge{
    position: absolute;
    left:-5px;
    top:20px;
    background:green;
    text-align: center;
    border-radius: 30px 30px 30px 30px;
    color:white;
    padding:5px 10px;
    font-size:20px;
}

.y{
	color: red;
}
</style>
</head>

<body>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index2.php"><img src="images/products.png"/><h1>PRODUCT  <span>GALLERY</span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				
			</ul>
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
		<div class="col-md-4 search-agileinfo">
			
		</div>
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				
			</div>
		</div>
		<div class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="../../doctorprofile/userprofiletemplate/examples/dashboard.php">Back to dashboard</a></div>
	</div>
</div>
<div class="banner-agile">
	<div class="container">
		<h2>WELCOME TO</h2>
		<h3>PRODUCT<span>GALLERY</span></h3>
		<p>Cure your derma problems by finding the best dermatologists...</p>
		
	</div>
</div>

<div class="top-products">
	<div class="container">
		<h3>Specialists</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Skin</span></li>
					<li class="resp-tab-item"><span>Hair</span></li>
										
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<?php
						require_once("../../db.class.php");
					
						$ob=new db_operations();
						

						$sel1="select * from product where product_type='0'";
						$res1=$ob->db_read($sel1);
						$total=mysqli_num_rows($res1);
						
						
					
					
						while($row=mysqli_fetch_array($res1)){
						
						echo("<div class=col-md-4 top-product-grids tp1 animated wow slideInUp data-wow-delay=.5s>");
							echo("<a href='doctorproduct1.php?id1={$row[0]}'><div class=product-img>");
							echo("<span class=notify-badge>NEW</span>");
								echo("<img height=500px width=130px src=../../uploads/$row[8] alt=mikku />");echo("</a>");
								echo("<div class=p-mask>");
								
								echo("</div>");
							echo("</div>");
							
							
							for($j=0;$j<4;$j++)	
							
						echo("<span class=glyphicon style=font-size:24px;color:#FF8C00	; >&#xe006;</span>");
						


							echo("<h4>  $row[1] </h4>");
							echo("<h5>Rs.$row[4]</h5>");
							echo("<h5>  $row[10] </h5>");
						echo("</div>");
						


						
					}		
							
					
					?>
						
						<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<?php
						require_once("../../db.class.php");
					
						$ob=new db_operations();
						

						$sel8="select * from product where product_type='1'";
						$res8=$ob->db_read($sel8);
						$total8=mysqli_num_rows($res8);
						
						
					
					
						while($row8=mysqli_fetch_array($res8)){
						
						echo("<div class=col-md-4 top-product-grids tp1 animated wow slideInUp data-wow-delay=.5s>");
							echo("<a href='doctorproduct1.php?id1={$row8[0]}'><div class=product-img>");
							echo("<span class=notify-badge>NEW</span>");
								echo("<img height=500px width=130px src=../../uploads/$row8[8] alt=mikku />");echo("</a>");
								echo("<div class=p-mask>");
								
								echo("</div>");
							echo("</div>");
							
							
							for($j=0;$j<4;$j++)	
							
						echo("<span class=glyphicon style=font-size:24px;color:#FF8C00	; >&#xe006;</span>");
						


							echo("<h4>  $row8[1] </h4>");
							echo("<h5>Rate: $row8[4]</h5>");
						echo("</div>");
						


						
					}		
							
					
					?></div></div>
						
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="single.html"><div class="product-img">
								<img src="images/tp13.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Eye makeup" /> 
									<input type="hidden" name="amount" value="90.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Eye makeup</h4>
							<h5>$90.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp2">
							<a href="single.html"><div class="product-img">
								<img src="images/tp14.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Gold makeup" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Gold makeup</h4>
							<h5>$60.00</h5>
						</div>
						<div class="col-md-3 top-product-grids tp3">
							<a href="single.html"><div class="product-img">
								<img src="images/tp15.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Tya Makeup kit" /> 
									<input type="hidden" name="amount" value="120.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Tya Makeup kit</h4>
							<h5>$120.00</h5>						
						</div>
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/tp16.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Vega Brushes" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Vega Brushes</h4>
							<h5>$60.00</h5>						
						</div>
						<div class="clearfix"></div>	
						<div class="top-products-set2">
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/cp5.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Vega Brushes" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Lipstick</h4>
							<h5>$60.00</h5>						
						</div>	
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/cp4.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Vega Brushes" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Eye liner</h4>
							<h5>$60.00</h5>						
						</div>	
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/cp7.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Eye shades" /> 
									<input type="hidden" name="amount" value="60.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Eye shades</h4>
							<h5>$60.00</h5>						
						</div>	
						<div class="col-md-3 top-product-grids tp4">
							<a href="single.html"><div class="product-img">
								<img src="images/cp8.jpg" alt="" />
								<div class="p-mask">
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls1_item" value="Eye shades" /> 
									<input type="hidden" name="amount" value="160.00" /> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>Eye shades</h4>
							<h5>$160.00</h5>						
						</div>						
						<div class="clearfix"></div>
						</div>
					</div>						
				</div>
			</div>
		</div>	
	</div>
</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			<h3>Our Services</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>24/7 online booking system</h4>
					<p>Appointment booking of best dermatologists.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Introducing medicinal products</h4>
					<p>Introducing medicinal and cosmetic products for online purchasing..</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					
				</div>
				<div class="col-md-10 ftext">
					
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
				<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 
</div>
<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			
			<div class="sliderfig">
				
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					
		</div>
	</div>
<!-- //top-brands -->
<!-- newsletter -->
	

<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		
		<ul>
			
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4></h4> 
			<ul>
				
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			
			<ul>
				
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			
			<ul>
				
				
			</ul>
		</div>
		<div class="clearfix"></div>
		
	</div>
</div>
	<!-- cart-js -->
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