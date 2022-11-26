<?php
//get data from form  
$name = $_POST['name'];
$number = $_POST['number'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "recoveryy4you@gmail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile Number =" . $number;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>