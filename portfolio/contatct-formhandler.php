<?php  
$name = $_POST['name'];
$tel = $_POST['tel'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "youremail@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n tel =" . $tel ."  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("location :thankyou.html");
?>