<?php

include "lib/lastdate.php";
include "lib/dbconnect.php";
include "lib/fx.php";



if ($active == "0") {
	exit;
}


$alljobs_id = $_POST['alljobs_id'];

$image = $_POST["image"];
$sign = $_POST["signature"];

$imageurl = $_POST["imageurl"];
$signatureurl = $_POST["signatureurl"];



$post_code 				= addslashes($_POST['post_code']);

$post_name				= addslashes($_POST['post_name']);
$apply_post 				= addslashes($_POST['$apply_post']);

$dept	 				= addslashes($_POST['dept']);
$name 					= addslashes($_POST['name']);
$fathername 			= addslashes($_POST['fathername']);
$mothername 			= addslashes($_POST['mothername']);
$b_day 					= addslashes($_POST['b_day']);
$b_month 				= addslashes($_POST['b_month']);
$b_year 				= addslashes($_POST['b_year']);
$sex 					= addslashes($_POST['sex']);
$age_as 				= addslashes($_POST['$age_as']);

$age_as1 				= addslashes($_POST['$age_as1']);
$age_as2 				= addslashes($_POST['$age_as2']);
$age_as3 				= addslashes($_POST['$age_as3']);
$age_as4 				= addslashes($_POST['$age_as4']);
$age_as5 				= addslashes($_POST['$age_as5']);

$nationality 			= addslashes($_POST['nationality']);
$nid					= addslashes($_POST['nid']);
$nid_no					= addslashes($_POST['nid_no']);
$passport				= addslashes($_POST['passport']);
$passport_no			= addslashes($_POST['passport_no']);
$breg					= addslashes($_POST['breg']);
$breg_no				= addslashes($_POST['breg_no']);
$religion			 	= addslashes($_POST['religion']);
$mstatus 				= addslashes($_POST['mstatus']);
$s_name 				= addslashes($_POST['s_name']);
$ffq		 			= addslashes($_POST['ffq']);
$ff_quota		 			= addslashes($_POST['ff_quota']);

$home_dist			= addslashes($_POST['menu_dist']);

$copy		 			= addslashes($_POST['copy']);
$present_care 			= addslashes($_POST['present_care']);
$present_vill 			= addslashes($_POST['present_vill']);
$present_ps_name 			= addslashes($_POST['present_ps_name']);
$present_dist_name 			= addslashes($_POST['present_dist_name']);

$present_dist			= addslashes($_POST['menu_one']);
$present_ps 			= addslashes($_POST['menu_one_list']);
$present_ops 			= addslashes($_POST['ops1']);
$present_post 			= addslashes($_POST['present_post']);
$present_pcode 			= addslashes($_POST['present_pcode']);


$permanent_care 		= addslashes($_POST['permanent_care']);
$permanent_vill 		= addslashes($_POST['permanent_vill']);
$permanent_ps_name 			= addslashes($_POST['permanent_ps_name']);
$permanent_dist_name 			= addslashes($_POST['permanent_dist_name']);

$permanent_dist			= addslashes($_POST['menu_two']);
$permanent_care 		= addslashes($_POST['permanent_care']);
$permanent_ps 			= addslashes($_POST['menu_two_list']);
$permanent_ops 			= addslashes($_POST['ops2']);
$permanent_post 		= addslashes($_POST['permanent_post']);
$permanent_pcode 		= addslashes($_POST['permanent_pcode']);
$mobileno 				= addslashes($_POST['mobileno']);
$confirmmobile 				= addslashes($_POST['confirmmobile']);

$Email 					= addslashes($_POST['Email']);

$masters				= addslashes($_POST['masters']);
$phd				= addslashes($_POST['phd']);





$ageactual		 			= addslashes($_POST['ageactual']);

$ref_name_1			 	= addslashes($_POST['ref_name_1']);
$ref_post_1			 	= addslashes($_POST['ref_post_1']);
$ref_org_1			 	= addslashes($_POST['ref_org_1']);
$ref_contact_1			= addslashes($_POST['ref_contact_1']);
$ref_mail_1			 	= addslashes($_POST['ref_mail_1']);
$ref_name_2			 	= addslashes($_POST['ref_name_2']);
$ref_post_2			 	= addslashes($_POST['ref_post_2']);
$ref_org_2			 	= addslashes($_POST['ref_org_2']);
$ref_contact_2			= addslashes($_POST['ref_contact_2']);
$ref_mail_2			 	= addslashes($_POST['ref_mail_2']);

$validation 			= addslashes($_POST['validation']);
$code 					= addslashes($_POST['code']);

$exam1					= addslashes($_POST['exam1']);
$institute1				= addslashes($_POST['institute1']);
$year1					= addslashes($_POST['year1']);
$roll1					= addslashes($_POST['roll1']);
$result1				= addslashes($_POST['result1']);
$result_gpa1			        = addslashes($_POST['result_gpa1']);
$result_eq1				= addslashes($_POST['result_eq1']);
$subject1				= addslashes($_POST['subject1']);

$exam2					= addslashes($_POST['exam2']);
$institute2				= addslashes($_POST['institute2']);
$year2					= addslashes($_POST['year2']);
$roll2					= addslashes($_POST['roll2']);
$result2				= addslashes($_POST['result2']);
$result_gpa2				= addslashes($_POST['result_gpa2']);
$result_eq2				= addslashes($_POST['result_eq2']);
$subject2				= addslashes($_POST['subject2']);


$exam3					= addslashes($_POST['exam3']);
$institute3				= addslashes($_POST['institute3']);
$year3					= addslashes($_POST['year3']);
$roll3					= addslashes($_POST['roll3']);
$result3				= addslashes($_POST['result3']);
$result_gpa3				= addslashes($_POST['result_gpa3']);
$result_eq3				= addslashes($_POST['result_eq3']);
$subject3				= addslashes($_POST['subject3']);
$duration3		= addslashes($_POST['duration3']);


$exam4					= addslashes($_POST['exam4']);
$institute4				= addslashes($_POST['institute4']);
$year4					= addslashes($_POST['year4']);
$roll4					= addslashes($_POST['roll4']);
$result4				= addslashes($_POST['result4']);
$result_gpa4				= addslashes($_POST['result_gpa4']);
$result_eq4				= addslashes($_POST['result_eq4']);
$subject4				= addslashes($_POST['subject4']);
$duration4		= addslashes($_POST['duration4']);



$exam5					= addslashes($_POST['exam5']);
$institute5				= addslashes($_POST['institute5']);
$year5					= addslashes($_POST['year5']);
$roll5					= addslashes($_POST['roll5']);
$result5				= addslashes($_POST['result5']);
$result_gpa5				= addslashes($_POST['result_gpa5']);
$result_eq5				= addslashes($_POST['result_eq5']);
$subject5				= addslashes($_POST['subject5']);
$duration5		= addslashes($_POST['duration5']);

$job_no		= addslashes($_POST['job_no']);
$ds		= addslashes($_POST['ds']);


$job_post1		= addslashes($_POST['job_post1']);
$organization1		= addslashes($_POST['organization1']);
$job_res1		= addslashes($_POST['job_res1']);

$t_day1 					= addslashes($_POST['t_day1']);
$t_month1 				= addslashes($_POST['t_month1']);
$t_year1 				= addslashes($_POST['t_year1']);

$f_day1 					= addslashes($_POST['f_day1']);
$f_month1 				= addslashes($_POST['f_month1']);
$f_year1 				= addslashes($_POST['f_year1']);
$till_now 				= addslashes($_POST['till_now']);


$job_post2		= addslashes($_POST['job_post2']);
$organization2		= addslashes($_POST['organization2']);
$job_res2		= addslashes($_POST['job_res2']);

$t_day2 					= addslashes($_POST['t_day2']);
$t_month2 				= addslashes($_POST['t_month2']);
$t_year2 				= addslashes($_POST['t_year2']);

$f_day2 					= addslashes($_POST['f_day2']);
$f_month2 				= addslashes($_POST['f_month2']);
$f_year2 				= addslashes($_POST['f_year2']);




$job_post3		= addslashes($_POST['job_post3']);
$organization3		= addslashes($_POST['organization3']);
$job_res3		= addslashes($_POST['job_res3']);

$t_day3 					= addslashes($_POST['t_day3']);
$t_month3 				= addslashes($_POST['t_month3']);
$t_year3 				= addslashes($_POST['t_year3']);

$f_day3 					= addslashes($_POST['f_day3']);
$f_month3 				= addslashes($_POST['f_month3']);
$f_year3 				= addslashes($_POST['f_year3']);



$job_post4		= addslashes($_POST['job_post4']);
$organization4		= addslashes($_POST['organization4']);
$job_res4		= addslashes($_POST['job_res4']);

$t_day4 					= addslashes($_POST['t_day4']);
$t_month4 				= addslashes($_POST['t_month4']);
$t_year4 				= addslashes($_POST['t_year4']);

$f_day4 					= addslashes($_POST['f_day4']);
$f_month4 				= addslashes($_POST['f_month4']);
$f_year4 				= addslashes($_POST['f_year4']);



$job_post5		= addslashes($_POST['job_post5']);
$organization5		= addslashes($_POST['organization5']);
$job_res5		= addslashes($_POST['job_res5']);

$t_day5 					= addslashes($_POST['t_day5']);
$t_month5 				= addslashes($_POST['t_month5']);
$t_year5 				= addslashes($_POST['t_year5']);

$f_day5 					= addslashes($_POST['f_day5']);
$f_month5 				= addslashes($_POST['f_month5']);
$f_year5 				= addslashes($_POST['f_year5']);


// Experience information

$six_trai 			= addslashes($_POST['six_trai']);
$texp 				= addslashes($_POST['exp']);
$exp1		 			= addslashes($_POST['exp1']);
$exp2 				= addslashes($_POST['exp2']);
$exp3		 			= addslashes($_POST['exp3']);
$exp4 				= addslashes($_POST['exp4']);
$exp5		 			= addslashes($_POST['exp5']);

$draft_man		 		= addslashes($_POST['draft_man']);
$sur_vey		 		= addslashes($_POST['sur_vey']);
$typ_spd		 		= addslashes($_POST['typ_spd']);
$data_entry		 			= addslashes($_POST['data_entry']);
$typ_speed		 			= addslashes($_POST['typ_speed']);
$steno_typ		 			= addslashes($_POST['steno_typ']);
$com_cer 				= addslashes($_POST['com_cer']);





$eight_cert 				= addslashes($_POST['eight_cert']);
$dri_lic 				= addslashes($_POST['dri_lic']);
$dri_lic_type 				= addslashes($_POST['dri_lic_type']);

$exp_one		 			= addslashes($_POST['exp_one']);
$exp_two		 			= addslashes($_POST['exp_two']);
$exp_three		 			= addslashes($_POST['exp_three']);
$exp_four		 			= addslashes($_POST['exp_four']);
$exp_five		 			= addslashes($_POST['exp_five']);


$pass8		 			= addslashes($_POST['pass8']);
$pexp5		 			= addslashes($_POST['pexp5']);
$pexp2		 			= addslashes($_POST['pexp2']);
$pexp4		 			= addslashes($_POST['pexp4']);
$pexp22		 			= addslashes($_POST['pexp22']);
$memcs		 			= addslashes($_POST['memcs']);
$cddc			 			= addslashes($_POST['cddc']);
$trai6			 			= addslashes($_POST['trai6']);

$exp		 			= addslashes($_POST['exp']);
$experience		 			= addslashes($_POST['experience']);

$progexp5	 			= addslashes($_POST['progexp5']);
$progexp2		 			= addslashes($_POST['progexp2']);
$progexp4	 			= addslashes($_POST['progexp4']);
$progexp22		 			= addslashes($_POST['progexp22']);
$membercs		 			= addslashes($_POST['membercs']);
$cerddc		 			= addslashes($_POST['cerddc']);
$training		 			= addslashes($_POST['training']);

$one_expvalue_110		 			= addslashes($_POST['one_expvalue_110']);
$two_expvalue_110		 			= addslashes($_POST['two_expvalue_110']);
$three_expvalue_110		 			= addslashes($_POST['three_expvalue_110']);
$four_expvalue_110		 			= addslashes($_POST['four_expvalue_110']);


$one_expvalue_120		 			= addslashes($_POST['one_expvalue_120']);
$two_expvalue_120		 			= addslashes($_POST['two_expvalue_120']);
$three_expvalue_120		 			= addslashes($_POST['three_expvalue_120']);

$one_expvalue_130		 			= addslashes($_POST['one_expvalue_130']);
$two_expvalue_130		 			= addslashes($_POST['two_expvalue_130']);
$three_expvalue_130		 			= addslashes($_POST['three_expvalue_130']);


$one_expvalue_140		 			= addslashes($_POST['one_expvalue_140']);
$two_expvalue_140		 			= addslashes($_POST['two_expvalue_140']);
$three_expvalue_140		 			= addslashes($_POST['three_expvalue_140']);

$one_expvalue_140		 			= addslashes($_POST['one_expvalue_140']);
$two_expvalue_140		 			= addslashes($_POST['two_expvalue_140']);
$three_expvalue_140		 			= addslashes($_POST['three_expvalue_140']);

$one_expvalue_150		 			= addslashes($_POST['one_expvalue_150']);
$two_expvalue_150		 			= addslashes($_POST['two_expvalue_150']);
$three_expvalue_150		 			= addslashes($_POST['three_expvalue_150']);

$one_expvalue_160		 			= addslashes($_POST['one_expvalue_160']);
$two_expvalue_160		 			= addslashes($_POST['two_expvalue_160']);
$three_expvalue_160		 			= addslashes($_POST['three_expvalue_160']);


$one_expvalue_170		 			= addslashes($_POST['one_expvalue_170']);
$two_expvalue_170		 			= addslashes($_POST['two_expvalue_170']);
$three_expvalue_170		 			= addslashes($_POST['three_expvalue_170']);


$one_expvalue_180		 			= addslashes($_POST['one_expvalue_180']);
$two_expvalue_180		 			= addslashes($_POST['two_expvalue_180']);
$three_expvalue_180		 			= addslashes($_POST['three_expvalue_180']);


$one_expvalue_190		 			= addslashes($_POST['one_expvalue_190']);
$two_expvalue_190		 			= addslashes($_POST['two_expvalue_190']);
$three_expvalue_190		 			= addslashes($_POST['three_expvalue_190']);


$one_expvalue_200		 			= addslashes($_POST['one_expvalue_200']);
$two_expvalue_200		 			= addslashes($_POST['two_expvalue_200']);
$three_expvalue_200		 			= addslashes($_POST['three_expvalue_200']);


$one_expvalue_210		 			= addslashes($_POST['one_expvalue_210']);
$two_expvalue_210		 			= addslashes($_POST['two_expvalue_210']);
$three_expvalue_210		 			= addslashes($_POST['three_expvalue_210']);


$one_expvalue_220		 			= addslashes($_POST['one_expvalue_220']);
$two_expvalue_220		 			= addslashes($_POST['two_expvalue_220']);
$three_expvalue_220		 			= addslashes($_POST['three_expvalue_220']);


$one_expvalue_230		 			= addslashes($_POST['one_expvalue_230']);
$two_expvalue_230		 			= addslashes($_POST['two_expvalue_230']);
$three_expvalue_230		 			= addslashes($_POST['three_expvalue_230']);



$one_expvalue_240		 			= addslashes($_POST['one_expvalue_240']);
$two_expvalue_240		 			= addslashes($_POST['two_expvalue_240']);
$three_expvalue_240		 			= addslashes($_POST['three_expvalue_240']);



$one_expvalue_250		 			= addslashes($_POST['one_expvalue_250']);
$two_expvalue_250		 			= addslashes($_POST['two_expvalue_250']);
$three_expvalue_250		 			= addslashes($_POST['three_expvalue_250']);



$one_expvalue_260		 			= addslashes($_POST['one_expvalue_260']);
$two_expvalue_260		 			= addslashes($_POST['two_expvalue_260']);
$three_expvalue_260		 			= addslashes($_POST['three_expvalue_260']);


$one_expvalue_270		 			= addslashes($_POST['one_expvalue_270']);
$two_expvalue_270		 			= addslashes($_POST['two_expvalue_270']);
$three_expvalue_270		 			= addslashes($_POST['three_expvalue_270']);


$one_expvalue_280		 			= addslashes($_POST['one_expvalue_280']);
$two_expvalue_280		 			= addslashes($_POST['two_expvalue_280']);
$three_expvalue_280		 			= addslashes($_POST['three_expvalue_280']);


$one_expvalue_290		 			= addslashes($_POST['one_expvalue_290']);
$two_expvalue_290		 			= addslashes($_POST['two_expvalue_290']);
$three_expvalue_290		 			= addslashes($_POST['three_expvalue_290']);

$one_expvalue_300		 			= addslashes($_POST['one_expvalue_300']);
$two_expvalue_300		 			= addslashes($_POST['two_expvalue_300']);
$three_expvalue_300		 			= addslashes($_POST['three_expvalue_300']);



$one_expvalue_310		 			= addslashes($_POST['one_expvalue_310']);
$two_expvalue_310		 			= addslashes($_POST['two_expvalue_310']);
$three_expvalue_310		 			= addslashes($_POST['three_expvalue_310']);


$one_expvalue_320		 			= addslashes($_POST['one_expvalue_320']);
$two_expvalue_320		 			= addslashes($_POST['two_expvalue_320']);
$three_expvalue_320		 			= addslashes($_POST['three_expvalue_320']);


$one_expvalue_330		 			= addslashes($_POST['one_expvalue_330']);
$two_expvalue_330		 			= addslashes($_POST['two_expvalue_330']);
$three_expvalue_330		 			= addslashes($_POST['three_expvalue_330']);


$one_expvalue_340		 			= addslashes($_POST['one_expvalue_340']);
$two_expvalue_340		 			= addslashes($_POST['two_expvalue_340']);
$three_expvalue_340		 			= addslashes($_POST['three_expvalue_340']);

$one_expvalue_350		 			= addslashes($_POST['one_expvalue_350']);
$two_expvalue_350		 			= addslashes($_POST['two_expvalue_350']);
$three_expvalue_350		 			= addslashes($_POST['three_expvalue_350']);

$one_expvalue_360		 			= addslashes($_POST['one_expvalue_360']);
$two_expvalue_360		 			= addslashes($_POST['two_expvalue_360']);
$three_expvalue_360		 			= addslashes($_POST['three_expvalue_360']);

$one_expvalue_370		 			= addslashes($_POST['one_expvalue_370']);
$two_expvalue_370		 			= addslashes($_POST['two_expvalue_370']);
$three_expvalue_370		 			= addslashes($_POST['three_expvalue_370']);

$one_expvalue_380		 			= addslashes($_POST['one_expvalue_380']);
$two_expvalue_380		 			= addslashes($_POST['two_expvalue_380']);
$three_expvalue_380		 			= addslashes($_POST['three_expvalue_380']);


$one_expvalue_400		 			= addslashes($_POST['one_expvalue_400']);
$two_expvalue_400		 			= addslashes($_POST['two_expvalue_400']);
$three_expvalue_400		 			= addslashes($_POST['three_expvalue_400']);


$other_department	 = addslashes($_POST['other_department']);



$ca_cert 				= addslashes($_POST['ca_cert']);
$cma_cert 				= addslashes($_POST['cma_cert']);
$ad_no 			        	= addslashes($_POST['ad_no']);

$dob	= "$b_year" . "-" . "$b_month" . "-" . "$b_day";



$ff_quota = $ffq;

if ($ffq == '1') $ff_quota = "Freedom Fighter";
if ($ffq == '2') $ff_quota = "Child of Freedom Fighter";
if ($ffq == '3') $ff_quota = "Grand Child of Freedom Fighter";
if ($ffq == '4') $ff_quota = "Physically Handicapped";
if ($ffq == '5') $ff_quota = "Orphan";
if ($ffq == '6') $ff_quota = "Ethnic Minority";
if ($ffq == '7') $ff_quota = "Ansar-VDP";
if ($ffq == '8') $ff_quota = "Non Quota";
if ($ffq == '9') $ff_quota = "Women Quota";


// Copy from Present address to Permanent Address

if ($present_ps == "Others") {
	$present_ps = "$present_ops";
}
if ($permanent_ps == "Others") {
	$permanent_ps = "$permanent_ops";
}

if ($copy == "yes") {
	$permanent_care	 		= "$present_care";
	$permanent_vill	 		= "$present_vill";
	$permanent_dist 		= "$present_dist";
	$permanent_ps			= "$present_ps";
	$permanent_post 		= "$present_post";
	$permanent_pcode 		= "$present_pcode";
}

include "lib/dbconnect.php";





session_start();
$_SESSION['postcode'] = $post_code;

$postcode = $post_code;



//echo "post_code: $post_code";
//echo "post_name: $post_name";


//get Data from post

$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
while ($row_post = mysql_fetch_array($out_post)) {
	extract($row_post);
}



//echo "Dri_Lic : $dri_lic_type";
//echo "experence: $exp_120_01";


$postname = $post_name;
$ds_count = $ds;

if ($ds < '1') {
	$ds = "N/A";
}
if ($ds == '1') {
	$ds = "Govt. Employee";
}
if ($ds == '2') {
	$ds = "Semi Govt. Employee";
}
if ($ds == '3') {
	$ds = "Autonomous";
}
if ($ds == '4') {
	$ds = "Departmental Candidate";
} //if($ds=='4') {$ds="$short_name Employee";}
if ($ds == '5') {
	$ds = "$other_department";
}



/*if ($ca_cert != 'Yes' || $ca_cert != 'No')
{$ca_cert = "N/A";}
if ($cma_cert != 'Yes' || $cma_cert != 'No')
{$cma_cert = "N/A";}

if ($bmd_cert != 'Yes' || $bmd_cert != 'No')
{$bmd_cert = "N/A";}*/

if ($texp == '1') {
	$texp = "3 Years";
}

if ($texp == '2') {
	$texp = "4 Years";
}


if ($texp == '3') {
	$texp = "5 Years";
}

if ($Email == "") {
	$Email = "N/A";
}


if ($till_now == '1') {
	$till_now = "(Till Now)";
} else {
	$till_now = "";
}

//echo "This is Till Now:$till_now";


if ($exp_five == "") {
	$exp_five = "N/A";
}




include "condition/gpacalculation.php";


//******************************************************   Common for all  ****************************************************************
//Month Verification:
if ($b_month == '2') {
	if ($b_day > '29') {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=61\"; </script>";
	}
}


if ($b_month == '4' || $b_month == '6' || $b_month == '9' || $b_month == '11') {
	if ($b_day > '30') {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=62\"; </script>";
	}
}



if ($year3 > 1 && $year2 > 1) {
	if ($year3 < $year2 || $year3 < $year1) {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=56\"; </script>";
	}
}

if ($year2 > 1 && $year1 > 1) {
	if ($year2 < $year1) {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=57\"; </script>";
	}
}


if ($year2 > 1 && $year1 > 1) {
	if (($year2 - $year1) < 1) {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=57\"; </script>";
	}
}





if ($year3 > 1 && $year2 > 1 && $year1 > 1) {
	if ($year3 < $b_year  || $year2 < $b_year  || $year1 < $b_year) {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=58\"; </script>";
	}
}


if ($year1 > 1) {
	if ($year1 < 1970) {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=60\"; </script>";
	}
}


if ($year4 > 1 && $year3 > 1) {
	if (($year4 - $year3) < 0) {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=110\"; </script>";
	}
}


if ($year3 > 1) {
	if ((($exam3 == 2) || ($exam3 == 3) || ($exam3 == 4)) && ($duration3 < 4)) {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=111\"; </script>";
	}
}


//*****************************  Job Description Experince -01 calculation ******************************************************

$date_limit1 = '$f_year1-$f_month1-$f_day1';

$dob1			= "$f_year1" . "-" . "$f_month1" . "-" . "$f_day1";
$dob_value1		= strtotime($dob1);


$date_limit1_x	= date('Y-m-d', strtotime($date_limit1 . "+1 days")); // ADD ONE(1) DAY



// AGE YEAR-MONTH-DAY
$dob_year1	= $t_year1;
$dob_month1	= $t_month1;
$dob_day1	= $t_day1;


$cir_year1	= $f_year1;
$cir_month1	= $f_month1;
$cir_day1	= $f_day1;


//    echo "$t_year1/$t_month1/$t_day1 :::::: $f_year1/$f_month1/$f_day1";
//  echo "$t_year2/$t_month2/$t_day2 :::::: $f_year2/$f_month1/$f_day2";


if (($dob_month1 == "01") || ($dob_month1 == "03") || ($dob_month1 == "05") || ($dob_month1 == "07") || ($dob_month1 == "08") || ($dob_month1 == "10") || ($dob_month1 == "12")) {
	$day_of_month1 = "31";
}

if (($dob_month1 == "04") || ($dob_month1 == "06") || ($dob_month1 == "09") || ($dob_month1 == "11")) {
	$day_of_month1 = "30";
}

if ($dob_month1 == "02") {
	$day_of_month1 = "28";
	//Check Leapyear
	if (($dob_year2 % 400 == "0") || (($dob_year2 % 4 == "0") && ($dob_year2 % 100 != "0"))) {
		$day_of_month2 = "29";
	}
}



//DAY
if ($cir_day1 < $dob_day1) {
	$cir_day1 = $cir_day1 + $day_of_month1;
	$dob_month1++;
}
$days1 = $cir_day1 - $dob_day1;




// MONTH
if ($cir_month1 < $dob_month1) {
	$cir_month1 = $cir_month1 + 12;
	$dob_year1++;
}

$months1 = $cir_month1 - $dob_month1;



//YEAR
$years1 = $cir_year1 - $dob_year1;

$exp_age_as1 = "$years1 Year $months1 Month $days1 Day";


$texp1 = "$days1-$months1-$years1";

session_start();

$_SESSION['myValue1'] = $exp_age_as1;


// *************************************************  Jod Description Experience -02 calculation  ********************************************************


$date_limit2 = '$f_year2-$f_month2-$f_day2';



$dob2			= "$f_year2" . "-" . "$f_month2" . "-" . "$f_day2";
$dob_value2		= strtotime($dob2);


$date_limit2_x	= date('Y-m-d', strtotime($date_limit2 . "+1 days")); // ADD ONE(1) DAY



// AGE YEAR-MONTH-DAY
$dob_year2	= $t_year2;
$dob_month2	= $t_month2;
$dob_day2	= $t_day2;





$cir_year2	= $f_year2;
$cir_month2	= $f_month2;
$cir_day2	= $f_day2;


// echo "$t_year2/$t_month2/$t_day2 :::::: $f_year2/$f_month2/$f_day2";

if (($dob_month2 == "01") || ($dob_month2 == "03") || ($dob_month2 == "05") || ($dob_month2 == "07") || ($dob_month2 == "08") || ($dob_month2 == "10") || ($dob_month2 == "12")) {
	$day_of_month2 = "31";
}

if (($dob_month2 == "04") || ($dob_month2 == "06") || ($dob_month2 == "09") || ($dob_month2 == "11")) {
	$day_of_month2 = "30";
}

if ($dob_month2 == "02") {
	$day_of_month2 = "28";
	//Check Leapyear
	if (($dob_year2 % 400 == "0") || (($dob_year2 % 4 == "0") && ($dob_year2 % 100 != "0"))) {
		$day_of_month2 = "29";
	}
}


//DAY
if ($cir_day2 < $dob_day2) {
	$cir_day2 = $cir_day2 + $day_of_month2;
	$dob_month2++;
}
$days2 = $cir_day2 - $dob_day2;




// MONTH
if ($cir_month2 < $dob_month2) {
	$cir_month2 = $cir_month2 + 12;
	$dob_year2++;
}

$months2 = $cir_month2 - $dob_month2;



//YEAR
$years2 = $cir_year2 - $dob_year2;

$age_as2 = "$years2 Year $months2 Month $days2 Day";


$texp2 = "$days2-$months2-$years2";


session_start();

$_SESSION['myValue2'] = $age_as2;




// *************************************************  Jod Description Experience -03 calculation  ********************************************************

$dob3			= "$f_year3" . "-" . "$f_month3" . "-" . "$f_day3";
$dob_value3		= strtotime($dob3);


$date_limit3_x	= date('Y-m-d', strtotime($date_limit3 . "+1 days")); // ADD ONE(1) DAY



// AGE YEAR-MONTH-DAY
$dob_year3	= $t_year3;
$dob_month3	= $t_month3;
$dob_day3	= $t_day3;


$cir_year3	= $f_year3;
$cir_month3	= $f_month3;
$cir_day3	= $f_day3;


//   echo "$t_year1/$t_month1/$t_day1 :::::: $f_year1/$f_month1/$f_day1";
//  echo "$t_year2/$t_month2/$t_day2 :::::: $f_year2/$f_month1/$f_day2";


if (($dob_month3 == "01") || ($dob_month3 == "03") || ($dob_month3 == "05") || ($dob_month3 == "07") || ($dob_month3 == "08") || ($dob_month3 == "10") || ($dob_month3 == "12")) {
	$day_of_month3 = "31";
}

if (($dob_month3 == "04") || ($dob_month3 == "06") || ($dob_month3 == "09") || ($dob_month3 == "11")) {
	$day_of_month3 = "30";
}

if ($dob_month3 == "02") {
	$day_of_month3 = "28";
	//Check Leapyear
	if (($dob_year3 % 400 == 0) || (($dob_year3 % 4 == 0) && ($dob_year3 % 100 != 0))) {
		$day_of_month3 = "29";
	}
}


//DAY
if ($cir_day3 < $dob_day3) {
	$cir_day3 = $cir_day3 + $day_of_month3;
	$dob_month3++;
}
$days3 = $cir_day3 - $dob_day3;




// MONTH
if ($cir_month3 < $dob_month3) {
	$cir_month3 = $cir_month3 + 12;
	$dob_year3++;
}

$months3 = $cir_month3 - $dob_month3;



//YEAR
$years3 = $cir_year3 - $dob_year3;

$age_as3 = "$years3 Year $months3 Month $days3 Day";


$texp3 = "$days3-$months3-$years3";


session_start();
$_SESSION['myValue3'] = $age_as3;





// *************************************************  Jod Description Experience -04 calculation  ********************************************************

$dob4			= "$f_year4" . "-" . "$f_month4" . "-" . "$f_day4";
$dob_value4		= strtotime($dob4);


$date_limit4_x	= date('Y-m-d', strtotime($date_limit4 . "+1 days")); // ADD ONE(1) DAY



// AGE YEAR-MONTH-DAY
$dob_year4	= $t_year4;
$dob_month4	= $t_month4;
$dob_day4	= $t_day4;


$cir_year4	= $f_year4;
$cir_month4	= $f_month4;
$cir_day4	= $f_day4;


//   echo "$t_year1/$t_month1/$t_day1 :::::: $f_year1/$f_month1/$f_day1";
//  echo "$t_year2/$t_month2/$t_day2 :::::: $f_year2/$f_month1/$f_day2";


if (($dob_month4 == "01") || ($dob_month4 == "03") || ($dob_month4 == "05") || ($dob_month4 == "07") || ($dob_month4 == "08") || ($dob_month4 == "10") || ($dob_month4 == "12")) {
	$day_of_month4 = "31";
}

if (($dob_month4 == "04") || ($dob_month4 == "06") || ($dob_month4 == "09") || ($dob_month4 == "11")) {
	$day_of_month4 = "30";
}

if ($dob_month4 == "02") {
	$day_of_month4 = "28";
	//Check Leapyear
	if (($dob_year4 % 400 == "0") || (($dob_year4 % 4 == "0") && ($dob_year4 % 100 != "0"))) {
		$day_of_month4 = "29";
	}
}


//DAY
if ($cir_day4 < $dob_day4) {
	$cir_day4 = $cir_day4 + $day_of_month4;
	$dob_month4++;
}
$days4 = $cir_day4 - $dob_day4;




// MONTH
if ($cir_month4 < $dob_month4) {
	$cir_month4 = $cir_month4 + 12;
	$dob_year4++;
}

$months4 = $cir_month4 - $dob_month4;



//YEAR
$years4 = $cir_year4 - $dob_year4;

$age_as4 = "$years4 Year $months4 Month $days4 Day";


$texp4 = "$days4-$months4-$years4";


session_start();
$_SESSION['myValue4'] = $age_as4;





// *************************************************  Jod Description Experience -05 calculation  ********************************************************



$dob5			= "$f_year5" . "-" . "$f_month5" . "-" . "$f_day5";
$dob_value5		= strtotime($dob5);


$date_limit5_x	= date('Y-m-d', strtotime($date_limit5 . "+1 days")); // ADD ONE(1) DAY



// AGE YEAR-MONTH-DAY
$dob_year5	= $t_year5;
$dob_month5	= $t_month5;
$dob_day5	= $t_day5;


$cir_year5	= $f_year5;
$cir_month5	= $f_month5;
$cir_day5	= $f_day5;


//   echo "$t_year1/$t_month1/$t_day1 :::::: $f_year1/$f_month1/$f_day1";
//  echo "$t_year2/$t_month2/$t_day2 :::::: $f_year2/$f_month1/$f_day2";


if (($dob_month5 == "01") || ($dob_month5 == "03") || ($dob_month5 == "05") || ($dob_month5 == "07") || ($dob_month5 == "08") || ($dob_month5 == "10") || ($dob_month5 == "12")) {
	$day_of_month5 = "31";
}

if (($dob_month5 == "04") || ($dob_month5 == "06") || ($dob_month5 == "09") || ($dob_month5 == "11")) {
	$day_of_month5 = "30";
}

if ($dob_month5 == "02") {
	$day_of_month5 = "28";
	//Check Leapyear
	if (($dob_year5 % 400 == 0) || (($dob_year5 % 4 == 0) && ($dob_year5 % 100 != 0))) {
		$day_of_month5 = "29";
	}
}


//DAY
if ($cir_day5 < $dob_day5) {
	$cir_day5 = $cir_day5 + $day_of_month5;
	$dob_month5++;
}
$days5 = $cir_day5 - $dob_day5;




// MONTH
if ($cir_month5 < $dob_month5) {
	$cir_month5 = $cir_month5 + 12;
	$dob_year5++;
}

$months5 = $cir_month5 - $dob_month5;



//YEAR
$years5 = $cir_year5 - $dob_year5;

$age_as5 = "$years5 Year $months5 Month $days5 Day";


$texp5 = "$days5-$months5-$years5";



//  Total Experience Calculation 

$tt_days = $days1 + $days2 + $days3 + $days4 + $days5;
$tt_months = $months1 + $months2 + $months3 + $months4 + $months5;
$tt_years = $years1 + $years2 + $years3 + $years4 + $years5;

$sum = $tt_years * 365 + $tt_months * 30 + $tt_days;




$total_years = ($sum / 365);
$total_years = floor($total_years);
$total_month = ($sum % 365) / 30.5;
$total_month = floor($total_month);
$total_days = ($sum % 365) % 30.5; // the rest of days



// Echo all information set
// echo 'Total Days: '.$sum.' days<br>';
// echo $total_years.' years - '.$total_month.' month - '.$total_days.' days';


session_start();
$_SESSION['myValue5'] = $age_as5;

//******************************************************   end of Common for all  ****************************************************************

//******************************************************   end of Common for all  ****************************************************************






if ($job_no == '1') {
	if ($organization1 == "" || $job_post1 == "" || $job_res1 == "" || $t_day1 < "1" || $t_month1 < "1" || $t_year1 < "1" || $f_day1 < "1" || $f_month1 < "1" || $f_year1 < "1") {
		echo "<script language='javascript'>window.location.href=\"edu_err.php?err=153\"; </script>";
	}
}



/* 

if($job_no=='2')
   {
  if($organization2=="" || $job_post=="" || $job_res2=="" || $t_day2<"1" || $t_month2<"1" || $t_year2<"1" || $f_day2<"1" || $f_month2<"1" || $f_year2<"1")
      {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=153\"; </script>";}
    }


if($job_no=='3')
   {
  if($organization3=="" || $job_post3=="" || $job_res3=="" || $t_day3<"1" || $t_month3<"1" || $t_year3<"1" || $f_day3<"1" || $f_month3<"1" || $f_year3<"1")
      {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=153\"; </script>";}
    }

*/



include "condition/district.php";

include "condition/age_calculation.php";

session_start();
$_SESSION['myValue'] = $age_as;

include "condition/educondition.php";
include "condition/expcondition.php";



$ageactual = $age_as;



//echo "Result3: $result3 $result_gpa3";


// ************************************************  Function working  *********************************************************************


// ************************************************  Post Code = 110  **********************************************************************


if ($exp_110_01 != "0") {
	$exp_110_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_110_01: $one_expvalue_110<span 
             </tr>";
}



if ($exp_110_02 != "0") {
	$exp_110_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_110_02: $two_expvalue_110<span 
        	</tr>";
}



if ($exp_110_03 != "0") {
	$exp_110_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_110_03: $three_expvalue_110<span 
        	</tr>";
}




// ************************************************  Post Code = 120  ***********************************************************************


if ($exp_120_01 != "0") {
	$exp_120_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_120_01: $one_expvalue_120<span 
             </tr>";
}



if ($exp_120_02 != "0") {
	$exp_120_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_120_02: $two_expvalue_120<span 
        	</tr>";
}



if ($exp_120_03 != "0") {
	$exp_120_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_120_03: $three_expvalue_120<span 
        	</tr>";
}



// ************************************************  Post Code = 130  ***********************************************************************

//echo "result1: $result1";



if ($exp_130_01 != "0") {
	$exp_130_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_130_01: $one_expvalue_130<span 
             </tr>";
}



if ($exp_130_02 != "0") {
	$exp_130_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_130_02: $two_expvalue_130<span 
        	</tr>";
}



if ($exp_130_03 != "0") {
	$exp_130_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_130_03: $three_expvalue_130<span 
        	</tr>";
}


// ************************************************  Post Code = 140  ***********************************************************************


if ($exp_140_01 != "0") {
	$exp_140_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_140_01: $one_expvalue_140<span 
             </tr>";
}



if ($exp_140_02 != "0") {
	$exp_140_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_140_02: $two_expvalue_140<span 
        	</tr>";
}



if ($exp_140_03 != "0") {
	$exp_140_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_140_03: $three_expvalue_140<span 
        	</tr>";
}



// ************************************************  Post Code = 150  ***********************************************************************


if ($exp_150_01 != "0") {
	$exp_150_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_150_01: $one_expvalue_150<span 
             </tr>";
}



if ($exp_150_02 != "0") {
	$exp_150_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_150_02: $two_expvalue_150<span 
        	</tr>";
}



if ($exp_150_03 != "0") {
	$exp_150_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_150_03: $three_expvalue_150<span 
        	</tr>";
}





// ************************************************  Post Code = 160  ***********************************************************************


if ($exp_160_01 != "0") {
	$exp_160_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_160_01: $one_expvalue_160<span 
             </tr>";
}



if ($exp_160_02 != "0") {
	$exp_160_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_160_02: $two_expvalue_160<span 
        	</tr>";
}



if ($exp_160_03 != "0") {
	$exp_160_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_160_03: $three_expvalue_160<span 
        	</tr>";
}




// ************************************************  Post Code = 170  ***********************************************************************


if ($exp_170_01 != "0") {
	$exp_170_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_170_01: $one_expvalue_170<span 
             </tr>";
}



if ($exp_170_02 != "0") {
	$exp_170_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_170_02: $two_expvalue_170<span 
        	</tr>";
}



if ($exp_170_03 != "0") {
	$exp_170_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_170_03: $three_expvalue_170<span 
        	</tr>";
}



// ************************************************  Post Code = 180  ***********************************************************************


if ($exp_180_01 != "0") {
	$exp_180_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_180_01: $one_expvalue_180<span 
             </tr>";
}



if ($exp_180_02 != "0") {
	$exp_180_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_180_02: $two_expvalue_180<span 
        	</tr>";
}



if ($exp_180_03 != "0") {
	$exp_180_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_180_03: $three_expvalue_180<span 
        	</tr>";
}




// ************************************************  Post Code = 190  ***********************************************************************


if ($exp_190_01 != "0") {
	$exp_190_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_190_01: $one_expvalue_190<span 
             </tr>";
}



if ($exp_190_02 != "0") {
	$exp_190_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_190_02: $two_expvalue_190<span 
        	</tr>";
}



if ($exp_190_03 != "0") {
	$exp_190_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_190_03: $three_expvalue_190<span 
        	</tr>";
}


// ************************************************  Post Code = 200  ***********************************************************************


if ($exp_200_01 != "0") {
	$exp_200_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_200_01: $one_expvalue_200<span 
             </tr>";
}



if ($exp_200_02 != "0") {
	$exp_200_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_200_02: $two_expvalue_200<span 
        	</tr>";
}



if ($exp_200_03 != "0") {
	$exp_200_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_200_03: $three_expvalue_200<span 
        	</tr>";
}



// *********************************************************  Post Code = 210  ***********************************************************************


if ($exp_210_01 != "0") {
	$exp_210_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_210_01: $one_expvalue_210<span 
             </tr>";
}



if ($exp_210_02 != "0") {
	$exp_210_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_210_02: $two_expvalue_210<span 
        	</tr>";
}


if ($exp_210_03 != "0") {
	$exp_210_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_210_03: $three_expvalue_210<span 
        	</tr>";
}







// ************************************************  Post Code = 220  ***********************************************************************


if ($exp_220_01 != "0") {
	$exp_220_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_220_01: $one_expvalue_220<span 
             </tr>";
}



if ($exp_220_02 != "0") {
	$exp_220_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_220_02: $two_expvalue_220<span 
        	</tr>";
}



if ($exp_220_03 != "0") {
	$exp_220_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_220_03: $three_expvalue_220<span 
        	</tr>";
}





// ************************************************  Post Code = 230  ***********************************************************************


if ($exp_230_01 != "0") {
	$exp_230_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_230_01: $one_expvalue_230<span 
             </tr>";
}



if ($exp_230_02 != "0") {
	$exp_230_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_230_02: $two_expvalue_230 ($dri_lic_type)<span 
        	</tr>";
}



if ($exp_230_03 != "0") {
	$exp_230_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_230_03: $three_expvalue_230<span 
        	</tr>";
}


// ************************************************  Post Code = 240  ***********************************************************************


if ($exp_240_01 != "0") {
	$exp_240_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_240_01: $one_expvalue_240<span 
             </tr>";
}



if ($exp_240_02 != "0") {
	$exp_240_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_240_02: $two_expvalue_240<span 
        	</tr>";
}



if ($exp_240_03 != "0") {
	$exp_240_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_240_03: $three_expvalue_240<span 
        	</tr>";
}



// ************************************************  Post Code = 250  ***********************************************************************


if ($exp_250_01 != "0") {
	$exp_250_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Experience Information:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_250_01: $one_expvalue_250<span 
             </tr>";
}



if ($exp_250_02 != "0") {
	$exp_250_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_250_02: $two_expvalue_250<span 
        	</tr>";
}



if ($exp_250_03 != "0") {
	$exp_250_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_250_03: $three_expvalue_250<span 
        	</tr>";
}






// ************************************************  Post Code = 260  ***********************************************************************


if ($exp_260_01 != "0") {
	$exp_260_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_260_01: $one_expvalue_260<span 
             </tr>";
}



if ($exp_260_02 != "0") {
	$exp_260_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_260_02: $two_expvalue_260<span 
        	</tr>";
}



if ($exp_260_03 != "0") {
	$exp_260_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_260_03: $three_expvalue_260<span 
        	</tr>";
}



// ************************************************  Post Code = 270  ***********************************************************************


if ($exp_270_01 != "0") {
	$exp_270_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_270_01: $one_expvalue_270<span 
             </tr>";
}



if ($exp_270_02 != "0") {
	$exp_270_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_270_02: $two_expvalue_270<span 
        	</tr>";
}



if ($exp_270_03 != "0") {
	$exp_270_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_270_03: $three_expvalue_270<span 
        	</tr>";
}




// ************************************************  Post Code = 280  ***********************************************************************


if ($exp_280_01 != "0") {
	$exp_280_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_280_01: $one_expvalue_280<span 
             </tr>";
}



if ($exp_280_02 != "0") {
	$exp_280_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_280_02: $two_expvalue_280<span 
        	</tr>";
}



if ($exp_280_03 != "0") {
	$exp_280_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_280_03: $three_expvalue_280<span 
        	</tr>";
}




// ************************************************  Post Code = 290  ***********************************************************************


if ($exp_290_01 != "0") {
	$exp_290_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_290_01: $one_expvalue_290<span 
             </tr>";
}



if ($exp_290_02 != "0") {
	$exp_290_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_290_02: $two_expvalue_290<span 
        	</tr>";
}



if ($exp_290_03 != "0") {
	$exp_290_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_290_03: $three_expvalue_290<span 
        	</tr>";
}


// ************************************************  Post Code = 300  ***********************************************************************


if ($exp_300_01 != "0") {
	$exp_300_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_300_01: $one_expvalue_300<span 
             </tr>";
}



if ($exp_300_02 != "0") {
	$exp_300_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_300_02: $two_expvalue_300<span 
        	</tr>";
}



if ($exp_300_03 != "0") {
	$exp_300_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_300_03: $three_expvalue_300<span 
        	</tr>";
}



// ************************************************  Post Code = 310  ***********************************************************************


if ($exp_310_01 != "0") {
	$exp_310_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_310_01: $one_expvalue_310<span 
             </tr>";
}



if ($exp_310_02 != "0") {
	$exp_310_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_310_02: $two_expvalue_310<span 
        	</tr>";
}



if ($exp_310_03 != "0") {
	$exp_310_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_310_03: $three_expvalue_310<span 
        	</tr>";
}




// ************************************************  Post Code = 320  ***********************************************************************


if ($exp_320_01 != "0") {
	$exp_320_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_320_01: $one_expvalue_320<span 
             </tr>";
}



if ($exp_320_02 != "0") {
	$exp_320_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_320_02: $two_expvalue_320<span 
        	</tr>";
}



if ($exp_320_03 != "0") {
	$exp_320_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_320_03: $three_expvalue_320<span 
        	</tr>";
}



// ************************************************  Post Code = 330  ***********************************************************************


if ($exp_330_01 != "0") {
	$exp_330_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_330_01: $one_expvalue_330<span 
             </tr>";
}



if ($exp_330_02 != "0") {
	$exp_330_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_330_02: $two_expvalue_330<span 
        	</tr>";
}



if ($exp_330_03 != "0") {
	$exp_330_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_330_03: $three_expvalue_330<span 
        	</tr>";
}




// ************************************************  Post Code = 340  ***********************************************************************


if ($exp_340_01 != "0") {
	$exp_340_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_340_01: $one_expvalue_340<span 
             </tr>";
}



if ($exp_340_02 != "0") {
	$exp_340_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_340_02: $two_expvalue_340<span 
        	</tr>";
}



if ($exp_340_03 != "0") {
	$exp_340_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_340_03: $three_expvalue_340<span 
        	</tr>";
}



// ************************************************  Post Code = 350  ***********************************************************************


if ($exp_350_01 != "0") {
	$exp_350_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_350_01: $one_expvalue_350<span 
             </tr>";
}



if ($exp_350_02 != "0") {
	$exp_350_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_350_02: $two_expvalue_350<span 
        	</tr>";
}



if ($exp_350_03 != "0") {
	$exp_350_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_350_03: $three_expvalue_350<span 
        	</tr>";
}


// ************************************************  Post Code = 360  ***********************************************************************


if ($exp_360_01 != "0") {
	$exp_360_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_360_01: $one_expvalue_360<span 
             </tr>";
}



if ($exp_360_02 != "0") {
	$exp_360_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_360_02: $two_expvalue_360<span 
        	</tr>";
}



if ($exp_360_03 != "0") {
	$exp_360_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_360_03: $three_expvalue_360<span 
        	</tr>";
}

// ************************************************  Post Code = 370  ***********************************************************************


if ($exp_370_01 != "0") {
	$exp_370_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_370_01: $one_expvalue_370<span 
             </tr>";
}



if ($exp_370_02 != "0") {
	$exp_370_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_370_02: $two_expvalue_370<span 
        	</tr>";
}



if ($exp_370_03 != "0") {
	$exp_370_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_370_03: $three_expvalue_370<span 
        	</tr>";
}

// ************************************************  Post Code = 380  ***********************************************************************


if ($exp_380_01 != "0") {
	$exp_380_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_380_01: $one_expvalue_380<span 
             </tr>";
}



if ($exp_380_02 != "0") {
	$exp_380_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_380_02: $two_expvalue_380<span 
        	</tr>";
}



if ($exp_380_03 != "0") {
	$exp_380_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_380_03: $three_expvalue_380<span 
        	</tr>";
}


// ************************************************  Post Code = 390  ***********************************************************************


if ($exp_390_01 != "0") {
	$exp_390_01_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mandatory Professional Experience:</td>
        </tr>

	<tr>
 	 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">a. $exp_390_01: $one_expvalue_390<span 
             </tr>";
}



if ($exp_390_02 != "0") {
	$exp_390_02_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">b. $exp_390_02: $two_expvalue_390<span 
        	</tr>";
}



if ($exp_390_03 != "0") {
	$exp_390_03_tab = "<tr>
 		 <td height=\"20\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">c. $exp_390_03: $three_expvalue_390<span 
        	</tr>";
}





if ($job_exp == '1') {

	$job_exp_tab = "<tr>
       <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Professional Experience:</td>
        </tr>



   <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black14\">
      
    <table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">
            <tr>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Organization Name</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Post Name</td>
              <td width=\"10%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Responsibilities</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Start Date</td>
              <td width=\"10%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">End Date</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Total Experience</td>
         
    <tr>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$organization1</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$job_post1</td>
              <td width=\"10%\" height=\"25\" align=\"center\" valign=\"middle\"bgcolor=\"$box1\">$job_res1</td>



              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$t_day1/$t_month1/$t_year1</td>
              <td width=\"10%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$f_day1/$f_month1/$f_year1<br/>$till_now</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$exp_age_as1</td>
         
            </tr>" .



		(!empty($organization2) ? "<tr>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$organization2</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$job_post2</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\"bgcolor=\"$box1\">$job_res2</td>



              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$t_day2/$t_month2/$t_year2</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$f_day2/$f_month2/$f_year2</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$age_as2</td>
         
            </tr>" : "") .



		(!empty($organization3) ? "<tr>
              <td width=\"30%\" height=\"35\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$organization3</td>
              <td width=\"30%\" height=\"35\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$job_post3</td>
              <td width=\"30%\" height=\"35\" align=\"center\" valign=\"middle\"bgcolor=\"$box1\">$job_res3</td>



              <td width=\"30%\" height=\"35\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$t_day3/$t_month3/$t_year3</td>
              <td width=\"30%\" height=\"35\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$f_day3/$f_month3/$f_year3</td>
              <td width=\"30%\" height=\"35\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$age_as3</td>
         
            </tr>" : "") .
		(!empty($organization4) ? "<tr>
              <td width=\"40%\" height=\"45\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$organization4</td>
              <td width=\"40%\" height=\"45\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$job_post4</td>
              <td width=\"40%\" height=\"45\" align=\"center\" valign=\"middle\"bgcolor=\"$box1\">$job_res4</td>



              <td width=\"40%\" height=\"45\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$t_day4/$t_month4/$t_year4</td>
              <td width=\"40%\" height=\"45\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$f_day4/$f_month4/$f_year4</td>
              <td width=\"40%\" height=\"45\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$age_as4</td>
         
            </tr>" : "") .




		(!empty($organization5) ? "<tr>
              <td width=\"50%\" height=\"55\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$organization5</td>
              <td width=\"50%\" height=\"55\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$job_post5</td>
              <td width=\"50%\" height=\"55\" align=\"center\" valign=\"middle\"bgcolor=\"$box1\">$job_res5</td>



              <td width=\"50%\" height=\"55\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$t_day5/$t_month5/$t_year5</td>
              <td width=\"50%\" height=\"55\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$f_day5/$f_month5/$f_year5</td>
              <td width=\"50%\" height=\"55\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">$age_as5</td>
         
            </tr>" : "") . "


    </table></td>

  </tr>";
}





if ($validation == $code) {
	$asq = 0;
} else {
	echo "<script language='javascript'>window.location.href=\"edu_err.php?err=52\"; </script>";
}


/*if($nid == "2" && $passport == "2" && $breg == "2")  
    {echo"<script language='javascript'>window.location.href=\"err.php?err=246\"; </script>";}*/


if ($nid == "2" &&  $breg == "2") {
	echo "<script language='javascript'>window.location.href=\"err.php?err=246\"; </script>";
}



if ($present_care == "" || $present_vill == "" || $present_dist == "" || $present_dist == '0' || $present_ps == "" || $present_ps == "0" || $present_post == "" || $present_pcode == "") {
	echo "<script language='javascript'>window.location.href=\"err.php?err=247\"; </script>";
}


if ($permanent_care == "" || $permanent_vill == "" || $permanent_dist == "" || $permanent_dist == "0" || $permanent_ps == "" || $permanent_ps == "0" || $permanent_post == "" || $permanent_pcode == "") {
	echo "<script language='javascript'>window.location.href=\"err.php?err=248\"; </script>";
}


if ($mobileno == "" || $confirmmobile == "") {
	echo "<script language='javascript'>window.location.href=\"err.php?err=249\"; </script>";
}


/**if($Email == "") 
   {echo"<script language='javascript'>window.location.href=\"err.php?err=251\"; </script>";}**/


if ($mobileno == $confirmmobile) {
	$eq3 = 0;
} else {
	echo "<script language='javascript'>window.location.href=\"err.php?err=250\"; </script>";
}






/*

//********************************************** Reference information *************************************************************************

if($ref_name_1=="" || $ref_post_1==""|| $ref_org_1==""|| $ref_mail_1=="")
            {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=50\"; </script>";}

if($ref_name_2=="" || $ref_post_2==""|| $ref_org_2==""|| $ref_mail_2=="")
            {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=51\"; </script>";}

//********************************************** End of Reference information ****************************************************************

*/





if ($dept == "1") {
	$dept = "Government Employee";
} else {
	$dept = "N/A";
}

if ($b_day == "0" || $b_month == "0" || $b_year == "0" || $ffq == "0" || $religion == "0" || $present_dist == "0" || $present_ps == "0" || $permanent_dist == "0" || $permanent_ps == "0") {
	$data_err = "909";
}

if ($cl == "1") {
	$computer_literacy	 			= addslashes($_POST['computer_literacy']);
	$cl_table = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\">Computer Literacy: $computer_literacy</td>
        </tr>
		<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"></td>
        </tr>";
}





if ($ca == "1") {
	$curricular	 			= addslashes($_POST['curricular']);

	$ca_table = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">Job Experience: $curricular</td>
        </tr>
		<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"></td>
        </tr>";
}
$out_code = mysql_query("SELECT `vcode` FROM `cinfo` WHERE `mobile` = '$mobileno' AND `vcode` = '$code'");
$row_code = mysql_numrows($out_code);


if ($row_code > 0) {
	echo "<script language='javascript'>window.location.href=\"err.php?err=888\"; </script>";
	exit;
}

if ($code == "" || $code != "$validation") {
	//echo"<script language='javascript'>window.location.href=\"err.php?err=832\"; </script>";
	//exit;
}

$out_post = mysql_query("SELECT 
							`min_age`,
							`max_age`,
							`dpt_age`,
							`date_limit`,
							`edu_mas`
						         FROM `post`
							 WHERE `post_code` = '$post_code'");
while ($row_post = mysql_fetch_array($out_post)) {
	extract($row_post);
}


if ($present_ps == "-1" || $permanent_ps == "-1" || $subject3 == "-1") {
	echo "<meta http-equiv=\"refresh\" content=\"1;URL=err.php?err=445\" />";
	exit;
}

if ($ffq_active == '1') {
	$ffq_tab = "<tr>

          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">Quota</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$ff_quota</td>
        </tr>";
}


$loops = 3;

if ($phd == "1") {
	$loops = 5;
} elseif ($masters == "1") {
	$loops = 4;
}

for ($i = 1; $i <= $loops; $i++) {
	$exampost = "exam" . $i;
	$ex_exam = addslashes($_POST[$exampost]);
	$$exampost = $ex_exam;

	if ($i > 2 && $ex_exam == "9") {
		$other_exampost = "other_exam" . $i;
		$ex_other_exam = addslashes($_POST[$other_exampost]);
		$exam_name = "$ex_other_exam";
	}

	$institutepost = "institute" . $i;
	$ex_institute = addslashes($_POST[$institutepost]);

	if ($i > 2 && $ex_institute == "999") {
		$other_institutepost = "other_institute" . $i;
		$ex_other_institute = addslashes($_POST[$other_institutepost]);
		$ins_name = "$ex_other_institute";
	}

	$rollpost = "roll" . $i;
	$ex_roll = addslashes($_POST[$rollpost]);

	$resultpost = "result" . $i;
	$ex_result = addslashes($_POST[$resultpost]);

	$gpa_valuepost = "result_gpa" . $i;
	$ex_gpa_value = addslashes($_POST[$gpa_valuepost]);

	$subjectpost = "subject" . $i;
	$ex_subject = addslashes($_POST[$subjectpost]);

	if ($i > 2 && $ex_subject == "999") {
		$other_subjectpost = "other_subject" . $i;
		$ex_other_subject = addslashes($_POST[$other_subjectpost]);
		$sub_grp = "$ex_other_subject";
	}

	$yearpost = "year" . $i;
	$ex_year = addslashes($_POST[$yearpost]);

	$durationpost = "duration" . $i;
	$ex_duration = addslashes($_POST[$durationpost]);
	$$durationpost = $ex_duration;

	$result_value	= "result_value" . "$i";
	$result_eq		= "result_eq" . "$i";


	if ($ex_result >= 1 && $ex_result <= 3) {
		$$result_value		= "$ex_result";
		$$result_eq			= "$ex_result";

		$ex_gpa_value		= "";
	}

	if ($ex_result >= 4 && $ex_result <= 5 && $i < 3) {
		$$result_value = "$ex_gpa_value";
		if ($ex_gpa_value >= 3) {
			$$result_eq = 1;
		} // 1st div
		if ($ex_gpa_value >= 2 && $ex_gpa_value < 3) {
			$$result_eq = 2;
		} // 2nd div
		if ($ex_gpa_value >= 1 && $ex_gpa_value < 2) {
			$$result_eq = 3;
		} // 3rd div
	}

	if ($ex_result >= 4 && $ex_result <= 5 && $i > 2) {
		$$result_value = "$ex_gpa_value";
		$m = 80;
		$g_marks = ($m / $ex_result) * $ex_gpa_value;
		$g_marks = sprintf("%.2f", $g_marks);
		if ($g_marks >= 60) {
			$$result_eq = 1;
		} // 1st div
		if ($g_marks >= 45 && $g_marks < 60) {
			$$result_eq = 2;
		} // 2nd div
		if ($g_marks >= 33 && $g_marks < 45) {
			$$result_eq = 3;
		} // 3rd div
		if ($g_marks < 33) {
			$$result_eq = 9;
		} // Fail
	}

	if ($ex_exam != "" && $ex_institute != "" && $ex_result != "-1" && $ex_subject != "" && $ex_year != "") {



		if ($ex_result == "1" && $i == "1") {
			$a_result = "1st Division";
		}
		if ($ex_result == "2" && $i == "1") {
			$a_result = "2nd Division";
		}
		if ($ex_result == "3" && $i == "1") {
			$a_result = "3rd Division";
		}


		if ($ex_result == "1" && $i == "2") {
			$a_result = "1st Division";
		}
		if ($ex_result == "2" && $i == "2") {
			$a_result = "2nd Division";
		}
		if ($ex_result == "3" && $i == "2") {
			$a_result = "3rd Division";
		}


		if ($ex_result == "6" && $i == "2") {
			$a_result = "Passed";
		}
		if ($ex_result == "6" && $i == "3") {
			$a_result = "Passed";
		}
		if ($ex_result == "6" && $i == "4") {
			$a_result = "Passed";
		}



		if ($post_code == '00') {

			if ($ex_result == "1" && $i == "3") {
				$a_result = "MBBS Pass";
			}
		} else {
			if ($ex_result == "1" && $i == "3") {
				$a_result = "1st Class";
			}
		}

		if ($ex_result == "2" && $i == "3") {
			$a_result = "2nd Class";
		}
		if ($ex_result == "3" && $i == "3") {
			$a_result = "3rd Class";
		}


		if ($ex_result == "1" && $i == "4") {
			$a_result = "1st Class";
		}
		if ($ex_result == "2" && $i == "4") {
			$a_result = "2nd Class";
		}
		if ($ex_result == "3" && $i == "4") {
			$a_result = "3rd Class";
		}


		if ($ex_result == "1" && $i == "5") {
			$a_result = "1st Class";
		}
		if ($ex_result == "2" && $i == "5") {
			$a_result = "2nd Class";
		}
		if ($ex_result == "3" && $i == "5") {
			$a_result = "3rd Class";
		}


		if ($ex_result >= 4 && $ex_result <= 5) {
			$a_result = "GPA";
		}

		if ($i == "1") {
			$exam_table = "exam_ssc";
		}
		if ($i == "2") {
			$exam_table = "exam_hsc";
		}
		if ($i == "3") {
			$exam_table = "exam_gra";
		}
		if ($i == "4") {
			$exam_table = "exam_mas";
		}
		if ($i == "5") {
			$exam_table = "exam_phd";
		}
		if ($i <= 4 && $ex_exam < 9) {
			$out_exam = mysql_query("SELECT `exam_name` AS `ename` FROM $exam_table
										WHERE `exam_value` = '$ex_exam'");
			while ($exam_row = mysql_fetch_array($out_exam)) {
				extract($exam_row);
			}
			$exam_name = "$ename";
		}

		if ($i == "1") {
			$out_sub = mysql_query("SELECT `group_name` FROM `exam_grp_ssc`
										WHERE `group_value` = '$ex_subject'");
			while ($row_sub = mysql_fetch_array($out_sub)) {
				extract($row_sub);
			}
			$sub_grp = $group_name;
		}

		if ($i == "2") {
			$out_sub = mysql_query("SELECT `group_name` FROM `exam_grp_hsc`
										WHERE `group_value` = '$ex_subject'");
			while ($row_sub = mysql_fetch_array($out_sub)) {
				extract($row_sub);
			}
			$sub_grp = $group_name;
		}

		if ($i > 2 && $ex_subject < 999) {
			$out_sub = mysql_query("SELECT `edu_sub_name` FROM `subject_edu`
										WHERE `edu_sub_code` = '$ex_subject'");
			while ($row_sub = mysql_fetch_array($out_sub)) {
				extract($row_sub);
			}
			$sub_grp = $edu_sub_name;
		}
		if ($i <= 2) {
			$out_board = mysql_query("SELECT `board_name` FROM `exam_board`
										WHERE `board_value` = '$ex_institute'");
			while ($board_row = mysql_fetch_array($out_board)) {
				extract($board_row);
			}
			$ins_name = "$board_name";
		}
		if ($i > 2 && $ex_institute < 999) {
			$uni_out = mysql_query("SELECT `uni_name` FROM `university`
										WHERE uni_code = '$ex_institute'");
			while ($uni_row = mysql_fetch_array($uni_out)) {
				extract($uni_row);
			}
			$ins_name = "$uni_name";
		}




		$bg = ($i % 2) ? '#C7C7C7' : '#B9B9B9';

		if ($exam_name != "" && $ex_year > 1900 && $ins_name != "") {
			$edu_table .= "<tr class=\"black11\">
				  <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bg\">$exam_name</td>
				  <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bg\">$ins_name</td>
				  <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bg\">$ex_roll</td>
				  <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bg\">$a_result $ex_gpa_value</td>
				  <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bg\">$sub_grp</td>
				  <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bg\">$ex_year</td>
				  <td align=\"center\" valign=\"middle\" bgcolor=\"$bg\">&nbsp;$ex_duration</td>
				</tr>";



			if ($ex_result >= 1 && $ex_result <= 3 && $i == "1") {
				$result_type = "Division";
				$result_value = "$ex_result";
			}

			if ($ex_result >= 1 && $ex_result <= 3 && $i == "2") {
				$result_type = "Division";
				$result_value = "$ex_result";
			}


			if ($ex_result >= 1 && $ex_result <= 3 && $i == "3") {
				$result_type = "Class";
				$result_value = "$ex_result";
			}

			if ($ex_result >= 1 && $ex_result <= 3 && $i == "4") {
				$result_type = "Class";
				$result_value = "$ex_result";
			}

			if ($ex_result >= 1 && $ex_result <= 3 && $i == "5") {
				$result_type = "Class";
				$result_value = "$ex_result";
			}

			if ($ex_result >= 1 && $ex_result <= 3 && $i == "5") {
				$result_type = "Class";
				$result_value = "$ex_result";
			}
			if ($i == "6") {
				$result_type = "Passed";
				$result_value = "Passed";
			}




			if ($ex_result > 3) {
				$result_type = "GPA-$ex_result";
				$result_value = "$ex_gpa_value";
			}


			$eq_result = $$result_eq;
			$hidden_value .= "
				<input type=\"hidden\" name=\"$exampost\" id=\"$exampost\" value=\"$exam_name\" />
				<input type=\"hidden\" name=\"$institutepost\" id=\"$institutepost\" value=\"$ins_name\" />
				<input type=\"hidden\" name=\"$rollpost\" id=\"$rollpost\" value=\"$ex_roll\" />
				<input type=\"hidden\" name=\"$resultpost\" id=\"$resultpost\" value=\"$result_type\" />
				<input type=\"hidden\" name=\"$gpa_valuepost\" id=\"$gpa_valuepost\" value=\"$result_value\" />
				<input type=\"hidden\" name=\"$result_eq\" id=\"$result_eq\" value=\"$eq_result\" />
				<input type=\"hidden\" name=\"$subjectpost\" id=\"$subjectpost\" value=\"$sub_grp\" />
				<input type=\"hidden\" name=\"$yearpost\" id=\"$yearpost\" value=\"$ex_year\" />
				<input type=\"hidden\" name=\"$durationpost\" id=\"$durationpost\" value=\"$ex_duration\" />";
		}
	}
}





$dist_out = mysql_query("SELECT `dist_name` AS `home_dist_name`
							FROM `div_dist_thana` WHERE 
							`dist_code` = '$home_dist'") or
	die("Error: QHD564354543333334");
while ($dist_row	=	mysql_fetch_array($dist_out)) {
	extract($dist_row);
}




$dist_out = mysql_query("SELECT `dist_name` AS `present_dist_name`
							FROM `div_dist_thana` WHERE 
							`dist_code` = '$present_dist'") or
	die("Error: QHD564354543333334");
while ($dist_row	=	mysql_fetch_array($dist_out)) {
	extract($dist_row);
}



$dist_out = mysql_query("SELECT `dist_name` AS `permanent_dist_name`
							FROM `div_dist_thana` WHERE 
							`dist_code` = '$permanent_dist'") or
	die("Error: QHD564354543333334");
while ($dist_row	=	mysql_fetch_array($dist_out)) {
	extract($dist_row);
}


$present_ps_name = $present_ps;
$permanent_ps_name = $permanent_ps;

session_start();
$_SESSION['present_ps'] = $present_ps_name;
$_SESSION['permanent_ps'] = $permanent_ps_name;







if ($present_ps == "Others") {
	$present_ps = addslashes($_POST['ops1']);
}
if ($permanent_ps == "Others") {
	$permanent_ps = addslashes($_POST['ops2']);;
}


switch ($sex) {
	case 1:
		$sex_value = "Male";
		break;
	case 2:
		$sex_value = "Female";
		break;
	case 3:
		$sex_value = "Others";
		break;
	default:
		$sex_value = "";
}


switch ($nid) {
	case 1:
		$nid_value = "$nid_no";
		break;
	case 2:
		$nid_value = "N/A";
		break;
	default:
		$nid_value = "";
}

switch ($passport) {
	case 1:
		$pass_value = "$passport_no";
		break;
	case 2:
		$pass_value = "N/A";
		break;
	default:
		$pass_value = "";
}

switch ($breg) {
	case 1:
		$breg_value = "$breg_no";
		break;
	case 2:
		$breg_value = "N/A";
		break;
	default:
		$breg_value = "";
}
switch ($mstatus) {
	case 1:
		$ms_value = "Married" . " - " . "Spouse Name: " . "$s_name";
		break;
	case 2:
		$ms_value = "Single";
		break;
	default:
		$ms_value = "";
}






//Test preview page
//echo "ssc-$result_gpa1  , hsc-$result_gpa2 , Graduation-$result_gpa3 , Masters-$result_gpa4";






$job_no = '1';
$job_no 				= $_POST['job_no'];
$number_job_fields		= $_POST['number_job_fields'];

if ($job_no == "1") {
	$j_loops = $number_job_fields;
	for ($j = 1; $j <= $j_loops; $j++) {
		$job_postpost = "job_post" . $j;
		$ex_job_post  = addslashes($_POST[$job_postpost]);

		$organizationpost = "organization" . $j;
		$ex_organization = addslashes($_POST[$organizationpost]);

		$t_daypost = "t_day" . $j;
		$ex_t_day  = $_POST[$t_daypost];

		$t_monthpost = "t_month" . $j;
		$ex_t_month  = $_POST[$t_monthpost];

		$t_yearpost = "t_year" . $j;
		$ex_t_year  = $_POST[$t_yearpost];

		$f_daypost = "f_day" . $j;
		$ex_f_day  = $_POST[$f_daypost];

		$f_monthpost = "f_month" . $j;
		$ex_f_month  = $_POST[$f_monthpost];

		$f_yearpost = "f_year" . $j;
		$ex_f_year  = $_POST[$f_yearpost];

		$job_respost = "job_res" . $j;
		$ex_job_res  = addslashes($_POST[$job_respost]);

		$jt_date = "$ex_t_day" . "-" . "$ex_t_month" . "-" . "$ex_t_year";
		$jf_date = "$ex_f_day" . "-" . "$ex_f_month" . "-" . "$ex_f_year";

		$jto = "$ex_t_year" . "-" . "$ex_t_month" . "-" . "$ex_t_day";
		$jfo = "$ex_f_year" . "-" . "$ex_f_month" . "-" . "$ex_f_day";

		$bg_color = ($j % 2) ? '#C0D9E2' : '#AFCEDA';

		if ($ex_f_year > 0) {
			$job_tr .= "
				<tr class=\"black11\">
				  <td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"$bg_color\">$ex_organization</td>
				  <td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"$bg_color\">
				  $ex_job_post<br />
				  $ex_job_res
				  </td>
				  <td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"$bg_color\">$jt_date to<br />$jf_date</td>
 				 <td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"$bg_color\">$texp</td>
				</tr>";

			$job_hidden .= "
				  <input type=\"hidden\" name=\"$job_postpost\" id=\"$job_postpost\" value=\"$ex_job_post\" />
				  <input type=\"hidden\" name=\"$organizationpost\" id=\"$organizationpost\" value=\"$ex_organization\" />
				  <input type=\"hidden\" name=\"jto$j\" id=\"jto$j\" value=\"$jto\" />
				  <input type=\"hidden\" name=\"jfo$j\" id=\"jfo$j\" value=\"$jfo\" />
			      	  <input type=\"hidden\" name=\"$job_respost\" id=\"$job_respost\" value=\"$ex_job_res\" />";
		}
	}
}



if ($nid_no > '0') {
	$nid_val = strlen("$nid_no");


	if (($nid_val < '10') || ($nid_val > '17') || ($nid_val == '11') || ($nid_val == '12') || ($nid_val == '14') || ($nid_val == '15') || ($nid_val == '16')) {
		echo "<script language='javascript'>window.location.href=\"err.php?err=162\"; </script>";
	}
}




$mobile_val = strlen("$mobileno");
if ($mobile_val < '11') {
	echo "<script language='javascript'>window.location.href=\"err.php?err=163\"; </script>";
}




if ($post_code == '000') {
	$dri_lic_tab = "<tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"> Driving License</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$dri_lic</td>
        </tr>";
}


if (($post_code == '230') && ($dri_lic_type == "")) {
	echo "<script language='javascript'>window.location.href=\"err.php?err=252\"; </script>";
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo "$page_title"; ?></title>
	<link href="lib/style.css" rel="stylesheet" type="text/css" />
	<script src="lib/valid_preview.js"></script>
	<script src="lib/form_submit.js"></script>
	<script src="lib/imageup.js"></script>
	<script type="text/javascript">
		objImage = new Image();

		function download() {
			// preload the image file
			objImage.src = "images/pload.gif";
		}
	</script>
</head>

<body ondragstart="return false" onselectstart="return false" onLoad="download();">
	<?php

	echo "<form action=\"final.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"app_form\" id=\"app_form\" onsubmit=\"return app_form_validator(this)\">


			<input type=\"hidden\" name=\"post_name\" id=\"post_name\" value=\"$post_name\" />			
			<input type=\"hidden\" name=\"ad_no\" id=\"ad_no\" value=\"$ad_no\" />			
			<input type=\"hidden\" name=\"age_err\" id=\"age_err\" value=\"$age_err\" />
			<input type=\"hidden\" name=\"edu_err\" id=\"edu_err\" value=\"$edu_err\" />
			<input type=\"hidden\" name=\"pass_err\" id=\"pass_err\" value=\"$pass_err\" />
			<input type=\"hidden\" name=\"data_err\" id=\"data_err\" value=\"$data_err\" />
			
			<input type=\"hidden\" name=\"post_code\" id=\"post_code\" value=\"$post_code\" />
			<input type=\"hidden\" name=\"dept\" id=\"dept\" value=\"$dept\" />
			<input type=\"hidden\" name=\"name\" id=\"name\" value=\"$name\" />
			<input type=\"hidden\" name=\"fathername\" id=\"fathername\" value=\"$fathername\" />
			<input type=\"hidden\" name=\"mothername\" id=\"mothername\" value=\"$mothername\" />
			<input type=\"hidden\" name=\"b_day\" id=\"b_day\" value=\"$b_day\" />
			<input type=\"hidden\" name=\"b_month\" id=\"b_month\" value=\"$b_month\" />
			<input type=\"hidden\" name=\"b_year\" id=\"b_year\" value=\"$b_year\" />
			<input type=\"hidden\" name=\"age_as\" id=\"age_as\" value=\"$age_as\" />
			<input type=\"hidden\" name=\"age_as1\" id=\"age_as1\" value=\"$age_as1\" />
			<input type=\"hidden\" name=\"age_as2\" id=\"age_as2\" value=\"$age_as2\" />
			<input type=\"hidden\" name=\"age_as3\" id=\"age_as3\" value=\"$age_as3\" />
			<input type=\"hidden\" name=\"sex\" id=\"sex\" value=\"$sex\" />
			<input type=\"hidden\" name=\"nationality\" id=\"nationality\" value=\"$nationality\" />
			<input type=\"hidden\" name=\"nid\" id=\"vid\" value=\"$nid\" />
			<input type=\"hidden\" name=\"nid_no\" id=\"nid_no\" value=\"$nid_no\" />
			<input type=\"hidden\" name=\"passport\" id=\"passport\" value=\"$passport\" />
			<input type=\"hidden\" name=\"passport_no\" id=\"passport_no\" value=\"$passport_no\" />
			<input type=\"hidden\" name=\"breg\" id=\"breg\" value=\"$breg\" />
			<input type=\"hidden\" name=\"breg_no\" id=\"breg_no\" value=\"$breg_no\" />
			<input type=\"hidden\" name=\"religion\" id=\"religion\" value=\"$religion\" />
			<input type=\"hidden\" name=\"mstatus\" id=\"mstatus\" value=\"$mstatus\" />
			<input type=\"hidden\" name=\"s_name\" id=\"s_name\" value=\"$s_name\" />
			<input type=\"hidden\" name=\"ffq\" id=\"ffq\" value=\"$ffq\" />
			<input type=\"hidden\" name=\"ff_quota\" id=\"ff_quota\" value=\"$ff_quota\" />

			<input type=\"hidden\" name=\"home_dist_name\" id=\"home_dist_name\" value=\"$home_dist_name\" />

			<input type=\"hidden\" name=\"present_care\" id=\"present_care\" value=\"$present_care\" />

			<input type=\"hidden\" name=\"present_vill\" id=\"present_vill\" value=\"$present_vill\" />

			<input type=\"hidden\" name=\"present_ps_name\" id=\"present_ps_name\" value=\"$present_ps_name\" />

			<input type=\"hidden\" name=\"present_dist_name\" id=\"present_dist_name\" value=\"$present_dist_name\" />
		

			<input type=\"hidden\" name=\"present_ps\" id=\"present_ps\" value=\"$present_ps\" />
			<input type=\"hidden\" name=\"present_post\" id=\"present_post\" value=\"$present_post\" />
			<input type=\"hidden\" name=\"present_pcode\" id=\"present_pcode\" value=\"$present_pcode\" />
			<input type=\"hidden\" name=\"permanent_care\" id=\"permanent_care\" value=\"$permanent_care\" />
			<input type=\"hidden\" name=\"permanent_vill\" id=\"permanent_vill\" value=\"$permanent_vill\" />

			<input type=\"hidden\" name=\"permanent_ps_name\" id=\"permanent_ps_name\" value=\"$permanent_ps_name\" />
			<input type=\"hidden\" name=\"permanent_dist_name\" id=\"permanent_dist_name\" value=\"$permanent_dist_name\" />



			<input type=\"hidden\" name=\"permanent_ps\" id=\"permanent_ps\" value=\"$permanent_ps\" />
			<input type=\"hidden\" name=\"permanent_post\" id=\"permanent_post\" value=\"$permanent_post\" />
			<input type=\"hidden\" name=\"permanent_pcode\" id=\"permanent_pcode\" value=\"$permanent_pcode\" />
			<input type=\"hidden\" name=\"mobileno\" id=\"mobileno\" value=\"$mobileno\" />
			<input type=\"hidden\" name=\"Email\" id=\"Email\" value=\"$Email\" />
			<input type=\"hidden\" name=\"masters\" id=\"masters\" value=\"$masters\" />
			<input type=\"hidden\" name=\"phd\" id=\"phd\" value=\"$phd\" />


                         <input type=\"hidden\" name=\"exam1\" id=\"exam1\" value=\"$exam1\" />
			 <input type=\"hidden\" name=\"roll1\" id=\"roll1\" value=\"$roll1\" />
                         <input type=\"hidden\" name=\"subject1\" id=\"subject1\" value=\"$subject1\" />
			 <input type=\"hidden\" name=\"institute1\" id=\"institute1\" value=\"$institute1\" />                        
                         <input type=\"hidden\" name=\"year1\" id=\"year1\" value=\"$year1\" />
			
			
                          <input type=\"hidden\" name=\"exam1\" id=\"exam1\" value=\"$exam2\" />
			 <input type=\"hidden\" name=\"roll1\" id=\"roll1\" value=\"$roll2\" />
                         <input type=\"hidden\" name=\"subject1\" id=\"subject1\" value=\"$subject2\" />
			 <input type=\"hidden\" name=\"institute2\" id=\"institute2\" value=\"$institute2\" />                        
                         <input type=\"hidden\" name=\"year1\" id=\"year1\" value=\"$year2\" />
		
                         <input type=\"hidden\" name=\"ageactual\" id=\"ageactual\" value=\"$ageactual\" />

			
                         <input type=\"hidden\" name=\"exam1\" id=\"exam1\" value=\"$exam3\" />
			 <input type=\"hidden\" name=\"roll1\" id=\"roll1\" value=\"$roll3\" />
                         <input type=\"hidden\" name=\"subject1\" id=\"subject1\" value=\"$subject3\" />
			 <input type=\"hidden\" name=\"institute1\" id=\"institute1\" value=\"$institute3\" />                        
                         <input type=\"hidden\" name=\"year1\" id=\"year1\" value=\"$year3\" />
			
			


			<input type=\"hidden\" name=\"pexp2\" id=\"pexp2\" value=\"$pexp2\" />
			<input type=\"hidden\" name=\"progexp2\" id=\"progexp2\" value=\"$progexp2\" />

		
			
			<input type=\"hidden\" name=\"exp\" id=\"exp\" value=\"$exp\" />
			<input type=\"hidden\" name=\"experience\" id=\"experience\" value=\"$experience\" />

			<input type=\"hidden\" name=\"trai6\" id=\"trai6\" value=\"$trai6\" />
			<input type=\"hidden\" name=\"training\" id=\"training\" value=\"$training\" />


				
                         <input type=\"hidden\" name=\"job_no\" id=\"job_no\" value=\"$job_no\" />
                         <input type=\"hidden\" name=\"ds\" id=\"ds\" value=\"$ds\" />
			 <input type=\"hidden\" name=\"job_post1\" id=\"job_post1\" value=\"$job_post1\" />
                         <input type=\"hidden\" name=\"organization1\" id=\"organization1\" value=\"$organization1\" />
			 <input type=\"hidden\" name=\"job_res1\" id=\"job_res1\" value=\"$job_res1\" />                        
                 


			<input type=\"hidden\" name=\"t_day1\" id=\"t_day1\" value=\"$t_day1\" />
			<input type=\"hidden\" name=\"t_month1\" id=\"t_month1\" value=\"$t_month1\" />
			<input type=\"hidden\" name=\"t_year1\" id=\"t_year1\" value=\"$t_year1\" />



			<input type=\"hidden\" name=\"f_day1\" id=\"f_day1\" value=\"$f_day1\" />
			<input type=\"hidden\" name=\"f_month1\" id=\"f_month1\" value=\"$f_month1\" />
			<input type=\"hidden\" name=\"f_year1\" id=\"f_year1\" value=\"$f_year1\" />
			
			<input type=\"hidden\" name=\"till_now\" id=\"till_now\" value=\"$till_now\" />



                        <input type=\"hidden\" name=\"job_no\" id=\"job_no\" value=\"$job_no\" />
                         <input type=\"hidden\" name=\"ds\" id=\"ds\" value=\"$ds\" />
			 <input type=\"hidden\" name=\"job_post2\" id=\"job_post2\" value=\"$job_post2\" />
                         <input type=\"hidden\" name=\"organization2\" id=\"organization2\" value=\"$organization2\" />
			 <input type=\"hidden\" name=\"job_res2\" id=\"job_res2\" value=\"$job_res2\" />                        
                 


			<input type=\"hidden\" name=\"t_day2\" id=\"t_day2\" value=\"$t_day2\" />
			<input type=\"hidden\" name=\"t_month2\" id=\"t_month2\" value=\"$t_month2\" />
			<input type=\"hidden\" name=\"t_year2\" id=\"t_year2\" value=\"$t_year2\" />



			<input type=\"hidden\" name=\"f_day2\" id=\"f_day2\" value=\"$f_day2\" />
			<input type=\"hidden\" name=\"f_month2\" id=\"f_month2\" value=\"$f_month2\" />
			<input type=\"hidden\" name=\"f_year2\" id=\"f_year2\" value=\"$f_year2\" />



                        <input type=\"hidden\" name=\"job_no\" id=\"job_no\" value=\"$job_no\" />
                         <input type=\"hidden\" name=\"ds\" id=\"ds\" value=\"$ds\" />
			 <input type=\"hidden\" name=\"job_post3\" id=\"job_post3\" value=\"$job_post3\" />
                         <input type=\"hidden\" name=\"organization3\" id=\"organization3\" value=\"$organization3\" />
			 <input type=\"hidden\" name=\"job_res3\" id=\"job_res3\" value=\"$job_res3\" />                        
                 


			<input type=\"hidden\" name=\"t_day3\" id=\"t_day3\" value=\"$t_day3\" />
			<input type=\"hidden\" name=\"t_month3\" id=\"t_month3\" value=\"$t_month3\" />
			<input type=\"hidden\" name=\"t_year3\" id=\"t_year3\" value=\"$t_year3\" />



			<input type=\"hidden\" name=\"f_day3\" id=\"f_day3\" value=\"$f_day3\" />
			<input type=\"hidden\" name=\"f_month3\" id=\"f_month3\" value=\"$f_month3\" />
			<input type=\"hidden\" name=\"f_year3\" id=\"f_year3\" value=\"$f_year3\" />




                        <input type=\"hidden\" name=\"job_no\" id=\"job_no\" value=\"$job_no\" />
                         <input type=\"hidden\" name=\"ds\" id=\"ds\" value=\"$ds\" />
			 <input type=\"hidden\" name=\"job_post4\" id=\"job_post4\" value=\"$job_post4\" />
                         <input type=\"hidden\" name=\"organization4\" id=\"organization4\" value=\"$organization4\" />
			 <input type=\"hidden\" name=\"job_res4\" id=\"job_res4\" value=\"$job_res4\" />                        
                 


			<input type=\"hidden\" name=\"t_day4\" id=\"t_day4\" value=\"$t_day4\" />
			<input type=\"hidden\" name=\"t_month4\" id=\"t_month4\" value=\"$t_month4\" />
			<input type=\"hidden\" name=\"t_year4\" id=\"t_year4\" value=\"$t_year4\" />



			<input type=\"hidden\" name=\"f_day4\" id=\"f_day4\" value=\"$f_day4\" />
			<input type=\"hidden\" name=\"f_month4\" id=\"f_month4\" value=\"$f_month4\" />
			<input type=\"hidden\" name=\"f_year4\" id=\"f_year4\" value=\"$f_year4\" />



                        <input type=\"hidden\" name=\"job_no\" id=\"job_no\" value=\"$job_no\" />
                         <input type=\"hidden\" name=\"ds\" id=\"ds\" value=\"$ds\" />
			 <input type=\"hidden\" name=\"job_post5\" id=\"job_post5\" value=\"$job_post5\" />
                         <input type=\"hidden\" name=\"organization5\" id=\"organization5\" value=\"$organization5\" />
			 <input type=\"hidden\" name=\"job_res5\" id=\"job_res5\" value=\"$job_res5\" />                        
                 


			<input type=\"hidden\" name=\"t_day5\" id=\"t_day5\" value=\"$t_day5\" />
			<input type=\"hidden\" name=\"t_month5\" id=\"t_month5\" value=\"$t_month5\" />
			<input type=\"hidden\" name=\"t_year5\" id=\"t_year5\" value=\"$t_year5\" />



			<input type=\"hidden\" name=\"f_day5\" id=\"f_day5\" value=\"$f_day5\" />
			<input type=\"hidden\" name=\"f_month5\" id=\"f_month5\" value=\"$f_month5\" />
			<input type=\"hidden\" name=\"f_year5\" id=\"f_year5\" value=\"$f_year5\" />




			<input type=\"hidden\" name=\"exp3\" id=\"exp3\" value=\"$exp3\" />
			<input type=\"hidden\" name=\"exp_three\" id=\"exp_three\" value=\"$exp_three\" />



			<input type=\"hidden\" name=\"exp4\" id=\"exp4\" value=\"$exp4\" />
			<input type=\"hidden\" name=\"exp_four\" id=\"exp_four\" value=\"$exp_four\" />

			<input type=\"hidden\" name=\"exp5\" id=\"exp5\" value=\"$exp5\" />
			<input type=\"hidden\" name=\"exp_five\" id=\"exp_five\" value=\"$exp_five\" />

			<input type=\"hidden\" name=\"texp\" id=\"texp\" value=\"$texp\" />

			<input type=\"hidden\" name=\"exp_four\" id=\"exp_four\" value=\"$exp_four\" />

			<input type=\"hidden\" name=\"draft_man\" id=\"draft_man\" value=\"$draft_man\" />
 			<input type=\"hidden\" name=\"sur_vey\" id=\"sur_vey\" value=\"$sur_vey\" />
 			<input type=\"hidden\" name=\"data_entry\" id=\"data_entry\" value=\"$data_entry\" />
			<input type=\"hidden\" name=\"typ_speed\" id=\"typ_speed\" value=\"$typ_speed\" />
			<input type=\"hidden\" name=\"typ_spd\" id=\"typ_spd\" value=\"$typ_spd\" />
			<input type=\"hidden\" name=\"steno_typ\" id=\"steno_typ\" value=\"$steno_typ\" />
			<input type=\"hidden\" name=\"com_cer\" id=\"com_cer\" value=\"$com_cer\" />




			<input type=\"hidden\" name=\"eight_cert\" id=\"eight_cert\" value=\"$eight_cert\" />
			<input type=\"hidden\" name=\"dri_lic\" id=\"dri_lic\" value=\"$dri_lic\" />
			<input type=\"hidden\" name=\"dri_lic_type\" id=\"dri_lic_type\" value=\"$dri_lic_type\" />





 			<input type=\"hidden\" name=\"bmd_cert\" id=\"bmd_cert\" value=\"$bmd_cert\" />
 			<input type=\"hidden\" name=\"ca_cert\" id=\"ca_cert\" value=\"$ca_cert\" />
 			<input type=\"hidden\" name=\"cma_cert\" id=\"cma_cert\" value=\"$cma_cert\" />
			<input type=\"hidden\" name=\"validation\" id=\"validation\" value=\"$validation\" />


			<input type=\"hidden\" name=\"one_expvalue_110\" id=\"one_expvalue_110\" value=\"$one_expvalue_110\" />
 			<input type=\"hidden\" name=\"two_expvalue_110\" id=\"two_expvalue_110\" value=\"$two_expvalue_110\" />
 			<input type=\"hidden\" name=\"three_expvalue_110\" id=\"three_expvalue_110\" value=\"$three_expvalue_110\" />
 			<input type=\"hidden\" name=\"four_expvalue_110\" id=\"four_expvalue_110\" value=\"$four_expvalue_110\" />


	
			<input type=\"hidden\" name=\"one_expvalue_120\" id=\"one_expvalue_120\" value=\"$one_expvalue_120\" />
 			<input type=\"hidden\" name=\"two_expvalue_120\" id=\"two_expvalue_120\" value=\"$two_expvalue_120\" />
 			<input type=\"hidden\" name=\"three_expvalue_120\" id=\"three_expvalue_120\" value=\"$three_expvalue_120\" />




			<input type=\"hidden\" name=\"one_expvalue_130\" id=\"one_expvalue_130\" value=\"$one_expvalue_130\" />
			<input type=\"hidden\" name=\"two_expvalue_130\" id=\"two_expvalue_130\" value=\"$two_expvalue_130\" />
			<input type=\"hidden\" name=\"three_expvalue_130\" id=\"three_expvalue_130\" value=\"$three_expvalue_130\" />




			<input type=\"hidden\" name=\"one_expvalue_140\" id=\"one_expvalue_140\" value=\"$one_expvalue_140\" />
			<input type=\"hidden\" name=\"two_expvalue_140\" id=\"two_expvalue_140\" value=\"$two_expvalue_140\" />
			<input type=\"hidden\" name=\"three_expvalue_140\" id=\"three_expvalue_140\" value=\"$three_expvalue_140\" />



			<input type=\"hidden\" name=\"one_expvalue_150\" id=\"one_expvalue_150\" value=\"$one_expvalue_150\" />
			<input type=\"hidden\" name=\"two_expvalue_150\" id=\"two_expvalue_150\" value=\"$two_expvalue_150\" />
			<input type=\"hidden\" name=\"three_expvalue_150\" id=\"three_expvalue_150\" value=\"$three_expvalue_150\" />


			<input type=\"hidden\" name=\"one_expvalue_160\" id=\"one_expvalue_160\" value=\"$one_expvalue_160\" />
			<input type=\"hidden\" name=\"two_expvalue_160\" id=\"two_expvalue_160\" value=\"$two_expvalue_160\" />
			<input type=\"hidden\" name=\"three_expvalue_160\" id=\"three_expvalue_160\" value=\"$three_expvalue_160\" />



			<input type=\"hidden\" name=\"one_expvalue_170\" id=\"one_expvalue_170\" value=\"$one_expvalue_170\" />
			<input type=\"hidden\" name=\"two_expvalue_170\" id=\"two_expvalue_170\" value=\"$two_expvalue_170\" />
			<input type=\"hidden\" name=\"three_expvalue_170\" id=\"three_expvalue_170\" value=\"$three_expvalue_170\" />



			<input type=\"hidden\" name=\"one_expvalue_180\" id=\"one_expvalue_180\" value=\"$one_expvalue_180\" />
			<input type=\"hidden\" name=\"two_expvalue_180\" id=\"two_expvalue_180\" value=\"$two_expvalue_180\" />
			<input type=\"hidden\" name=\"three_expvalue_180\" id=\"three_expvalue_180\" value=\"$three_expvalue_180\" />



			<input type=\"hidden\" name=\"one_expvalue_190\" id=\"one_expvalue_190\" value=\"$one_expvalue_190\" />
			<input type=\"hidden\" name=\"two_expvalue_190\" id=\"two_expvalue_190\" value=\"$two_expvalue_190\" />
			<input type=\"hidden\" name=\"three_expvalue_190\" id=\"three_expvalue_190\" value=\"$three_expvalue_190\" />


			<input type=\"hidden\" name=\"one_expvalue_200\" id=\"one_expvalue_200\" value=\"$one_expvalue_200\" />
			<input type=\"hidden\" name=\"two_expvalue_200\" id=\"two_expvalue_200\" value=\"$two_expvalue_200\" />
			<input type=\"hidden\" name=\"three_expvalue_200\" id=\"three_expvalue_200\" value=\"$three_expvalue_200\" />



			<input type=\"hidden\" name=\"one_expvalue_210\" id=\"one_expvalue_210\" value=\"$one_expvalue_210\" />
			<input type=\"hidden\" name=\"two_expvalue_210\" id=\"two_expvalue_210\" value=\"$two_expvalue_210\" />
			<input type=\"hidden\" name=\"three_expvalue_210\" id=\"three_expvalue_210\" value=\"$three_expvalue_210\" />





			<input type=\"hidden\" name=\"one_expvalue_220\" id=\"one_expvalue_220\" value=\"$one_expvalue_220\" />
			<input type=\"hidden\" name=\"two_expvalue_220\" id=\"two_expvalue_220\" value=\"$two_expvalue_220\" />
			<input type=\"hidden\" name=\"three_expvalue_220\" id=\"three_expvalue_220\" value=\"$three_expvalue_220\" />



			<input type=\"hidden\" name=\"one_expvalue_230\" id=\"one_expvalue_230\" value=\"$one_expvalue_230\" />
			<input type=\"hidden\" name=\"two_expvalue_230\" id=\"two_expvalue_230\" value=\"$two_expvalue_230\" />
			<input type=\"hidden\" name=\"three_expvalue_230\" id=\"three_expvalue_230\" value=\"$three_expvalue_230\" />




			<input type=\"hidden\" name=\"one_expvalue_240\" id=\"one_expvalue_240\" value=\"$one_expvalue_240\" />
			<input type=\"hidden\" name=\"two_expvalue_240\" id=\"two_expvalue_240\" value=\"$two_expvalue_240\" />
			<input type=\"hidden\" name=\"three_expvalue_240\" id=\"three_expvalue_240\" value=\"$three_expvalue_240\" />



			<input type=\"hidden\" name=\"one_expvalue_250\" id=\"one_expvalue_250\" value=\"$one_expvalue_250\" />
			<input type=\"hidden\" name=\"two_expvalue_250\" id=\"two_expvalue_250\" value=\"$two_expvalue_250\" />
			<input type=\"hidden\" name=\"three_expvalue_250\" id=\"three_expvalue_250\" value=\"$three_expvalue_250\" />



			<input type=\"hidden\" name=\"one_expvalue_260\" id=\"one_expvalue_260\" value=\"$one_expvalue_260\" />
			<input type=\"hidden\" name=\"two_expvalue_260\" id=\"two_expvalue_260\" value=\"$two_expvalue_260\" />
			<input type=\"hidden\" name=\"three_expvalue_260\" id=\"three_expvalue_260\" value=\"$three_expvalue_260\" />





			<input type=\"hidden\" name=\"one_expvalue_270\" id=\"one_expvalue_270\" value=\"$one_expvalue_270\" />
			<input type=\"hidden\" name=\"two_expvalue_270\" id=\"two_expvalue_270\" value=\"$two_expvalue_270\" />
			<input type=\"hidden\" name=\"three_expvalue_270\" id=\"three_expvalue_270\" value=\"$three_expvalue_270\" />





			<input type=\"hidden\" name=\"one_expvalue_280\" id=\"one_expvalue_280\" value=\"$one_expvalue_280\" />
			<input type=\"hidden\" name=\"two_expvalue_280\" id=\"two_expvalue_280\" value=\"$two_expvalue_280\" />
			<input type=\"hidden\" name=\"three_expvalue_280\" id=\"three_expvalue_280\" value=\"$three_expvalue_280\" />




			<input type=\"hidden\" name=\"one_expvalue_290\" id=\"one_expvalue_290\" value=\"$one_expvalue_290\" />
			<input type=\"hidden\" name=\"two_expvalue_290\" id=\"two_expvalue_290\" value=\"$two_expvalue_290\" />
			<input type=\"hidden\" name=\"three_expvalue_290\" id=\"three_expvalue_290\" value=\"$three_expvalue_290\" />





			<input type=\"hidden\" name=\"one_expvalue_300\" id=\"one_expvalue_300\" value=\"$one_expvalue_300\" />
			<input type=\"hidden\" name=\"two_expvalue_300\" id=\"two_expvalue_300\" value=\"$two_expvalue_300\" />
			<input type=\"hidden\" name=\"three_expvalue_300\" id=\"three_expvalue_300\" value=\"$three_expvalue_300\" />




			<input type=\"hidden\" name=\"one_expvalue_310\" id=\"one_expvalue_310\" value=\"$one_expvalue_310\" />
			<input type=\"hidden\" name=\"two_expvalue_310\" id=\"two_expvalue_310\" value=\"$two_expvalue_310\" />
			<input type=\"hidden\" name=\"three_expvalue_310\" id=\"three_expvalue_310\" value=\"$three_expvalue_310\" />



			<input type=\"hidden\" name=\"one_expvalue_320\" id=\"one_expvalue_320\" value=\"$one_expvalue_320\" />
			<input type=\"hidden\" name=\"two_expvalue_320\" id=\"two_expvalue_320\" value=\"$two_expvalue_320\" />
			<input type=\"hidden\" name=\"three_expvalue_320\" id=\"three_expvalue_320\" value=\"$three_expvalue_320\" />

			<input type=\"hidden\" name=\"one_expvalue_330\" id=\"one_expvalue_330\" value=\"$one_expvalue_330\" />
			<input type=\"hidden\" name=\"two_expvalue_330\" id=\"two_expvalue_330\" value=\"$two_expvalue_330\" />
			<input type=\"hidden\" name=\"three_expvalue_330\" id=\"three_expvalue_330\" value=\"$three_expvalue_330\" />




			<input type=\"hidden\" name=\"one_expvalue_340\" id=\"one_expvalue_340\" value=\"$one_expvalue_340\" />
			<input type=\"hidden\" name=\"two_expvalue_340\" id=\"two_expvalue_340\" value=\"$two_expvalue_340\" />
			<input type=\"hidden\" name=\"three_expvalue_340\" id=\"three_expvalue_340\" value=\"$three_expvalue_340\" />




			<input type=\"hidden\" name=\"one_expvalue_350\" id=\"one_expvalue_350\" value=\"$one_expvalue_350\" />
			<input type=\"hidden\" name=\"two_expvalue_350\" id=\"two_expvalue_350\" value=\"$two_expvalue_350\" />
			<input type=\"hidden\" name=\"three_expvalue_350\" id=\"three_expvalue_350\" value=\"$three_expvalue_350\" />
			
			
			<input type=\"hidden\" name=\"one_expvalue_360\" id=\"one_expvalue_360\" value=\"$one_expvalue_360\" />
			<input type=\"hidden\" name=\"two_expvalue_360\" id=\"two_expvalue_360\" value=\"$two_expvalue_360\" />
			<input type=\"hidden\" name=\"three_expvalue_360\" id=\"three_expvalue_360\" value=\"$three_expvalue_360\" />
			
			
			<input type=\"hidden\" name=\"one_expvalue_370\" id=\"one_expvalue_370\" value=\"$one_expvalue_370\" />
			<input type=\"hidden\" name=\"two_expvalue_370\" id=\"two_expvalue_370\" value=\"$two_expvalue_370\" />
			<input type=\"hidden\" name=\"three_expvalue_370\" id=\"three_expvalue_370\" value=\"$three_expvalue_370\" />
			
			<input type=\"hidden\" name=\"one_expvalue_380\" id=\"one_expvalue_380\" value=\"$one_expvalue_380\" />
			<input type=\"hidden\" name=\"two_expvalue_380\" id=\"two_expvalue_380\" value=\"$two_expvalue_380\" />
			<input type=\"hidden\" name=\"three_expvalue_380\" id=\"three_expvalue_380\" value=\"$three_expvalue_380\" />




			<input type=\"hidden\" name=\"one_expvalue_400\" id=\"one_expvalue_400\" value=\"$one_expvalue_400\" />
			<input type=\"hidden\" name=\"two_expvalue_400\" id=\"two_expvalue_400\" value=\"$two_expvalue_400\" />
			<input type=\"hidden\" name=\"three_expvalue_400\" id=\"three_expvalue_400\" value=\"$three_expvalue_400\" />





<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>

    $app_head
    $toplink
  <tr>
  	<td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12bold\">Application Preview</td>
  </tr>






  <tr>
    <td align=\"left\" valign=\"top\">
      <table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12\">
        <tr>
          <td width=\"23%\" align=\"left\" valign=\"middle\"bgcolor=\"lightgreen\">Name of the Post</td>
          <td width=\"7%\" align=\"center\" valign=\"middle\"bgcolor=\"lightgreen\">:</td>
          <td width=\"70%\" align=\"left\" valign=\"middle\"bgcolor=\"lightgreen\">$postname</td>
        </tr>


              <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">Applicant's Name</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$name</td>
       </tr>

        <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">Father's Name</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$fathername</td>
        </tr>

        <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">Mother's Name</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$mothername</td>
        </tr>

         <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\">Date of Birth</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black11\">$b_day/$b_month/$b_year ($age_as)</td>
        </tr>

        <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\">Gender</td>
         <td align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black11\">$sex_value</td>
        </tr>

        <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\">Nationality</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black12\">
            <tr>
              <td width=\"20%\" height=\"23\" align=\"left\" valign=\"middle\" class=\"black11\">$nationality</td>
              <td width=\"5%\" align=\"left\" valign=\"middle\">&nbsp;</td>
            </tr>

          </table></td>
        </tr>
	


         <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\">National ID</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black11\">$nid_value</td>
        </tr>



         <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\">Passport ID</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black11\">$pass_value</td>
        </tr>



         <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\">Birth Registration</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black11\">$breg_value</td>
        </tr>




		<tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">Religion</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$religion</td>
        </tr>
		<tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">Marital Status</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$ms_value</td>
        </tr>
		
		$ffq_tab		

        <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td colspan=\"2\" height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Mailing/Present Address</td>
                </tr>
		
                <tr>
                  <td width=\"47%\" align=\"left\" valign=\"middle\">Care of:</td>
                  <td width=\"53%\" align=\"left\" valign=\"middle\" claspasss=\"black11\">$present_care</td>
                   </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">
				  Village/Town/<br />
                  Road/House/Flat:</td>
                  <td width=\"53%\" align=\"left\" valign=\"middle\" class=\"black11\">$present_vill</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">District:</td>
                  <td align=\"left\" valign=\"middle\" class=\"black11\">$present_dist_name</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">P.S./Upazila:</td>
                  <td align=\"left\" valign=\"middle\" class=\"black11\">$present_ps</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Post Office:</td>
                  <td align=\"left\" valign=\"middle\" class=\"black11\">$present_post</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Post Code:</td>
                  <td align=\"left\" valign=\"middle\" class=\"black11\">$present_pcode</td>
                </tr>
              </table></td>
              <td align=\"left\" valign=\"middle\">&nbsp;</td>
              <td width=\"50%\" align=\"left\" valign=\"middle\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td colspan=\"2\" height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Permanent Address:</td>
                </tr>
				<tr>
                  <td width=\"47%\" align=\"left\" valign=\"middle\">Care of:</td>
                  <td width=\"53%\" align=\"left\" valign=\"middle\" class=\"black11\">$permanent_care</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">
				  Village/Town/<br />
                  Road/House/Flat:</td>
                  <td width=\"53%\" align=\"left\" valign=\"middle\" class=\"black11\">$permanent_vill</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Home District:</td>
                  <td align=\"left\" valign=\"middle\" class=\"black11\">$permanent_dist_name</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">P.S./Upazila:</td>
                  <td align=\"left\" valign=\"middle\" class=\"black11\">$permanent_ps</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Post Office:</td>
                  <td align=\"left\" valign=\"middle\" class=\"black11\">$permanent_post</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Post Code:</td>
                  <td align=\"left\" valign=\"middle\" class=\"black11\">$permanent_pcode</td>
                </tr>
              </table></td>
              <td align=\"left\" valign=\"middle\">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr bgcolor=\"$shade1_bg\">
          <td align=\"left\" valign=\"middle\">Contact Mobile</td>
          <td align=\"center\" valign=\"middle\">:</td>
          <td align=\"left\" valign=\"middle\">
		  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black12\">
            <tr>
              <td width=\"37%\" height=\"23\" align=\"left\" valign=\"middle\" class=\"red12bold\">$mobileno</td>
              <td width=\"21%\" align=\"right\" valign=\"middle\">&nbsp;</td>
              <td width=\"33%\" align=\"right\" valign=\"middle\" class=\"red12bold\">&nbsp;</td>
              <td width=\"9%\" align=\"left\" valign=\"middle\" class=\"red12bold\">&nbsp;</td>
              </tr>
          </table>
		  </td>
        </tr>
        <tr bgcolor=\"$shade1_bg\">
          <td align=\"left\" valign=\"middle\">Email</td>
          <td align=\"center\" valign=\"middle\">:</td>
          <td align=\"left\" valign=\"middle\">$Email</td>
        </tr>


        <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"lightgreen\">Academic Qualifications:</td>
        </tr>
        <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black14\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">
            <tr>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Examination</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Board/University</td>
              <td width=\"10%\" height=\"25\" align=\"center\" valign=\"middle\"bgcolor=\"$box1\">Roll</td>
              <td width=\"10%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Result</td>
              <td width=\"20%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Group/Subject</td>
              <td width=\"10%\" height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Year</td>
              <td width=\"10%\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">Duration</td>
            </tr>


	$edu_table
	$hidden_value
        
            

        </table></td>
        </tr>




    
        
	$job_satatus
	$cl_table
	$ca_table


        $SSC_tab
        $SSC_hsc_tab
        $SSC_hsc_gra_tab
 
$job_exp_tab
        
        $exp_110_01_tab
	$exp_110_02_tab
	$exp_110_03_tab

        $exp_120_01_tab
	$exp_120_02_tab
	$exp_120_03_tab

        $exp_130_01_tab
	$exp_130_02_tab
	$exp_130_03_tab

        $exp_140_01_tab
	$exp_140_02_tab
	$exp_140_03_tab

        $exp_150_01_tab
	$exp_150_02_tab
	$exp_150_03_tab

        $exp_160_01_tab
	$exp_160_02_tab
	$exp_160_03_tab

    
        $exp_170_01_tab
	$exp_170_02_tab
	$exp_170_03_tab

        
        $exp_180_01_tab
	$exp_180_02_tab
	$exp_180_03_tab

			
        $exp_190_01_tab
	$exp_190_02_tab
	$exp_190_03_tab


        $exp_200_01_tab
	$exp_200_02_tab
	$exp_200_03_tab


        $exp_210_01_tab
	$exp_210_02_tab
	$exp_210_03_tab


        $exp_220_01_tab
	$exp_220_02_tab
	$exp_220_03_tab


        $exp_230_01_tab
	$exp_230_02_tab
	$exp_230_03_tab


        $exp_240_01_tab
	$exp_240_02_tab
	$exp_240_03_tab


        $exp_250_01_tab
	$exp_250_02_tab
	$exp_250_03_tab


       $exp_260_01_tab
	$exp_260_02_tab
	$exp_260_03_tab



        $exp_270_01_tab
	$exp_270_02_tab
	$exp_270_03_tab



        $exp_280_01_tab
	$exp_280_02_tab
	$exp_280_03_tab



        $exp_290_01_tab
	$exp_290_02_tab
	$exp_290_03_tab



        $exp_300_01_tab
	$exp_300_02_tab
	$exp_300_03_tab

        $exp_310_01_tab
	$exp_310_02_tab
	$exp_310_03_tab


        $exp_320_01_tab
	$exp_320_02_tab
	$exp_320_03_tab


        $exp_330_01_tab
	$exp_330_02_tab
	$exp_330_03_tab


        $exp_340_01_tab
	$exp_340_02_tab
	$exp_340_03_tab


        $exp_350_01_tab
	$exp_350_02_tab
	$exp_350_03_tab
	
	$exp_360_01_tab
	$exp_360_02_tab
	$exp_360_03_tab
	
	$exp_370_01_tab
	$exp_370_02_tab
	$exp_370_03_tab
	
	$exp_380_01_tab
	$exp_380_02_tab
	$exp_380_03_tab

$dri_lic_tab

				<!--<tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"> Driving License</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$dri_lic</td>
        </tr>-->

 
      <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"> Departmental Status</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\">$ds</td>
        </tr>






$ca_cma_tab
 	
$bmdc_cert_tab

																																

	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12bold\">Photo &amp; Signature:</td>
          </tr>
        <tr>
          <td height=\"40\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">Photo must be <span class=\"black11bold\"> 300 X 300 pixel</span> (width X height) <span class=\"red11\"><b>[ .jpg format]</b></span> and file size not more than <span class=\"red11\">100 KB (Minimum 4KB)</span> and Signature must be <span class=\"black11bold\"> 300 X 80 pixel</span> (width X height) <span class=\"red11\"><b>[ .jpg format]</b></span> and file size not more than <span class=\"red11\">60 KB (Minimum 3KB)</span>. <span class=\"black11bold\">Colour Photo is a must</span>. Black & White, Monochrome or Grayscale photo or any image other than photo will not be accepted. This application is capable to detect image with <span class=\"red11\">Facial Recognition</span>. Please avoid to upload unacceptable photo. Applicants may test their photo/signature for suitability through the 
          <a href=\"imsize.php\" target=\"_blank\" class=\"mainlink\">Photo/Signature Validator</a></div></td>
        </tr>
          <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black12\">
            <tr>
              <td width=\"22%\" align=\"left\" valign=\"middle\">&nbsp;Upload/Edit Photo</td>
              <td width=\"7%\" align=\"center\" valign=\"middle\">:</td>
              <td width=\"51%\" align=\"left\" valign=\"middle\">
              <label>
                <input name=\"photo\" type=\"file\" accept=\".jpg\" class=\"textfield03\" id=\"photo\" onchange=\"previewFile(this)\"/>
              <img src=\"\" id=\"photo_view\" style=\"width: 120px;height: 120px;top: 5px;border: 2px dashed #38B003;padding: 5px;border-radius: 4px;background-color: #fff;margin-top:5px;margin-bottom:5px;\" alt=\"Photo Preview...\">
              </label>
              </td>
              </tr>
              
              
              <tr>
              <td align=\"left\" valign=\"middle\">&nbsp;Upload/Edit Signature</td>
              <td align=\"center\" valign=\"middle\">:</td>
              <td align=\"left\" valign=\"middle\"><label>
                <input name=\"signature\" type=\"file\" accept=\".jpg\" class=\"textfield03\" id=\"signature\"  onchange=\"previewSign(this)\"/>
                <img src=\"\" id=\"signature_view\" style=\"margin-top:5px; width: 150px; height: 40px; top: 5px;border: 2px dashed rgb(56, 176, 3);  padding: 5px; border-radius: 4px; background-color: #f2f2f2;\" alt=\"Signature preview...\">
              </label></td>
            </tr>
            </table></td>
                   </tr>










        <tr bgcolor=\"$shade1_bg\">
          <td colspan=\"3\" align=\"center\" valign=\"middle\"><a href=\"javascript:history.go(-1)\" class=\"mainlink\"></a>If require any changes, <a href=\"javascript:history.go(-1)\" class=\"mainlink\">Click here to edit the application!!</a></td>
        </tr>



		<tr>
          <td colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tr>
                      <td width=\"5%\" align=\"center\" valign=\"middle\"><input type=\"checkbox\" name=\"info_yes\" id=\"info_yes\" onclick=\"agreesubmit(this)\"/></td>
                      <td width=\"95%\" align=\"left\" valign=\"middle\" class=\"black11i\"><div align=\"justify\">I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is found false, incorrect, incomplete or if any ineligibility is detected before or after the examination, any action can be taken against me by the Authority including cancellation of my candidature.</div></td>
                    </tr>
                  </table></td>
        </tr>
        <tr>
          <td colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\"><input type=\"submit\" name=\"button\" id=\"button\" value=\"Submit the Application\" disabled/></td>
        </tr>
	<tr>
          <td height=\"30\" colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">
          <img name=\"im\" src=\"images/blank.png\"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"lightgreen\" class=\"black10\">$support</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\">&nbsp;</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\"><fieldset class=\"field_set\">
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
        <tr>
          <td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"80%\" align=\"left\" valign=\"middle\">$copyright</td>
          <td width=\"10%\" align=\"left\" valign=\"middle\">$by</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\">$flashlogo</td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
	
</table>
</form>";




	$xxx = $postcode;

	session_start();
	$_SESSION['abc'] = $xxx;



	mysql_close();
	?>
</body>

</html>


<script src="lib/jquery.min.js"></script>
<script type="text/javascript">
	$("#photo_view").attr("src", 'data:image/jpg;base64,' + '<?php echo $image; ?>');
	$("#signature_view").attr("src", 'data:image/jpg;base64,' + '<?php echo $sign; ?>');

    $('#app_form').prepend('<input type="hidden" name="alljobs_id" value="' + '<?php echo $alljobs_id; ?>' + '">');
	$('#app_form').prepend('<input type="hidden" name="imageurl" value="' + '<?php echo $imageurl; ?>' + '">');
	$('#app_form').prepend('<input type="hidden" name="signatureurl" value="' + '<?php echo $signatureurl; ?>' + '">');
</script>

