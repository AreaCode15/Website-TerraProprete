<?php



$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "contact@terra-multiservices.fr";

mail($recipient, $subject,$email, $message, $mailheader)
or die("error!");

echo"Message envoyé avec succès!";

?>