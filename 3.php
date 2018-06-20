<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>w3css</title>
</head>
<body>
<div class="w3-row">
<div id="A" style="width:200px" class="w3-col w3-teal w3-collapse w3-sidebar w3-bar-block w3-card-4">
<a href="#" class="w3-mobile w3-center w3-hover-white w3-bar-item w3-button"><i class="fa fa-home fa fa-2x"> </i>HOME</a>
<a href="#" class="w3-mobile w3-center w3-hover-white w3-bar-item w3-button">ABOUT</a>
<a href="#" class="w3-mobile w3-center w3-hover-white w3-bar-item w3-button">EVENTS</a>
<a href="#" class="w3-mobile w3-center w3-hover-white w3-bar-item w3-button">GLIMPSE</a>
<a href="#" class="w3-mobile w3-center w3-hover-white w3-bar-item w3-button">CONTACT</a>
</div>
<div id="B" onmouseover="fun3('B')"style="margin-left:200px;" class="w3-rest w3-padding-large w3-main w3-col w3-card-4 w3-orange">

<button class="w3-button w3-blue w3-xlarge w3-hide-large" onclick="fun2('A')">&#9776;</button>
<form class="w3-margin"method="post" action="some.php">
<div class="w3-center w3-text-white"><h2>CONTACT US </h2> </div>
<div class="w3-row">
<div style="width:50px" class="w3-col w3-section"> 
<i class=" fa fa-3x fa fa-user"> </i>
</div>
<div class="w3-rest">
<input type="text" name="user" placeholder ="First Name "class=" w3-border w3-input">
</div>
<div>
<div class="w3-row">
<div style="width:50px" class="w3-col w3-section"> 
<i class=" fa fa-3x fa fa-user"></i>
</div>
<div class="w3-rest">
<input type="text" name="user" placeholder ="Second Name "class=" w3-border w3-input">
</div>
<div>
<div class="w3-row">
<div style="width:50px" class="w3-col w3-section"> 
<i class=" fa fa-3x fa fa-envelope"> </i>
</div>
<div class="w3-rest">
<input type="text" name="user" placeholder ="E-mail"class=" w3-border w3-input">
</div>
<div>
<div class="w3-row">
<div style="width:50px" class="w3-col w3-section"> 
<i class="fa fa-3x fa fa-pencil"></i>
</div>
<div class="w3-rest">
<input type="text" name="user" placeholder ="Message "class=" w3-border w3-input">
</div>
<div>
<div class="w3-row">
<div style="width:50px" class="w3-col w3-section"> 
<i class=" fa fa-3x fa fa-phone"> </i>
</div>
<div class="w3-rest">
<input type="text" name="user" placeholder ="Phone"class=" w3-border w3-input">
</div>
<div>
<div class="w3-panel">
<a class="w3-block w3-button w3-green w3-margin-left w3-center" href="#"> SEND </a>
 </div>
</div>
</form>
<div class="w3-card-4 w3-purple" >
<div class="w3-center w3-text-white"><h2>THANKS TO CONTACT US !! </h2></div>
</div>
<div>
<a href="#"><i style="position:relative; left:25%"class="fa-4x fa fa-mobile"></i><a>
<a href="#"><i style="position:relative; left:60%" class="fa-3x fa fa-envelope">  </i></a>
 </div>
 <div class="w3-text-white">
 <h3 class="w3-center">© 2014-15 | Indian Institute of Technology (Banaras Hindu University), Varanasi. All Rights Reserved. </h3>
 <h4 class="w3-center">Developed and Maintained by Web Management & Email Services Committee, IIT(BHU) </h4>
 </div>
</div>
<script>
function fun(id)
{
 var x=document.getElementById(id);
 x.style.display="none";
}
function fun2(id)
{
var x=document.getElementById(id);
x.style.display="block";
}
function fun3(id)
{
id='A';	
var x=document.getElementById(id);
x.style.display="none";
}
</script>
</body>
</html>