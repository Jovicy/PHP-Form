<?php 

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "johnvictordml@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error");

echo"Message Send";

?>