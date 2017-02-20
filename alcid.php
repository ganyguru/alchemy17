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
   $mailErr="User already exists!!";
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
  $uniqueid="";
  $uniqueid="ALC".strtoupper(uniqid());
	$query1="INSERT INTO Registration(email,aid) values('$maile','$uniqueid')";
$result=mysqli_query($con,$query1)
or die('error querying 2');

$mailErr="Thanks for Registering!\nYour Alchemy Unique ID is - ".$uniqueid."\n Check your Email";


    $to = $maile;
    $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $headers .= "From: Alchemy 2017 <admin@alchemy.nitt.edu>";
    $subject = "Alchemy'17 Registration";
    $txt = "<html><body>Hello,<br>Greetings from ChEA and Alchemy 2017!<br>Thank you for registering with us.<br><br>Your Alchemy ID is <u><b>".$uniqueid."</b></u>. You require this ID for getting registered for the events and workshops.<br>Kindly register your details <a href='https://goo.gl/forms/E7YbvlL3FCmh4arI2'>HERE</a> with the given Alchemy ID<br><br>For further details or queries feel free to contact us at-<br><br><a href='http://alchemy.nitt.edu'>alchemy.nitt.edu</a><br><br>Regards,<br><b>Team Alchemy'17</b><br><br><br><br><i><u>Note</u>:This is an auto-generated mail. Do not reply to this mail.</i></body></html>"; 
mail($to,$subject,$txt,$headers);



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