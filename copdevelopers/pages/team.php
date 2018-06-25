<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="author" content="Gaurav Yadav">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel ="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" href="../images/icon.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title>W3.CSS </title>
</head>
<style>
.bg
{
background-image:url('../images/team2.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:cover;
background-position:center;
min-height:400px;	
}
.a
{
border-left:1px solid solid;
height:15px;	
}
</style>
<body style="background:rgb(242, 242, 242);">
<div class="w3-bar w3-top w3-black">
<a  href="../index.php" class="w3-button w3-text-white w3-hover-text-black w3-bar-item w3-hover-gray">Home <i class="fa fa-home"> </i></a> 
<a  href="#" class="temp1 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-bar-item w3-hide-small w3-hide-medium w3-hover-gray">Organizing Team <i class="fa fa-sitemap"> </i></a> 
<a  href="#" class="temp2 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-bar-item w3-hide-small w3-hide-medium w3-hover-gray">Marketing Team <i class="fa fa-money"> </i></a> 
<a  href="#" class="temp3 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-bar-item w3-hide-small w3-hide-medium w3-hover-gray">Publicity Team <i class="fa fa-share-alt"> </i></a> 
<a  href="#" class="temp4 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-bar-item w3-hide-small w3-hide-medium w3-hover-gray">Creativity Team <i class="fa fa-magic"> </i></a> 
<a  href="#" class="temp5 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-bar-item w3-hide-small w3-hide-medium w3-hover-gray">Web-designing Team <i class="fa fa-modx"> </i></a> 
<a  href="login.php" class="w3-button w3-text-white w3-hover-text-black  w3-bar-item  w3-hide-small w3-hide-medium w3-bar-item w3-hover-gray">Sign Me Up! <i class="fa fa-sign-in"> </i></a> 
<a  href="#"   onclick="fun('A')" class="w3-button w3-text-white w3-hover-text-black w3-bar-item w3-right w3-hide-large w3-bar-item w3-hover-gray"> &#9776;</a> 
</div>
<div id="A" class="w3-card-4 w3-bar-block  w3-right w3-black w3-hide">
<a  href="#" class="temp01 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-hide-large  w3-hover-gray">## <i class="fa fa-sitemap"> </i></a> 
<a  href="#" class="temp01 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-hide-large  w3-hover-gray">Organizing Team <i class="fa fa-sitemap"> </i></a> 
<a  href="#" class="temp02 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-hide-large w3-hover-gray">Marketing Team <i class="fa fa-money"> </i></a> 
<a  href="#" class="temp03 w3-button w3-text-white w3-hover-text-black w3-bar-item w3-hide-large w3-hover-gray">Publicity Team <i class="fa fa-share-alt"> </i></a> 
<a  href="#" class="temp04 w3-button w3-text-white w3-hover-text-black w3-bar-item  w3-hide-large w3-hover-gray">Creativity Team <i class="fa fa-magic"> </i></a> 
<a  href="#" class="temp05 w3-button w3-text-white w3-hover-text-black w3-bar-item  w3-hide-large w3-hover-gray">Web-designing Team <i class="fa fa-modx"> </i></a> 
<a  href="login.php" class="w3-button w3-text-white w3-hover-text-black w3-right w3-bar-item  w3-hide-large w3-bar-item w3-hover-gray">Sign Me Up! <i class="fa fa-sign-in"> </i></a>
</div>
<div style ="font-weight:bold;text-shadow:2px 2px 2px black;"class="bg w3-container w3-text-pink w3-xxxlarge w3-center"> 
<span style="position:relative;top:100px;">OUR TEAM </span>
</div> 
<div style="background:rgb(242, 242, 242);"class="temp001 w3-container w3-xxlarge w3-text-pink w3-center">
<p>Organising Team </p>
</div>
<div style="background:rgb(242, 242, 242);" class="w3-container w3-margin w3-row">
<div onmouseover="effect(0)" onmouseout="effect1(0)" class="t w3-container w3-card-4 w3-col s12 m12 l5"> 
<p class="w3-xlarge w3-text-blue">Swaraj Mohanty </p>
<p class="w3-large w3-text-green">Convener </p>
<p><i class="fa fa-envelope"> </i> swaraj.mohanty.ece14@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 8895997102 <a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
<div  class="a w3-col s12 m12 l2">
</div>
<div onmouseover="effect(1)" onmouseout="effect1(1)" class="t w3-container w3-card-4 w3-col s12 m12 l5">
<p class="w3-xlarge w3-text-blue">Shivam Bansal </p>
<p class="w3-large w3-text-green">Co-Convenor </p>
<p><i class="fa fa-envelope"> </i> shivam.bansal.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9452260737<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
</div>
<div style="background:rgb(242, 242, 242);" class="w3-row w3-margin w3-container">
<div onmouseover="effect(2)" onmouseout="effect1(2)" class="t w3-container w3-card-4 w3-col s12 m12 l5"> 
<p class="w3-xlarge w3-text-blue">Mithilesh Krishan </p>
<p class="w3-large w3-text-green">Technical Secretary </p>
<p><i class="fa fa-envelope"> </i> mithilesh.krishan.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9628213697<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
</div>
<div style="background:rgb(242, 242, 242);"class="temp002 w3-container w3-xxlarge w3-text-pink w3-center">
<p>Marketing Team </p>
</div>
<div style="background:rgb(242, 242, 242);" class="w3-container w3-margin w3-row">
<div onmouseover="effect(3)" onmouseout="effect1(3)" class="t w3-container w3-card-4 w3-col s12 m12 l5"> 
<p class="w3-xlarge w3-text-blue">Harshit Jain </p>
<p><i class="fa fa-envelope"> </i>harshit.jain.ece15@itbhu.ac.in </p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9455225189<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
<div  class="a w3-col s12 m12 l2">
</div>
<div onmouseover="effect(4)" onmouseout="effect1(4)" class="t w3-container w3-card-4 w3-col s12 m12 l5">
<p class="w3-xlarge w3-text-blue">Sahil Agarwal </p>
<p><i class="fa fa-envelope"> </i> sahil.agarwal.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 7233022578<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
</div>
<div style="background:rgb(242, 242, 242);" class="w3-row w3-margin w3-container">
<div onmouseover="effect(5)" onmouseout="effect1(5)" class="t w3-container w3-card-4 w3-col s12 m12 l5"> 
<p class="w3-xlarge w3-text-blue">Abhishek Khetrapal </p>
<p><i class="fa fa-envelope"> </i>abhishek.khetrapal.ece15@itbhu.ac.in </p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9860557644<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
<div  class="a w3-col s12 m12 l2">
</div>
<div onmouseover="effect(6)" onmouseout="effect1(6)" class="t w3-container w3-card-4 w3-col s12 m12 l5">
<p class="w3-xlarge w3-text-blue">Shubham Agarwal </p>
<p><i class="fa fa-envelope"> </i> shubham.agarwal.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9461810282<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
</div>
<div style="background:rgb(242, 242, 242);"class="temp003 w3-container w3-xxlarge w3-text-pink w3-center">
<p>Publicity Team </p>
</div>
<div style="background:rgb(242, 242, 242);" class="w3-container w3-margin w3-row">
<div onmouseover="effect(7)" onmouseout="effect1(7)" class="t w3-container w3-card-4 w3-col s12 m12 l5"> 
<p class="w3-xlarge w3-text-blue">Chetan Dashora </p>
<p><i class="fa fa-envelope"> </i>chetan.dashora.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9455225189<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
<div  class="a w3-col s12 m12 l2">
</div>
<div onmouseover="effect(8)" onmouseout="effect1(8)" class="t w3-container w3-card-4 w3-col s12 m12 l5">
<p class="w3-xlarge w3-text-blue">Suyash Agrawal </p>
<p><i class="fa fa-envelope"> </i>  suyash.agrawal.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9407549400<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
</div>
<div style="background:rgb(242, 242, 242);"class="temp004 w3-container w3-xxlarge w3-text-pink w3-center">
<p>Creativity Team </p>
</div>
<div style="background:rgb(242, 242, 242);" class="w3-container w3-margin w3-row">
<div onmouseover="effect(9)" onmouseout="effect1(9)" class="t w3-container w3-card-4 w3-col s12 m12 l5"> 
<p class="w3-xlarge w3-text-blue">Khayati Mittal </p>
<p><i class="fa fa-envelope"> </i>khayati.mittal.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9455225903<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
<div  class="a w3-col s12 m12 l2">
</div>
<div onmouseover="effect(10)" onmouseout="effect1(10)" class="t w3-container w3-card-4 w3-col s12 m12 l5">
<p class="w3-xlarge w3-text-blue">Sajjal Kansal </p>
<p><i class="fa fa-envelope"> </i> sajjal.kansal.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9915259259<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
</div>
<div style="background:rgb(242, 242, 242);"class="temp005 w3-container w3-xxlarge w3-text-pink w3-center">
<p>Web-Designing Team </p>
</div>
<div style="background:rgb(242, 242, 242);" class="w3-container w3-margin w3-row">
<div onmouseover="effect(11)" onmouseout="effect1(11)" class="t w3-container w3-card-4 w3-col s12 m12 l5"> 
<p class="w3-xlarge w3-text-blue">Bikram Bharti </p>
<p><i class="fa fa-envelope"> </i>bikram.bharti.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 7570823064<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
<div  class="a w3-col s12 m12 l2">
</div>
<div onmouseover="effect(12)" onmouseout="effect1(12)" class="t w3-container w3-card-4 w3-col s12 m12 l5">
<p class="w3-xlarge w3-text-blue">Akash Gupta </p>
<p><i class="fa fa-envelope"> </i> akash.gupta.ece15@itbhu.ac.in</p>
<p class="w3-large w3-text-pink"><a class="w3-button w3-circle w3-hover-red w3-blue"><i class="fa fa-phone"> </i></a>(+91) 9468866600<a class="w3-button w3-hover-red w3-blue w3-circle"> <i class="fa fa-facebook "> </i></a></p>
</div>
</div>
<div style="background:rgb(255, 204, 255);"class="w3-container  w3-center">
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
function fun(id)
{
var x=document.getElementById(id);
if(x.className.indexOf(" w3-show")==-1)
x.className=x.className.replace(" w3-hide", " w3-show");
else
x.className=x.className.replace(" w3-show", " w3-hide");
}
function effect(i)
{
var x= document.getElementsByClassName('t');
x[i].className=x[i].className.replace(" w3-card-4"," w3-card-2");	
}
function effect1(i)
{
var x= document.getElementsByClassName('t');
x[i].className=x[i].className.replace(" w3-card-2"," w3-card-4");	
}
$(document).ready(function(){
$('.temp1,.temp01').click(function (){
$('html,body').animate({scrollTop:$('.temp001').offset().top},700);	
})	
})
$(document).ready(function(){
$('.temp2,.temp02').click(function (){
$('html,body').animate({scrollTop:$('.temp002').offset().top},700);	
})	
})
$(document).ready(function(){
$('.temp3,.temp03').click(function (){
$('html,body').animate({scrollTop:$('.temp003').offset().top},700);	
})	
})
$(document).ready(function(){
$('.temp4,.temp04').click(function (){
$('html,body').animate({scrollTop:$('.temp004').offset().top},700);	
})	
})
$(document).ready(function(){
$('.temp5,.temp05').click(function (){
$('html,body').animate({scrollTop:$('.temp005').offset().top},700);	
})	
})
</script>
</body>
</html>