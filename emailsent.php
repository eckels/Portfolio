<?php

$from=$_POST['email'];
$email="evan.eckels@yahoo.com";
$subject=$_POST['subject'];
$message=$_POST['message'];

mail ( $email, $subject, $message, "From:".$from);

header("Location: linkemailsent.html");
exit;

?>
