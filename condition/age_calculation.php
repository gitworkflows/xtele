<?php



// ********************************************************   Age calcualtion for all post *******************************************************************


include "../lib/dbconnect.php";

//get Data from post

$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
while ($row_post = mysql_fetch_array($out_post)) {
	extract($row_post);
}

$date_limit = "$agelimit_year-$agelimit_month-$agelimit_day";


$date_limit = '2021-07-31';   //Age Calculation Date

//echo "date_limit22: $date_limit44";

$age_limit_min = '18';

//echo "A=$postcode && B=$total_years  && C=$total_month  D=$total_days";


/*if ($ds=="BSFIC Employee") 
             			{$age_limit_max = '45';}
             			
             			else if (($postcode=='110') && ($total_years >='5') && ($total_days >='1'))
            				 {$age_limit_max = '40';}

                     			else if (($postcode=='110') && ($total_years >='5') && ($total_month >='0'))
            				 {$age_limit_max = '40';}
             
     
             			else if ($postcode=='110')  
             					{$age_limit_max = '35';}             
             

      				 else if  ($ffq=="1" || $ffq=="2" || $ffq=="4")
             					{$age_limit_max = '32';}*/



/*if ($ds=="MOFOOD Employee") 
             			{$age_limit_max = '35';}
             			
							 else*/
 if (($postcode=='120') && ($ds=="Departmental Candidate"))   {
	$age_limit_max = '40';
} 

else if ($ffq == "1" || $ffq == "2" || $ffq == "4") {
	$age_limit_max = '32';
} else {
	$age_limit_max = '30';
}



/*if ($ds=="ORGBDR Employee") 
             			{$age_limit_max = '45';}

      else if  ($ffq=="1" || $ffq=="2")
             			{$age_limit_max = '32';}

           else 
                	{$age_limit_max = '30';}*/





$dob			= "$b_year" . "-" . "$b_month" . "-" . "$b_day";
$dob_value		= strtotime($dob);


$date_limit_x	= date('Y-m-d', strtotime($date_limit . "+0 days")); // ADD ONE(1) DAY
$date_limit_min	= strtotime(date("Y-m-d", strtotime($date_limit_x)) . " - $age_limit_min year");
$date_limit_max	= strtotime(date("Y-m-d", strtotime($date_limit_x)) . " - $age_limit_max year");



// Over aged
if ($date_limit_max > $dob_value) {
	echo "<script language='javascript'>window.location.href=\"err.php?err=240\"; </script>";
	// exit;
}

// Under aged
if ($date_limit_min < $dob_value) {
	echo "<script language='javascript'>window.location.href=\"err.php?err=241\"; </script>";
}


// AGE YEAR-MONTH-DAY
$dob_year	= $b_year;
$dob_month	= $b_month;
$dob_day	= $b_day;

$cir_year	= substr($date_limit_x, 0, 4);
$cir_month	= substr($date_limit_x, 5, -3);
$cir_day	= substr($date_limit_x, -2);


if (($dob_month == "01") || ($dob_month == "03") || ($dob_month == "05") || ($dob_month == "07") || ($dob_month == "08") || ($dob_month == "10") || ($dob_month == "12")) {
	$day_of_month = "31";
}
if (($dob_month == "04") || ($dob_month == "06") || ($dob_month == "09") || ($dob_month == "11")) {
	$day_of_month = "30";
}
if ($dob_month == "02") {
	$day_of_month = "28";
	//Check Leapyear
	if (($dob_year % 400 == 0) || (($dob_year % 4 == 0) && ($dob_year % 100 != 0))) {
		$day_of_month = "29";
	}
}


//DAY
if ($cir_day < $dob_day) {
	$cir_day = $cir_day + $day_of_month;
	$dob_month++;
}
$days = $cir_day - $dob_day;
// MONTH
if ($cir_month < $dob_month) {
	$cir_month = $cir_month + 12;
	$dob_year++;
}
$months = $cir_month - $dob_month;
//YEAR
$years = $cir_year - $dob_year;

$age_as = "$years Years $months Months $days Days";






/**if(($postcode=='130') || ($postcode=='140'))
       {

	include "../lib/dbconnect.php";
	
//get Data from post

	$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
	while($row_post=mysql_fetch_array($out_post))
	      {	extract($row_post);}

       $date_limit="$agelimit_year-$agelimit_month-$agelimit_day";
  

       //$date_limit= '2018-11-01';

       //echo "date_limit22: $date_limit44";
	
	$age_limit_min = '18';


    if($ffq=="1" || $ffq=="2" || $ffq=="4") 
             {$age_limit_max = '32';}

           else 
                {$age_limit_max = '30';}


       	$dob			= "$b_year"."-"."$b_month"."-"."$b_day";
	$dob_value		= strtotime($dob);
       

	$date_limit_x	= date('Y-m-d', strtotime($date_limit. "+1 days")); // ADD ONE(1) DAY
	$date_limit_min	= strtotime(date("Y-m-d", strtotime($date_limit_x)) . " - $age_limit_min year");
	$date_limit_max	= strtotime(date("Y-m-d", strtotime($date_limit_x)) . " - $age_limit_max year");
	


     // Over aged
	if($date_limit_max > $dob_value) 
           {
             echo"<script language='javascript'>window.location.href=\"err.php?err=240\"; </script>";
           // exit;
               }

     // Under aged
	if($date_limit_min < $dob_value)

	   { echo"<script language='javascript'>window.location.href=\"err.php?err=241\"; </script>";}


     // AGE YEAR-MONTH-DAY
	$dob_year	= $b_year;
	$dob_month	= $b_month;
	$dob_day	= $b_day;
	
	$cir_year	= substr($date_limit_x, 0,4);
	$cir_month	= substr($date_limit_x, 5, -3);
	$cir_day	= substr($date_limit_x, -2);
	

	if (($dob_month == "01") || ($dob_month == "03") || ($dob_month == "05") || ($dob_month == "07") || ($dob_month == "08") || ($dob_month == "10") || ($dob_month == "12")) {$day_of_month = "31";}
 	if (($dob_month == "04") || ($dob_month == "06") || ($dob_month == "09") || ($dob_month == "11")) {$day_of_month = "30";}
 	if ($dob_month == "02")
	{
		$day_of_month = "28";
		//Check Leapyear
		if(($dob_year % 400 == 0) || (($dob_year % 4 == 0) && ($dob_year % 100 != 0))){$day_of_month = "29";}
	}


	//DAY
	if($cir_day < $dob_day)
	{
		$cir_day = $cir_day + $day_of_month;
		$dob_month++;
	}
	$days = $cir_day - $dob_day;
	// MONTH
	if($cir_month < $dob_month)
	{
		$cir_month = $cir_month + 12;
		$dob_year++;
	}
	$months = $cir_month - $dob_month;
	//YEAR
	$years = $cir_year - $dob_year;
	
	$age_as = "$years Years $months Months $days Days";

}***/
