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
			<a href="index.html"><img src="images/products.png" alt=" " /><h1>PRODUCT<span>SALES</span></h1></a>
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
		<div class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="../../companyprofile/userprofiletemplate/examples/dashboard.php">Back to dashboard</a></div>
	</div>
</div>
	<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>SALES HISTORY</h3>
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
			<th class="t-head">Order Id</th>
			<th class="t-head">Product Name</th>
			<th class="t-head">Product Code</th>
			<th class="t-head">Order Date</th>
			<th class="t-head">Quantity</th>
			<th class="t-head">Customer Name</th>
			<th class="t-head">Address</th>
		<th class="t-head">Contact number</th>
<th class="t-head">Amount Paid</th>
			
		  </tr>
		  <?php
						require_once("../../db.class.php");
						$ob=new db_operations();
						
$email=$_SESSION['user_name'];
						$sel="select * from address where owner_email='$email' and status='1'";
						$res=$ob->db_read($sel);
						
						
						
						$t=mysqli_num_rows($res);
						
						if($t!=0)
						{while($arr=mysqli_fetch_array($res)){
						
						$id=$arr[3];
						$sel1="select * from product where product_id='$id'";
						$res1=$ob->db_read($sel1);
						$arr1=mysqli_fetch_array($res1);	

						
$offer=$arr1[9];
$price=$arr1[4];
$tot=($offer/100);
$tot1=$tot*$price;
$total=$price-$tot1;
					?>
		 
				<tr>
				 <td class="t-data"><?php echo $arr[0];?></td>	
				

				<div class="clearfix"> </div>
				
			 <td class="t-data"><?php echo $arr1[1];?></td>
			  <td class="t-data"><?php echo $arr1[2];?></td>
			   <td class="t-data"><?php echo $arr[5];?></td>
			    <td class="t-data"><?php echo $arr[4];?></td>
			     <td class="t-data"><?php echo $arr[7];?></td>
			 <td class="t-data"><?php echo $arr[8];?><br>
			 	<?php echo $arr[9];?><br><?php echo $arr[10];?><br><?php echo $arr[11];?><br><?php echo $arr[12];?><br><?php echo $arr[14];?>
			 </td>
			 <td class="t-data"><?php echo $arr[13];?></td>
			<td class="t-data">Rs.<?php echo $arr[6];?></td>



		  
		  <?php
		}
	}
		?></tr>
		 </table></div>
		  
		 				
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

