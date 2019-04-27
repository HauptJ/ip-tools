<!DOCTYPE html>
<!--
Coming soon... maybe....
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Speed Test</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <?php 
        //include the super awsome ad
        //include("ad.php");

        //incude the lovely nav bar
        include("navBar.php"); 
        ?>

        <div id="main">
            <!-- BEGIN SPEED TEST - DO NOT ALTER BELOW-->
            <script type="text/javascript" src="speedtest/swfobject.js?v=2.2"></script>
            <div id="mini-demo">
                Speedtest.net Mini requires at least version 8 of Flash. Please <a href="http://get.adobe.com/flashplayer/">update your client</a>.
            </div><!--/mini-demo-->
            <script type="text/javascript">
                var flashvars = {
                    upload_extension: "php"
                };
                var params = {
                    wmode: "transparent",
                    quality: "high",
                    menu: "false",
                    allowScriptAccess: "always"
                };
                var attributes = {};
                swfobject.embedSWF("speedtest.swf?v=2.1.8", "mini-demo", "500", "286", "9.0.0", "speedtest/expressInstall.swf", flashvars, params, attributes);
            </script>
            <!-- END SPEED TEST - DO NOT ALTER ABOVE -->
            <p>An Internet speed test will tell you how fast your Internet connection is running at the moment. Speed tests are often used to check if your Internet connection is running as fast as it should be. </p>

        </div>
    </body>
</html>
