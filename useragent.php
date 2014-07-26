<!DOCTYPE html>
<!--
I'll think about adding something here later. 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Agent Info</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <?php 
        //include the lovely ad
        include("ad.php");

        //include the lovely nav bar
        include("navBar.php"); 
        ?>

        <!-- the main part, what else?-->
        <div id="main">
            
            <?php include("userAgentRun.php"); ?>

            <p>Every time you browse a webpage your browser, (Internet Explorer, Safari, etc. ), sends out your user agent, which is a line of information to the server hosting the website that tells it what browser and operating system you are using. This is used to help the web server generate a page that will work best in your browser. For example, if you are using an older browser like Internet Explorer 6, the web server might return a much simpler and stripped down version of the webpage than it would if you were using Internet Explorer 11. </p>
            <p>Above is your user agent.</p>
            
            
        </div>
    </body>
</html>
