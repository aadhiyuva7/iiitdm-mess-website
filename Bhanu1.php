<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "bhargav060702@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: 119me0023@gmail.com" . "\r\n" .
"CC: bhargav060702@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
    
?>