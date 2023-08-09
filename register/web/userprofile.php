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
	$house=$_POST['House'];
	$city=$_POST['City'];
	$district=$_POST['District'];
	$state=$_POST['State'];
	$country=$_POST['Country'];
	$gender=$_POST['Gender'];
	$birth=$_POST['Birth'];
	$insertl="insert into login(user_name,password,user_type) values('$email','$pass','0')";
	$insertr="insert into registration(full_name,user_name,house_name,city,district,state,country,contact_number,gender,date_of_birth,status) values('$fullname','$email','$house','$city','$district','$state','$country','$contact','$gender','$birth','1')";
	
	$resl=$ob->db_write($insertl);
	$resr=$ob->db_write($insertr);
if(!$resl || !$resr)
	{
		$ob->db_write("delete from login where user_name='$email'");
        $ob->db_write("delete from registration where user_name='$email'");
		?>
<script>
	alert("Account creation failed");
	window.location='index.php'
</script>;
<?php
}
	else
	{
		$ob->db_write($insertl);
	$ob->db_write($insertr);
	$_SESSION['status']="Active";
	header("location:../../userprofile/userprofiletemplate/examples/dashboard.php");
	}
	?>
</body>
</html>