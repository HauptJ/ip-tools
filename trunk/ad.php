<?php
////ad.php
//Josh
//26.7.14
//Desc: Displays random ad banner on top of page
?>

<div id='ad'>
    <?php
    $i = (mt_rand(0, 8));
    switch ($i) {
        case 0:
            echo "<center><a href='https://www.digitalocean.com/?refcode=d3723dfedb27'><img src = images/ads/do0.png alt = 'Digital Ocean Ad'></a></center>";
            break;
        case 1:
            echo "<center><a href='https://www.digitalocean.com/?refcode=d3723dfedb27'><img src = images/ads/do1.jpg alt = 'Digital Ocean Ad'></a></center>";
            break;
        case 2:
            echo "<center><a href='https://www.digitalocean.com/?refcode=d3723dfedb27'><img src = images/ads/do2.jpg alt = 'Digital Ocean Ad'></a></center>";
            break;
        case 3:
            echo "<center><a href='http://www.namecheap.com/?aff=70597'><img src = images/ads/name3.gif alt = 'namecheap Ad'></a></center>";
            break;
        case 4:
            echo "<center><a href='http://www.namecheap.com/?aff=70597'><img src = images/ads/name4.gif alt = 'namecheap Ad'></a></center>";
            break;
        case 5:
            echo "<center><a href='http://www.namecheap.com/?aff=70597'><img src = images/ads/name5.gif alt = 'namecheap Ad'></a></center>";
            break;
        case 6:
            echo "<center><a href='http://www.namecheap.com/?aff=70597'><img src = images/ads/name6.gif alt = 'namecheap Ad'></a></center>";
            break;
        case 7:
            echo "<center><a href='http://www.namecheap.com/?aff=70597'><img src = images/ads/name7.gif alt = 'namecheap Ad'></a></center>";
            break;
        case 8:
            echo "<center><a href='http://www.namecheap.com/?aff=70597'><img src = images/ads/name8.gif alt = 'namecheap Ad'></a></center>";
            break;
    }
    //line break
    echo '</br>';
    ?>
</div>
