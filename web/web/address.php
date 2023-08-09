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
	.t1{
		width:900px;
		height: 300px;
		text-align:center;
		background-color: #c2e0fc;
	}
.butt{
	width:200px;
	height: 40px;
	background-color: #00e58b;
	text-align: center;
	
	}
</style>
</head>
<body>
<?php
require_once("../../db.class.php");
$ob=new db_operations();
$productid=$_GET['id'];

$email=$_SESSION['user_name'];

$sel="select * from registration where user_name='$email'";
$res=$ob->db_read($sel);
$arr=mysqli_fetch_array($res);
$name=$arr['full_name'];
$house=$arr['house_name'];
$city=$arr['city'];
$district=$arr['district'];
$state=$arr['state'];
$country=$arr['country'];
$contact=$arr['contact_number'];
$sel1="select * from product where product_id='$productid'";
$res2=$ob->db_read($sel1);
$arr1=mysqli_fetch_array($res2);
$owneremail=$arr1['owner_email'];
$productname=$arr1['product_name'];
$price=$arr1['price'];
$offer=$arr1['offer'];
$tot=$price*($offer/100);
$total=$price-$tot;
$stock=$arr1['stock'];
if(isset($_POST['sub']))
{
$quantity=$_POST['quantity'];
$fullname=$_POST['name'];
$housename=$_POST['house'];
$city1=$_POST['city'];
$district1=$_POST['district'];
$state1=$_POST['state'];
$country1=$_POST['country'];
$contact1=$_POST['contact'];
$pin=$_POST['pin'];
$balance=$stock-$quantity;
$cost=$quantity*$total;
if($quantity>$stock)
{
	?><script>
	alert("Sorry!Your need exceeds the stock");
	window.location='patientproduct.php'
</script>;
<?php
}
else{
	$update="update product SET stock='$balance' where product_id='$productid'";
$res3=$ob->db_write($update);

$insert="insert into address(user_name,owner_email,product_id,quantity,total_cost,full_name,house_name,city,district,state,country,contact_number,pincode)
values('$email','$owneremail','$productid','$quantity','$cost','$fullname','$housename','$city1','$district1','$state1','$country1','$contact1','$pin')";
$res1=$ob->db_write($insert);

?><script>
	alert("Address details upload successfully.You have to pay Rs.<?php echo $cost?>");
	window.location='../../payment/web/index.php'
</script>;
<?php
}
}
?>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><img src="images/appointment.png" alt=" " /><h1>CHECKOUT<span>ZONE</span></h1></a>
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

	<form action="#" method="post" name="form">
					
					<table border="2" align="center" class="t1"><tr><th colspan="8" style="text-align: center;">
					PRODUCT DETAILS</th></tr>
				
					
						<tr style="height:70px;">
							<th>Product ID</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Offer</th>
							<th>Amount of 1 item</th>
						</tr>
						<tr bgcolor="white" style="height:70px;"><td><?php echo $productid?></td>
<td><?php echo $productname?></td>
<td><input type="text" name="quantity" required=""></td>
<td><?php echo $price?></td>
<td><?php echo $offer?></td>
<td><?php echo $total?></td></tr>
<tr><th colspan="8" style="height:50px; text-align: center;">DELIVERY ADDRESS</th></tr>
<tr ><td bgcolor="white">
						<b>Full Name</b></td><td bgcolor="white" colspan="8">
					
							
							<input class="form-control" type="text"  name="name" required="" value="<?php echo $name?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>House Name</b></td><td bgcolor="white" colspan="8">
						
							
							<input class="form-control" type="text"  name="house"  required="" value="<?php echo $house?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>City</b></td><td bgcolor="white"  colspan="8">
						
							
							<input class="form-control" type="text"  name="city"  required="" value="<?php echo $city?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>District</b></td><td bgcolor="white" colspan="8">
						
							
							<input class="form-control" type="text"  name="district"  required=""  value="<?php echo $district?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>State</b></td><td bgcolor="white" colspan="8">
						
							
							<input class="form-control" type="text"  name="state"  required="" value="<?php echo $state?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
							<b>Country</b></td><td bgcolor="white" colspan="8">
							
							<input class="form-control" type="text"  name="country"  required="" value="<?php echo $country?>">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>Contact Number</b></td><td bgcolor="white" colspan="8">
						
							
							<input class="form-control" type="text"  name="contact"  required="" value="<?php echo $contact?>"  pattern="[+0-9]{13}" onfocus="(this.value='+91')">
							<div class="clearfix"></div>
						</td></tr><tr><td bgcolor="white">
						<b>Pincode</b></td><td bgcolor="white" colspan="8">
						<input class="form-control" type="text"  name="pin"  required="" placeholder="Pincode">
							<div class="clearfix"></div>
							</td></tr>
							
					</table><div><br>
						<p align="center">
						 <button type="submit" name="sub" class="btn btn-danger">Deliver to this address</button></p></div></form>
		<br><p align="center"><a href="address2.php?id1=<?php echo $productid;?>">	<button type="submit"  class="btn btn-danger">Add a new address</button></a>
					
					
			
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