<?php

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($username))
{
ob_start();
include('config1.php');
$myuser = stripslashes($username);
$mypass = stripslashes($password);
$myuser = mysqli_real_escape_string($connect, $myuser);
$mypass = mysqli_real_escape_string($connect, $mypass);
$log = "SELECT team AND username FROM register WHERE team='$mypass' AND username='$myuser'";
$result = mysqli_query($connect,$log);
$count = mysqli_num_rows($result);
if($count == 1)
{
   session_register("admin");
   $_SESSION['username'] = $myuser;
   header("location:game.php");
}
else
{
header("location:index.php");
}
ob_end_flush();
}

?>

