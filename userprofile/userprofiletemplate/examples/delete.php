<?php
session_start();
require_once("../../../db.class.php");
   $ob=new db_operations();
   $email=$_SESSION['user_name'];
   $del="delete from login where user_name='$email'";
   $del1="delete from registration where user_name='$email'";
   $res=$ob->db_write($del);
   $res1=$ob->db_write($del1);
   session_destroy();
   header("location:../../../home/Home_Page_Sethulakshmi/web/index.html");
   ?>