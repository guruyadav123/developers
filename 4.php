<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width ,initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>w3css</title>
</head>
<body>
<div class="w3-bar w3-gray" >
<div class="w3-dropdown-hover w3-mobile w3-gray">
<a class="w3-button w3-hover-black"> HOME<i class="fa fa-caret-down "></i></a>
<div class="w3-dropdown-content w3-purple w3-bar-block">
<a href="#" class=" w3-center w3-hover-black w3-bar-item w3-button">JAVA </a>
<a href="#" class=" w3-center w3-hover-black w3-bar-item w3-button">JAVASCRIPT </a>
<a href="#" class=" w3-center w3-hover-black w3-bar-item w3-button">PYTHON </a>
<a href="#" class=" w3-center w3-hover-black w3-bar-item w3-button">SQL </a>
</div>
</div>
<a class="w3-bar-item w3-mobile w3-button w3-hover-black"> ABOUT</a>
<a class="w3-bar-item w3-mobile w3-button w3-hover-black"> STATS</a>
<a class="w3-bar-item w3-mobile w3-button w3-hover-black"> EVENTS</a>
<a class="w3-bar-item w3-mobile w3-button w3-hover-black"> SPONSORS</a>
<a class="w3-bar-item w3-mobile w3-button w3-hover-black"> CONTACT</a>
<a class="w3-bar-item w3-mobile w3-button w3-hover-black"> OUR TEAM</a>
<a class="w3-bar-item w3-mobile w3-button w3-hover-black"> REFERRALS</a>
<a class="w3-bar-item w3-mobile w3-button w3-hover-black"> LOGIN </a>
<input class="w3-input w3-border w3-mobile  w3-bar-item" name="search" placeholder="Search..">
<a href="#" class="w3-button w3-bar-item w3-mobile w3-hover-black" > SEARCH</a>
<a href="#" class="w3-button w3-bar-item w3-mobile w3-hover-black" ><i class="fa fa-envelope fa fa-2x"> </i> </a>
<a href="#" class="w3-button w3-bar-item w3-mobile w3-hover-black" > <i class="fa fa-search fa fa-2x"> </i></a>
<a href="#" class="w3-button w3-bar-item w3-mobile w3-hover-black" > <i class="fa fa-pencil fa fa-2x"> </i></a>
<a href="#" class="w3-button w3-bar-item w3-mobile w3-hover-black" > <i class="fa fa-phone fa fa-2x"> </i></a>
</div>
<div class="w3-row w3-card-4 w3-orange">
<div class="w3-text-white w3-xxxlarge w3-center ">UDYAM 2K18 </div>
<div class="w3-text-white w3-center "><h1>ELECTRONICS DEPARTMENT, </h1></div>
<div class="w3-text-white w3-center "><h1>IIT BHU(VARANASI) </h1></div>
</div>
<div class="w3-container w3-center w3-teal w3-padding">
<img class="A" src="image1.jpg" alt="one"style="max-width:600px; height:400px; width:100%">
<img class="A" src="image2.jpg" alt="two"style="max-width:600px; height:400px; width:100%">
<img class="A" src="image3.jpg" alt="three"style="max-width:600px; height:400px; width:100%">
<img class="A" src="image4.jpg" alt="four"style="max-width:600px; height:400px; width:100%">
<img class="A" src="image5.jpg" alt="five"style="max-width:600px; height:400px; width:100%">
</div>
<div class="w3-center w3-pink">
<a onclick ="document.getElementById('AA').style.display='block'"href="#" class="w3-button w3-large">REGISTER HERE </a>
</div>
<div id="AA" class="w3-modal">
<div class=" w3-modal-container w3-card-4 w3-center w3-pink w3-display-container ">
<div class="w3-padding"><button onclick="document.getElementById('AA').style.display='none'" class="w3-button w3-display-topright">&times </button></div>
<h1 class="w3-text-white"> FORM WILL BE AVAILABLE SOON </h1>
<h2 class="w3-text-white">REGISTRATION DATE HAS BEEN POSTPONED </h2>
</div>
</div>
<div class="w3-container w3-gray w3-center">
<p> © 2014-15 | Indian Institute of Technology (Banaras Hindu University), Varanasi. All Rights Reserved.</p>
 <h5 class="w3-text-black">Developed and Maintained by Web Management & Email Services Committee, IIT(BHU)</h5>
 <h2> Powered by w3.css </h2>
</div>
<script>
var n=0;
fun();
function fun()
{
var i;	
var x=document.getElementsByClassName("A");
for(i=0;i<x.length;i++)	
{
x[i].style.display="none";	
}
if(n>(x.length-1))
n=0;	
x[n].style.display="inline-block";
n++;
setTimeout(fun,2000);
}
</script>
</body>
</html>