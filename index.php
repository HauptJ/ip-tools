<?php
//index.php
//Josh
//26.7.14
//Desc: homepage
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Your IP</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!-- The lovely contents are below -->

        <?php 
        //include the ad
        include("ad.php");
        
        //include the nav bar
        include("navBar.php"); 
        ?>
        
        <!-- The main part yo! -->
        <div id="main">
            
            <?php include("ipAndHostRun.php"); ?>
            
            <p>Your IP address is a unique string that  identifies each computer using the Internet Protocol to communicate over a network such as the global Internet.</p>
            <p>Your hostname is a name that is assigned to your IP address by your Internet service provider (ISP). Not all ISP's assign hostnames to IP addresses and if your hostname and IP address shown above are the same, your ISP did not assign a hostname to your IP.</p>
        </div>

        <!-- The lovely contents are above -->
    </body>
</html>
