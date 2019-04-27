<!DOCTYPE html>
<!--
Coming soon... Hopefully... If I don't forget...
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Traceroute</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <?php 

        //include the lovely nav bar yet again
        include("navBar.php"); 
        ?>

        <div id="main">

            <?php include ("traceRouteRun.php"); ?>

            <p> </p>
            <p>Traceroute is a computer network diagnostic tool for displaying the route (path) and measuring transit delays of packets across an Internet Protocol (IP) network, such as the global internet. Traceroute simply lists the routers that your data travels through to reach its destination. </p>
            <p>In Microsoft Windows you can run a traceroute from the command line using the following command. Just replace IPAddress or HostName with the IP address or hostname of the server you wish to test.</p>
            <p style="padding-left: 30px;"><strong>tracert IPAddress or HostName</strong></p>
            <p>For example, the command to run a  traceroute to google.com would look like this.</p>
            <p style="padding-left: 30px;"><strong>tracert google.com</strong></p>
            <p>Screenshot of a traceroute run in Windows 8:</p>
            <p><img src="images/tracertGoogleWin.png" alt="" width="717" height="419" /></p>
            <p>In Mac OSX or Linux, you can run a traceroute from the terminal using the following command. Again, <span style="line-height: 1.3em;"> j</span><span style="line-height: 1.3em;">ust replace IPAddress or HostName with the IP address or hostname of the server you wish to test.</span></p>
            <p style="padding-left: 30px;"><strong>traceroute <span style="line-height: 1.3em;">IPAddress or HostName</span></strong></p>
            <p>For example, the command to run a  traceroute to google.com would look like this.</p>
            <p style="padding-left: 30px;"><strong>traceroute google.com</strong></p>
            <p> </p>
            <p>Above you can perform a web based traceroute from the server hosting this website to your IP address or any other address you are interested in testing such as google.com. If you are curious, this server is currently hosted by <a title="Digital Ocean" href="https://www.digitalocean.com/?refcode=d3723dfedb27">Digital Ocean</a> in New York City.</p>
        </div>
    </body>
</html>
