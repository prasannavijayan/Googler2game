<?php

$connect = mysql_connect("localhost","root","root");

if(!$connect)
die("Could not Connect");

mysql_select_db("googler2" , $connect);
?>
