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
$mailErr="<h4>Registration Failed!</h4><p>Enter your Email</p>";
$err=1;
}else
{
$maile = test_input($_POST["email"]);
if (!filter_var($maile, FILTER_VALIDATE_EMAIL)) {
  $mailErr = "<h4>Registration Failed!</h4><p>Invalid email format</p>"; 
  $err=1;
$maile="";
}
}
$res=mysqli_query($con,"select * from Registration");
$alchemyid="";
while($row=mysqli_fetch_array($res))
{

if($row['email']==$maile)
  {  $err=1;
  $maile="";
  $alchemyid=$row['aid'];
   $mailErr="<h4>Already Registered!</h4><p>Your Alchemy ID is ".$alchemyid."<b></b><br>Click <a href='https://goo.gl/forms/E7YbvlL3FCmh4arI2' target='_blank'>here</a> to Register your details</p>";
  break;
}
}
 $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lfi4hkTAAAAADnShluDazTxLiq1VjM1nk7Dnl-T&amp;amp;response=" . $captcha);
if ($response.success == false)
{
  $err=1;
  $mailErr="<h4>Registration Failed!</h4><p>SPAM</p>";
}
if($err==0)
{
  $uniqueid="";
  $uniqueid="ALC".strtoupper(uniqid());
	$query1="INSERT INTO Registration(email,aid) values('$maile','$uniqueid')";
$result=mysqli_query($con,$query1)
or die('error querying 2');

$mailErr=" <h4>Thanks for Registering</h4>
      <p>Your Alchemy ID is ".$uniqueid."<b></b><br>Click <a href='https://goo.gl/forms/E7YbvlL3FCmh4arI2' target='_blank'>here</a> to Register your details</p>";

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