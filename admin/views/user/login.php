<?php
$lifetime=60;
session_start();
setcookie(session_name(),session_id(),time()+$lifetime);
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
	}
	else
	{
// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($connection,$username);
		$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
		$db = mysqli_select_db($connection,"blog_db");
// SQL query to fetch information of registerd users and finds user match.
		$sql = "select * from user where password='$password' AND user_name='$username'";
		$query = mysqli_query($connection,$sql);
		$rows = mysqli_num_rows($query);
		if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: http://localhost/blog_it/admin/?danhsach_loaitintuc"); // Redirecting To Other Page
} else {
	$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>