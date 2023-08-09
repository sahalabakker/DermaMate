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
$ob=new db_operations();
$email=$_SESSION['user_name'];
if(isset($_POST['add']))
{
	$pname=$_POST['name'];
	$oemail=$_POST['oemail'];
	$expirydate=$_POST['expirydate'];
	$code=$_POST['code'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
	$offer=$_POST['offer'];
	$type=$_POST['type'];
	$quantity=$_POST['quantity'];
     $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
       $extensions= array("jpeg","jpg","png");
       if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../../uploads/".$file_name);
     }
	$insert="insert into product(product_name,product_code,owner_email,price,stock,expiry_date,product_type,image,quantity,offer) values('$pname','$code','$oemail','$price','$stock','$expirydate','$type','$file_name','$quantity','$offer')";

$res=$ob->db_write($insert);
?>
<script>
	alert("Product added successfully");
	window.location='../../companyprofile/userprofiletemplate/examples/dashboard.php'
</script>;
<?php
}
?>
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><img src="images/products.png" alt=" " /><h1>PRODUCT<span>GALLERY</span></h1></a>
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
		
		<div class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-left" aria-hidden="true"></i><a href="../../companyprofile/userprofiletemplate/examples/dashboard.php">Back to dashboard</a></div>
	</div>

</div>
	
	<div>
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>ADD PRODUCT</h3>
					<form action="#" method="post" name="form"  enctype="multipart/form-data">
						<div class="key">
							
							<input  type="text"  name="name" required=""  placeholder="Product Name">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="text"  name="code"  required=""  placeholder="Product Code">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="email"  name="oemail"  required=""  value="<?php echo $email;?>" >
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							
								<select name="type" required="">
						<option value="" disabled selected hidden>Product Category</option>
						<option value="0" name="type">Skin</option>
						<option value="1" name="type">Hair</option>
					
						</select>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="text"  name="price"  required=""  placeholder="Price">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="text"  name="stock"  required=""  placeholder="Stock">
							<div class="clearfix"></div>
						</div>
							<div class="key">
							Expiry date&nbsp;&nbsp;&nbsp;&nbsp;<input  type="date"  name="expirydate"  required=""  placeholder="Expiry Date">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="text"  name="offer"  required=""  placeholder="Offer in %">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="text"  name="quantity"  required=""  placeholder="Quantity with gram or ml">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							
							<input  type="file"  name="image"  required=""  placeholder="Product's image">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="ADD" name="add">
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