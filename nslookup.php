<?php
//nslookup.php
//Josh
//26.7.14
//Desc: page for nslookup test
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NSLOOKUP</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        //include the ad
        //include("ad.php");

        //include the nav bar
        include("navBar.php");
        ?>

        <!-- The main part yo! -->
        <div id="main">
            <?php include("nslookupRun.php"); ?>
        </div>

        <!-- The lovely contents are above -->

    </body>
</html>
