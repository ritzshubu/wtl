<?php
date_default_timezone_set('Asia/Kolkata');
$present_time=date("H:i:s-m/d/y");
$expiry= 60 * 60 *24 *60 + time();
setcookie("Lastvisit",$present_time, $expiry);
if(isset($_COOKIE["Lastvisit"]))
{
	echo nl2br("Cookie has been set\n");
	echo nl2br("\nThe current time of the system is");
	echo $present_time;
	echo nl2br("\nThe Last visited Time and Date");
	echo $_COOKIE["Lastvisit"];
}
else
	echo nl2br("\nYou've got some old cookies!");
?>