<?php



$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "contact@terra-multiservices.fr";

mail($recipient, $subject, $message, $mailheader)
or die("error!");

echo '


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="assets/img/logo.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <center><h1><br /><br /><br />Merci de nous avoir contactez.<br /> Nous vous répondrons dans les plus bref délais.</h1>
    <p class="back"><br /><br />Revenir à <a href="index.html">l accueil</a></p></center>
</div>

</body>

</html>

';

?>