<?php
include('database.php');
 date_default_timezone_set('Etc/UTC');
 $con=mysqli_connect($host,$user,$pass,$db);
 $err=0;
 $token="";
 $captcha="";
$mailErr="Thanks for Registering!";
$maile="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST["email"]))
{
$mailErr="Enter your Email";
$err=1;
}else
{
$maile = test_input($_POST["email"]);
if (!filter_var($maile, FILTER_VALIDATE_EMAIL)) {
  $mailErr = "Invalid email format"; 
  $err=1;
$maile="";
}
}
$res=mysqli_query($con,"select * from Registration");
while($row=mysqli_fetch_array($res))
{
if($row['email']==$maile)
  {  $err=1;
  $maile="";
   $mailErr="User already exists'";
  break;
}
}
 $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lfi4hkTAAAAADnShluDazTxLiq1VjM1nk7Dnl-T&amp;amp;response=" . $captcha);
if ($response.success == false)
{
  $err=1;
  $mailErr="SPAM";
}
if($err==0)
{
	$query1="INSERT INTO Registration(email) values('$maile')";
$result=mysqli_query($con,$query1)
or die('error querying 2');
$resultt = mysqli_query($con,"SELECT id FROM Registration where email='$maile'");
$max_public_id = mysqli_fetch_array($resultt,MYSQLI_NUM);
$tid=$max_public_id[0];
if($tid<10)
  {
    $token="ALC00".$tid;
  }
  else if($tid<100)
  {
    $token="ALC0".$tid;
  }
  else
  {
    $token="ALC".$tid;
  }
  $query3="UPDATE Registration set aid='$token' where id = '".$tid."'";
$result2=mysqli_query($con,$query3)
or die($tid);
$mailErr="Thanks for Registering! Your Alchemy Unique ID is - <b>".$token."</b>";
}
echo $mailErr;
 }
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   
   return $data;
}
 ?>