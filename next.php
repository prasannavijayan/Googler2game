<?php

$answer = $_POST['answer'];
$id = $_POST['id'];
define(id,$id);
include('config.php');

$sql = mysql_query("SELECT * FROM goog WHERE answer='$answer' AND id='$id'");
$count = mysql_num_rows($sql);

if($count == 1)
{
  
  $no = $id + 1;
  

  echo "<img src=disp.php?id=".$no." width=300 >";
  $clue  = mysql_query("SELECT * FROM goog WHERE id='$no'");
$row = mysql_fetch_array($clue);
echo "<title>" . $row['clue'] ."</title>";
  echo "<input type=hidden value=".$no." id=id name=res >"; 
 
}

if($count != 1)
{
echo "<img src=disp.php?id=".$id." width=300 >";
$clue  = mysql_query("SELECT * FROM goog WHERE id='$id'");
$row = mysql_fetch_array($clue);
echo "<title>" . $row['clue'] ."</title>";
echo "<input type=hidden value=".$id." id=id name=res ><br>";
echo "<font color=orange>Try again ! ! !</font>";
}
?>
