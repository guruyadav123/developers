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
<style>
.bgimage1,.bgimage2
{
background-repeat:no-repeat;
background-attachment:fixed;
background-position:center;
background-size:cover;
}
.bgimage1
{
 background-image:url('ece1.jpg');
 min-height:400px; 
}
.bgimage2
{
background-image:url('ec2.jpg');
min-height:400px; 	
}
</style>
</head>
<body>
<!-- nav bar -->
<div class="w3-bar w3-black w3-top ">
<a href="#" id="js0" class="w3-text-white w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-blue">ABOUT </a>
<a href="#" id="js1" class="w3-text-white w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-blue">STATS </a>
<a href="11.php" class="w3-text-white w3-bar-item w3-button w3-hide-small  w3-hide-medium w3-hover-blue">EVENTS</a>
<a href="13.php" class="w3-text-white w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-blue">SPONSORS </a>
<a href="#" id="js2" class="w3-text-white w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-blue">CONTACT </a>
<a href="12.php" class="w3-text-white w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-blue">OUR TEAM </a>
<a href="7.php" class="w3-text-white w3-bar-item w3-hide-small w3-button w3-hide-medium w3-hover-blue">LOGIN</a>
<a href="#"    class="w3-right w3-text-white w3-bar-item  w3-button w3-hide-small  w3-hover-blue"><i class="fa fa-search"> </i></a>
<a href="#" onclick= "fun('A3')" class="w3-text-white w3-bar-item w3-button   w3-hide-large w3-hover-blue"> &#9776; </a>
</div>
<div id ="A3" class="w3-bar-block w3-pink w3-hide">
<a href="#"  class="w3-text-white w3-bar-item w3-button  w3-hide-large w3-hover-blue">. </a>
<a href="11.php"  class="w3-text-white w3-bar-item w3-button  w3-hide-large w3-hover-blue"> EVENTS </a>
<a href="#" id="js1p" class="w3-text-white w3-bar-item w3-button  w3-hide-large w3-hover-blue"> STATS </a>
<a href="10.php" id="js0p"class="w3-text-white w3-bar-item w3-button w3-hide-large w3-hover-blue"> ABOUT </a>
<a href="13.php" class="w3-text-white w3-bar-item w3-button  w3-hide-large w3-hover-blue"> SPONSORS </a>
<a href="#" id="js2p" class="w3-text-white w3-bar-item w3-button w3-hide-large w3-hover-blue"> CONTACT </a>
<a href="12.php" class="w3-text-white w3-bar-item w3-button w3-hide-large w3-hover-blue"> OUR TEAM </a>
<a href="7.php" class="w3-text-white w3-bar-item w3-button  w3-hide-large w3-hover-blue"> LOGIN </a>
</div>
<!-- parallax method  -->
<div id="js00" class="bgimage1 w3-container">
<p  style ="font-weight:bold; text-shadow:2px 2px 3px black;"class="w3-text-pink w3-xxxlarge w3-center"> MENTOR  <sub style="color:white;">presents</sub> </p>
<h1 style ="font-weight:bold; text-shadow:2px 2px 3px black;"class="w3-text-orange w3-animate-top w3-xxxlarge w3-center">6 April - 8 April'18 </h1>
<div class="w3-container w3-center">
<p  style ="font-weight:bold; text-shadow:2px 2px 3px black;" class="w3-xxlarge w3-text-orange w3-animate-opacity">UDYAM 2K18 </p> 
</div>
</div>
<div style ="background:rgb(245, 245, 214);"class="w3-container ">
<div class="w3-row-padding">
<div class="w3-col m6 l4 s12">
<h2 style="font-weight:bold;"class="w3-text-pink w3-center">A Bite About Us </h2>
<p id="a" style="text-align:justify;"class="w3-text-blue  w3-padding">UDYAM is the annual techno-management fest of Electronics
 Engineering Department, IIT BHU, Varanasi. Synonymous with technical know-how and management acumen, 
Udyam is about practical application of classroom knowledge. With this idea of application oriented approach 
UDYAM started.It’s not just these neck-to-neck competitions that you can get at UDYAM. It’s also about the whacky novel
 contraptions created here that go far beyond the fest. Internships. Patents. All happens. UDYAM sets the stage free for you. 
 Spotlight is on you. Just go with it. We promise after the three days of fest
, you will leave with lot of passion to innovate and excel. </p>
</div>
<div class="w3-col m6 l8 s12 w3-center w3-padding-16">
<iframe style ="width:100%; max-width:560px; height:315px;"src="https://www.youtube.com/embed/CiGhyCmyrkY?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</div>
</div>
<div id="js11" style="background:rgb(255, 102, 0);" class="w3-container">
<p  style="font-weight:bold;"class=" w3-center w3-text-black w3-xxlarge">A lookback at Udyam'17 </p>

<div class="w3-col s12 m6 l3 w3-center w3-hover-pink">
<a href="#" class="w3-text-white"><i class="fa fa-tv fa-5x "></i> </a>
<p class=" w3-text-white w3-xlarge"> 8</p>
<p class="w3-text-white w3-xlarge">Events </p>
</div>
<div class="w3-col s12 m6 l3 w3-center w3-hover-pink"> 
<a href="#" class="w3-text-white"><i class="fa fa-trophy fa-5x"></i> </a>
<p class="w3-text-white w3-xlarge"> INR 475,000</p>
<p class="w3-text-white w3-xlarge">Prize money </p>
</div>
<div class="w3-col s12 m6 l3 w3-center w3-hover-pink"> 
<a href="#" class="w3-text-white "><i class="fa fa-users fa-5x"></i> </a>
<p class="w3-text-white w3-xlarge"> 10,000+</p>
<p class="w3-text-white w3-xlarge">Participents </p>
</div>
<div class="w3-col s12 m6 l3 w3-center w3-hover-pink">
<a href="#" class="w3-text-white "><i class="fa fa-globe fa-5x"></i> </a>
<p class="w3-text-white w3-xlarge"> 97</p>
<p class="w3-text-white w3-xlarge">Participating countries </p>
</div>
</div>
<!--  parallax method -->
<div id="js22" class="bgimage2 w3-container">
<p  style ="font-weight:bold; text-shadow:2px 2px 3px black;"class="w3-text-pink w3-xxxlarge w3-center"> CONTACT US </p>
<div class="w3-row">
<div class="w3-col m6 s12 l6 w3-center"> 
<a href="#" class="w3-text-white w3-button w3-circle  w3-red w3-hover-teal"><i class="fa fa-mobile fa fa-3x"> </i> </a>
<p  style ="font-weight:bold;"class="w3-text-pink w3-large "> +919682405362 </p>
</div>
<div class="w3-col m6 s12 l6 w3-center"> 
<a href="#" class="w3-text-white w3-button w3-circle w3-red w3-hover-teal"><i class="fa fa-envelope fa fa-3x"> </i> </a>
<p  style ="font-weight:bold;"class="w3-text-pink w3-large"> udyamfest@iitbhu.ac.in </p>
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
<a href="#" id="t"class="w3-text-white w3-black w3-button   w3-right w3-hover-gray"><i class="fa fa-angle-up fa fa-2x"> </i> </a>
</div>
<script>

function fun (id)
{
var x= document.getElementById(id);
if(x.className.indexOf(' w3-show')==-1)
x.className=x.className.replace(' w3-hide',' w3-show');
else
x.className=x.className.replace(' w3-show',' w3-hide');	
}
$(document).ready(function (){
	$('#js1,#js1p').click(function(){
		$('html,body').animate({scrollTop:$('#js11').offset().top},700);
	});
});
$(document).ready(function (){
	$('#js2,,#js2p').click(function(){
		$('html,body').animate({scrollTop:$('#js22').offset().top},700);
	});
});
$(document).ready(function (){
	$('#js0,,#js0p,#t').click(function(){
		$('html,body').animate({scrollTop:$('#js00').offset().top},700);
	});
});

</script>
</body>
</html>