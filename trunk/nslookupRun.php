<?php
//nslookupRun.php
//Josh
//26.7.14
//Desc: script for nslookup test for nslookup.php
?>

<?php

$submit = $_GET['submit'];
$host = $_GET['host'];

//show ping form 
echo '<form methode="post" action="">';
echo '   Enter IP or Host <input type="text" name="host" value="google.com"></input>';
echo '   <input type="submit" name="submit" value="NsLookup!"></input>';
echo '</form>';

If ($submit == "NsLookup!") {
    // replace bad chars
    $host = preg_replace("/[^A-Za-z0-9.]/", "", $host);
    echo("NsLookup Output for $host :<br>");
    echo '<pre>';
    //check target IP or domain
    $output = shell_exec("nslookup $host");
    echo "<pre>$output</pre>";

    echo '</pre>';
    echo 'done ...';
} else {
    include("testFiller.php");
}
?>