<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
<?php
session_start();

if($_SESSION['status']!="Active")
{
    header("location:../../../login/web/index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

</head>

<body>
   <?php
   require_once("../../../db.class.php");
   $ob=new db_operations();
   $email=$_SESSION['user_name'];
   if(isset($_POST['sub']))
   {
    $name1=$_POST['fullname'];
     $phone1=$_POST['contact'];
    $pass1=$_POST['password'];
       $house1=$_POST['house'];
        $city1=$_POST['city'];
         $district1=$_POST['district'];
          $state1=$_POST['state'];
           $country1=$_POST['country'];
            $dob1=$_POST['birth'];
            $gender1=$_POST['gender'];
            if($gender1=="Male")
                $gender1=0;
            else if($gender1=="Female")
            $gender1=1;
            else
                $gender1=2;
            $sel2="select * from registration where contact_number='$phone1' except select * from registration where user_name='$email'";
            $res2=$ob->db_read($sel2);
            if(mysqli_num_rows($res2))
            {
                ?>
                <script>
                    alert("Phone number already exists");
                    window.location='user.php'
                </script>;
                <?php
            }
            else
            {
            $update1="update registration SET full_name='$name1',house_name='$house1',contact_number='$phone1',city='$city1',district='$district1',state='$state1',country='$country1',date_of_birth='$dob1',gender='$gender1' where user_name='$email'";
            $update2="update login SET password='$pass1' where user_name='$email'";
            $ob->db_write($update1);
            $ob->db_write($update2);
   }
   
   }
   $sel="select * from registration where user_name='$email'";
   $sel1="select * from login where user_name='$email'";
   $res=$ob->db_read($sel);
   $arr=mysqli_fetch_array($res);
   $res1=$ob->db_read($sel1);
   $arr1=mysqli_fetch_array($res1);
   $name=$arr['full_name'];
   $phone=$arr['contact_number'];
   $pass=$arr1['password'];
   $house=$arr['house_name'];
   $city=$arr['city'];
   $district=$arr['district'];
   $state=$arr['state'];
   $country=$arr['country'];
   $dob=$arr['date_of_birth'];
   $gender=$arr['gender'];
   if($gender==0)
   $gender="Male";
   else if($gender==1)
   $gender="Female";
   else
   $gender="Others";
   ?>
   
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text"><b><center>DERMA MATE</center></b>
                        
                    </a>
                </div>
                <ul class="nav">
                   <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile </p>
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="../../../web/web/cart.php">
                            <i class="nc-icon nc-cart-simple"></i>
                            <p>My Cart</p>
                        </a>
                    </li>
                   <li>
                        <a class="nav-link" href="../../../web/web/recommended.php">
                            <i class="nc-icon nc-cart-simple"></i>
                            <p>My Orders</p>
                        </a>
                    </li>
                    
                   
                    <li>
                        <a class="nav-link" href="./appointmentnotification.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                      
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"></a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                           
                           
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="../../../logout.php" onclick="return confirm('Are you sure you want to logout?');">
                                    <i class="nc-icon nc-tap-01"></i>Logout
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form action="edit.php" method="POST" name="form">
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label><b>Name</b></label>
                                                    <input type="text" class="form-control" name="fullname" value="<?php echo $name ?>" required=""  pattern="([^\s][A-Za-z\s]+)" disabled>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><b>Email address</b></label>
                                                    <input type="email" class="form-control" name="email" value="<?php echo $email ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,3}$" required="" disabled>
                                                </div>
                                            </div>
                                        <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><b>Contact number</b></label>
                                                    <input type="text" class="form-control" name="contact" value="<?php echo $phone ?>" pattern="[+0-9]{3}[1-9]{1}[0-9]{9}" onfocus="(this.value='+91')" required="" disabled>
                                                </div>
                                            </div>
                                         <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1"><b>Password</b></label>
                                                    <input type="password" class="form-control" name="password" value="<?php echo $pass ?>" disabled>
                                                </div></div>
                                        </div>
                                       
                                        
                                            
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label><b>House name</b></label>
                                                    <input type="text" class="form-control" name="house" value="<?php echo $house ?>" disabled>
                                                </div>
                                            </div>
                                        <div class="col-md-6 pl-1">
                                           <div class="form-group">
                                                    <label><b>City</b></label>
                                                    <input type="text" class="form-control" name="city" value="<?php echo $city ?>" disabled>
                                                </div> 
                                        </div></div>
                                     <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label><b>District</b></label>
                                                    <input type="text" class="form-control" name="district" value="<?php echo $district ?>" disabled>
                                                </div>
                                            </div>
                                           
                                           
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label><b>State</b></label>
                                                    <input type="text" class="form-control" name="state" value="<?php echo $state ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label><b>Country</b></label>
                                                    <input type="text" class="form-control" name="country" value="<?php echo $country?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label><b>Date of birth</b></label>
                                                    <input type="date" class="form-control" name="birth" value="<?php echo $dob ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label><b>Gender</b></label>
                                                    <input type="text" class="form-control" name="gender" value="<?php echo $gender ?>" disabled>
                                                </div>
                                            </div>
                                          
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label></label>
                                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div><div>
                                  <a href="edit.php">  <button type="submit" class="btn btn-info btn-fill pull-right">Update</button></a>
                                      <a data-toggle="modal" data-target="#myModal">  <button style="margin-right: 10px;" type="submit" class="btn btn-danger btn-fill pull-right">Delete</button></a>
                                       
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="../assets/img/default-avatar.png" alt="...">
                                            <h5 class="title"><?php echo $name ?></h5>
                                        </a>
                                        <p class="description">
                                            <?php echo $email 
                                            ?>
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                       
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    
                                </a>
                            </li>
                        </ul>
                        
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
 <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                
                                <h3 style="color:blue; margin: 0 auto;">Do you want to delete</h3>
                                <a class="close" data-dismiss="modal">&times;</a>
                            </div>
                                <div class="modal-body"> 
                                   <div>
                                        <a href="delete.php"><button name="ok" class="btn btn-danger btn btn-fill">OK</button></a>
                                        <a href="user.php" ><button name="cancel" data-dismiss="modal" class="btn btn-info btn-fill">Cancel</button></a>
                                    </div>
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                </div>
                             
                   </div>
                    </div>
                </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
