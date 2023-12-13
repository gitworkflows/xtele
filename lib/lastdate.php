<?php

include "dbconnect.php";

       // get Data from Post

	$out_post= mysql_query("SELECT * FROM `post`");
	while($row_post=mysql_fetch_array($out_post))
	      {	extract($row_post);}


$start_date = "$app_start_year-$app_start_month-$app_start_day 09:59:59"; //  10.00am
$last_date   = "$app_end_year-$app_end_month-$app_end_day 23:59:59"; // 6.00pmm


//echo "$start_date";
//echo "$last_date";

$start_date = "2021-06-30 09:59:00"; // 10.00am
$last_date  = "2021-08-30 16:59:59"; //5.00pm



$s_date = strtotime($start_date); // Application Start Date
$l_date = strtotime($last_date);  // Application End Date
$a_date = strtotime("+1 days",$l_date); // Start Admitcard Link date

$today = date("Y-m-d H:i:s");
$t_date = strtotime($today);

// Before Aplication Date
if ($t_date < $s_date)
{
	$active = "0";
	echo"<meta http-equiv=\"refresh\" content=\"0;URL=err.php?err=550\" />";
	exit;
    }

// Application Date Finish
if ($t_date >= $l_date && $t_date < $a_date)
{
	$active = "0";
	echo"<meta http-equiv=\"refresh\" content=\"0;URL=err.php?err=500\" />";
	exit;
    }

// Goto Admitcard link after 24 hours
if ($t_date >= $a_date)
{
	$active = "0";
	echo"<meta http-equiv=\"refresh\" content=\"0;URL=admitcard/index.php\" />";
	exit;
   }

?>
