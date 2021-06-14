<?php
date_default_timezone_set("Asia/Kolkata");
$arr = time();
$date = 'September 26 2016 09:12:00 AM';
$exp_date = strtotime($date);
echo ($exp_date-$arr);
//echo $rem;
?>
