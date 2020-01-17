<?php
include("../res/x5engine.php");
$nameList = array("2s8","zxc","le3","hy7","dau","mjd","vp5","fuu","43e","ye7");
$charList = array("3","K","X","W","A","Z","C","H","P","G");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
