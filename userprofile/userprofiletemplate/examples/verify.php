<?php
 require_once("../../../db.class.php");
 $ob=new db_operations();
 $email=$_GET['id1'];
 $update="update registration set status='1' where user_name='$email'";
 $ob->db_read($update);
?>
<script>
	alert("Approved Successfully");
	window.location='patient.php'
</script>;


