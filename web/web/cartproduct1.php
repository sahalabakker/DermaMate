<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
 ?>
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
						$cartid=$_GET['id1'];
						$email=$_SESSION['user_name'];
						$sel="select * from cart where cart_id='$cartid'";
						$res=$ob->db_read($sel);
						$arr=mysqli_fetch_array($res);
						
						$sel1="select * from product where product_id IN(select product_id from cart where cart_id='$cartid')";
						$res1=$ob->db_read($sel1);
						$arr1=mysqli_fetch_array($res1);
						$quantity=$arr['quantity'];
						$name=$arr1['product_name'];
						$productid=$arr1['product_id'];
						$code=$arr1['product_code'];
						$stock=$arr1['stock'];
						$date=$arr1['expiry_date'];
						$offer=$arr1['offer'];
						
						$pic=$arr1['image'];
						
						if(isset($_POST['remove']))
						{
							$del="delete from cart where cart_id='$cartid'";
					
					$res2=$ob->db_write($del);
				header("location:cartproduct.php");
				
					
						}
						
						?>
						
<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index2.php"><img src="images/appointment.png" alt=" " /><h1>PRODUCT<span>GALLERY</span></h1></a>
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
						echo("<h3>".$name."</h3>");
						echo("<h3>Product Code:".$code."</h3></p>");
echo("<h3>Ordered Quantity:".$quantity."</h3></p>");
						?>
						
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">No.of reviews</li>
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul><li><h4 style="font-size: 25px;">
								<?php
								echo("</h4>Stock:".$stock."</h4></br>");
								echo("</h4>Offer:".$offer."%</h4>");?></h4></li> 
								<br><br>
							<div>
								<li style="font-size: 25px;"><a href="#">
								<?php
								echo("</h4>Expiry Date:".$date."</h4></br>");
							
								
						
						
						
					
						?></a>
						</li></div></ul></div>	<br><br>
						
						<form action="address.php?id=<?php echo $productid;?>" method="post">
						<button type="submit" name="buy" class="w3ls-cart">Buy now</button>	
					 <a data-toggle="modal" data-target="#myModal">  <button type="submit" class="w3ls-cart">Remove from cart</button></a>	
						</form>
					
					</div>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				
			<!-- collapse-tabs -->
			
		</div>
	</div>
<!-- newsletter --><div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                                <h3 style="color:blue; margin: 0 auto;">Do you want to remove</h3>
                                <a class="close" data-dismiss="modal">&times;</a>
                            </div>
                            <form action="#" method="POST" name="myForm">
                                <div class="modal-body"> 
                                   <div>
                                        <button name="remove" class="btn btn-danger btn btn-fill">OK</button></a>
                                        <a href="cartproduct1.php" ><button name="cancel" data-dismiss="modal" class="btn btn-info btn-fill">Cancel</button></a>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                </div>
                            </form> 
                   </div>
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
