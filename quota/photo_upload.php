<?php
	include "lib/lastdate.php";


	include "lib/dbconnect.php";
	include "lib/fx.php";
     
  
	
        if($active == "0"){exit;}


        $post_code 				= addslashes($_POST['post_code']);
        $post_name 				= addslashes($_POST['post_name']);
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
	$age_as2 				= addslashes($_POST['$age_as2']);

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
	
	$copy		 			= addslashes($_POST['copy']);
	$present_care 			= addslashes($_POST['present_care']);
	$present_vill 			= addslashes($_POST['present_vill']);
	$present_dist			= addslashes($_POST['menu_one']);
	$present_ps 			= addslashes($_POST['menu_one_list']);
	$present_ops 			= addslashes($_POST['ops1']);
	$present_post 			= addslashes($_POST['present_post']);
	$present_pcode 			= addslashes($_POST['present_pcode']);


	$permanent_care 		= addslashes($_POST['permanent_care']);
	$permanent_vill 		= addslashes($_POST['permanent_vill']);

	$permanent_dist			= addslashes($_POST['menu_two']);
	$permanent_ps 			= addslashes($_POST['menu_two_list']);
	$permanent_ops 			= addslashes($_POST['ops2']);
	$permanent_post 		= addslashes($_POST['permanent_post']);
	$permanent_pcode 		= addslashes($_POST['permanent_pcode']);
	$mobileno 				= addslashes($_POST['mobileno']);
	$Email 					= addslashes($_POST['Email']);
	
	$masters				= addslashes($_POST['masters']);
	$phd				= addslashes($_POST['phd']);



       // Experience information


	$exp5		 			= addslashes($_POST['exp5']);
	$exp_five		 			= addslashes($_POST['exp_five']);



	
        $eightpass		 			= addslashes($_POST['eightpass']);
        $eight_pass		 			= addslashes($_POST['eight_pass']);




        $licmac		 			= addslashes($_POST['licmac']);
        $lic_mac		 			= addslashes($_POST['lic_mac']);




        $exp5		 			= addslashes($_POST['exp5']);
        $exp_five		 			= addslashes($_POST['exp_five']);


        $explift		 			= addslashes($_POST['explift']);
        $exp_lift		 			= addslashes($_POST['exp_lift']);

        $liclift		 			= addslashes($_POST['liclift']);
        $lic_lift		 			= addslashes($_POST['lic_lift']);



	$pexp5		 			= addslashes($_POST['pexp5']);
	$pexp2		 			= addslashes($_POST['pexp2']);
	$pexp4		 			= addslashes($_POST['pexp4']);
	$pexp22		 			= addslashes($_POST['pexp22']);
	$memcs		 			= addslashes($_POST['memcs']);
	$cddc			 			= addslashes($_POST['cddc']);
	$trai6			 			= addslashes($_POST['trai6']);

	$exp		 			= addslashes($_POST['exp']);
	$experience		 			= addslashes($_POST['experience']);

 	$pass88		 			= addslashes($_POST['pass88']);
	$progexp5	 			= addslashes($_POST['progexp5']);
	$progexp2		 			= addslashes($_POST['progexp2']);
	$progexp4	 			= addslashes($_POST['progexp4']);
	$progexp22		 			= addslashes($_POST['progexp22']);
	$membercs		 			= addslashes($_POST['membercs']);
	$cerddc		 			= addslashes($_POST['cerddc']);
	$training		 			= addslashes($_POST['training']);
        

        $exp4		 			= addslashes($_POST['exp4']);
        $exp_four                                 = addslashes($_POST['exp_four']);
        $expam		 			= addslashes($_POST['expam']);
        $exp_am                                        = addslashes($_POST['exp_am']);
	


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

	$texp 				= addslashes($_POST['texp']);


     	$exp2					= addslashes($_POST['exp2']);
      	$exp_two					= addslashes($_POST['exp_two']);


 
   	$comtyp					= addslashes($_POST['comtyp']);
      	$com_typ					= addslashes($_POST['com_typ']);

	$stenotyp					= addslashes($_POST['stenotyp']);
        $steno_typ					= addslashes($_POST['steno_typ']);


    
        $dob	= "$b_year"."-"."$b_month"."-"."$b_day";

        
 
        if($present_ps == "Others"){$present_ps = "$present_ops";}
	if($permanent_ps == "Others"){$permanent_ps = "$permanent_ops";}
	
	if($copy == "yes")
	      {
		$permanent_care	 		= "$present_care";
		$permanent_vill	 		= "$present_vill";
		$permanent_dist 		= "$present_dist";
		$permanent_ps			= "$present_ps";
		$permanent_post 		= "$present_post";
		$permanent_pcode 		= "$present_pcode";
	           }


	//Get Data post name
	
	$out_post = mysql_query("SELECT `post_code`, `post_name`, `ad_no` FROM `post` WHERE `post_code` = '$post_code'");
	while($row_post=mysql_fetch_array($out_post))
	       {
		extract($row_post);
	          }


 





  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$page_title";?></title>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
<script src="lib/valid_preview.js"></script>
<script src="lib/form_submit.js"></script>
<script src="lib/imageup.js"></script>
<script type="text/javascript">


objImage = new Image();
function download()
{
	// preload the image file
	objImage.src="images/pload.gif";
}
</script>
</head>
<body ondragstart="return false" onselectstart="return false" onLoad="download();">
<?php
	
echo "<form action=\"index.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"app_form\" id=\"app_form\" onsubmit=\"return app_form_validator(this)\">

			
			
     
		
<input type=\"hidden\" name=\"validation\" id=\"validation\" value=\"$validation\" />


<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>

    $app_head
    $toplink
 


      
 

	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12bold\">Photo &amp; Signature:</td>
          </tr>
        <tr>
          <td height=\"40\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">Photo must be <span class=\"black11bold\"> 300 X 300 pixel</span> (width X height) and file size not more than <span class=\"red11\">100 KB</span> and Signature must be <span class=\"black11bold\"> 300 X 80 pixel</span> (width X height) and file size not more than <span class=\"red11\">60 KB</span>. <span class=\"black11bold\">Colour Photo is a must</span>. Black & White, Monochrome or Grayscale photo or any image other than photo will not be accepted. This application is capable to detect image with <span class=\"red11\">Facial Recognition</span>. Please avoid to upload unacceptable photo. Applicants may test their photo/signature for suitability through the 
          <a href=\"imsize.php\" target=\"_blank\" class=\"mainlink\">Photo/Signature Validator</a></div></td>
        </tr>
          <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black12\">
            <tr>
              <td width=\"22%\" align=\"left\" valign=\"middle\">&nbsp;Upload Photo</td>
              <td width=\"7%\" align=\"center\" valign=\"middle\">:</td>
              <td width=\"71%\" align=\"left\" valign=\"middle\"><label>
                <input name=\"photo\" type=\"file\" class=\"textfield03\" id=\"photo\" onchange=\"return validateFileExtension(this)\"/>
              </label></td>
            </tr>
            <tr>
              <td align=\"left\" valign=\"middle\">&nbsp;Upload Signature</td>
              <td align=\"center\" valign=\"middle\">:</td>
              <td align=\"left\" valign=\"middle\"><label>
                <input name=\"signature\" type=\"file\" class=\"textfield03\" id=\"signature\" onchange=\"return validateFileExtension(this)\"/>
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
	
</table>
</form>";



mysql_close();
?>
</body>
</html>



