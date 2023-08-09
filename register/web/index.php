<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Stylish Register Form Responsive Widget Template :: w3layouts</title>
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
	
	<br><br><br><div class="main-content-agile">
		
		<div class="sub-main-w3">
			
			<form action="details1.php" method="post">
				<div class="form-style-agile">
					<label>Your Name</label>
					<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>
						<input placeholder="Your Name" name="Name" type="text" required="" pattern="([^\s][A-Za-z\s]+)">
					</div>
				</div>
				<div class="form-style-agile">
					<label>Email</label>
					<div class="pom-agile">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input placeholder="Email" name="Email" type="email" title="Invalid mail format" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,3}$">
					</div>
				</div>
				<div class="form-style-agile">
					<label>Contact Number</label>
					<div class="pom-agile">
						<span class="fa fa-phone" aria-hidden="true"></span>
						<input placeholder="Contact Number" name="Contact" type="text" required="" pattern="[+0-9]{3}[1-9]{1}[0-9]{9}" onfocus="(this.value='+91')">
					</div>
				</div>
				<div class="form-style-agile">
					<label>Password</label>
					<div class="pom-agile">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input placeholder="Password" name="Password" type="password" id="password1" required="" minlength="8" maxlength="20">
					</div>
				</div>
				<div class="form-style-agile">
					<label>Confirm Password</label>
					<div class="pom-agile">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input placeholder="Confirm Password" name="Confirm Password" type="password" id="password2" required="" minlength="8" maxlength="20">
					</div>
				</div>
				
				<input type="submit" value="Next">
				</div>
				
			</form>
		</div>
		<div class="img-w3layouts">
			<img src="images/gallery-7.png" alt="">
		</div>
	</div>
	<!-- //content -->
	<!-- footer -->
	
	<!-- //foote r-->


	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

</body>

</html>