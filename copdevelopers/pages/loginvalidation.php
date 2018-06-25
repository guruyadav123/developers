<?php
if(!isset($_POST['submit']))
header ('location:login.php');	
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'record');
$q="select email ,password from participent";
$data=mysqli_query($con ,$q);
$num=mysqli_num_rows($data);
mysqli_close($con);
for($i=0;$i<$num;$i++)
{
$row=mysqli_fetch_array($data);
if($row['email']==$email && $row['password']==$password)
{
 $t="U have been registered successfully...";
 break;
}
else
{
$t="Your email address and password did not match ..TRY AGAIN!!...";
}	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS </title>
<link rel="icon" type="image/gif" href="../images/icon.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
#A
{
border-left:3px solid white;
position:relative;
left:10%;
height:1px;	
}
</style>
<body onload="document.getElementById('mod').style.display='block'">
<div style="background:rgb(102, 255, 51);"class="w3-container "> 
<div class="w3-center w3-text-teal" >
<h2>UDYAM REGISTRATION 2K18 </h2>
</div>
<div class="w3-row-padding">
<div class="w3-row">
<div id="valid" style="background:rgb(255, 51, 204);"class="w3-cell w3-col l4 m5 s8 w3-text-teal w3-round w3-hide">
<p id="valid1" class="w3-center w3-text-white"></p>
</div>
</div>
<div class="w3-col s12 m12 l5 w3-card-4 w3-section w3-orange">
<div class="w3-text-white w3-cell">
<h3>Login to our site </h3>
<h4>Enter username and password to log on: </h4>
</div>
<div class="w3-cell w3-text-white w3-cell-middle">
<i class="fa fa-key fa fa-4x "> </i>
</div>
<form method="post" action="somefile.php" onsubmit=" return myfunc()">
<div class="w3-row w3-section"> 
<input type="text" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Email..." name="email" required>
</div>
<div class="w3-row w3-section"> 
<input type="password" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Password..." name="password" required>
</div>
<div class="w3-row w3-section"> 
<input type="submit" value="Sign in !" class="w3-input w3-hover-border-gray w3-hover-text-white w3-border w3-hover-gray w3-blue w3-border-blue w3-round"  name="submit">
</div>
</form>
</div>
<div id="A" class="w3-col s12 m12 l2 ">

</div>
<div class="w3-col s12 m12 l5  w3-section w3-card-4 w3-orange"> 
<div class="w3-text-white w3-cell">
<h3>Sign up now </h3>
<h4>Fill in the form below to get instant access:</h4>
</div>
<div class="w3-cell w3-text-white w3-cell-middle">
<i class="fa fa-pencil fa fa-4x "> </i>
</div>
<form method="post" action="8.php" onsubmit="return myfunc1()">
<div class="w3-section w3-row"> 
<input type="text" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Name..." name="name" required>
</div>
<div class="w3-section w3-row"> 
<input type="text" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Email..." name="email" required>
</div>
<div class="w3-section w3-row"> 
<input type="password" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Password..." name="password" required>
</div>
<div class="w3-section w3-row"> 
<input type="password" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Password(again)" name="password" required>
</div>
<div class="w3-section w3-row"> 
<input type="text" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Phone.." name="phone" required>
</div>
<div class="w3-section w3-row">
<select class="w3-select" name="gender" required> 
<option value =""disabled selected>Gender </option>
<option value="male">Male </option>
<option value="female">Female </option>
<option value="other">Other </option>
</select>
</div>
<div class="w3-section w3-row"> 
<input type="submit" value="Sign me up!" class="w3-input w3-border w3-hover-border-gray w3-hover-text-white w3-hover-gray w3-blue w3-border-blue w3-round" name="submit">
</div>
</form>
</div>
</div>
</div>
<div style="background:rgb(102,204,255);"class="w3-container  w3-center">
<p> © 2014-15 | Indian Institute of Technology (Banaras Hindu University), Varanasi. All Rights Reserved.</p>
<h5 class="w3-text-black">Developed and Maintained by Web Management & Email Services Committee, IIT(BHU)</h5>
<h2> Powered by w3.css </h2>
</div>
<div id="mod" class="w3-modal">
<div  style=" background:rgb(255, 255, 204);"class="w3-modal-content w3-display-container">
<a href="login.php" class="w3-button w3-display-topright">&times;</a>
<h2 class="w3-text-gray w3-center"> CONGRATUATIONS FOR EVENT !!!! </h2>
<h3 class="w3-text-blue w3-center"> <?php echo $t;
?></h3>
</div>
</div>
<script> 
function myfunc()
{
var text=document.getElementsByName('email')[0].value;
 var b=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(text);
 if(b==false)
 {
  var p=document.getElementById('valid');
  var q=document.getElementById('valid1');
  q.innerHTML="Please fill out valid email address";
  p.className=p.className.replace(' w3-hide',' w3-show');  
 }
 else
 {
  p.className=p.className.replace(' w3-show',' w3-hide');  
 }	 	 
return b;
}	
function myfunc1()
{
var t;	
var p=document.getElementById('valid');
var q=document.getElementById('valid1');
var a=document.getElementsByName('name')[0].value;
var b=/^[A-Za-z _.+]+$/.test(a);
var c=document.getElementsByName('email')[1].value;	
var d=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(c);
var e=document.getElementsByName('phone')[0].value;	
var f=/^[0-9]{10}$/.test(e);
var m1= document.getElementsByName('password')[1].value;	
var m2= document.getElementsByName('password')[2].value;

 if(b==false)
 {
  q.innerHTML="Please fill out valid Name format";
  p.className=p.className.replace(' w3-hide',' w3-show'); 
  t=b;  
 }
 else
 {
  if(d==false)
 {
  q.innerHTML="Please fill out valid email address";
  p.className=p.className.replace(' w3-hide',' w3-show');  
  t=d;
 }
else
{
  if(m1!=m2)
  {
   q.innerHTML="Password should be matched";
   p.className=p.className.replace(' w3-hide',' w3-show');  
   t=false;
  }	  
  else
  { 
 if(f==false)
 {
  q.innerHTML="Please fill out valid mobile number";
  p.className=p.className.replace(' w3-hide',' w3-show');  
  t=f;
 }	
 else
 {
  p.className=p.className.replace(' w3-show',' w3-hide');  
  t=true;  
 }
}	
}
}
 return t;
}
</script>
</body>
</html>