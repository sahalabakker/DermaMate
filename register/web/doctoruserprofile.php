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

	$hospital_name=$_POST['hospital'];
	$staff_id=$_POST['staffid'];
	$govtid=$_POST['govtid'];
	$phone=$_POST['phone'];
	$hospital_city=$_POST['city'];
	$hospital_district=$_POST['district'];
	$hospital_state=$_POST['state'];
	$hospital_country=$_POST['country'];
	$expert=$_POST['expert'];
	$exp=$_POST['experience'];
	$qualification=$_POST['qualification'];
	$insertl="insert into login(user_name,password,user_type) values('$email','$pass','2')";
	$insertr="insert into registration(full_name,user_name,house_name,city,district,state,country,contact_number,gender,date_of_birth,status) values('$fullname','$email','$house','$city','$district','$state','$country','$contact','$gender','$birth','0')";
	$insertd="insert into dermatologist(hospital_name,user_name,doctor_id,govt_id,hospital_city,hospital_district,hospital_state,hospital_country,hospital_phone,expert,experience,qualification) values('$hospital_name','$email','$staff_id','$govtid','$hospital_city','$hospital_district','$hospital_state','$hospital_country','$phone','$expert','$exp','$qualification')";
	$resl=$ob->db_write($insertl);
	$resr=$ob->db_write($insertr);
$resd=$ob->db_write($insertd);
if(!$resl || !$resr || !$resd)
	{
		$ob->db_write("delete from login where user_name='$email'");
        $ob->db_write("delete from registration where user_name='$email'");
		$ob->db_write("delete from dermatologist where user_name='$email'");
		
		?>
<script>
	alert("Account creation failed");
	window.location='doctorindex.php'
</script>;
<?php
}
	else
	{
		$ob->db_write($insertl);
	$ob->db_write($insertr);
	$ob->db_write($insertd);
	$_SESSION['status']="Active";
	?>
<script>
	alert("Registration is partially completed.Your account is subjected for admin verification.");
	window.location='../../home/Home_Page_Sethulakshmi/web/index.html'
</script>;
<?php
	
	}
	?>
</body>
</html>