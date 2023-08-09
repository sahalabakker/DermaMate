<?php
session_start();
require_once("../../db.class.php");
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Stylish Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- header -->
	
	<!-- content -->
	<?php
	$ob=new db_operations();
	
	$_SESSION['house']=$_POST['House'];
	$_SESSION['city']=$_POST['City'];
	$_SESSION['country']=$_POST['Country'];
	$_SESSION['state']=$_POST['State'];
	$_SESSION['district']=$_POST['District'];
	$_SESSION['gender']=$_POST['Gender'];
	$_SESSION['birth']=$_POST['Birth'];
	
?>
	<div class="main-content-agile">
		<div class="sub-main-w3">
			
			<form action="userprofilecompany.php" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2 style="color:#093fed;">Go to</h2>&nbsp;<a href="" >Home Page</a>&nbsp;<span class="fa fa-home" aria-hidden="true"></span> <br><br><br>
				

				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">Company Name</h3></label>
					<div class="pom-agile">
						
						<input placeholder="Company name" name="company" type="text" required="" pattern="([^\s][A-Za-z\s]+)">
					</div>
				</div>
				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">License Number</h3></label>
					<div class="pom-agile">
						
						<input placeholder="Company's License number" name="license" type="text" required="" pattern="([^\s][A-Za-z0-9\s]+)">
					</div>
				</div>
				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">Contact Number</h3></label>
					<div class="pom-agile">
						<span class="fa fa-phone" aria-hidden="true"></span>
						<input placeholder="Company's Contact Number" name="contact" type="text" required="" pattern="[+0-9]{3}[1-9]{1}[0-9]{9}" onfocus="(this.value='+91')">
					</div>
				</div>
				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">Category</h3></label>
					<div class="pom-agile">
						<select name="category" required="">
						<option value="" disabled selected hidden>Company's category</option>
						<option value="0" name="category">Skin</option>
						<option value="1" name="category">Hair</option>
						 <option value="2" name="category">Nail</option>
						</select>
					</div>
				</div>
				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">City</h3></label>
					<div class="pom-agile">
						
						<input placeholder="Company's City Name" name="city" type="text" required="" pattern="([^\s][A-Za-z\s]+)">
					</div>
				</div>
				
				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">Country</h3></label>
					<div class="pom-agile">
						
						<select name="country" id="country" required="">
							<option value="" disabled selected hidden>Company's Country Name</option>
							<?php
							$countryData="select id,country_name from country";
							$result=$ob->db_read($countryData);
							if(mysqli_num_rows($result)>0)
							{
								while($arr=mysqli_fetch_assoc($result))
								{
									?>
									<option value="<?php echo $arr['country_name']; ?>"><?php echo $arr['country_name'];?></option>
									<?php
								}
							}
							?>
							</select> 
					</div>
				</div>
				
				
				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">State</h3></label>
					<div class="pom-agile">
						<select name="state" id="state" required="">
							<option value="" disabled selected hidden>Company's State name</option>
						
							
							</select> 
						
						
					</div>
				</div>
			

				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">District</h3></label>
					<div class="pom-agile">
				
						<select name="district" id="district" required="">
							<option value="" disabled selected hidden>District</option>
						
							</select> 
						
						
					</div>
				</div>
				
				
		
				<div class="sub-agile">
					<input type="checkbox" id="brand1" value="" required="">
					<label for="brand1">
						<span></span>I Accept to the Terms & Conditions</label></div>
				<input type="submit" value="Register">
			
			</form>
		</div></div>
		<div class="img-w3layouts">
			<img src="images/gallery-7.png" alt="">
		</div>
	</div>
	<!-- //content -->
	<!-- footer -->
	
	<!-- //foote r-->


	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ajax-script.js" type="text/javascript"></script>
</body>

</html