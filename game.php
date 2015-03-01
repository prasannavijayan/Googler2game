<?php
session_start();
define(name,$_SESSION['username']);

if(!session_is_registered(admin))
{  header("location:index.php"); }
$name = name;
?>
<html>

<head>
<link href=google.png rel="SHORTCUT ICON" >
<style>
body
{
background-image:url('wood.jpg');
color:white;
background-size:auto;
margin-top:50px;
}
#image
{
margin-left:150px;
margin-top:70px;
float:left;
}
a#f,a#q,#time
{
margin-right:70px;
margin-top:70px;
float:right;
border:1px solid #BEBEBE;
padding:5px 5px 5px 5px;
 text-decoration:none;
  color:white; font-size:20;
}
p#ins
{

}
a:hover
{
box-shadow:3px 3px 3px #BEBEBE;

}
#in
{

font-size:40;
}
#user
{
font-size:20;
color:orange;
}
#cop
{
margin-top:200px;
}
#inff
{
margin-top:250px;
float:right;


}
</style>
<script src=jj.js ></script>


<script src="easing.js" type="text/javascript"></script>

<!--
<script>
$(document).ready(function() {

 $("#image").mouseover(function()  {
   $(this).stop().animate({height:'50px'},{queue:false, duration:600, easing: 'easeOutBounce'})
});
});

</script>-->
</head>
<body>
<div><in id=in>Googler II</in><in id=user> Welcome <?php echo $name;

 ?></in></div>
<hr><p id=ins>**Please do not Attempt to Refresh the page if you are , you will be eliminated. </p>
<script>
function chkanswer()
{
answer = $("#answer").val();
id = $("#id").val();
if($.trim(answer) == "") {
  $("#show_error").html("<font color=orange>Type your Answer !</font>");
  return false; }
else
{
   cred= {}
   cred['answer'] = answer;
   cred['id'] = id; 
   $(".img").html("<img src=load.gif >");
   $.post("next.php",cred,function(data) {
        $(".img").html(data);
});
}
}


</script>
<script language=JavaScript>
<!--



var message="System Ip is registered in Database! !";

function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// --> 
</script>
<div id=image>
<script>
$(document).ready(function() {
    $(".img").html('<img src=disp.php?id=1 width=300 ><title>Rovio Game</title><input type=hidden value=1 name=res id=id >');
});

</script>
<?php

$form = <<<EOD
<form onsubmit="return false" />
<div class=img></div><br><br><div id=show_error ></div>
Answer : <input  type=text name=answer id=answer ><br><br>
<button onclick=chkanswer();>Submit </button></form>
</div>
EOD;
echo $form;
?>
<div id=refer>
<a id=q href="logout.php" >Quit</a>
<in name="counter" id=time></in> 






<script> 
<!-- 
// 
 var sec=0 
 var minutes=20 
  

function display(){ 
 if (sec<=0){ 
    sec=60 
    minutes-=1 
 } 
 if (minutes<=-1){ 
    sec=0 
    minutes+=1 
 } 
 else 
    sec-=1 
    
    $("#time").html("<font>"+ 0 + " : " + minutes+" : "+sec + "</font>")
    setTimeout("display()",1000) 
  if(minutes == 0)
  window.location = 'index.php'; 
} 
display() 
--> 
</script> 

</div>
</body>
</html>








