<?php
//  pingRun.php
//  Josh 
//  23.7.14
//  Desc: Performs the ping via console and outputs the result.
//  This script adapted from a script writen by webmaster@theworldsend.net, Aug.2001 
//  http://www.theworldsend.net  
// 
//------------------------- 
$max_count = 10; //maximum count for ping command 
// ------------------------- 
// nothing more to be done. 
// ------------------------- 
$register_globals = (bool) ini_get('register_gobals');
$system = ini_get('system');
// 

$submit = $_GET['submit'];
$count = $_GET['count'];
$host = $_GET['host'];
$ip = $_SERVER['REMOTE_ADDR'];

//display form
echo '<p><font size="2">Your IP is: ' . $ip . '</font></p>';
echo '<form methode="post" action=" ">';
echo '   Enter IP or Host <input type="text" name="host" value="' . $ip . '"></input>';
echo '   Enter Count <input type="text" name="count" size="2" value="4"></input>';
echo '   <input type="submit" name="submit" value="Ping!"></input>';
echo '</form>';
echo '<br><b>' . $system . '</b>';

// form submitted ? 
If ($submit == "Ping!") {
    // over count ? 
    If ($count > $max_count) {
        echo 'Maximum for count is: ' . $max_count;
        echo '<a href="' . $self . '">Back</a>';
    } else {
        // replace bad chars 
        $host = preg_replace("/[^A-Za-z0-9.-]/", "", $host);
        $count = preg_replace("/[^0-9.]/", "", $count);
        echo("Ping Output:<br>");
        echo '<pre>';
        //check target IP or domain 

        $output = shell_exec("ping -c$count -w$count $host");
        echo "<pre>$output</pre>";
        system("killall ping"); // kill all ping processes in case there are some stalled ones or use echo 'ping' to execute ping without shell 

        echo '</pre>';
    }
} else {
    include("testFiller.php");
}
?> 