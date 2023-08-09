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
	.avatar{
		vertical-align: middle;
		width:150px;
		height:150px;
		border-radius: 50%;
	}
</style>
</head>
<body>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><img src="images/logo2.png" alt=" " /><h1>PRODUCT<span>GALLERY</span></h1></a>
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
		<div class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="../../userprofile/userprofiletemplate/examples/dashboard.php">Back to dashboard</a></div>
	</div>
</div>
	<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>MY CART</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>	
 <table class="table ">
		  <tr>
			<th class="t-head">Product</th>
			<th class="t-head">Product Name</th>
			<th class="t-head">Price</th>
		<th class="t-head">Stock</th>
<th class="t-head">Buy</th>
			
		  </tr>
		  	<?php
						require_once("../../db.class.php");
					
						$ob=new db_operations();
						$email=$_SESSION['user_name'];

						$sel1="select * from cart where user_name='$email'";
						$res1=$ob->db_read($sel1);
						$total=mysqli_num_rows($res1);
						
						
					
					
						while($row=mysqli_fetch_array($res1)){
					
						$id=$row[1];
						$sel2="select * from product where product_id='$id'";
						$res2=$ob->db_read($sel2);
					$row1=mysqli_fetch_array($res2); 
$offer=$row1['offer'];
$price=$row1['price'];
$tot=($offer/100);
$tot1=$tot*$price;
$total=$price-$tot1;
					?>
		  <tr class="cross">
			<td class="ring-in t-data">
				 <?php echo("<img class=avatar src=../../uploads/$row1[8] alt=mikku />");
					
				?>

				<div class="clearfix"> </div>
				<div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
			 </td>
			 <td class="t-data"><?php echo $row1[1];?></td>
			<td class="t-data">Rs.<?php echo $total;?></td>
<td class="t-data"><?php echo $row1[5];?></td>

			<td class="t-data">							<form action="address.php?id=<?php echo $row1[0];?>" method="post">
								
								<button type="submit" class="btn btn-primary">Buy Now</button>
							</form></td>
			
		  
		  <?php
		}
		?></tr>
		 </table></div></div>
		  
		 				
	<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		
		</div>
		<div class="col-md-3 footer-grids fgd2">
			
		</div>
		<div class="col-md-3 footer-grids fgd3">
			
		</div>
		<div class="col-md-3 footer-grids fgd4">
			
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

