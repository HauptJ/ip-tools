<?php

$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo "Here is your browser's user agent.";

//ghetto line break
echo '<br />';

echo "$userAgent";

//ghetto line break
echo "<br />";

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo "You are using Internet Explorer.";

    //ghetto line break
    echo "<br />";

    echo "<a href='http://www.paulirish.com/2010/high-res-browser-icons/'><img src = images/browsers/ie8.png alt = 'IE 8 Logo'></a>";
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo "You are using a later version of Internet Explorer.";

    //ghetto line break 
    echo "<br />";

    echo "<a href='http://www.paulirish.com/2010/high-res-browser-icons/'><img src = images/browsers/ie9.png alt = 'IE 9 or Later Logo'></a>";
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
    echo "You are using Google Chrome.";

    //ghetto line break
    echo "<br />";

    echo "<a href='http://www.paulirish.com/2010/high-res-browser-icons/'><img src = images/browsers/chrome.png alt = 'Google Chrome Logo'></a>";
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) {
    echo "You are using Mozilla Firefox.";

    //ghetto line break
    echo "<br />";

    echo "<a href='http://www.paulirish.com/2010/high-res-browser-icons/'><img src = images/browsers/firefox.png alt = 'Mozilla Firefox Logo'></a>";
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE) {
    echo "You are using Opera.";

    //ghetto line break
    echo "<br />";

    echo "<a href='http://www.paulirish.com/2010/high-res-browser-icons/'><img src = images/browsers/opera.png alt = 'Opera Logo'></a>";
} else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE) {
    echo "You are using Safari.";

    //ghetto line break
    echo "<br />";

    echo "<a href='http://www.paulirish.com/2010/high-res-browser-icons/'><img src = images/browsers/safari.png alt = 'Safari Logo'></a>";
} else {
    echo "What are you using?";

    //ghetto line break
    echo "<br />";

    echo "<a href='https://s3-us-west-2.amazonaws.com/pnwmsnw/NIAC_PhaseII_FDR.pdf'><img src = images/browsers/unknown.png alt = 'Unknown - Earth Logo'></a></center>";
}
?>