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
<title> </title>
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
$productid=$_GET['id'];

$ob=new db_operations();
$sel="select * from product where product_id='$productid'";
$res=$ob->db_write($sel);
$total=mysqli_num_rows($res);
						
						if($total!=0)
					
					{
						$row=mysqli_fetch_array($res);
$name=$row['product_name'];
					}

if(isset($_POST['update']))
{
	
	$productname=$_POST['name'];
	$price=$_POST['price'];
	$stock=$_POST['stock'];
	$code=$_POST['code'];
	$expiry=$_POST['date'];
	$offer=$_POST['offer'];
	$quantity1=$_POST['quantity1'];
     $file_name = $_FILES['pic']['name'];
      $file_size =$_FILES['pic']['size'];
      $file_tmp =$_FILES['pic']['tmp_name'];
      $file_type=$_FILES['pic']['type'];
       $extensions= array("jpeg","jpg","png");
       if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../../uploads/".$file_name);
     }
	$update="update product SET product_name='$productname',product_code='$code',price='$price',stock='$stock',expiry_date='$expiry',offer='$offer',image='$file_name',quantity='$quantity1' where owner_email='$email' and product_id='$productid'";
$res=$ob->db_write($update);
?>
<script>
	alert("Updated successfully");
	window.location='product.php'
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
					 <script>
                                    function setfilename()
                                    {
                                        var fileName=document.getElementById("profile").value;
                                        var file1=fileName.substr(fileName.lastIndexOf("\\")+1,fileName.length);
                                        document.getElementById("profile_pic").value=file1;
                                    }
                                </script>
					<h3>PRODUCT GALLERY</h3>
					<form action="#" method="post" name="form" enctype="multipart/form-data">
						<b>Product's name</b>
						<div class="key">
							
							<input  type="text"  name="name" value="<?php echo $name;?>">
							<div class="clearfix"></div>
						</div>
						<b>Product's code</b>
						<div class="key">
							
							<input  type="text"  name="code"  value="<?php echo $row[2];?>" required="">
							<div class="clearfix"></div>
						</div>
						<b>Price</b>
						<div class="key">
							
							<input  type="text"  name="price"   value="<?php echo $row[4];?>" required="">
							<div class="clearfix"></div>
						</div>
						<b>Stock</b>
						<div class="key">
							
							<input  type="text"  name="stock"  value="<?php echo $row[5];?>" required="">
							<div class="clearfix"></div>
						</div>
						<b>Offer in %</b>
						<div class="key">
							
							<input  type="text"  name="offer"   value="<?php echo $row[9];?>" required="">
							<div class="clearfix"></div>
						</div>
						<b>Expiry Date</b>
							<div class="key">
							Expiry date&nbsp;&nbsp;&nbsp;&nbsp;<input  type="date"  name="date"  value="<?php echo $row[6];?>" required=""  placeholder="Expiry Date">
							<div class="clearfix"></div>
						</div>
						<b>Quantity with gram or ml</b>
						<div class="key">
							
							<input  type="text"  name="quantity1"   value="<?php echo $row[10];?>" required=""  placeholder="">
							<div class="clearfix"></div>
						</div>

						<b>Product's image</b>
						
						<div class="key">
							
							<input  type="file"  name="pic"  required=""  value="<?php echo $row[8];?>">
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