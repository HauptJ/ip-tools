<?php
//mystery.php
//Josh
//26.7.14
//Desc: displays a video
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Trololo</title>
        <script src="https://jwpsrv.com/library/3ADBggl8EeSvuyIACtqXBA.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        
        <?php 
        //include teh ad
        //include("ad.php");
        
        //include the awsome nav bar
        include("navBar.php"); 
        ?>

        <!--Play the funky music white boi-->
        <div id ='main'>
            <div id='playerAbAaKnKdHGmU'></div>
            <script type='text/javascript'>
                src="https://jwpsrv.com/library/3ADBggl8EeSvuyIACtqXBA.js";
                jwplayer('playerAbAaKnKdHGmU').setup({
                    file: '/videos/ed_hd.mp4',
                    image: '/videos/ed_cover.jpg',
                    title: 'Elephants Dream',
                    width: '560',
                    height: '315',
                    autostart: 'true',
                    repeat: 'true'
                });
            </script>
        </div>

    </body>
</html>
