<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ping</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        //include the ad
        include("ad.php");

        //include the nav bar
        include("navBar.php");
        ?>

        <!-- The main part yo! -->
        <div id="main">
            <?php include("pingRun.php"); ?>
        </div>

        <!-- The lovely contents are above -->
    </body>
</html>
