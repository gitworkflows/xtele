<?php
	if (!isset($_SESSION)) {
		                session_start();
	                         }

	$auth = $_SESSION['ses_auth'];
	if($auth != "HyeJKyufgh378934jkoyuAyukFhsstyKOFsjkfJKvggdy"){
		echo"<script language='javascript'>window.location.href=\"final.php\"; </script>";
	          }

	include "lib/lastdate.php";
	include "lib/fx.php";

	// Not Active

	if($active == "0"){exit;}

	$post_code 				= addslashes($_POST['post_code']);
	$dept	 				= addslashes($_POST['dept']);
	$name 					= addslashes($_POST['name']);
	$fathername 			= addslashes($_POST['fathername']);
	$mothername 			= addslashes($_POST['mothername']);
	$b_day 					= addslashes($_POST['b_day']);
	$b_month 				= addslashes($_POST['b_month']);
	$b_year 				= addslashes($_POST['b_year']);
	$age_as 				= addslashes($_POST['age_as']);
	$sex 					= addslashes($_POST['sex']);
	
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
	
	$present_care 			= addslashes($_POST['present_care']);
	$present_vill 			= addslashes($_POST['present_vill']);
	$present_dist			= addslashes($_POST['present_dist_name']);
	$present_ps 			= addslashes($_POST['present_ps']);
	$present_post 			= addslashes($_POST['present_post']);
	$present_pcode 			= addslashes($_POST['present_pcode']);
	$permanent_care 		= addslashes($_POST['permanent_care']);
	$permanent_vill 		= addslashes($_POST['permanent_vill']);
	$permanent_dist			= addslashes($_POST['permanent_dist_name']);
	$permanent_ps 			= addslashes($_POST['permanent_ps']);
	$permanent_post 		= addslashes($_POST['permanent_post']);
	$permanent_pcode 		= addslashes($_POST['permanent_pcode']);
	$mobileno 				= addslashes($_POST['mobileno']);
	$email 					= addslashes($_POST['email']);
	$masters				= addslashes($_POST['masters']);
	$code 					= addslashes($_POST['validation']);
	$age_err		 		= addslashes($_POST['age_err']);
	$pass_err		 		= addslashes($_POST['pass_err']);
	
	$exam1					= addslashes($_POST['exam1']);
	$institute1				= addslashes($_POST['institute1']);
	$year1					= addslashes($_POST['year1']);
	$roll1					= addslashes($_POST['roll1']);
	$result1				= addslashes($_POST['result1']);
	$result_gpa1			= addslashes($_POST['result_gpa1']);
	$result_eq1				= addslashes($_POST['result_eq1']);
	$subject1				= addslashes($_POST['subject1']);
	
	$exam2					= addslashes($_POST['exam2']);
	$institute2				= addslashes($_POST['institute2']);
	$year2					= addslashes($_POST['year2']);
	$roll2					= addslashes($_POST['roll2']);
	$result2				= addslashes($_POST['result2']);
	$result_gpa2			= addslashes($_POST['result_gpa2']);
	$result_eq2				= addslashes($_POST['result_eq2']);
	$subject2				= addslashes($_POST['subject2']);
	
	$exam3					= addslashes($_POST['exam3']);
	$institute3				= addslashes($_POST['institute3']);
	$year3					= addslashes($_POST['year3']);
	$result3				= addslashes($_POST['result3']);
	$result_gpa3			= addslashes($_POST['result_gpa3']);
	$result_eq3				= addslashes($_POST['result_eq3']);
	$subject3				= addslashes($_POST['subject3']);
	$duration3				= addslashes($_POST['duration3']);
	
	$job_no					= $_POST['job_no'];
	$number_job_fields		= $_POST['number_job_fields'];
	$cl			 			= addslashes($_POST['cl']);
	$computer_literacy	 	= addslashes($_POST['computer_literacy']);
	$ca			 			= addslashes($_POST['ca']);
	$curricular	 			= addslashes($_POST['curricular']);
	
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
	
	if($job_no == "1"){$job_exp = $job_no;}
	if($cl != "1"){$computer_literacy = "NA";}
	if($ca != "1"){$curricular = "NA";}
	
	if($exam2 == "" && $subject2 == "")
	       {
		$exam2					= "NA";
		$institute2				= "NA";
		$year2					= "0";
		$result2				= "NA";
		$result_gpa2			= 0;
		$result_eq2				= 0;
		$subject2				= "NA";
		$duration2				= 0;
	        }
	
	if($exam3 == "" && $subject3 == "")
	       {
		$exam3					= "NA";
		$institute3				= "NA";
		$year3					= "0";
		$result3				= "NA";
		$result_gpa3			= 0;
		$result_eq3				= 0;
		$subject3				= "NA";
		$duration3				= 0;
	         }
	
	if($masters == "1")
	      {
		$exam4					= addslashes($_POST['exam4']);
		$institute4				= addslashes($_POST['institute4']);
		$year4					= addslashes($_POST['year4']);
		$result4				= addslashes($_POST['result4']);
		$result_gpa4			= addslashes($_POST['result_gpa4']);
		$result_eq4				= addslashes($_POST['result_eq4']);
		$subject4				= addslashes($_POST['subject4']);
		$duration4				= addslashes($_POST['duration4']);
	         }
  
        if($masters != "1")
	       {
		$exam4					= "NA";
		$institute4				= "NA";
		$year4					= "0";
		$result4				= "NA";
		$result_gpa4			= 0;
		$result_eq4				= 0;
		$subject4				= "NA";
		$duration4				= 0;
	           }
	
	$homedistrict 			= "$permanent_dist";
	$dob 					= "$b_year"."$b_month"."$b_day";

	$m_count = strlen($mobileno); 
	$v_count = strlen($code);
	
	// Java not supported
	if($present_ps == "-1" || $permanent_ps == "-1")
	      {
		echo"<meta http-equiv=\"refresh\" content=\"1;URL=err.php?err=445\" />";
		exit;
	        }
	
	if($m_count < 11 || $v_count < 8)
	        {
		echo"<script language='javascript'>window.location.href=\"err.php?err=832\"; </script>";
		exit;
	           }
	
	// Errors
	$err = 0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$page_title";?></title>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body ondragstart="return false" onselectstart="return false">
<?php
echo"<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"20\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">";
		
		include "lib/dbconnect.php";
	
		$docRoot = getenv("DOCUMENT_ROOT");
		$ip = $_SERVER['REMOTE_ADDR'];
		$applytime = date("Y-m-d H:i:s");
		$extime = date('Y-m-d H:i:s', strtotime('+72 hours'));
		
		$photo_name = $_FILES["photo"]["name"];
		$photo_kb = ($_FILES["photo"]["size"] / 1024);
		$photo_temp = $_FILES["photo"]["tmp_name"];
		$photo_size = GetImageSize("$photo_temp"); 
		$photo_width = $photo_size[0]; 
		$photo_height = $photo_size[1];
		$photo_ext = substr($photo_name, strpos($photo_name,'.'), strlen($photo_name)-1);
		$photo_ext=strtolower($photo_ext);
		
		$signature_name = $_FILES["signature"]["name"];
		$signature_kb = ($_FILES["signature"]["size"] / 1024);
		$signature_temp = $_FILES["signature"]["tmp_name"];
		$signature_size = GetImageSize("$signature_temp"); 
		$signature_width = $signature_size[0]; 
		$signature_height = $signature_size[1];
		$signature_ext = substr($signature_name, strpos($signature_name,'.'), strlen($signature_name)-1);
		$signature_ext=strtolower($signature_ext);
		
		// Photo Validation
		if($err < 1)
		{
			$valid_photo = 1;
			if($photo_width != 300 || $photo_height != "300" || $photo_kb > 100 || $photo_ext != ".jpg")
			{
				$valid_photo = 0;
				$msg = "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
						  <tr>
							<td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
							<td height=\"310\" align=\"center\" valign=\"middle\">
								<span class=\"red12bold\">Error: Submission Failure, Please Try Again</span><br />
								<span class=\"red12\">Invalid Photo Size/Format!</span><br /><br />
								<a href=\"javascript:history.go(-2)\" class=\"mainlink\">Try Again!!</a></td>
							</tr>
						</table>";
						$err = 1;
			}
		}
		
		if($valid_photo == "1" && $valid_signature == "1")
		      {
			echo "<img src=\"images/loading.gif\" width=\"48\" height=\"48\" /> <br /> <br />
			<span class=\"black12\">Your Request is processing! Please wait.... </span>";
			// Code Generator
			$r_loop = 1;

		while($r_loop <= 999999)
			    {
				//$int_rand = (rand(100000,999999));
				// Char random
				for ($ir=0; $ir<6; $ir++)
				    { 
					$r_d=rand(1,30); 
					$c_r.= $r_d ? chr(rand(65,90)) : chr(rand(48,57));
				         }
				$ftcode = "$c_r";
				$output=mysql_query("SELECT `invoice` FROM `cinfo` WHERE `invoice` = '$ftcode'");
				$row = mysql_numrows($output);
				if($row < 1){$r_loop = 99999999;}
				$r_loop ++;
			         }
	
  include "lib/dbconnect.php";		

  $sql="INSERT INTO exam_ssc (exam_value, exam_name)
  VALUES('100','200')";


		// Insert Data to Database

			include "lib/dbquery.php";

			mysql_query("$insert_cinfo") or
                            die ("QCIN3454355467678768566435435");
			

$insert_cinfo = "INSERT INTO `cinfo`(`sl`,
									 `invoice`,
									 `post_code`,
									 `name`,
									 `father`,
									 `mother`,
									 `dob`,
									 `age_as`,
									 `sex`,
									 `nid`,
									 `nid_no`,
									 `passport`,
									 `passport_no`,
									 `breg`,
									 `breg_no`,
									 `religion`,
									 `mstatus`,
									 `s_name`,
									 `ffq`,
									 `homedistrict`,
									 `present_care`,
									 `present_vill`,
									 `present_dist`,
									 `present_ps`,
									 `present_post`,
									 `present_pcode`,
									 `permanent_care`,
									 `permanent_vill`,
									 `permanent_dist`,
									 `permanent_ps`,
									 `permanent_post`,
									 `permanent_pcode`,
									 `mobile`,
									 `email`,
									 `ref_name_1`,
									 `ref_post_1`,
									 `ref_org_1`,
									 `ref_contact_1`,
									 `ref_mail_1`,
									 `ref_name_2`,
									 `ref_post_2`,
									 `ref_org_2`,
									 `ref_contact_2`,
									 `ref_mail_2`,
									 `departmental`,
									 `loginIP`,
									 `inTime`,
									 `extime`,
									 `vcode`)

									VALUES('0',
									'$ftcode',
									'$post_code',
									'$name',
									'$fathername',
									'$mothername',
									'$dob',
									'$age_as',
									'$sex',
									'$nid',
									'$nid_no',
									'$passport',
									'$passport_no',
									'$breg',
									'$breg_no',
									'$religion',
									'$mstatus',
									'$s_name',
									'$ffq',
									'$homedistrict',
									'$present_care',
									'$present_vill',
									'$present_dist',
									'$present_ps',
									'$present_post',
									'$present_pcode',
									'$permanent_care',
									'$permanent_vill',
									'$permanent_dist',
									'$permanent_ps',
									'$permanent_post',
									'$permanent_pcode',
									'$mobileno',
									'$email',
									'$ref_name_1',
									'$ref_post_1',
									'$ref_org_1',
									'$ref_contact_1',
									'$ref_mail_1',
									'$ref_name_2',
									'$ref_post_2',
									'$ref_org_2',
									'$ref_contact_2',
									'$ref_mail_2',
									'$dept',
									'$ip',
									'$applytime',
									'$extime',
									'$code')";




		// Insert data in cedu table				
			mysql_query("$insert_cedu") or
			die ("QCED745632456546754765754");
			
			
			// Job ------------------------------------------------------------------------------------
			
			if($job_no > 0)
			{
				$j_loops = $number_job_fields;

				for($j=1;$j<=$j_loops;$j++)
				{
					$job_postpost = "job_post" . $j;
					$ex_job_post  = addslashes($_POST[$job_postpost]);
					
					$organizationpost = "organization" . $j;
					$ex_organization = addslashes($_POST[$organizationpost]);
					
					$jtopost = "jto" . $j;
					$ex_jto  = $_POST[$jtopost];
					
					$jfopost = "jfo" . $j;
					$ex_jfo  = $_POST[$jfopost];
					
					$job_respost = "job_res" . $j;
					$ex_job_res  = addslashes($_POST[$job_respost]);
					
					
					if($ex_jfo != "")
					{
						mysql_query ("INSERT INTO `experience` (`sl`,
																`invoice`,
																`job_post`,
																`organization`,
																`job_res`,
																`job_to_date`,
																`job_form_date`)
														VALUES ('',
																'$ftcode',
																'$ex_job_post',
																'$ex_organization',
																'$ex_job_res',
																'$ex_jto',
																'$ex_jfo')")or
												die ("QEXP96544367573435425");
					}
				}
				// Loop End
			}
			 // Job end --------------------------
			
			//upload photo

			$new_photo = "$ftcode"."$photo_ext";
			$output_file_p = "images/$post_code/photo/$new_photo";
			
                        // Convert photo  --------------
			$img_jpeg_p = imagecreatefromjpeg($photo_temp);
			$img_w_p = 150;
			$img_h_p = 150;
			$tmp_p=imagecreatetruecolor($img_w_p,$img_h_p);
			imagecopyresampled($tmp_p,$img_jpeg_p,0,0,0,0,$img_w_p,$img_h_p,$photo_width,$photo_height);
			imagejpeg($tmp_p,$output_file_p,80);
			imagedestroy($tmp_p);
			imagedestroy($img_jpeg_p);
			
			//upload signature
			$new_signature = "$ftcode"."$signature_ext";
			$output_file_s = "images/$post_code/signature/$new_signature";
			// Convert signature  --------------
			$img_jpeg_s = imagecreatefromjpeg($signature_temp);
			$img_w_s = 300;
			$img_h_s = 80;
			$tmp_s=imagecreatetruecolor($img_w_s,$img_h_s);
			imagecopyresampled($tmp_s,$img_jpeg_s,0,0,0,0,$img_w_s,$img_h_s,$signature_width,$signature_height);
			imagejpeg($tmp_s,$output_file_s,80);
			imagedestroy($tmp_s);
			imagedestroy($img_jpeg_s);
			
			echo"<script language='javascript'>window.location.href=\"final.php?invoiceno=$ftcode & cmobile=$mobileno\"; </script>";
		         }
		if($err == "1"){echo "$msg";}

echo"</td>
  </tr>
    <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bottom_bg\" class=\"black10\">$support</td>
  </tr>
    <tr>
    <td align=\"left\" valign=\"top\">&nbsp;</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\"><fieldset>
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
</table>";
mysql_close();
?>
</body>
</html>
