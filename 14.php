<?php
session_start();
if(!isset($_POST['submit']))
{	
header('location:13.php');
}
else
{
$con = mysqli_connect('localhost' ,'root');
if(!$con)
die('connection did not establish'.mysqli_connect_error());
else
{
mysqli_select_db($con ,'sponsorship');	                              // way 1 to secure page from sql injection!!!
$name=mysqli_real_escape_string($con,$_POST['user']);  
if(!preg_match('/^[A-Za-z _.+0-9]+$/',$name))
$name1="Please fill valid characters in username.";
$position=mysqli_real_escape_string($con,$_POST['position']);
$phonenumber=mysqli_real_escape_string($con,$_POST['phone']);
if(!preg_match('/^[0-9]{10}$/',$phonenumber))
$phonenumber1="Please fill valid phone number.";	
$email=mysqli_real_escape_string($con,$_POST['email']);
if(!filter_var ($email ,FILTER_VALIDATE_EMAIL))
$email1="PLease fill valid email address.";
$organization=mysqli_real_escape_string($con,$_POST['org']);
$organizationtype=mysqli_real_escape_string($con,$_POST['org1']);
$sponsorshipcategory=mysqli_real_escape_string($con,$_POST['sponsor']);
$comment=mysqli_real_escape_string($con,$_POST['comment']);
$file=$_FILES['file'];
$filename=$file['name'];
$filetempname=$file['tmp_name'];
$filesize=$file['size'];
$fileerror=$file['error'];
$arr=array('jpg','jpeg','png','pdf');
$explode=explode('.',$filename);
$format=end($explode);
if(!empty($name1))
{
$derror= $name1;	
$a=1;
}
else
{
if(!empty($phonenumber1))
{
$derror= $phonenumber1;	
$a=1;
}
else
{
if(!empty($email1))
{
$derror= $email1;
$a=1;	
}	
else
{
if(!empty($error))
{
$derror= $error;
$a=1;
}
else                                       // image upload php code !!
{
if(isset($_POST['file']))
{	
if(in_array($format,$arr))
{
if($fileerror==0)
{
if($filesize<400000)
{
$filename1=bin2hex(openssl_random_pseudo_bytes(16)).".".$format;
move_uploaded_file($filetempname,'sponsor image/'.$filename1);
}
else 
{
$ferror1="File size is too big.!";	
$derror= $ferror1;
$a=1;
}
}
else
{
$ferror2= "Some error has been occured while uploading.";	
$derror= $ferror2;
$a=1;
}
}
else
{
$ferror3= "Unsupported format of image.!";  
$derror= $ferror3;
$a=1;
}
}
if(empty($a))
{	// way 2 to secure page from sql injection by prepared statements!!!
$sql ="insert into members (name,position,phonenumber,email,organization,organizationtype,sponsorshipcategory,comment) values (?,?,?,?,?,?,?,?);";
$stmt=mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt,$sql))
$derror= "SQL query is not prepared";
else
{
mysqli_stmt_bind_param($stmt,'ssssssss',$name,$position,$phonenumber,$email,$organization,$organizationtype,$sponsorshipcategory,$comment);
if(!mysqli_stmt_execute($stmt))
$derror="Email already has been registered.";
else 
$derror= "CONGRATULATIONS!!! $name  we have received ur information.";	
}   
}	
}
}	
}
}
}
}
$_SESSION['$error']=$derror;
header('location:13.php');
?>

