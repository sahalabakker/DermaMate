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

</head>
<body>
<?php
require_once("../../db.class.php");
$email=$_SESSION['user_name'];
$ob=new db_operations();
if(isset($_POST['update']))
{
	
	$pemail=$_POST['pemail'];
	$tdate=$_POST['tdate'];
	$ndate=$_POST['ndate'];
	$symptoms=$_POST['symptoms'];
	$medicines=$_POST['medicines'];
	$update="update patient SET symptoms='$symptoms',medicine='$medicines',today_date='$tdate',next_date='$ndate' where p_username='$pemail' and d_username='$email'";
$res=$ob->db_write($update);
	?>
	<script>

							alert("Consultation history updated successfully");
							window.location='../../doctorprofile/userprofiletemplate/examples/dashboard.php'
							</script>;<?php
}?>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><img src="images/appointment.png" alt=" " /><h1>CONSULTATION<span>HISTORY</span></h1></a>
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
		
		<div class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="../../doctorprofile/userprofiletemplate/examples/dashboard.php">Back to dashboard</a></div>
	</div>
</div>
	
	<div>
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Consultation history</h3>
					<form action="#" method="post" name="form">
						
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text"  name="pemail"  required=""  placeholder="Patient's Email address">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-list-alt" aria-hidden="true"></i>
							<input  type="textarea"  name="symptoms"  required=""  placeholder="Symptoms">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-medkit" aria-hidden="true"></i>
							<input  type="textarea"  name="medicines"  required=""  placeholder="Prescribed Medicines">
							<div class="clearfix"></div>
						</div>
						
							<div class="key">
							Today's date&nbsp;&nbsp;&nbsp;&nbsp;<input  type="date"  name="tdate"  required=""  placeholder="Appointment Date">
							<div class="clearfix"></div>
						</div>
						<div class="key">
														
						Next consultation date&nbsp;&nbsp;&nbsp;<input  type="date"  name="ndate"  required=""  placeholder="Appointment date">
							<div class="clearfix"></div>
						</div>
						
						<input type="submit" value="Update" name="update">
					</form>
				</div>
			</div>
		</div>
		<!-- newsletter -->
	
<!-- //newsletter -->

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