<?php
//mystery.php
//Josh
//26.7.14
//Desc: displays a video
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Elephants Dream</title>
        <script src="https://jwpsrv.com/library/3ADBggl8EeSvuyIACtqXBA.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        
        <?php 
        //include the awsome nav bar
        include("navBar.php"); 
        ?>

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
                    autostart: 'false',
                    repeat: 'false'
                });
            </script>
        </div>

    </body>
</html>
