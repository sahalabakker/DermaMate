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
  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, 
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
    function myFunction() {
        var email=document.getElementById("username").value;
        var emailpattern=new RegExp("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,3}$");
        var res=emailpattern.test(email);
       if(email.length==0)
       {
        alert("Please enter your username");
       }
        else if(res==true)
        {
        }
    else
    {
        alert("Incorrect mail format");
    }
    }
</script>
</head>


<body>
<?php
require_once("../../db.class.php");
$ob=new db_operations();
$message=" ";
if(isset($_POST['sub']))
{

$name=$_POST['email'];
$pass=$_POST['password'];
$select="select * from login where user_name='$name'";

$result=$ob->db_read($select);

$arr=mysqli_fetch_array($result);
$sel1="select * from registration";
$res1=$ob->db_read($sel1);
$arr1=mysqli_fetch_array($res1);
if(mysqli_num_rows($result)<=0 || $arr1[10]==0)
{
 $message="User not found";
}
else if($pass==$arr['1'])
{
    $_SESSION['user_name']=$arr['0'];
    $_SESSION['user_type']=$arr['2'];
   $_SESSION['password']=$arr['1'];
   $_SESSION['status']="Active";
    if($arr['2']==0)
    {
    header("Location:../../userprofile/userprofiletemplate/examples/dashboard.php");}
    else if($arr['2']==1)
    {
        header("Location:../../companyprofile/userprofiletemplate/examples/dashboard.php");
    }
else
{
    header("Location:../../doctorprofile/userprofiletemplate/examples/dashboard.php");
}
}
else
 {   
   $message="Invalid username or password"; 
}
}
if(isset($_POST['sub1']))
{
    require("Textlocal.class.php");
   $mess=" ";
    $email=$_POST['username'];
    $selectp="select contact_number from registration where user_name='$email'";
   $resultp=$ob->db_read($selectp);
   $arr=mysqli_fetch_array($resultp);
   if(mysqli_num_rows($resultp)<=0)
   {
$message="user not found";}
   else{
   $phone=$arr[0];
    $selectpass="select password from login where user_name='$email'";
    $resultpass=$ob->db_read($selectpass);
    $array=mysqli_fetch_array($resultpass);
    $pass=$array[0];
    $Textlocal=new Textlocal(false,false,'6YgJglLTPrk-q3gEv0RItxxYsH1YR6PmhqyyFnSRzJ');
    $numbers=array($phone);
    $sender='TXTLCL';
    $mess="This is your password:".$pass;
    $response=
    $Textlocal->sendSms($numbers,$mess,$sender);
   
}
}
?>
<br><br><br>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>

        
        <form action="" method="POST">

            <div class=" w3l-form-group">
                <label>User Name:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,3}$" title="Invalid mail format" required="">
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
            </div>
            
                 <p align="right"><input type="checkbox">Remember Me</p>
            
            
          <h3> <center> <font color="red"><?php
            echo $message
            ?></font></center></h3>
            <br>
            <button type="submit" name="sub">Login</button>
        </form>
                <div class="forgot">
                <a data-toggle="modal" data-target="#myModal"><font color="blue">Forgot Password?</font></a>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">&times;</a>
                                <h4 class="modal-title">Forgot password</h4>
                            </div>
                            <form action="" method="POST" name="myForm">
                            <div class="modal-body">
                                <p>
                                    <input type="email" class="form-control" name="username" placeholder="Enter your username" id="username"onblur="return(myFunction())" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,3}$"><br>
                               
                                <button type="submit" name="sub1">Send</button>
                                </p>
                            </div>
                            <div class="modal-footer">
                            </div>
                       </div>
                       </form> 
                   </div>
                    </div>
                </div>
              
             
        <p class=" w3l-register-p">Don't have an account?<a data-toggle="modal" data-target="#myModal1" class="register"> Register</a></p>
        
    
    <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">&times;</a>
                                <h4 class="modal-title"></h4>
                            </div>
                            
                            <div class="modal-body">
                                <p><b><h2><center>Want to Register as..</center></h2></b><br>
                                    <figure><figcaption>&nbsp;&nbsp;&nbsp;&nbsp;<b>Customer</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Dermatologist</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Product company</b></figcaption></figure>
                                    <a href="../../register/web/index.php">

                               <img src="images/customer.png" alt="Avatar" class="avatar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               
                                <a href="../../register/web/doctorindex.php">
                               <img src="images/doctor1.png" alt="Avatar" class="avatar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               
                               <a href="../../register/web/companyindex.php">
                               <img src="images/company.png" alt="Avatar" class="avatar">&nbsp;&nbsp;&nbsp; 
                                </p>
                            </div>
                            <div class="modal-footer">
                            </div></div></div></div></div>

</body>

</html>