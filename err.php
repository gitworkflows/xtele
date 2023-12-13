<?php
	
	if (!isset($_SESSION)) {
		session_start();
	}
	session_destroy();
	
	include "lib/fx.php";

	$err = $_GET['err'];
	
	switch($err)
	{
		
		case "888": $msg = "<p class=\"errmsg\">Error Submission: Duplicate Data Found!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
		case "345": $msg = "<p class=\"errmsg\">Online application will be available at 10am. Sorry for inconvenience!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		case "500": $msg = "<p class=\"errmsg\">Time is over to submit Online application.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		case "240": $msg = "<p class=\"errmsg\">Error Submission: Over age!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		case "241": $msg = "<p class=\"errmsg\">Error Submission: under age!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
				break;

		case "242": $msg = "<p class=\"errmsg\">Only Commerce ground is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		case "243": $msg = "<p class=\"errmsg\">Exam Center is not valid for this district.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
		case "244": $msg = "<p class=\"errmsg\">Only male candidate is allowed for this Post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
		case "245": $msg = "<p class=\"errmsg\">Only Muslim candidate is allowed for this Post(Religion should be Islam).</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
		
		/*case "246": $msg = "<p class=\"errmsg\">Please fill up NID/Passport/Birth Registration number.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;*/
					
					case "246": $msg = "<p class=\"errmsg\">Please fill up NID/Birth Registration number.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;		


					case "247": $msg = "<p class=\"errmsg\">Please fill up all fields of Mailing/Present Address properly.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
					
					
					
					case "248": $msg = "<p class=\"errmsg\">Please fill up all fields of Permanent Address properly.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
					
					case "249": $msg = "<p class=\"errmsg\">Please Type your Mobile Number and Confirm  Mobile Number correctly.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
					
					case "250": $msg = "<p class=\"errmsg\">Please Type your Mobile Numbers correctly.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

					case "251": $msg = "<p class=\"errmsg\">Please Type your email Number correctly.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

					case "252": $msg = "<p class=\"errmsg\">Please Select your Driving License Type.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
		
		
		case "300": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/>Exam Center would be Dinajpur for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;

		case "301": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/> Exam Center would be Bogra for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;

		case "302": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/> Exam Center would be khulna for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;

		case "303": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/> Exam Center would be Barishal for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;

		case "304": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/> Exam Center would be Mymenshing for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;

		case "305": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/> Exam Center would be Dhaka for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;


		case "355": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/> Exam Center would be Faridpur for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;

		case "306": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/> Exam Center would be Sylhet for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;
		case "307": $msg = "<p class=\"errmsg\">The Exam Center is not correct. <br/>Exam Center would be Comilla for the said district.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;


		case "308": $msg = "<p class=\"errmsg\">The Exam Center is not correct.<br/> Exam Center would be Dhaka for Assistant Accounts Officer.</p>

                     <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					
                     $toplink = "";
			
		     break;

		case "445":	$msg = "<p class=\"errmsg\">System Error: Enable Java Script from Your Browser!</p>
			 				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
		
		case "501": $msg = " <p><a href=\"quota/index.php\" class=\"mainlink\"><font size='5'>Click here to send your Quota Information</a></p>";
					//$toplink = "";
					break;
		
		case "550": $msg = "<p class=\"errmsg\">Online Application is not started yet!</p>";
					//$msg = "<p class=\"errmsg\">Online Application will start at 09.00 am on 29 August 2015</p>";
					//$msg = "<p class=\"errmsg\">Online Application not Available!</p>";
					$toplink = "<tr>
				<td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"$toplink_bg\">
					<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black10\">
						<tr>
						  <!--<td align=\"left\" valign=\"middle\">
						  <a href=\"doc/$short_name.pdf\" target=\"_blank\" class=\"link-home\">Download Advertisement</a></td>-->
						</tr>
					</table></td></tr>";
					break;
					
		case "553": $msg = "<p class=\"errmsg\">Admit Card is not published yet!</p>";
					$toplink = "";
					break;
		
		case "832": $msg = "<p class=\"errmsg\">Access Denied!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
                case "123": $msg = "<p class=\"errmsg\">Masters degree must required in case of Pass course/ Fazil Degree</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		 case "124": $msg = "<p class=\"errmsg\">You are not qualified for this post.<br/>No third division is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = ""; 
					break;

		 case "115": $msg = "<p class=\"errmsg\">You are not qualified for this post.<br/> Must required one first class and two second class at least.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		 case "125": $msg = "<p class=\"errmsg\">You are not qualified for this post.<br/> Must have one 1st class in your education life.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;
		
		 case "126": $msg = "<p class=\"errmsg\">You are not qualified for this post.<br/> GPA value is less than 2.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;


 		case "127": $msg = "<p class=\"errmsg\">B.Sc Engineering degree is must requied for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;


 		case "128": $msg = "<p class=\"errmsg\">Only EEE/Electrical/Mechanical/Civil Engieering degree is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;



		case "129": $msg = "<p class=\"errmsg\">Only 4 years honors from Statistics subject is allowed.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;



		case "130": $msg = "<p class=\"errmsg\">Only FF quota is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;



		case "131": $msg = "<p class=\"errmsg\">Diploma Engineering degree is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;


		case "132": $msg = "<p class=\"errmsg\">Diploma in Electrical/Mechanical/ Power Engineering degree is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;


		case "134": $msg = "<p class=\"errmsg\">Must 4 years honors degree is required.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		case "135": $msg = "<p class=\"errmsg\">No third class is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;



		case "136": $msg = "<p class=\"errmsg\">Minimum Two 2nd Class required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		case "137": $msg = "<p class=\"errmsg\">Reffered district is not eligible for the post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
					break;

		case "138": $msg = "<p class=\"errmsg\">Experience on Computer Typing  is required for this post(20 words per minute both in Bangla & English).</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;
 		case "140": $msg = "<p class=\"errmsg\">Commerce background is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;
 
		case "141": $msg = "<p class=\"errmsg\">Valid Driving License required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;
 
		case "142": $msg = "<p class=\"errmsg\">Experience on Computer Typing  is required for this post(20 words per minute both in Bangla & English).</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;
 
		case "143": $msg = "<p class=\"errmsg\">Minimum CGPA value 3.0 required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;

		case "144": $msg = "<p class=\"errmsg\">Minimum CGPA value 3.75 required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;

		case "145": $msg = "<p class=\"errmsg\"> Minimum 1st Division/ CGPA 3.00 out of 4 / CGPA 3.75 out of 5 required in master level in case of Pass Course/ Fazil degree.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;


		case "146": $msg = "<p class=\"errmsg\">Minimum 2nd Division/ CGPA 2.25 out of 4 / CGPA 2.813 out of 5 required in case of 3 years Honors/ Masters level.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;

		case "147": $msg = "<p class=\"errmsg\"> 4 Years Honors degree required if master degree is not available.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;
		case "148": $msg = "<p class=\"errmsg\"> Minimum 2nd Division/ CGPA 2.25 out of 4 / CGPA 2.813 out of 5 in Pass Course/ Fazil degree required in case of 2nd divisition in master level.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;
		case "149": $msg = "<p class=\"errmsg\">Minimum 2nd Division/ CGPA 2.25 out of 4 / CGPA 2.813 out of 5 required in case of Honors/ Graduation level.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;

		case "150": $msg = "<p class=\"errmsg\">Minimum 2nd Division/ CGPA 2.25 out of 4 / CGPA 2.813 out of 5 required in case of Honors/ Graduation level  and Masters level.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;

		case "151": $msg = "<p class=\"errmsg\"> Minimum 2nd Division is required in SSC or equivalent level.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;

		case "152": $msg = "<p class=\"errmsg\"> Masters must required in case of 3 years Honors level.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;

		case "153": $msg = "<p class=\"errmsg\"> Minimum 2nd division is required in HSC or equivalent level.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;

		case "532": $msg = "<p class=\"errmsg\">Admit Card is not issued yet!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$app_head2 = "";
					//$toplink = "";
					break;

                case "533": $msg = "<p class=\"errmsg\"> Minimum 2nd Division is required in Post Graduate level.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";  break;


                case "534": $msg = "<p class=\"errmsg\"> Computer Typing speed (20 words per minute in Bangla & 30 words per minute in English & Shorthand Bangla 50 & English 80.) required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;

                case "535": $msg = "<p class=\"errmsg\">Computer Typing(20 words per minute in Bangla & 30 words per minute in English) required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;

                case "536": $msg = "<p class=\"errmsg\">Bachelor degree with 5(five) years experience in security service is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;

                case "537": $msg = "<p class=\"errmsg\">Ex Armed Forces Member not bellow in the position of NOC with SSC or equivalent certifice is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;

                case "538": $msg = "<p class=\"errmsg\"> B.Sc Engineering in relevent background (Electrical & Electronics/Mechanical/Chemical/Civil/Computer Science) is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;

                case "539": $msg = "<p class=\"errmsg\"> Diploma in Engineering in relevent background (Electrical & Electronics/Mechanical/Chemical/Civil/Computer Science) with Five years job experience in Government/Semi-Government/Autonomous field is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
					$toplink = "";
		
				        break;


   		case "160": $msg = "<p class=\"errmsg\"> Manikgonj, Sherpur, Natore, Bogra, Gaibandha, Kurigram, Meherpur, Norail, Jhalokathi, Pirojpur, Faridpur, Rajbari, Rangamati, Khagrachari and Bandarbon district is not allowed for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "161": $msg = "<p class=\"errmsg\"> 5 Years Job experience required for this post. </n>Please fill up all the field of Professional Experience.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;





		case "162": $msg = "<p class=\"errmsg\"> Please provide your correct NID No. that will be minimum 10 digits</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

   		case "163": $msg = "<p class=\"errmsg\"> Mobile no. not less than 11 digits</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


			
		//default: $msg = "<p class=\"errmsg\">Access Denied!</p>";
				// $toplink = "";
	          }
                   
echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>$page_title</title>
<link href=\"lib/style.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head
	$toplink
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\">
	$msg</td>
  </tr>
  <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bottom_bg\" class=\"black10\">$support</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\">&nbsp;</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\"><fieldset  class=\"field_set\">
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
        <tr>
          <td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"80%\" align=\"left\" valign=\"middle\">$copyright</td>
          <td width=\"10%\" align=\"left\" valign=\"middle\">$by</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\">$flashlogo</td>
        </tr>
      </table>
    </fieldset></td>
</table>
</body>
</html>";
?>
