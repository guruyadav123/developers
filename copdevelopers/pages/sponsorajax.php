<?php 
$con =new mysqli ('localhost','root','','sponsorship');
if($con->connect_error)
die('connection failed'.$con->connect_error);
else
{
if(isset($_POST['data']))
{	
$name=$_POST['data'];
$sql='select * from members';
$result=$con->query($sql);
$num=$result->num_rows;
if($num>0)
{
for($i=0;$i<$num;$i++)
{	
$row=$result->fetch_assoc();
if( strcasecmp($row['email'],$name)===0 )
echo "Email is already registered.Please change your email.";
else
echo "";	
}
}
else
echo "";	
}
$con->close();
}	
?>