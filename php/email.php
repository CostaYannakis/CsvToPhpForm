<?php
// Change the line below to your timezone!
date_default_timezone_set('Australia/Melbourne');
$date = date('m/d/Y h:i:s a', time());
echo $date;
$myfile = fopen($date.strftime, "w") or die("Unable to open file!");
fclose($myfile);

?>