<?php
$numRegex='/\d/';
$lcRegex='/[a-z]/';
$ucRegex='/[A-Z]/';
$symbolsRegex=['/', '@', '#', '%', '&', '.', '!', '*', '+', '?', '|','(', ')', '[', ']', '{', '}', '\\'];
$strength=0;
if(isset($_POST['data']))
{
$value=$_POST['data'];
for($i=0;$i<strlen($value);$i++)
{
$t=0;	
$char=substr($value,$t,1);
$t++;
if(preg_match($numRegex,$char))
$strength+=.5;	
if(preg_match($lcRegex,$char))
$strength+=1;	
if(preg_match($ucRegex,$char))
$strength+=1;
if(in_array($char,$symbolsRegex))
$strength+=1.5;	
}	
if($strength>15)
echo 'Password strength is strong.';	
else if($strength>6 and $strength<=15)
echo 'Password strength is medium.';
else if($strength<=6 and $strength>0)
echo 'Password strength is weak.';	
}
?>


