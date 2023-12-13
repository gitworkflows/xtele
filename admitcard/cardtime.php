<?php

include "../lib/dbconnect.php";
include "../lib/fx.php";

       // get Data from Admit Instruction

	$out_venue_instruction= mysql_query("SELECT * FROM `venue_instruction`");
	while($row_venue_instruction=mysql_fetch_array($out_venue_instruction))
	      {	extract($row_venue_instruction);}


$start_date = "$card_issue_year-$card_issue_month-$card_issue_day 09:59:59"; //  10.00am
$end_date   = "$card_end_year-$card_end_month-$card_end_day 23:59:59"; // 6.00pmm



//$start_date = "2017-02-02 14:59:59"; //  3.00am
//$end_date   = "2018-08-30 23:59:59"; // 6.00pmm


$s_date = strtotime($start_date);   // Card Start Date
$e_date = strtotime($end_date);     // Card Start Date


$today = date("Y-m-d H:i:s");
$t_date = strtotime($today);


// Before Aplication Date

if ($t_date < $s_date)
{
 echo"<script language='javascript'>window.location.href=\"../err.php?err=501\"; </script>"; exit;
  }


if ($t_date > $e_date)
{
  echo"<script language='javascript'>window.location.href=\"../err.php?err=532\"; </script>"; exit;
}



?>
