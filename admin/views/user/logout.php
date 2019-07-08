<?php
$lifetime=60;
session_start();
setcookie(session_name(),session_id(),time()+$lifetime);
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
?>