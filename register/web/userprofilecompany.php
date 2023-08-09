<html>
<head>
	</head>
	<body>
<?php
	session_start();
	require_once("../../db.class.php");
	$ob=new db_operations();
	$fullname=$_SESSION['name'];
	$email=$_SESSION['user_name'];
	$pass=$_SESSION['password'];
	$contact=$_SESSION['contact'];
	$house=$_SESSION['house'];
	$city=$_SESSION['city'];
	$district=$_SESSION['district'];
	$state=$_SESSION['state'];
	$country=$_SESSION['country'];
	$gender=$_SESSION['gender'];
	$birth=$_SESSION['birth'];
	$company=$_POST['company'];
	$license=$_POST['license'];
	$phone=$_POST['contact'];
	$category=$_POST['category'];
	$com_city=$_POST['city'];
	$com_country=$_POST['country'];
	$com_state=$_POST['state'];
	$com_district=$_POST['district'];
	$sel1="select * from company where license_number='$license'";
	$result=$ob->db_read($sel1);
	if(mysqli_num_rows($result))
	{
		?>
		<script>
			alert("Company already exists");
			window.location='companyindex.php'
		</script>;
		<?php
	}
	else{
	$insertl="insert into login(user_name,password,user_type) values('$email','$pass','1')";
	$insertr="insert into registration(full_name,user_name,house_name,city,district,state,country,contact_number,gender,date_of_birth,status) values('$fullname','$email','$house','$city','$district','$state','$country','$contact','$gender','$birth','0')";
	$insertc="insert into company(company_name,user_name,license_number,contact_number,category,company_city,company_district,company_state,company_country) values('$company','$email','$license','$phone','$category','$com_city','$com_district','$com_state','$com_country')";
	$resl=$ob->db_write($insertl);
	$resr=$ob->db_write($insertr);
$resc=$ob->db_write($insertc);
if(!$resl || !$resr || !$resc)
	{
		$ob->db_write("delete from login where user_name='$email'");
        $ob->db_write("delete from registration where user_name='$email'");
		$ob->db_write("delete from company where user_name='$email'");
		?>
<script>
	alert("Account creation failed");
	window.location='companyindex.php'
</script>;
<?php
}
	else
	{
		$ob->db_write($insertl);
	$ob->db_write($insertr);
	$ob->db_write($insertc);
	?>
<script>
	alert("Registration is partially completed.Your account is subjected for admin verification.");
	window.location='../../home/Home_Page_Sethulakshmi/web/index.html'
</script>;
<?php
	
	}
	}
	?>
</body>
</html>