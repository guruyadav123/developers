<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Gaurav Yadav">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel ="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" href="icon.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title>W3.CSS </title>
</head>
<body style="background:rgb(255, 204, 153);">
<div style="background:rgb(255, 204, 153);"class="w3-container w3-center w3-text-blue"> 
<img src="sponsor.jpg" alt="one" width="100%"  height="auto" style="max-width:500px;">
<h1 class="w3-center w3-text-blue">DAYS TO GO -> </h1>
<div class="w3-row">
<div class="w3-cell w3-col s3 m3 l3 w3-padding w3-center">
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
<h1 style="font-weight:bold;">SPONSOR US FOR <span class="w3-text-pink">UDYAM</span>  2K19 </h1>
</div>
<div style="background:rgb(255, 204, 153); max-width:600px;" class="w3-content ">
<p id="ajax"class="w3-center w3-large w3-padding w3-text-red">
<?php if(isset( $_SESSION['$error'] ))
	echo $_SESSION['$error'] ;
session_unset();
session_destroy();
?>
</p>
</div>
<div style="background:rgb(255, 204, 153);" class="w3-container"> 
<form  method="post" action="14.php" enctype="multipart/form-data">
<div  onmouseover="effect()" onmouseout="effect1()" style="background:rgb(255, 0, 255); max-width:600px;" class="A w3-card-4 w3-container w3-padding w3-content">
<label class="w3-text-white w3-xlarge">Name <sup class="w3-text-black">* </sup> </label><span class="w3-right w3-text-white"><span class="w3-text-black">* </span>required </span>
<input  id="B" onfocus ="func('B')" onblur ="func2('B')" style="border:2px solid orange;" class="w3-input w3-round " type="text" name="user" required> 
<label   class="w3-text-white w3-xlarge">Position <sup class="w3-text-black">* </sup>   </label>
<input   id="C" onfocus ="func('C')" onblur ="func2('C')" style="border:2px solid orange;"  class="w3-input w3-round" type="text" name="position" required> 
<label class="w3-text-white w3-xlarge">Phone Number</label>
<input  id="D"  onfocus ="func('D')" onblur ="func2('D')" style="border:2px solid orange;"  class="w3-input w3-round" type="text" name="phone"> 
<label class="w3-text-white w3-xlarge">Email <sup class="w3-text-black">* </sup>  </label>
<input  id="E"  onfocus ="func('E')" onblur ="func2('E')" style="border:2px solid orange;"  class="w3-input w3-round" type="text" name="email" required> 
<label class="w3-text-white w3-xlarge">Organization <sup class="w3-text-black">* </sup>  </label>
<input  id="F"  onfocus ="func('F')" onblur ="func2('F')" style="border:2px solid orange;"  class="w3-input w3-round" type="text" name="org" required>  
<label class="w3-text-white w3-xlarge">Sponsor Image </label> <br>
<input  id="t"  onfocus ="func('t')" onblur ="func2('t')" style="border:2px solid orange;"  type="file"  name="file" > <br> 
<label class="w3-text-white w3-xlarge">Organization Type  </label>
<input  id="G"  onfocus ="func('G')" onblur ="func2('G')" style="border:2px solid orange;"  class="w3-input w3-round" type="text" name="org1"> 
<label class="w3-text-white w3-xlarge w3-round">Sponsorship Category <sup class="w3-text-black">* </sup> </label>
<select class="w3-select" name="sponsor" required> 
<option value="" disabled selected>Category </option>
<option value="1">Financial </option>
<option value="2">Media </option>
<option value="3">Other </option>
</select>
<label class="w3-text-white w3-xlarge">Comments </label>
<input  id="H" onfocus ="func('H')" onblur ="func2('H')"  style="border:2px solid orange;"  class="w3-input w3-round" type="text" name="comment"> 
<input  style="border:2px solid orange;" class="w3-button w3-round w3-red w3-border-red w3-text-white w3-margin w3-hover-blue w3-hover-border-blue " type="submit" name="submit" value="Sponsor Us!"> 
</div>
</form>
</div>
<div style="background:rgb(255, 204, 255);"class="w3-container w3-margin-top w3-center">
<p> © 2014-15 | Indian Institute of Technology (Banaras Hindu University), Varanasi. All Rights Reserved.</p>
<h5 class="w3-text-black">Developed and Maintained by Web Management & Email Services Committee, IIT(BHU)</h5>
</div>
<div style="background:rgb(255, 204, 255);"class="w3-container w3-center"> 
<a href="#" class="w3-text-white w3-button w3-circle w3-pink w3-hover-red"><i class="fa fa-facebook fa fa-2x"> </i> </a>
<a href="#" class="w3-text-white w3-button w3-circle w3-pink w3-hover-red"><i class="fa fa-instagram fa fa-2x"> </i> </a>
<a href="#" class="w3-text-white  w3-button w3-circle w3-pink w3-hover-red"><i class="fa fa-twitter fa fa-2x"> </i> </a>
<h2 class="w3-text-black w3-center"> Powered by w3.css </h2>
</div>
<script>
function effect()
{
var x= document.getElementsByClassName('A');
x[0].className=x[0].className.replace(" w3-card-4"," w3-card-2");	
}
function effect1()
{
var x= document.getElementsByClassName('A');
x[0].className=x[0].className.replace(" w3-card-2"," w3-card-4");	
}
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
function func(id)
{
var x= document.getElementById(id);
x.style.border="2px solid blue";	
}
function func2(id)
{
var x= document.getElementById(id);
x.style.border="2px solid orange";	
}
$(document).ready(function (){
$('#E').keyup(function(){
var name=$(this).val();	
$.post('15.php',{data:name},function(data,status){
$('#ajax').text(data);
});
});	
});
</script>
</body>
</html>


