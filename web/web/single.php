<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Single :: w3layouts</title>
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
			<a href="index2.php"><img src="images/appointment.png" alt=" " /><h1>Appointment<span>CORNER</span></h1></a>
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
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li><a href="index.html" class="hyper "><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Clothing<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="women.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Women's Clothing</a></li>
												<li><a href="men.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's Clothing</a></li>
												<li><a href="kids.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Kid's Wear</a></li>
												<li><a href="party.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Party Wear</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="casuals.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Casuals</a></li>
												<li><a href="night.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Night Wear</a></li>
												<li><a href="formals.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Formals</a></li>
												<li><a href="inner.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Inner Wear</a></li>
										
											</ul>						
										</div>
										<div class="col-sm-4 w3l">
											<a href="women.html"><img src="images/menu1.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="jewellery.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Jewellery </a></li>
												<li><a href="watches.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Watches</a></li>
												<li><a href="cosmetics.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
												<li><a href="deos.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Perfumes</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4">
											
											<ul class="multi-column-dropdown">
												<li><a href="haircare.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
												<li><a href="shoes.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Shoes</a></li>
												<li><a href="handbags.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Handbags</a></li>
												<li><a href="skincare.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											<a href="jewellery.html"><img src="images/menu2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li><a href="about.html" class="hyper"><span>About</span></a></li>
						<li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
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
	
		
		<div class="clearfix"></div>
	</div>
</div>

					<div class="col-md-6 single-top-right">
						
						
					
<?php
						echo("<img src=".$pic."><br/></br>");
						echo("<h2>Dr.".$name."<br/></h2>");
						echo("<h4>Dermatologist</br></h4>");
						echo("<h4>".$qualification."</br></h4>");
						
						echo("<h4>".$hospital."</br></h4>");
						echo("<h4>".$city."</br></h4>");
						echo("</br></br>");

						?>
						
						
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls1_item" value="Handbag" /> 
							<input type="hidden" name="amount" value="540.00" /> 
							<center><button type="submit" class="w3ls-cart" ><i class="fa fa-notes" aria-hidden="true"></i> Appointment</button></center>
						</form>
						</div>
					
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">About the doctor</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> HOSPITAL DETAILS <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<?php
								echo("<h3>Hospital Name:".$hospital."</h3></br>");
								echo("<h3> Registration Id:".$govtid."</h3></br>");
								echo("<h3>Contact Number:".$hospitalphone."</h3></br>");
								echo("<h3>City:".$city."</h3></br>");
								echo("<h3>District:".$district."</h3></br>");echo("<h3>State:".$state."</h3></br>");
								echo("<h3>Country:".$country."</h3></br>");

								?>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> PERSONAL INFORMATION <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a> 
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<?php
								echo("<h3>Name:Dr.".$name."</h3></br>");
								echo("<h3>Email address:".$email."</h3></br>");
								echo("<h3>Contact Number:".$contact."</h3></br>");
								echo("<h3>Native:".$place."</h3></br>");
								echo("<h3>District:".$district1."</h3></br>");
								echo("<h3>State:".$state1."</h3></br>");
								echo("<h3>Country:".$country1."</h3></br>");
								echo("<h3>Date of Birth:".$birth."</h3></br>");
								
								
								

								?>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Career Details <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<?php
								echo("<h3>Qualification:".$qualification."</h3></br>");
								echo("<h3>Experience:".$experience."</h3></br>");
								echo("<h3>Expert As:".$expert."</h3></br>");
								echo("<h3>Staff Id:".$dctrid."</h3></br>");
								?>

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<i class="fa fa-question-circle fa-icon" aria-hidden="true"></i>More <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 
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
