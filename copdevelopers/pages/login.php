<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS </title>
<link rel="icon" type="image/gif" href="../images/icon.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
#A
{
border-left:1px solid white;
height:1px;	
}
</style>
</head>
<body>
<div style="background:rgb(102, 255, 51);"class="w3-container "> 
<div class="w3-center w3-text-teal" >
<h1>UDYAM REGISTRATION 2K18 </h1>
<h2 class="w3-text-orange"> DAYS TO GO -></h2>
</div>
<div style="background:rgb(102, 255, 51);" class="  w3-container">
<div class="w3-cell w3-col s3 m3 l3 w3-padding w3-center "> 
<p class="w3-text-black ">DAYS </p> 
<span  class="demo w3-large w3-tag w3-circle"> </span>
</div>
<div class="w3-cell w3-col s3 m3 l3 w3-padding w3-center">
<p class="w3-text-black ">HOUR </p> 
<span  class="demo w3-large w3-tag w3-circle"> </span>
</div>
<div class="w3-cell w3-col s3 m3 l3 w3-padding w3-center">
<p class="w3-text-black ">MINUTE </p> 
<span  class="demo  w3-large w3-tag w3-circle"> </span>
</div>
<div class="w3-cell w3-col s3 m3 l3 w3-padding w3-center">
<p class="w3-text-black ">SECOND </p> 
<span  class="demo w3-large w3-tag w3-circle"> </span>
</div>
</div>
<div class="w3-row-padding">
<div class="w3-row">
<div  class="w3-cell w3-content w3-col l4 m12 s12 w3-text-teal w3-round ">
<p id="valid1" style='font-weight:bold;'class="w3-center w3-text-red w3-large w3-padding"></p>
</div>
</div>
<div  class="w3-col s12 m12 l5 w3-card-4 w3-section w3-orange">
<div class="w3-text-white w3-cell">
<h3>Login to our site </h3>
<h4>Enter username and password to log on: </h4>
</div>
<div class="w3-cell w3-text-white w3-cell-middle">
<i class="fa fa-key fa fa-4x "> </i>
</div>
<form method="post" action="loginvalidation.php" onsubmit=" return myfunc()">
<div class="w3-row w3-section"> 
<input type="text" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round"  placeholder="Email..." name="email" required>
</div>
<div class="w3-row w3-section"> 
<input type="password" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Password..." name="password" required>
</div>
<div class="w3-row w3-section"> 
<input type="submit" value="Sign in !" class="w3-input w3-hover-border-gray w3-hover-text-white w3-border w3-hover-gray w3-blue w3-border-blue w3-round"  name="submit">
</div>
</form>
</div>
<div id="A"style="background:rgb(102, 255, 51);" class=" w3-col l2 m12 s12 w3-center"> 

</div>
<div class="w3-col s12 m12 l5 w3-section  w3-card-4 w3-orange"> 
<div class="w3-text-white  w3-cell">
<h3>Sign up now </h3>
<h4>Fill in the form below to get instant access:</h4>
</div>
<div class="w3-cell w3-text-white w3-cell-middle">
<i class="fa fa-pencil fa fa-4x "> </i>
</div>
<form method="post" action="sendlogindata.php" onsubmit="return myfunc1()">
<div class="w3-section w3-row"> 
<input type="text" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Name..." name="name" required>
</div>
<div class="w3-section w3-row"> 
<input type="text" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Email..." name="email" required>
</div>
<div class="w3-section w3-row"> 
<input id='pass' type="password" class="w3-input w3-border w3-hover-border-blue w3-border-white w3-round" placeholder="Password..." name="password" required>
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
</div>
<div style="background:rgb(153, 51, 255);"class="w3-container w3-center"> 
<a href="#" class="w3-text-white w3-button w3-circle w3-pink w3-hover-red"><i class="fa fa-facebook fa fa-2x"> </i> </a>
<a href="#" class="w3-text-white w3-button w3-circle w3-pink w3-hover-red"><i class="fa fa-instagram fa fa-2x"> </i> </a>
<a href="#" class="w3-text-white  w3-button w3-circle w3-pink w3-hover-red"><i class="fa fa-twitter fa fa-2x"> </i> </a>
<h2 class="w3-text-black w3-center"> Powered by w3.css </h2>
</div>
<script> 
foo();
function foo()
{
var a = new Date('6 april 2019');
var b= new Date();
var c=a.getTime();
var d= b.getTime();
var e=c-d;
var s= Math.floor(e/1000);
var m=Math.floor(s/60);
var h=Math.floor(m/60);
var day= Math.floor(h/24);
h=h%24;
m=m%60;
s=s%60+1;
var x=document.getElementsByClassName("demo");
x[0].innerHTML=day;
x[1].innerHTML=h;
x[2].innerHTML=m;
x[3].innerHTML=s;
setTimeout(foo,1000);
}
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
var q=document.getElementById('valid1');
var a=document.getElementsByName('name')[0].value;
var b=/^[A-Za-z _.+0-9]+$/.test(a);
var c=document.getElementsByName('email')[1].value;	
var d=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(c);
var e=document.getElementsByName('phone')[0].value;	
var f=/^[0-9]{10}$/.test(e);
var m1= document.getElementsByName('password')[1].value;	
var m2= document.getElementsByName('password')[2].value;

 if(b==false)
 {
  q.innerHTML="Please fill out valid Name format.";
  t=b;  
 }
 else
 {
  if(d==false)
 {
  q.innerHTML="Please fill out valid email address.";  
  t=d;
 }
else
{
  if(m1!==m2)
  {
   q.innerHTML="Password should be matched.";
   t=false;
  }	  
  else
  { 
 if(f==false)
 {
  q.innerHTML="Please fill out valid mobile number.";
  t=f;
 }	
 else
 { 
  t=true;  
 }
}	
}
}
 return t;
}
$(document).ready(function(){
$('#pass').keyup(function (){
var name=$(this).val();	
$.post('loginajax.php',{data:name},function(data,status) {
$('#valid1').text(data);	
})
});	
});

</script>
</body>
</html>