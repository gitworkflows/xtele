<?php
if (!isset($_SESSION)) {
	session_start();
}



include "../lib/dbconnect.php";
include "../lib/fx1.php";

// Not Active
if ($active == "0") {
	exit;
}



session_start();

$x = $_SESSION['myValue'];

$invoiceno = $x;


$post_code 				= addslashes($_POST['post_code']);
$post_name 				= addslashes($_POST['post_name']);



$post_code = $_SESSION['postcode'];
$postcode = $post_code;


$post_name = $_SESSION['postname'];
$postname = $post_name;


$jobexp = '2';





//get Data from post

$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
while ($row_post = mysql_fetch_array($out_post)) {
	extract($row_post);
}



//get Data from cinfo

$out_info = mysql_query("SELECT * FROM `cinfo` WHERE 
							`invoice` = '$invoiceno'");
while ($row_info = mysql_fetch_array($out_info)) {
	extract($row_info);
}


//get Data from cedu

$out_edu = mysql_query("SELECT * FROM `cedu` WHERE 
							`invoice` = '$invoiceno'");
while ($row_edu = mysql_fetch_array($out_edu)) {
	extract($row_edu);
}




$img_id = "$invoice" . ".jpg";
$apply_post = "$post_name";




switch ($sex) {
	case 1:
		$sex_value = "Male";
		break;
	case 2:
		$sex_value = "Female";
		break;
	default:
		$sex_value = "";
}


switch ($ffq) {
	case 1:
		$ff_quota = "Freedom Fighter";
		break;
	case 2:
		$ff_quota = "Child of Freedom Fighter";
		break;
	case 3:
		$ff_quota = "Grand Child of Freedom Fighter";
		break;
	case 4:
		$ff_quota = "Physically Handicapped";
		break;
	case 5:
		$ff_quota = "Orphan";
		break;
	case 6:
		$ff_quota = "Ethnic Minority";
		break;
	case 7:
		$ff_quota = "Ansar-VDP";
		break;
	case 8:
		$ff_quota = "Non Quota";
		break;

	default:
		$ff_quota = "";
}



switch ($orp) {
	case 1:
		$orp_quota = "Yes";
		break;
	case 2:
		$orp_quota = "No";
		break;
	default:
		$orp_quota = "";
}


switch ($phc) {
	case 1:
		$phc_quota = "Yes";
		break;
	case 2:
		$phc_quota = "No";
		break;
	default:
		$phc_quota = "";
}


switch ($trq) {
	case 1:
		$trq_quota = "Yes";
		break;
	case 2:
		$trq_quota = "No";
		break;
	default:
		$trq_quota = "";
}


switch ($vdp) {
	case 1:
		$vdp_quota = "Yes";
		break;
	case 2:
		$vdp_quota = "No";
		break;
	default:
		$vdp_quota = "";
}




switch ($nid) {
	case 1:
		$nid_value = "$nid_no";
		break;
	case 2:
		$nid_value = "No";
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
		$breg_value = "";
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





if ($h_exam != "" && $h_group != "") {
	$edu_tab .= "<tr  bgcolor=\"#DCDCDC\">
                        <td align=\"center\" valign=\"middle\">$h_exam</td>
                        <td align=\"center\" valign=\"middle\">$h_board</td>
                        <td align=\"center\" valign=\"middle\">$h_group</td>
                        <td align=\"center\" valign=\"middle\">$h_result $h_result_type</td>
                        <td align=\"center\" valign=\"middle\">$h_year</td>
                        <td align=\"center\" valign=\"middle\">$h_roll</td>
                        <td align=\"center\" valign=\"middle\">NA</td>
                    </tr>";
}


if ($g_exam != "" && $g_sub != "") {
	$edu_tab .= "<tr  bgcolor=\"#E3E3E3\">
                        <td align=\"center\" valign=\"middle\">$g_exam</td>
                        <td align=\"center\" valign=\"middle\">$g_institute</td>
                        <td align=\"center\" valign=\"middle\">$g_sub</td>
                        <td align=\"center\" valign=\"middle\">$g_result $g_result_type</td>
                        <td align=\"center\" valign=\"middle\">$g_year</td>
                        <td align=\"center\" valign=\"middle\">NA</td>
                        <td align=\"center\" valign=\"middle\">$g_duration</td>
                      </tr>";
}

if ($m_exam != "" && $m_sub != "") {
	$edu_tab .= "<tr bgcolor=\"#DCDCDC\">
                        <td align=\"center\" valign=\"middle\">$m_exam</td>
                        <td align=\"center\" valign=\"middle\">$m_institute</td>
                        <td align=\"center\" valign=\"middle\">$m_sub</td>
                        <td align=\"center\" valign=\"middle\">$m_result $m_result_type</td>
                        <td align=\"center\" valign=\"middle\">$m_year</td>
                        <td align=\"center\" valign=\"middle\">NA</td>
                        <td align=\"center\" valign=\"middle\">$m_duration</td>
                      </tr>";
}


if ($tss > 0) {
	$ts_table = "<tr>
			  <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black10\">Typing Speed: Bengali: $tsb/min English: $tse/min</td>
			</tr>";
}

if ($orp > 0 || $phc > 0) {
	$or_ph_table = "<tr bgcolor=\"#E3E3E3\">
				  <td width=\"18%\" align=\"left\" valign=\"middle\">Orphan</td>
				  <td width=\"35%\" align=\"left\" valign=\"middle\">$orp_quota</td>
				  <td width=\"17%\" align=\"left\" valign=\"middle\">Physically Challenged</td>
				  <td width=\"30%\" align=\"left\" valign=\"middle\">$phc_quota</td>
				</tr>";
}



if ($trq > 0 || $vdp > 0) {
	$tr_vdp_table = "<tr>
				  <td width=\"15%\" align=\"left\" valign=\"middle\">Tribal</td>
				  <td width=\"34%\" align=\"left\" valign=\"middle\">$trq_quota</td>
				  <td width=\"17%\" align=\"left\" valign=\"middle\">Anser-VDP</td>
				  <td width=\"34%\" align=\"left\" valign=\"middle\">$vdp_quota</td>
				</tr>";
}




/*	if($jexp > 0)
	     {
		$exp_table = "<tr>
			  <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black10\"></td>
		  </tr>
		  <tr>
			  <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black10\">$job_exp</td>
		  </tr>";
	       }
*/





///*****************************************************     pdfdw Function working ***************************************************************


include "lib/dbconnect.php";

$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
while ($row_post = mysql_fetch_array($out_post)) {
	extract($row_post);
}





// *********************************************************  Post Code = 110  ***********************************************************************

if ($exp_110_03 != "0") {
	$exp_110_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_110_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_110</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_110_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_110</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_110_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_110</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_110_02 != "0") {
	$exp_110_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_110_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_110</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_110_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_110</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_110_01 != "0") {
	$exp_110_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_110_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_110</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 120  ***********************************************************************

if ($exp_120_03 != "0") {
	$exp_120_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_120_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_120</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_120_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_120</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_120_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_120</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_120_02 != "0") {
	$exp_120_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_120_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_120</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_120_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_120</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_120_01 != "0") {
	$exp_120_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_120_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_120</td>
			 </tr></table></td> </tr>
		  </tr>";
}



// *********************************************************  Post Code = 130  ***********************************************************************

if ($exp_130_03 != "0") {
	$exp_130_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_130_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_130</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_130_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_130</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_130_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_130</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_130_02 != "0") {
	$exp_130_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_130_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_130</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_130_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_130</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_130_01 != "0") {
	$exp_130_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_130_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_130</td>
			 </tr></table></td> </tr>
		  </tr>";
}



// *********************************************************  Post Code = 140  ***********************************************************************

if ($exp_140_03 != "0") {
	$exp_140_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_140_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_140</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_140_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_140</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_140_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_140</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_140_02 != "0") {
	$exp_140_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_140_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_140</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_140_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_140</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_140_01 != "0") {
	$exp_140_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_140_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_140</td>
			 </tr></table></td> </tr>
		  </tr>";
}





// *********************************************************  Post Code = 150  ***********************************************************************

if ($exp_150_03 != "0") {
	$exp_150_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_150_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_150</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_150_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_150</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_150_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_150</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_150_02 != "0") {
	$exp_150_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_150_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_150</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_150_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_150</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_150_01 != "0") {
	$exp_150_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_150_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_150</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 160  ***********************************************************************

if ($exp_160_03 != "0") {
	$exp_160_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_160_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_160</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_160_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_160</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_160_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_160</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_160_02 != "0") {
	$exp_160_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_160_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_160</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_160_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_160</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_160_01 != "0") {
	$exp_160_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_160_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_160</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 170  ***********************************************************************

if ($exp_170_03 != "0") {
	$exp_170_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_170_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_170</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_170_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_170</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_170_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_170</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_170_02 != "0") {
	$exp_170_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_170_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_170</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_170_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_170</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_170_01 != "0") {
	$exp_170_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_170_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_170</td>
			 </tr></table></td> </tr>
		  </tr>";
}



// *********************************************************  Post Code = 180  ***********************************************************************

if ($exp_180_03 != "0") {
	$exp_180_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_180_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_180</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_180_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_180</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_180_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_180</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_180_02 != "0") {
	$exp_180_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_180_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_180</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_180_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_180</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_180_01 != "0") {
	$exp_180_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_180_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_180</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 190  ***********************************************************************

if ($exp_190_03 != "0") {
	$exp_190_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_190_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_190</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_190_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_190</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_190_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_190</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_190_02 != "0") {
	$exp_190_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_190_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_190</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_190_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_190</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_190_01 != "0") {
	$exp_190_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_190_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_190</td>
			 </tr></table></td> </tr>
		  </tr>";
}






// *********************************************************  Post Code = 200  ***********************************************************************

if ($exp_200_03 != "0") {
	$exp_200_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_200_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_200</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_200_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_200</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_200_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_200</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_200_02 != "0") {
	$exp_200_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_200_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_200</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_200_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_200</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_200_01 != "0") {
	$exp_200_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_200_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_200</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 210  ***********************************************************************

if ($exp_210_03 != "0") {
	$exp_210_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_210_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_210</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_210_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_210</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_210_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_210</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_210_02 != "0") {
	$exp_210_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_210_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_210</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_210_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_210</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_210_01 != "0") {
	$exp_210_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_210_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_210</td>
			 </tr></table></td> </tr>
		  </tr>";
}








// *********************************************************  Post Code = 220  ***********************************************************************

if ($exp_220_03 != "0") {
	$exp_220_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_220_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_220</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_220_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_220</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_220_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_220</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_220_02 != "0") {
	$exp_220_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_220_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_220</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_220_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_220</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_220_01 != "0") {
	$exp_220_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_220_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_220</td>
			 </tr></table></td> </tr>
		  </tr>";
}






// *********************************************************  Post Code = 230  ***********************************************************************

if ($exp_230_03 != "0") {
	$exp_230_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_230_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_230</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_230_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_230</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_230_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_230</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_230_02 != "0") {
	$exp_230_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_230_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_230</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_230_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_230 ($dri_lic_type)</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_230_01 != "0") {
	$exp_230_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_230_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_230</td>
			 </tr></table></td> </tr>
		  </tr>";
}






// *********************************************************  Post Code = 240  ***********************************************************************

if ($exp_240_03 != "0") {
	$exp_240_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_240_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_240</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_240_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_240</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_240_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_240</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_240_02 != "0") {
	$exp_240_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_240_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_240</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_240_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_240</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_240_01 != "0") {
	$exp_240_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_240_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_240</td>
			 </tr></table></td> </tr>
		  </tr>";
}






// *********************************************************  Post Code = 250  ***********************************************************************

if ($exp_250_03 != "0") {
	$exp_250_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_250_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_250</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_250_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_250</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_250_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_250</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_250_02 != "0") {
	$exp_250_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_250_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_250</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_250_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_250</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_250_01 != "0") {
	$exp_250_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_250_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_250</td>
			 </tr></table></td> </tr>
		  </tr>";
}







// *********************************************************  Post Code = 260  ***********************************************************************

if ($exp_260_03 != "0") {
	$exp_260_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_260_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_260</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_260_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_260</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_260_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_260</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_260_02 != "0") {
	$exp_260_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_260_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_260</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_260_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_260</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_260_01 != "0") {
	$exp_260_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_260_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_260</td>
			 </tr></table></td> </tr>
		  </tr>";
}






// *********************************************************  Post Code = 270  ***********************************************************************

if ($exp_270_03 != "0") {
	$exp_270_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_270_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_270</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_270_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_270</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_270_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_270</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_270_02 != "0") {
	$exp_270_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_270_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_270</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_270_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_270</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_270_01 != "0") {
	$exp_270_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_270_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_270</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 280  ***********************************************************************

if ($exp_280_03 != "0") {
	$exp_280_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_280_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_280</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_280_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_280</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_280_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_280</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_280_02 != "0") {
	$exp_280_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_280_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_280</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_280_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_280</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_280_01 != "0") {
	$exp_280_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_280_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_280</td>
			 </tr></table></td> </tr>
		  </tr>";
}





// *********************************************************  Post Code = 290  ***********************************************************************

if ($exp_290_03 != "0") {
	$exp_290_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_290_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_290</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_290_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_290</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_290_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_290</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_290_02 != "0") {
	$exp_290_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_290_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_290</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_290_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_290</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_290_01 != "0") {
	$exp_290_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_290_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_290</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 300  ***********************************************************************

if ($exp_300_03 != "0") {
	$exp_300_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_300_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_300</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_300_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_300</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_300_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_300</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_300_02 != "0") {
	$exp_300_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_300_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_300</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_300_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_300</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_300_01 != "0") {
	$exp_300_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_300_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_300</td>
			 </tr></table></td> </tr>
		  </tr>";
}





// *********************************************************  Post Code = 310  ***********************************************************************

if ($exp_310_03 != "0") {
	$exp_310_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_310_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_310</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_310_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_310</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_310_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_310</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_310_02 != "0") {
	$exp_310_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_310_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_310</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_310_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_310</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_310_01 != "0") {
	$exp_310_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_310_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_310</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 320  ***********************************************************************

if ($exp_320_03 != "0") {
	$exp_320_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_320_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_320</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_320_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_320</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_320_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_320</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_320_02 != "0") {
	$exp_320_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_320_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_320</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_320_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_320</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_320_01 != "0") {
	$exp_320_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_320_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_320</td>
			 </tr></table></td> </tr>
		  </tr>";
}




// *********************************************************  Post Code = 330  ***********************************************************************

if ($exp_330_03 != "0") {
	$exp_330_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_330_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_330</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_330_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_330</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_330_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_330</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_330_02 != "0") {
	$exp_330_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_330_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_330</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_330_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_330</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_330_01 != "0") {
	$exp_330_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_330_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_330</td>
			 </tr></table></td> </tr>
		  </tr>";
}





// *********************************************************  Post Code = 340  ***********************************************************************

if ($exp_340_03 != "0") {
	$exp_340_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_340_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_340</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_340_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_340</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_340_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_340</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_340_02 != "0") {
	$exp_340_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_340_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_340</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_340_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_340</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_340_01 != "0") {
	$exp_340_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_340_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_340</td>
			 </tr></table></td> </tr>
		  </tr>";
}






// *********************************************************  Post Code = 350  ***********************************************************************

if ($exp_350_03 != "0") {
	$exp_350_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_350_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_350</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_350_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_350</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_350_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_350</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_350_02 != "0") {
	$exp_350_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_350_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_350</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_350_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_350</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_350_01 != "0") {
	$exp_350_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_350_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_350</td>
			 </tr></table></td> </tr>
		  </tr>";
}



// *********************************************************  Post Code = 360  ***********************************************************************

if ($exp_360_03 != "0") {
	$exp_360_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_360_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_360</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_360_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_360</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_360_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_360</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_360_02 != "0") {
	$exp_360_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_360_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_360</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_360_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_360</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_360_01 != "0") {
	$exp_360_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_360_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_360</td>
			 </tr></table></td> </tr>
		  </tr>";
}


// *********************************************************  Post Code = 370  ***********************************************************************

if ($exp_370_03 != "0") {
	$exp_370_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_370_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_370</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_370_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_370</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_370_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_370</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_370_02 != "0") {
	$exp_370_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_370_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_370</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_370_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_370</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_370_01 != "0") {
	$exp_370_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_370_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_370</td>
			 </tr></table></td> </tr>
		  </tr>";
}


// *********************************************************  Post Code = 380  ***********************************************************************

if ($exp_380_03 != "0") {
	$exp_380_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_380_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_380</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_380_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_380</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_380_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_380</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_380_02 != "0") {
	$exp_380_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_380_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_380</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_380_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_380</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_380_01 != "0") {
	$exp_380_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_380_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_380</td>
			 </tr></table></td> </tr>
		  </tr>";
}


// *********************************************************  Post Code = 400  ***********************************************************************

if ($exp_400_03 != "0") {
	$exp_400_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
               </tr>
        
    <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_400_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_400</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_400_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_400</td>
			 </tr>



		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_400_03</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$three_expvalue_400</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_400_02 != "0") {
	$exp_400_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_400_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_400</td>
			 </tr>

		   <tr bgcolor=\"#DCDCDC\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_400_02</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$two_expvalue_400</td>
			 </tr></table></td> </tr>
		  </tr>";
} else if ($exp_400_01 != "0") {
	$exp_400_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
   </tr>
        
 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\"> $exp_400_01</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$one_expvalue_400</td>
			 </tr></table></td> </tr>
		  </tr>";
}










// ***********************************************   Experienc print out   *********************************************

if (($start_date1 != "//") && ($end_date1 != "//")) {
	$exp_flag = '1';
}


if (($start_date2 != "//") && ($end_date2 != "//")) {
	$exp_flag = '2';
}


if (($start_date3 != "//") && ($end_date3 != "//")) {
	$exp_flag = '3';
}


if (($start_date4 != "//") && ($end_date4 != "//")) {
	$exp_flag = '4';
}

if (($start_date5 != "//") && ($end_date5 != "//")) {
	$exp_flag = '5';
}




if (($job_exp == '1') && ($exp_flag == "5")) {
	$job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
            <tr bgcolor=\"#DCDCDC\">
              <td width=\"20%\" align=\"left\" valign=\"middle\"> Organization Name</td>
 	      			<td width=\"20%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      		<td width=\"10%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">End Date</td>
 	      			<td width=\"10%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>


	  <tr bgcolor=\"#DCDCDC\">
          
              <td width=\"20%\" align=\"left\" valign=\"middle\">$org_name1</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name1</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date1</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date1 <br/> $till_now1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


  	   <tr bgcolor=\"#DCDCDC\">
   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name2</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name2</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible2</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date2</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date2</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as2</td>
            </tr>

  	  <tr bgcolor=\"#DCDCDC\">

   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name3</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name3</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible3</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date3</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date3</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as3</td>

	<tr bgcolor=\"#DCDCDC\">
   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name4</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name4</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible4</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date4</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date4</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as4</td>
            </tr>


	  <tr bgcolor=\"#DCDCDC\">

   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name5</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name5</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible5</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date5</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date5</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as5</td>

    </table></td>

	</tr>";
} else if (($job_exp == '1') && ($exp_flag == "4")) {
	$job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
            <tr bgcolor=\"#DCDCDC\">
              <td width=\"20%\" align=\"left\" valign=\"middle\"> Organization Name</td>
 	      			<td width=\"20%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      		<td width=\"10%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">End Date</td>
 	      			<td width=\"10%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>


	  <tr bgcolor=\"#DCDCDC\">
          
              <td width=\"20%\" align=\"left\" valign=\"middle\">$org_name1</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name1</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date1</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date1 <br/> $till_now1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


  	   <tr bgcolor=\"#DCDCDC\">
   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name2</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name2</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible2</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date2</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date2</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as2</td>
            </tr>

  	  <tr bgcolor=\"#DCDCDC\">

   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name3</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name3</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible3</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date3</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date3</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as3</td>

	<tr bgcolor=\"#DCDCDC\">
   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name4</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name4</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible4</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date4</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date4</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as4</td>
            </tr>


	 

    </table></td>

	</tr>";
} else if (($job_exp == '1') && ($exp_flag == "3")) {
	$job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
            <tr bgcolor=\"#DCDCDC\">
              <td width=\"20%\" align=\"left\" valign=\"middle\"> Organization Name</td>
 	      			<td width=\"20%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      		<td width=\"10%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">End Date</td>
 	     				<td width=\"10%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>


	  <tr bgcolor=\"#DCDCDC\">
          
              <td width=\"20%\" align=\"left\" valign=\"middle\">$org_name1</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name1</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date1</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date1 <br/> $till_now1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


  	   <tr bgcolor=\"#DCDCDC\">
   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name2</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name2</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible2</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date2</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date2</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as2</td>
            </tr>

  	  <tr bgcolor=\"#DCDCDC\">

   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name3</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name3</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible3</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date3</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date3</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as3</td>

    </table></td>

	</tr>";
} else if (($job_exp == '1') && ($exp_flag == "2")) {
	$job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
            <tr bgcolor=\"#DCDCDC\">
              <td width=\"20%\" align=\"left\" valign=\"middle\"> Organization Name</td>
 	      			<td width=\"20%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      		<td width=\"10%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">End Date</td>
 	      			<td width=\"10%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>


	  <tr bgcolor=\"#DCDCDC\">
          
              <td width=\"20%\" align=\"left\" valign=\"middle\">$org_name1</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name1</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date1</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date1 <br/> $till_now1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


  	   <tr bgcolor=\"#DCDCDC\">
   	      		<td width=\"20%\" align=\"left\" valign=\"middle\">$org_name2</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name2</td>
              <td width=\"30%\" align=\"left\" valign=\"middle\">$responsible2</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date2</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date2</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$age_as2</td>
            </tr>

  	

    </table></td>

	</tr>";
} else if (($job_exp == '1') && ($exp_flag == "1")) {
	$job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
            <tr bgcolor=\"#DCDCDC\">
              <td width=\"20%\" align=\"left\" valign=\"middle\"> Organization Name</td>
 	      			<td width=\"20%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      		<td width=\"10%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">End Date</td>
 	      			<td width=\"15%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>


	  <tr bgcolor=\"#DCDCDC\">
          
              <td width=\"20%\" align=\"left\" valign=\"middle\">$org_name1</td>
              <td width=\"20%\" align=\"left\" valign=\"middle\">$post_name1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$responsible1</td>
              <td width=\"10%\" align=\"left\" valign=\"middle\">$start_date1</td>	
              <td width=\"10%\" align=\"left\" valign=\"middle\">$end_date1 <br/> $till_now1</td>
              <td width=\"15%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


  	    

    </table></td>

	</tr>";
}


if ($ffq_active == '1') {
	$ffq_tab = "<tr bgcolor=\"#E3E3E3\">
                    <td align=\"left\" valign=\"middle\">Quota</td>
                    <td align=\"left\" valign=\"middle\">$ffq</td>
                  </tr>";
}




if ($post_code == '000') {
	$dri_lic_tab = "<tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\">Driving License</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$dri_lic</td>
			 </tr>";
}








// *********************************************************              Generate PDF    *******************************************************************

require_once("dompdf/dompdf_config.inc.php");

$html = "
<head>
<title>$page_title</title>
<link href=\"../lib/style.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>



<table width=\"550\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">


<tr>
		  <td height=\"100\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14\">
		    <tr>



		      <td width=\"14%\" height=\"120\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
                        <img src=\"../images/govt_logo.png\" width=\"90\" height=\"90\" /></td>

 		
 		
		      <td width=\"69%\" height=\"120\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
 		           <font color='white'>Government of the People's Republic of Bangladesh</font><br />
  			  <font color='white'><font size='4'><b>$company_name</b></font><br />
  			  
	
						 <font color='white'><font size='1'><b>www.moind.gov.bd</b></font><br/>
						 

<!--<td width=\"15%\" height=\"120\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
		<img src=\"images/paraj_logo.jpg\" width=\"90\" height=\"90\" /></td>-->
	        </tr>
</table></td>
  			</tr>


 	<tr> 
            <td width=\"100%\" align=\"center\" valign=\"middle\">Application Form(Applicant's Copy)</td>
 	   </tr>


  <tr>
    <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black10\">
      <tr>
        <td width=\"50%\" align=\"left\" valign=\"middle\" bgcolor=\"#CCCCCC\">
		User ID: $invoice</td>
        <td width=\"50%\" align=\"right\" valign=\"middle\" bgcolor=\"#EAEAEA\">
		<span class=\"black11\">Ref: $ad_no<span></td>
      </tr>
    </table></td>
  </tr>





  <tr>
            <td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"552\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\">
              <tr>
                <td width=\"24%\" align=\"left\" valign=\"middle\"><img src=\"../images/$postcode/photo/$img_id\" width=\"150\" height=\"150\" border=\"1\" /></td>
                <td width=\"76%\" align=\"left\" valign=\"top\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
                  <tr bgcolor=\"#CCCCCC\">
                    <td width=\"32%\" align=\"left\" valign=\"middle\" class=\"black10\">Post Name</td>
                    <td width=\"68%\" align=\"left\" valign=\"middle\" class=\"black10\">$postname</td>
                  </tr>
		   
		<tr bgcolor=\"#E3E3E3\">
                    <td width=\"34%\" align=\"left\" valign=\"middle\">Applicant's Name</td>
                    <td width=\"66%\" align=\"left\" valign=\"middle\">$name</td>
                  </tr>



                  <tr bgcolor=\"#DCDCDC\">
                    <td align=\"left\" valign=\"middle\">Father's Name</td>
                    <td align=\"left\" valign=\"middle\">$father</td>
                  </tr>
                  <tr bgcolor=\"#E3E3E3\">
                    <td align=\"left\" valign=\"middle\">Mother's Name</td>
                    <td align=\"left\" valign=\"middle\">$mother</td>
                  </tr>
                  <tr bgcolor=\"#DCDCDC\">
                    <td align=\"left\" valign=\"middle\">Date of Birth</td>
                    <td align=\"left\" valign=\"middle\">$b_date/$b_month/$b_year($ageactual)</td>
                  </tr>
                  <tr bgcolor=\"#E3E3E3\">
                    <td align=\"left\" valign=\"middle\">Contact Mobile</td>
                    <td align=\"left\" valign=\"middle\">$mobile</td>
                  </tr>
		  
                 <tr bgcolor=\"#DCDCDC\">
                    <td align=\"left\" valign=\"middle\">E-Mail</td>
                    <td align=\"left\" valign=\"middle\">$email</td>
                  </tr>


		<tr bgcolor=\"#E3E3E3\">
                    <td align=\"left\" valign=\"middle\">Gender</td>
                    <td align=\"left\" valign=\"middle\">$sex_value</td>
                  </tr>

		   <tr bgcolor=\"#DCDCDC\">
                    <td align=\"left\" valign=\"middle\">Religion</td>
                    <td align=\"left\" valign=\"middle\">$religion</td>
                  </tr>
		   $ffq_tab
		   
		   <tr bgcolor=\"#DCDCDC\">
                    <td align=\"left\" valign=\"middle\">Home District</td>
                    <td align=\"left\" valign=\"middle\">$permanent_dist</td>
                  </tr>

		               </table></td>
              </tr>
            </table></td>
  </tr>




  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
            <tr bgcolor=\"#DCDCDC\">
              <td width=\"25%\" align=\"left\" valign=\"middle\">National ID</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$nid_value</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Passport ID</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$passport_no</td>
            </tr>
		
	                $or_ph_table
			$tr_vdp_table



	  <tr bgcolor=\"#DCDCDC\">
              <td align=\"left\" valign=\"middle\">Birth Registration</td>
              <td align=\"left\" valign=\"middle\">$breg_no</td>
	
	      <td align=\"left\" valign=\"middle\">Marital Status</td>
              <td align=\"left\" valign=\"middle\">$ms_value</td>
            </tr>
           
    </table></td>


  

     <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Address Information:</td>
  </tr>


 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
         

	      <tr bgcolor=\"#CCCCCC\">
              <td width=\"50%\" align=\"left\" valign=\"middle\">Mailing/Present Address</td>
              <td width=\"50%\" align=\"left\" valign=\"middle\"></td>


              <td width=\"50%\" align=\"left\" valign=\"middle\">Permanent Address:</td>
               <td width=\"50%\" align=\"left\" valign=\"middle\"></td>

            </tr>


			
   	    <tr bgcolor=\"#DCDCDC\">
              <td width=\"50%\" align=\"left\" valign=\"middle\">Care of:</td>
              <td width=\"50%\" align=\"left\" valign=\"middle\">$present_care</td>


              <td width=\"50%\" align=\"left\" valign=\"middle\">Care of:</td>
              <td width=\"50%\" align=\"left\" valign=\"middle\">$permanent_care</td>

            </tr>




	      <tr bgcolor=\"#DCDCDC\">
                 <td width=\"50%\" align=\"left\" valign=\"middle\">Village/Town/Road/House/Flat:</td>
              <td width=\"50%\" align=\"left\" valign=\"middle\">$present_vill</td>


              <td width=\"50%\" align=\"left\" valign=\"middle\">Village/Town/Road/House/Flat:</td>
              <td width=\"50%\" align=\"left\" valign=\"middle\">$permanent_vill</td>
            </tr>


           



	  <tr bgcolor=\"#DCDCDC\">
              <td align=\"left\" valign=\"middle\">Present Post Office:</td>
              <td align=\"left\" valign=\"middle\">$present_post</td>


              <td align=\"left\" valign=\"middle\">Permanent Post Office:</td>
              <td align=\"left\" valign=\"middle\">$permanent_post</td>
            </tr>




	  <tr bgcolor=\"#DCDCDC\">
              <td align=\"left\" valign=\"middle\">Present Post Code:</td>
              <td align=\"left\" valign=\"middle\">$present_pcode</td>


              <td align=\"left\" valign=\"middle\">Permanent Post Code:</td>
              <td align=\"left\" valign=\"middle\">$permanent_pcode</td>
            </tr>
           

	  <tr bgcolor=\"#DCDCDC\">
              <td align=\"left\" valign=\"middle\">Present P.S./Upazila:</td>
              <td align=\"left\" valign=\"middle\">$present_ps</td>


              <td align=\"left\" valign=\"middle\">Permanent P.S./Upazila:</td>
              <td align=\"left\" valign=\"middle\">$permanent_ps</td>
            </tr>



	  <tr bgcolor=\"#DCDCDC\">
              <td align=\"left\" valign=\"middle\">Present District</td>
              <td align=\"left\" valign=\"middle\">$present_dist</td>


              <td align=\"left\" valign=\"middle\">Permanent District</td>
              <td align=\"left\" valign=\"middle\">$permanent_dist</td>
            </tr>
           

    </table></td>



<br/>



  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\" class=\"black12\">Academic Qualifications:</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black8\">

		  <tr bgcolor=\"#CCCCCC\">
			<td width=\"20%\" align=\"center\" valign=\"middle\">Examination</td>
			<td width=\"19%\" align=\"center\" valign=\"middle\">Board/Institute</td>
			<td width=\"15%\" align=\"center\" valign=\"middle\">Group/Sub/Degree</td>
			<td width=\"10%\" align=\"center\" valign=\"middle\">Result</td>
			<td width=\"7%\" align=\"center\" valign=\"middle\">Year</td>
			<td width=\"10%\" align=\"center\" valign=\"middle\">Roll</td>
			<td width=\"18%\" align=\"center\" valign=\"middle\">Duration</td>
		  </tr>


		  <tr bgcolor=\"#E3E3E3\">
			<td align=\"center\" valign=\"middle\">$s_exam</td>
			<td align=\"center\" valign=\"middle\">$s_board</td>
			<td align=\"center\" valign=\"middle\">$s_group</td>
			<td align=\"center\" valign=\"middle\">$s_result $s_result_type</td>
			<td align=\"center\" valign=\"middle\">$s_year</td>
			<td align=\"center\" valign=\"middle\">$s_roll</td>
			<td align=\"center\" valign=\"middle\">NA</td>
			
		  </tr>
		  $edu_tab

		</table></td>
  </tr>
  $ts_table











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


  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\" class=\"black10\"></td>
  </tr>


 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
		<table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">

		   $dri_lic_tab
		   <tr bgcolor=\"#E3E3E3\">
			<td width=\"50%\" align=\"left\" valign=\"middle\">Departmental status</td>
			<td width=\"50%\" align=\"left\" valign=\"middle\">$d_status</td>
			 </tr>

		</table></td>
  </tr>


      


  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><div align=\"justify\" class=\"black11i\">I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is found false, incorrect, incomplete or if any ineligibility is detected before or after the examination, any action can be taken against me by the Authority including cancellation of my candidature.</div></td>
  </tr>
  <tr>
    <td align=\"right\" valign=\"middle\" bgcolor=\"#FFFFFF\"><img src=\"../images/$postcode/signature/$invoiceno.jpg\" width=\"250\" height=\"50\" border=\"0\" /></td>
  </tr>
  <tr>
    <td align=\"right\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black10\">-------------- Applicant's Signature --------------</td>
  </tr>
  

  <tr>
    <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">
	<table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12\">
      <tr>


        <td align=\"left\" valign=\"middle\" class=\"black12bold\">Congratulations!! Application Submitted Successfully.</td>
      </tr>
      <tr>
          <td align=\"left\" valign=\"middle\"> <div align=\"justify\"> Your User ID:<span class=\"red12bold\">$invoice</span>, Please keep this number to pay the application fee  within <span class=\"red12bold\">$extime</span>[YYYY-MM-DD hrs:min:sec] from any <span class=\"red12bold\">Teletalk</span> prepaid mobile phone by SMS.<br /><br />
		1st - SMS Format: $short_name &lt;space&gt; &lt;User ID&gt;  and send SMS to <span class=\"red12bold\">16222</span><br />
		<span class=\"black11i\">[Example : $short_name $invoice]. 1st-SMS Reply: Returns a PIN (8 Digits) like 13423495</span><br />
		2nd - SMS Format: $short_name &lt;space&gt; &lt;YES&gt; &lt;space&gt; &lt;PIN&gt;  and send SMS to <span class=\"red12bold\">16222</span><br />
		<span class=\"black11i\">[Example : $short_name YES 13423495]. 2nd-SMS Reply: Returns a USER ID &amp; PASSWORD</span><br /><br/>
		<I><span class=\"red12\">N.B: Please save the User ID &amp; Password which are required to download Admit card/Applicant's Copy. Keep your mobile number ($mobile) on for further noticification.</I> 
         </div></td>

      </tr>
    </table></td>
  </tr>
  <tr>
    <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black10\">
      <tr>
        <td width=\"65%\" align=\"left\" valign=\"bottom\">&copy;2021 $company_name, All Rights Reserved.</td>
        <td width=\"35%\" align=\"right\" valign=\"middle\"> Powered By &nbsp;  <img src=\"../images/tbl_logo.png\" alt=\"\" width=\"70\" height=\"38\" align=\"absbottom\" /></td>
      </tr>
    </table></td>
  </tr>
  </table>
  </body>

</html>";


$filename = "$short_name _$invoice" . ".pdf";
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream($filename);

mysql_close();
