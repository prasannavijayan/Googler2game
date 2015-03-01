<?php
include('config.php');

$msg='';
$name = $_POST['username'];
$col = $_POST['colname'];


//$i=1;
$register = "INSERT INTO register(name, collegename) VALUES('$name','$col')";

if(mysql_query($register,$connect))
{
   session_start();
   $_SESSION['username'] = $name;
   header("location:game.php?=$msg");

}
else
echo mysql_error();



?>
