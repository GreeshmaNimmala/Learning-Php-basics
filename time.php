<?php

$sale_end=mktime(0,0,0,7,22,2020);

date_default_timezone_set("America/Toronto");

$current_time=time();

 $time_left=$sale_end-$current_time;

 $left_time_days=$time_left/86400;

 echo "The sale ends in " .(int)$left_time_days. " days ";

 ?>
