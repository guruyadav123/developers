
<?php 
$x=11;
$y="hello gaurav";
$y="hii";
FUNCTION  fun()      // case insensitive for defined word of language.
{
 GLOBAL $y ,$x;
 echo "hii $y".$GLOBALS['y'];	
 echo $x."<h1>$y</h1>";
 print $x."<h1>$y</h1>";
 echo "'$y'";
}
fun();
?>
<?php 
$y="hello gaurav";
echo strlen("$y");
echo strrev($y);
echo str_word_count($y);
echo str_replace("hello" ,"hii",$y);
echo strpos("$y","gaurav");
?>