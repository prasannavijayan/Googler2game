<?php
$con = mysql_connect('localhost','root','campusconnect0812','googler2');

$image = mysql_query("SELECT image FROM test_image WHERE id=1");

while($row = mysql_fetch_array($image))
{
  header('content-type:image/jpg');
  echo "<img src=" .$row['image'].">"; 
}







  



?>


