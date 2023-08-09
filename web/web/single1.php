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
						$emailid=$_GET['id1'];
						$sel="select * from registration where user_name='$emailid'";
						$res=$ob->db_read($sel);
						$arr=mysqli_fetch_array($res);
						$sel1="select * from dermatologist where user_name='$emailid'";
						$res1=$ob->db_read($sel1);
						$arr1=mysqli_fetch_array($res1);
						$name=$arr['full_name'];
						
						$email=$arr['user_name'];
						$contact=$arr['contact_number'];
						$place=$arr['city'];
						$district1=$arr['district'];
						$state1=$arr['state'];
						$country1=$arr['country'];
						$house=$arr['house_name'];
						$hospital=$arr1['hospital_name'];
						$hospitalphone=$arr1['hospital_phone'];
						$city=$arr1['hospital_city'];
						$district=$arr1['hospital_district'];
						$state=$arr1['hospital_state'];
						$country=$arr1['hospital_country'];
						$experience=$arr1['experience'];
						$qualification=$arr1['qualification'];
						$pic=$arr1['profile_picture'];
						$govtid=$arr1['govt_id'];
						$birth=$arr['date_of_birth'];
						$expert=$arr1['expert'];
						$dctrid=$arr1['doctor_id'];
						?>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index2.php"><img src="images/appointment.png" alt=" " /><h1>APPOINTMENT<span>CORNER</span></h1></a>
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
						echo("<h3>Dr.".$name."</h3>");
						echo("<h3>".$qualification."</h3></p>");?>
						<div class="single-rating">
							<ul>
								
								
							</ul> 
						</div>
						<div class="single-price">
							<ul><li><h4 style="font-size: 25px;">
								<?php
								echo($email."</br>");
								echo($contact);?></h4></li> 
								<br><br>
							<div>
								<li style="font-size: 25px;"><a href="#"><i class="fa fa-hospital-o" aria-hidden="true"></i>
								<?php
								echo($hospital."</br>");
							
	
						
						
						
						echo($city."</br>");
						echo($district1."</br>");
						echo($state1."</br>");
						echo($country1."</br>");
						echo($hospitalphone."</br>");
						?></a>
						</li></div></ul></div>	<br><br>
						
						<form action="appointment.php?id=<?php echo $email;?>" method="post">
							
					<button type="submit" class="w3ls-cart" ><i class="fa fa-stethoscope" aria-hidden="true"></i> Appointment</button></a>
						</form>
					
					</div>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				
			<!-- collapse-tabs -->
			
		</div>
	</div>
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
