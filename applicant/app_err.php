<?php
	
	if (!isset($_SESSION)) {
		session_start();
	}
	session_destroy();
	
	include "../lib/fx.php";

	$err = $_GET['err'];
	
	switch($err)
	{
		
		case "10": $msg = "<p class=\"errmsg\">Please fill up S.S.C or Equivalent Level information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";break;

                case "11": $msg = "<p class=\"errmsg\">Please fill up H.S.C or Equivalent Level information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";break;
                case "12": $msg = "<p class=\"errmsg\">4 years Honors in Physics or Chemistry required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>"; 
					$toplink = "";break;
	
                case "13": $msg = "<p class=\"errmsg\">Please fill up Graduation or Equivalent level information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>"; 
					$toplink = "";break;
		case "14": $msg = "<p class=\"errmsg\">Diploma in Wood Technologoy/Graduation in Physics or Chemistry required or <br/>H.S.C + 5 Years job experience in Chemical labortory is required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>"; 
					$toplink = "";break;
		case "15": $msg = "<p class=\"errmsg\">SSC/HSC(2 years Vocation course required)</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>"; 
					$toplink = "";break;
		case "16": $msg = "<p class=\"errmsg\">2 Years Job Experience required for S.S.C pass.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>"; 
					$toplink = "";break;

		case "19": $msg = "<p class=\"errmsg\">Invalid Photo Size/Format! Please try again.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";break;

		case "21": $msg = "<p class=\"errmsg\">Invalid Signature Size/Format! Please try again.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";break;

		case "20": $msg = "<p class=\"errmsg\">Please fill up H.S.C or Equivalent Level information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = ""; break;	
	
		case "30": $msg = "<p class=\"errmsg\">Please fill up Graduation/ Equivalent Level information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = ""; break;		
	
       		case "40": $msg = "<p class=\"errmsg\">Please fill up Masters/ Equivalent Level information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = ""; break;


		case "50": $msg = "<p class=\"errmsg\">Please fill up the Reference 01 information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = ""; break;		

		case "51": $msg = "<p class=\"errmsg\">Please fill up the Reference 02 information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = ""; 	break;

		case "41": $msg = "<p class=\"errmsg\">4 years honors degree required for this post</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = ""; 	break;
	
                case "52": $msg = "<p class=\"errmsg\">Error: Validation code missmatch</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";	break;	
                case "53": $msg = "<p class=\"errmsg\">Must required Science in SSC/HSC level for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";	break;	

	         case "54": $msg = "<p class=\"errmsg\">User ID or Password missmath.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
					$toplink = "";	break;	
	
		//default: $msg = "<p class=\"errmsg\">Access Denied!</p>";
				// $toplink = "";
	          }
                   
echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>$page_title</title>
<link href=\"../lib/style.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"20\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head
	$toplink
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"$body_bg\">
	$msg</td>
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
</table>
</body>
</html>";
?>
