<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"blog_db");
session_set_cookie_params(60);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql= "select user_name from user where user_name='$user_check'";
$ses_sql=mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: http://localhost/blog_it/admin/?danhsach_loaitintuc'); // Redirecting To Home Page
}
?>