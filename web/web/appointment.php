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
<script language="javascript" type="text/javascript">

function calculate()
{

var now=new Date();
var target=new Date(document.form.date.value);
if(target.getFullYear()>now.getFullYear())
{
	return true;
}
else if(target.getFullYear()==now.getFullYear())
{
	if(target.getMonth()>now.getMonth()){
	return true;
	}
else if(target.getMonth()==now.getMonth()){
	if(target.getDate()>=now.getDate()){
		return true;
	}
	else
	{alert("Sorry you entered a past date.Please provide a future date.");
	return false;	
	}

}
else
	{alert("Sorry you entered a past date.Please provide a future date.");
	return false;	
	}
}
else
{
	alert("Sorry you entered a past date.Please provide a future date.");
return false;
}
}
</script>
</head>
<body>
<?php
require_once("../../db.class.php");
$emaildoctor=$_GET['id'];

$ob=new db_operations();
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$pemail=$_POST['pemail'];
	$demail=$_POST['demail'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$age=$_POST['age'];
	$insert="insert into appointment(patient_name,patient_username,doctor_username,app_date,app_time,age) values('$name','$pemail','$demail','$date','$time','$age')";
$res=$ob->db_write($insert);
if(!res)
{?><script>
	alert("Submission failed");
window.location='appointment.php'
</script>;<?php
}
else{
?>
<script>
	alert("Appointment details submitted successfully");
	window.location='index2.php'
</script>;
<?php
}}?>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><img src="images/appointment.png" alt=" " /><h1>APPOINTMENT<span>CORNER</span></h1></a>
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
		
		<div class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="../../userprofile/userprofiletemplate/examples/dashboard.php">Back to dashboard</a></div>
	</div>
</div>
	
	<div>
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>APPOINTMENT</h3>
					<form action="#" method="post" name="form" onsubmit="return(calculate())">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="name" required=""  placeholder="Patient Name">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="email"  name="pemail"  required=""  placeholder="Patient's Email address">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="email"  name="demail" required="" value=<?php echo $emaildoctor;?>>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="text"  name="age"  required=""  placeholder="Patient's age">
							<div class="clearfix"></div>
						</div>
						
							<div class="key">
							Appointment date&nbsp;&nbsp;&nbsp;&nbsp;<input  type="date"  name="date"  required=""  placeholder="Appointment Date">
							<div class="clearfix"></div>
						</div>
						<div class="key">
														
						Appointment time&nbsp;&nbsp;&nbsp;<input  type="time"  name="time"  required=""  placeholder="Appointment Time">
							<div class="clearfix"></div>
						</div>
						
						<input type="submit" value="Submit" name="sub">
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