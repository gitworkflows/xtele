
<?php
	session_start();
	
	include "../lib/fx.php";
	include "cardtime.php";

	// Check User/Pass
	$yes 		= $_POST['yes'];
	$username 	= addslashes($_POST['username']);
	$userpass 	= addslashes($_POST['password']);
	//$postcode 	= addslashes($_POST['postcode']);
	
	$err_msg = "";


	if($yes == "YES" && $username != "" && $userpass != "")
	{
		
		include "../lib/dbconnect.php";
		

		// username & password check

		$user_out = mysql_query("SELECT a.user AS invoice, 
										a.password AS  password,
										b.post_code AS post_code,
										b.name AS namei,
										c.post_name AS post_name,
										c.card_active AS card_active
										FROM registration a, cinfo b, post c
										WHERE a.user = '$username'
										AND a.password = '$userpass'
										AND b.invoice = '$username'
										AND c.post_code = b.post_code
										AND b.fee = 1") or
										die("QUO345987656435");
		$user_count = mysql_numrows($user_out);
		while($row_user=mysql_fetch_array($user_out))
		{
			extract($row_user);
		}
		

        if(($username=="ausign") && ($userpass=="S*6817"))
          {echo"<script language='javascript'>window.location.href=\"uploading.php\"; </script>";}

       else
            {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=67\"; </script>";}




 $file = "../images/$post_code/photo/$invoice.jpg";

    if (file_exists($file))
         { 
  echo"<script language='javascript'>window.location.href=\"uploading.php\"; </script>";}
    else
        { echo"<script language='javascript'>window.location.href=\"uploading.php\"; </script>";}




		if($user_count > 0)
		{
			$img_id = "$invoice" . ".jpg";
			$_SESSION['ses_user'] = "$invoice";
			$_SESSION['ses_pass'] = "$password";
			$_SESSION['ses_auth'] = "HyeJKyufgh378934jkoyuAyukFhsstyKOFsjkfJKvggdy";
			
			$card_link = "
			<form action=\"card.php\" method=\"post\" name=\"card_form\" id=\"card_form\">
			  <tr>
				<td align=\"left\" valign=\"top\">&nbsp;</td>
			  </tr>
			  <tr>
				<td align=\"left\" valign=\"top\"><fieldset>
				  <legend class=\"black12\"><font color='red'>Download Admit Card</legend>
				  <table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
					<tr>
					  <td width=\"10%\" align=\"left\" valign=\"top\">&nbsp;</td>
					  <td width=\"25%\" align=\"left\" valign=\"top\">
					  <img src=\"../images/$post_code/photo/$img_id\" width=\"80\" height=\"80\" border=\"1\" />
					  <input type=\"hidden\" name=\"t\" id=\"t\" value=\"$invoice\" />
					  </td>
					  <td width=\"65%\" align=\"left\" valign=\"top\"><span class=\"black12bold\">$name</span><br />
						Admit Card is ready<br />
						<br />
						<input type=\"submit\" name=\"cardw\" id=\"cardw\" value=\"Download Admit Card\" />
						<br /></td>
					</tr>
				  </table>
				</fieldset></td>
			  </tr>
			</form>";
		}
		mysql_close();
	}

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>$page_title</title>";
?>
<link href="../lib/style.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<?php
echo"
</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
  <tr>
   
    $app_head2

    </td>
  </tr>
	$crdlink
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
      <tr>
		<td height=\"50\" align=\"center\" valign=\"middle\" class=\"black12bold\"><font size='5'><font color='red'>Upload Authority Signature</td>
	  </tr>

    

	  <tr>
        <td height=\"200\" align=\"center\" valign=\"middle\">
			<table width=\"500\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
				<td height=\"150\" align=\"left\" valign=\"top\"><fieldset>
				  <legend class=\"black12\">sign in</legend>
				  <form id=\"users\" name=\"users\" method=\"post\" action=\"index.php\">
				  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
					<tr>
					  <td width=\"7%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"16%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"4%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"71%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"2%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">User Name</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
					  <td align=\"left\" valign=\"middle\"><span id=\"sprytextfield1\">
						<label>
						  <input name=\"username\" type=\"text\" class=\"textfieldUSER\" id=\"username\" />
						</label>
						<span class=\"textfieldRequiredMsg\">User ID is required!</span></span></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
				
					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">Password</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
					  <td align=\"left\" valign=\"middle\"><span id=\"sprypassword1\">
						<label>
						  <input name=\"password\" type=\"password\" class=\"textfieldPASS\" id=\"password\" />
						  </label>
						<span class=\"passwordRequiredMsg\">Password is required!</span></span></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>





					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\"><input type=\"reset\" name=\"Reset\" id=\"button\" value=\"Reset\" />
						<input type=\"submit\" name=\"button2\" id=\"button2\" value=\"Submit\" /></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp; <input type=\"hidden\" name=\"yes\" id=\"yes\" value=\"YES\" /></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"red12bold\">
					  $err_msg
					  </td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					</table>
					</form>
				</fieldset></td>
				</tr>
				$card_link
			</table>
		</td>
      </tr>
	  <tr>
        <td height=\"50\" align=\"center\" valign=\"middle\">&nbsp;</td>
      </tr>
    </table></td>
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
          <td width=\"10%\" align=\"left\" valign=\"middle\">Powered by:</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\"><img src=\"../images/tbl_logo.jpg\" width=\"94\" height=\"50\" /></td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
</table>
<script type=\"text/javascript\">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField(\"sprytextfield1\");
var sprypassword1 = new Spry.Widget.ValidationPassword(\"sprypassword1\");
swfobject.registerObject(\"FlashID\");
//-->
</script>
</body>
</html>";


session_start();

$_SESSION['invoice11'] = $invoice;

$_SESSION['post_code11'] = $post_code;

?>
