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
<body style="background:rgb(51, 102, 0);">
<div style="background:rgb(51, 102, 0);" class="w3-text-white w3-center w3-container">
<h1>THE EVENTS </h1>
</div>
<div style="background:rgb(51, 102, 0);"class="w3-container w3-center w3-padding">
<img class="a w3-card-4" src="../images/imag1.jpg" alt="one"style="max-width:600px; height:400px; width:100%">
<img class="a w3-card-4" src="../images/imag2.jpg" alt="two"style="max-width:600px; height:400px; width:100%">
<img class="a w3-card-4" src="../images/imag3.jpg" alt="three"style="max-width:600px; height:400px; width:100%">
<img class="a w3-card-4" src="../images/imag4.jpg" alt="four"style="max-width:600px; height:400px; width:100%">
</div>
<div style="background:rgb(51, 102, 0);"class="w3-row w3-container">
<div class="w3-half w3-text-white w3-center">
<img  onmouseover="effect('A')" onmouseout ="effect2('A')"onclick= "con('A')"class="A w3-circle w3-hover-grayscale w3-card-4"src="../images/event1.jpg"  alt="one" width="100%" style="max-width:300px; height:200px; border:4px solid orange;"><br>
<h2 style="display:inline-block;"class="w3-hover-text-pink ">MOSAIC </h2>
</div>
<div class="w3-half w3-text-white w3-center ">
<img  onmouseover="effect('B')" onmouseout ="effect2('B')" onclick= "con('B')"class="B w3-circle w3-hover-grayscale w3-card-4"src="../images/event3.jpg"  alt="two" width="100%" style="max-width:300px; height:200px; border:4px solid orange;"><br>
<h2 style="display:inline-block;" class="w3-hover-text-pink ">SPYBITS </h2>
 </div>
</div>
<div style="background:rgb(51, 102, 0);"class="w3-row w3-container">
<div class="w3-half w3-text-white w3-center">
<img  onmouseover="effect('C')" onmouseout ="effect2('C')"onclick= "con('C')"class="C w3-circle w3-hover-grayscale w3-card-4"src="../images/event2.jpg"  alt="one" width="100%" style="max-width:300px; height:200px; border:4px solid orange;"><br>
<h2 style="display:inline-block;"class="w3-hover-text-pink ">CONTINUUM</h2>
</div>
<div class="w3-half w3-text-white w3-center ">
<img  onmouseover="effect('D')" onmouseout ="effect2('D')"onclick= "con('D')"class="D w3-circle w3-hover-grayscale w3-card-4"src="../images/event10.jpg"  alt="two" width="100%" style="max-width:300px; height:200px; border:4px solid orange;"><br>
<h2 style="display:inline-block;"class="w3-hover-text-pink ">COMMNET </h2>
 </div>
</div>
<div style="background:rgb(51, 102, 0);"class="w3-row w3-container">
<div class="w3-half w3-text-white w3-center">
<img  onmouseover="effect('E')" onmouseout ="effect2('E')" onclick= "con('E')"class="E w3-circle w3-hover-grayscale w3-card-4"src="../images/ece1.jpg"  alt="one" width="100%" style="max-width:300px; height:200px; border:4px solid orange;"><br>
<h2 style="display:inline-block;"class="w3-hover-text-pink ">I-CHIP </h2>
</div>
<div class="w3-half w3-text-white w3-center ">
<img  onmouseover="effect('F')" onmouseout ="effect2('F')"onclick= "con('F')"class="F w3-circle w3-hover-grayscale w3-card-4"src="../images/even5.jpg"  alt="two" width="100%" style="max-width:300px; height:200px; border:4px solid orange;"><br>
<h2 style="display:inline-block;"class="w3-hover-text-pink ">DIGISIM </h2>
 </div>
</div>
<div style="background:rgb(51, 102, 0);"class="w3-row w3-container">
<div class="w3-half w3-text-white w3-center">
<img  onmouseover="effect('G')" onmouseout ="effect2('G')"onclick= "con('G')"class="G w3-circle w3-hover-grayscale w3-card-4"src="../images/event7.jpg"  alt="one" width="100%" style="max-width:300px; height:200px; border:4px solid orange;"><br>
<h2 style="display:inline-block;"class="w3-hover-text-pink ">FUNCKIT </h2>
</div>
<div class="w3-half w3-text-white w3-center ">
<img  onmouseover="effect('H')" onmouseout ="effect2('H')"onclick= "con('H')"class="H w3-circle w3-hover-grayscale w3-card-4"src="../images/event8.jpg"  alt="two" width="100%" style="max-width:300px; height:200px; border:4px solid orange;"><br>
<h2 style="display:inline-block;" class="w3-hover-text-pink ">MUSE </h2>
 </div>
</div>
<div  class="A w3-modal w3-container">
<div style="background:rgb(255, 102, 153);"class="w3-modal-content  w3-card-4 w3-animate-left w3-padding w3-center">
<a href="events.php" class="w3-button w3-right w3-hover-blue w3-text-white"> &times;</a>
<h2 class="w3-center w3-text-black">Introduction </h2>
<p style="text-align:justify;font-weight:bold;"class="w3-text-white"> Have you heard about the sixth sense technology developed by Pranav Mistry
 and have you ever thought of trying to implement a few of its basic features by yourself? 
 If NO, then Google it silly. If YES, then we present you Mosaic, a platform where 
you are going to implement basic motion tracking & gesture recognition using image processing and machine learning techniques.</p>
<h2 class="w3-center w3-text-black">Problem Statement </h2>
<a href="#" style="text-decoration:none;"class="w3-text-white w3-hover-text-black " >Problem will be available soon. </a>
</div>
</div>
<div class="B w3-modal w3-card-4 w3-container ">
<div style="background:rgb(255, 102, 153);"class="w3-modal-content w3-animate-left w3-padding w3-center">
<a href="events.php" class="w3-button w3-right w3-hover-blue w3-text-white"> &times;</a>
<h2 class="w3-center w3-text-black">Introduction </h2>
<p style="text-align:justify;font-weight:bold;"class="w3-text-white"> Does hacking attract you? Do you want 
to know how your confidential information is kept secret from hackers? 
If your answer is YES! Then Cryptography is the field, answers you all these questions. 
Cryptography is the art and science of keeping information secure from unintended audiences. 
Conversely, cryptanalysis is the art and science of breaking encoded data. Udyam’18 presents you Spybits, an event, where 
you will learn how to protect your conversation safe from eavesdroppers and even how to break into secrets of others.</p>
<h2 class="w3-center w3-text-black">Problem Statement </h2>
<a href="#" style="text-decoration:none;"class="w3-text-white w3-hover-text-black " >Problem will be available soon. </a>
</div>
</div>
<div  class="C w3-modal w3-card-4 w3-container">
<div style="background:rgb(255, 102, 153);"class="w3-modal-content  w3-animate-left w3-padding w3-center">
<a href="events.php" class="w3-button w3-right w3-hover-blue w3-text-white"> &times;</a>
<h2 class="w3-center w3-text-black">Introduction </h2>
<p style="text-align:justify;font-weight:bold;"class="w3-text-white"> Analogue signals
 are those in which information is represented by a continuously variable physical quantity such 
 as spatial position, voltage etc. The event encapsulates the use of transducers to convert physical phenomenon into
 equivalent electrical signals. 'Continuum' focuses on design of circuits that are useful to derive meaning out of these
 continuously varying quantities. The event incorporates both actual realization
 of circuits and simulation while the latter shall aid the participants in case the circuits are voluminous.</p>
<h2 class="w3-center w3-text-black">Problem Statement </h2>
<a href="#" style="text-decoration:none;"class="w3-text-white w3-hover-text-black " >Problem will be available soon. </a>
</div>
</div>
<div  class="D w3-modal w3-card-4 w3-container">
<div style="background:rgb(255, 102, 153);"class="w3-modal-content  w3-animate-left w3-padding w3-center">
<a href="events.php"class="w3-button w3-right w3-hover-blue w3-text-white"> &times;</a>
<h2 class="w3-center w3-text-black">Introduction </h2>
<p style="text-align:justify;font-weight:bold;"class="w3-text-white"> Analogue signals are those in 
which information is represented by a continuously variable physical quantity such as spatial position,
 voltage etc. The event encapsulates the use of transducers to convert physical phenomenon into equivalent 
 electrical signals. 'Continuum' focuses on design of circuits that are useful to derive meaning out of these 
 continuously varying quantities. The event incorporates both actual realization of circuits 
and simulation while the latter shall aid the participants in case the circuits are voluminous.</p>
<h2 class="w3-center w3-text-black">Problem Statement </h2>
<a href="#" style="text-decoration:none;"class="w3-text-white w3-hover-text-black " >Problem will be available soon. </a>
</div>
</div>
<div class="E w3-modal w3-card-4 w3-container">
<div style="background:rgb(255, 102, 153);"class="w3-modal-content  w3-animate-left w3-padding w3-center">
<a href="events.php" class="w3-button w3-right w3-hover-blue w3-text-white"> &times;</a>
<h2 class="w3-center w3-text-black">Introduction </h2>
<p style="text-align:justify;font-weight:bold;"class="w3-text-white">An HDL event: Now
 there is no need to manually place gates and transistors to build electronic circuits. Describe 
 complex circuits at an abstract level in terms of functionality and data flow by designing those 
 circuits in HDLs. This FPGA Design Contest requires one to write the code for the given problem statement in either VHDL or Verilog 
and optimize it, then dump the code on the FPGA Kit to physically realize the design that was coded.</p>
<h2 class="w3-center w3-text-black">Problem Statement </h2>
<a href="#" style="text-decoration:none;"class="w3-text-white w3-hover-text-black " >Problem will be available soon. </a>
</div>
</div>
<div  class="F w3-modal w3-card-4 w3-container">
<div style="background:rgb(255, 102, 153);"class="w3-modal-content  w3-animate-left w3-padding w3-center">
<a href="events.php" class="w3-button w3-right w3-hover-blue w3-text-white"> &times;</a>
<h2 class="w3-center w3-text-black">Introduction </h2>
<p style="text-align:justify;font-weight:bold;"class="w3-text-white">Digisim basically stands for digital 
simulation. And digital simulation in layman terms can be expressed as the running of a digital system’s model. 
Digisim, is therefore a platform to explore and gain new insights into technology and to estimate the performance 
of systems without going into analytical solutions. Digisim is an event where participants have to 
simulate complex digital circuits. Participants will learn advanced circuit design and simulation.</p>
<h2 class="w3-center w3-text-black">Problem Statement </h2>
<a href="#" style="text-decoration:none;"class="w3-text-white w3-hover-text-black " >Problem will be available soon. </a>
</div>
</div>
<div  class="G w3-modal w3-card-4 w3-container">
<div style="background:rgb(255, 102, 153);"class="w3-modal-content  w3-animate-left w3-padding w3-center">
<a href="events.php" class="w3-button w3-right w3-hover-blue w3-text-white"> &times;</a>
<h2 class="w3-center w3-text-black">Introduction </h2>
<p style="text-align:justify;font-weight:bold;"class="w3-text-white">Engineers are the pioneers in implementation 
of scientific principles and technological innovations in the real world. The event is going to be two fold. In the first 
round one has to simulate the behavior of the system and then in second round one has to design the given system in the real
 world. The real world system design would allow the participants to deal with the problems encountered during the design process at
 first hand and on the other hand, Simulation forms the interconnecting bridge between laboratory research and field reality. Udyam provides
 a golden opportunity to young technocrats to deal with challenging issues of 
the industry by providing solutions using simulation tools like Matlab, Pspice, Proteus, MultiSIM etc.</p>
<h2 class="w3-center w3-text-black">Problem Statement </h2>
<a href="#" style="text-decoration:none;"class="w3-text-white w3-hover-text-black " >Problem will be available soon. </a>
</div>
</div>
<div  class="H w3-modal w3-card-4 w3-container">
<div style="background:rgb(255, 102, 153);"class="w3-modal-content  w3-animate-left w3-padding w3-center">
<a href="events.php" class="w3-button w3-right w3-hover-blue w3-text-white"> &times;</a>
<h2 class="w3-center w3-text-black">Introduction </h2>
<p style="text-align:justify;font-weight:bold;"class="w3-text-white">"If you have an apple and I have 
an apple and we exchange these apples then you and I will still each have one apple. 
But if you have an idea and I have an idea and we exchange these ideas, then each of us will have two ideas." 
-George Bernard Shaw MUSE, the paper presentation provides an ideal platform for the thinkers of this generation. 
For those who wish to voice their innovative ideas in an effective manner, this event will provide them an opportunity to network,
 compete and grow with the best.</p>
<h2 class="w3-center w3-text-black">Problem Statement </h2>
<a href="#" style="text-decoration:none;"class="w3-text-white w3-hover-text-black " >Problem will be available soon. </a>
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
function con(id)
{
var x=confirm('Do u want to know more  about event...');	
if(x)
{
function fun(id)
{	
var y= document.getElementsByClassName(id);
y[1].style.display='block';
}
fun(id);
}
}
var n=0;
fun();
function fun()
{
var i;	
var x=document.getElementsByClassName("a");
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
function effect(id)
{
var y= document.getElementsByClassName(id);	
y[0].className=y[0].className.replace(" w3-card-4","");
}
function effect2(id)
{
var y= document.getElementsByClassName(id);	
y[0].className=y[0].className+" w3-card-4";
}
</script>
</body>
</html>