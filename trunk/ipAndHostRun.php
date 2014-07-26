<?php
//index.php
//Josh
//26.7.14
//Desc: Displays users IP and Hostname for index.php (homepage)
?>

<?php

$ipAddress = $_SERVER["REMOTE_ADDR"];
echo "Your IP address is $ipAddress";

//ghetto line break
echo "<br />";

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo "Your hostname is $hostname";
?>
