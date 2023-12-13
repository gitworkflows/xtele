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
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		case "240": $msg = "<p class=\"errmsg\">Error Submission: Over age!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		case "241": $msg = "<p class=\"errmsg\">Error Submission: under age!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		case "445":	$msg = "<p class=\"errmsg\">System Error: Enable Java Script from Your Browser!</p>
			 				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;
		
		case "500": $msg = "<p class=\"errmsg\">Time is Over to Submit the Application!</p>";
							// <p><a href=\"admitcard/index.php\" class=\"mainlink\">Download Admit Card</a></p>";
					//$toplink = "";
					break;
		
		case "550": //$msg = "<p class=\"errmsg\">Application Form will be available at 10:00am, 20 August 2015</p>";
					//$msg = "<p class=\"errmsg\">Online Application will start at 09.00 am on 20 August 2015</p>";
					$msg = "<p class=\"errmsg\">Online Application not Available!</p>";
					$toplink = "<tr>
				<td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"$toplink_bg\">
					<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black10\">
						<tr>
						  <td align=\"left\" valign=\"middle\">
						  <a href=\"doc/ad.pdf\" target=\"_blank\" class=\"link-home\">Download Advertisement</a></td>
						</tr>
					</table></td></tr>";
					break;
					
		case "553": $msg = "<p class=\"errmsg\">Admit Card is not published yet!</p>";
					$toplink = "";
					break;
		
		case "832": $msg = "<p class=\"errmsg\">Access Denied!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;
                case "123": $msg = "<p class=\"errmsg\">Masters must be required for pass course</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		 case "124": $msg = "<p class=\"errmsg\">You are not qualified for this post.<br/>No third division is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = ""; 
					break;

		 case "115": $msg = "<p class=\"errmsg\">You are not qualified for this post.<br/> Must required one first class and two second class at least.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		 case "125": $msg = "<p class=\"errmsg\">You are not qualified for this post.<br/> Must have one 1st class in your education life.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;
		
		 case "126": $msg = "<p class=\"errmsg\">You are not qualified for this post.<br/> GPA value is less than 2.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;


 		case "127": $msg = "<p class=\"errmsg\">B.Sc Engineering degree is must requied for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;


 		case "128": $msg = "<p class=\"errmsg\">Only EEE/Electrical/Mechanical/Civil Engieering degree is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;



		case "129": $msg = "<p class=\"errmsg\">Only 4 years honors from Statistics subject is allowed.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;



		case "130": $msg = "<p class=\"errmsg\">Only FF quota is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;



		case "131": $msg = "<p class=\"errmsg\">Diploma Engineering degree is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;


		case "132": $msg = "<p class=\"errmsg\">Diploma in Electrical/Mechanical/ Power Engineering degree is required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;


		case "134": $msg = "<p class=\"errmsg\">Must 4 years honors degree is required.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		case "135": $msg = "<p class=\"errmsg\">No third class is allowed for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;



		case "136": $msg = "<p class=\"errmsg\">Minimum Two 2nd Class required for this post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		case "137": $msg = "<p class=\"errmsg\">Reffered district is not eligible for the post.</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		case "138": $msg = "<p class=\"errmsg\">Experience on Computer Typing  is required for this post(20 words per minute both in Bangla & English).</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;

		case "532": $msg = "<p class=\"errmsg\">Admit Card is not issued yet!</p>
			  				<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";
					break;
			
	        default: $msg = "<p class=\"errmsg\">Admit Card is not published yet!</p>";
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
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"$body_bg\">
	$msg</td>
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
</table>
</body>
</html>";
?>
