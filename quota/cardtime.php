<?php
$start_date = "2016-10-01 8:59:59"; //  9.00am
$end_date   = "2018-06-30 23:59:59"; // 6.00pmm


$s_date = strtotime($start_date);   // Card Start Date
$e_date = strtotime($end_date);     // Card Start Date


$today = date("Y-m-d H:i:s");
$t_date = strtotime($today);


/* Before Aplication Date

if ($t_date < $s_date)
{
	echo"<meta http-equiv=\"refresh\" content=\"0;URL=../err_common.php?err=393\" />";
	exit;
}


*/



if ($t_date > $e_date)
{
	echo"<script language='javascript'>window.location.href=\"../err.php?err=501\"; </script>"; exit;
}




?>
