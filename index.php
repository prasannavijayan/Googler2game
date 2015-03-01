


<html>
<head><title>Googler - Home</title><link href=google.png rel="SHORTCUT ICON" >
<style>
body
{
background-image:url('wood.jpg');

background-color:black;

background-size:auto;

color:white;

}
#regis_form,#login,#regisform
{
margin-top:150px;
margin-left:40px;

font-family:ubuntu;
}
#login
{ float:left; }

.intrc
{
margin-left:80px;
}
.button
{
border:1px solid #BEBEBE ;
padding:6px 6px 6px 6px;
text-align:center;margin-left:80px;
color:white;
}
.button:hover
{
box-shadow:2px 2px 2px #BEBEBE;
}
#but
{
text-decoration:none;
}
.form
{ float:left;
  margin-top:150px; }
.title
{
float:right;
font-size:70;
margin-top:250px;
margin-right:120px;
position:relative;
}
button
{


}

</style>
<script src=j.js></script>
<script src=jj.js></script>


<script>
$(document).ready(function() {
  $("#login").hide();
   $(".button").click(function() {
       $(".form").hide();
        $("#login").slideDown();
       
}); 
});
</script>
</head>
<body>

<div class=form>
<div class=intrc><h3>Instructions</h3>
  Welcome to 2'nd Round . Googler II , <br>
<br>
Well we have some rules to be followed . Before getting into the game Read the instructions. <br><br>

  <ul>
   <li>Register with your Name and College name .</li><br>
   <li>After starting the game you should not refresh the page .</li><br>
   <li>Type your answer in small letter and do not leave space .</li><br>
  </ul>
   Game Designed by T.M.Prasanna Vijayan, Second Year IT
</div>
<br><br>
<in class=button >Start Game ! ! </in>
</div>
<div class=title>
<!--<in id=g>G</in><in id=o>o</in><in class=o>o</in><in id=g>g</in><in id=l>l</in><in id=e>e</in><in id=r>r</in>II<br>-->
Googler II
</div>

<script>
function ValidateLogin()
{
username = $('#username').val();
password = $('#team').val();

if(($.trim(username) == "") || ($.trim(password) == "")) {
$('.show_error').html('<font color=red>Incorrect username/password</font>');
return false;
}
else
{
window.location = 'register.php';
}
}


</script>


<div id=login>
<form onsubmit="return false" />
<table>
<font color=orange size=19>Register To Google !</font><div class=show_error></div>
<tr><td>Fullname</td><td><input type=text name=username id=username ></td></tr>
<tr><td>College name</td><td><input type=text name=colname id=team ></td></tr>
<tr><td></td><td><button onclick=ValidateLogin();>Start Googling !</button></td></tr>
<tr></tr><tr><td></td></tr>
</table>

</form>
</div>

</body>
</html>


