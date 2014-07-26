<?php

$userIP = $_SERVER['REMOTE_ADDR'];
echo "<p>Server port scan for your IP address $userIP.</p>";

//start the adventure
getUserOK();

function getUserOK() {

    $submit = $_GET['submit'];

    //check if user agrees
    if ($submit == "Agree!") {
        portScan();
    } else {
        //show consent message
        echo 'NOTE: Your firewall may detect this port scan test as a malicious attack. I assure you that this test is not malicous in any way. </br>';
        echo 'Do you agree to this port scan?';
        echo '<form methode="post" action=" ">';
        echo '<input type="submit" name="submit" value="Agree!"></input>';
        echo '</form>';
    }
}

function portScan() {

    $userIP = $_SERVER['REMOTE_ADDR'];

    if (!empty($userIP)) {
        //list of port numbers to scan
        $ports = array(21, 22, 23, 25, 53, 80, 110, 137, 138, 139, 143, 443, 445, 548, 587, 993, 995, 1433, 1701, 1723, 3306, 5432, 8008, 8443);

        $results = array();
        foreach ($ports as $port) {
            if ($pf = @fsockopen($userIP, $port, $err, $err_string, 1)) {
                $results[$port] = true;
                fclose($pf);
            } else {
                $results[$port] = false;
            }
        }

        foreach ($results as $port => $val) {
            $prot = getservbyport($port, "tcp");
            echo '<span style="color:#FFFFFF">' . "Port $port ($prot): " . '</span>';
            if ($val) {
                echo "<span style=\"color:green\">OK</span><br/>";
            } else {
                echo "<span style=\"color:red\">Inaccessible</span><br/>";
            }
        }
    }
}
?>
