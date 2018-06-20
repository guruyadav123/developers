<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width= device-width ,initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> w3.css </title>
</head>
<body>
<div class="w3-container ">
<div class="w3-text-black w3-padding-small w3-left" ><h2>w3schools<span class="w3-text-green">.com</span></h2> </div>
<div class="w3-text-black w3-padding w3-right"><h4>THE WORLD'S LARGEST WEB DEVELOPER SITE </h4></div>
</div>
<div class="w3-container w3-gray">
<div class=" w3-bar w3-gray">
<button class="w3-xlarge w3-mobile w3-button fa fa-home w3-item-bar w3-hover-black w3-gray "> </button>
<button class="w3-xlarge w3-mobile w3-button fa fa-refresh w3-item-bar w3-hover-black  w3-spin w3-gray "> </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">HTML </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">CSS</button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">JAVASCRIPT </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">PHP </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">SQL </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">JQUERY </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">HOW TO</button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">BOOTSTRAP </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">PYTHON</button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">JAVA </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">TEMPLATES</button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">W3.CSS </button>
<button class="w3-button w3-mobile w3-text-white w3-item-bar w3-hover-black w3-gray">HOW TO </button>
<div class=" w3-mobile w3-dropdown-hover">
<button class="w3-button w3-text-white  w3-hover-black w3-gray">MORE </button>
<div class="w3-dropdown-content w3-animate-zoom w3-bar-block">
<a href="#" class="w3-button w3-bar-item">PYTHON</a>
<a href="#" class="w3-button w3-bar-item">RUBY</a>
<a href="#" class="w3-button w3-bar-item">CPLUSPLUS</a>
<a href="#" class="w3-button w3-bar-item">KOTLIN</a>
</div>
</div>
<button class="w3-xlarge w3-mobile w3-button fa fa-search w3-item-bar w3-hover-black w3-gray"> </button>
</div>
</div>
<div class="w3-row w3-card-4">
<img src="1.jpg" alt="one" class="w3-third w3-image w3-hover-opacity w3-opacity-off" > 
<div class="w3-container w3-twothird">
<pre class=" w3-padding w3-animate-bottom w3-center w3-card-4 w3-orange w3-large w3-text-white">
As the time is going .The need of
developer is day by day
increasing in tremendous way,
For this We have to learn
some basic languages Like
HTML ,CSS ,JAVASCRIPT AND 
JQUERY for front-end
development and PHP,
SQL,NODE.JS ,PYTHON for
Backend development .
So Let's start over here. 
</pre>
</div>
</div>
<div class="w3-row w3-card-4" >
<button onclick="func('A')" class=" w3-mobile w3-button w3-block w3-green"> VIEW DATA  </button>
<div id="A"class="w3-orange w3-card-4 w3-hide">
<img src="2.jpg" alt="two" class=" w3-third w3-image">
<div class="w3-twothird">
<ul class="w3-text-xxlarge w3-text-white">
 <li>Meet with their clients or management to discuss the needs of the website and the expected needs of the website’s audience and plan how it should look.</li>
 <li>Create and debug applications for a website.</li>
  <li>Write code for the site, using programming languages such as HTML or XML.</li>
  <li>Work with other team members to determine what information the site will contain.</li>
  <li>Work with graphics and other designers to determine the website’s layout.</li>
   <li>Integrate graphics, audio, and video into the website.</li>
     <li>Monitor website traffic.</li>
 </ul>
</div>
</div>
<script>
function func(id)
{
var x= document.getElementById(id);
if(x.className.indexOf('w3-show')==-1)
x.className+=" w3-show";
else
x.className=x.className.replace(" w3-show","");	
}
</script>
<div class="w3-container w3-blue">
<h1 class="w3-center">CONTACT US </h1>
<a href="#"><i style="position:relative; left:30%"class="fa-4x fa fa-mobile"></i><a>
<a href="#"><i style="position:relative; left:70%" class="fa-3x fa fa-envelope">  </i></a>
<h2 class="w3-center">© 2014-15 | Indian Institute of Technology (Banaras Hindu University), Varanasi. All Rights Reserved. </h2>
<h4 class="w3-center">Developed and Maintained by Web Management & Email Services Committee, IIT(BHU) </h4>
</div>
</body>
</html>