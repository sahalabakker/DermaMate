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
<script language="javascript" type="text/javascript">
function calculate()
{

var d=new Date();
var n=new Date(document.form.Birth.value);
var a=d.getFullYear()-n.getFullYear();
var a1=d.getMonth()-n.getMonth();
if(a1<0 || (a1==0 && d.getDate()<n.getDate())){
	a--;
}
if(a>=18){
return(true);
}
else{
alert("Sorry your age is less then 18.");
	return(false);

}
}


</script>
</head>

<body>
	<!-- header -->
	
	<!-- content -->
	<?php
	
	$ob=new db_operations();
	$_SESSION['name']=$_POST['Name'];
	$_SESSION['user_name']=$_POST['Email'];
	$_SESSION['password']=$_POST['Password'];
	$_SESSION['contact']=$_POST['Contact'];
	$email=$_POST['Email'];
	
	$phone=$_POST['Contact'];
	$sel1="select * from registration where user_name='$email'";
	$sel2="select * from registration where contact_number='$phone'";
	$res1=$ob->db_read($sel1);
	$res2=$ob->db_read($sel2);
	if(mysqli_num_rows($res1))
	{
		?>
		<script>
			alert("User already exist");
			window.location='doctorindex.php'
		</script>;
		<?php

	}
	if(mysqli_num_rows($res2))

	{?>
		<script>
			alert("Contact number already exist");
			window.location='doctorindex.php' 

		</script>;
		<?php
	}
?>
	<div class="main-content-agile">
		<div class="sub-main-w3">
			
			<form action="hospitaldetails.php" method="post" name="form" onsubmit="return(calculate())">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2 style="color:#093fed;">Go to</h2>&nbsp;<a href="" >Home Page</a>&nbsp;<span class="fa fa-home" aria-hidden="true"></span> <br><br><br>
				

				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">House Name</h3></label>
					<div class="pom-agile">
						
						<input placeholder="House Name" name="House" type="text" required="" pattern="([^\s][A-Za-z\s]+)">
					</div>
				</div>
				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">City</h3></label>
					<div class="pom-agile">
						
						<input placeholder="City" name="City" type="text" required="" pattern="([^\s][A-Za-z\s]+)">
					</div>
				</div>
				
				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">Country</h3></label>
					<div class="pom-agile">
						
						<select name="Country" id="country" required="">
							<option value="" disabled selected hidden>Country</option>
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
						<select name="State" id="state" required="">
							<option value="" disabled selected hidden>State</option>
						
							
							</select> 
						
						
					</div>
				</div>
			

				<div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">District</h3></label>
					<div class="pom-agile">
				
						<select name="District" id="district" required="">
							<option value="" disabled selected hidden>District</option>
						
							</select> 
						
						
					</div>
				</div>
				
				<br><br><div class="form-style-agile">
					<label><h3 style="font-size:18px; font-style: italic;">Gender</h3></label><br>
					
						<span class="fa fa-male" aria-hidden="true"></span>
						<input type="radio" name="Gender" value="0">Male &nbsp;&nbsp;
						<span class="fa fa-female" aria-hidden="true"></span>
						<input type="radio" name="Gender" value="1">Female
					<span class="fa fa-transgender" aria-hidden="true"></span>
						<input type="radio" name="Gender" value="2">Others
					</div>
				<div class="form-style-agile"><br>
					<label><h3 style="font-size:18px; font-style: italic;">Date Of Birth</h3></label>
					<div class="pom-agile">
						<span class="fa fa-calendar" aria-hidden="true"></span>
						<input placeholder="yyyy/mm/dd" name="Birth" type="Date"  required="">
					</div>
				</div>
				
				<input type="submit" value="Next">
			
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