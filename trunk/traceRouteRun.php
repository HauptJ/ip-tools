<?php

//  traceRouteRun.php
//  Josh 
//  28.7.14
//  Desc: Performs the traceroute via console and outputs the result.
//  This script was adapted from a script writen by webmaster@theworldsend.net, Aug.2001 
//  original dev's website: http://www.theworldsend.net  
$submit = $_GET['submit'];
$host = $_GET['host'];
$ip = $_SERVER['REMOTE_ADDR'];
$self = $_SERVER['PHP_SELF'];

//show traceroute form 
echo '<p><font size="2">Your IP is: ' . $ip . '</font></p>';
echo '<form methode="post" action="">';
echo '   Enter IP or Host <input type="text" name="host" value="' . $ip . '"></input>';
echo '   <input type="submit" name="submit" value="Traceroute!"></input>';
echo '</form>';

If ($submit == "Traceroute!") {
    // replace bad chars
    $host = preg_replace("/[^A-Za-z0-9.]/", "", $host);
    echo("Trace Output to $host :<br>");
    echo '<pre>';
    //check target IP or domain
    $output = shell_exec("traceroute $host");
    echo "<pre>$output</pre>";
    system("killall -q traceroute"); // kill all traceroute processes in case there are some stalled ones or use echo 'traceroute' to execute without shell

    echo '</pre>';
    echo 'done ...';
} else {
    include("testFiller.php");
}
?>