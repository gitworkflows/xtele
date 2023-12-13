<?php
	session_start();
	$_SESSION['ses_auth'] = "ashgdHGHghsdhasjhgHGZhhfsh76534786e55546GF";
	
	include "../lib/fx.php";
	
	$yes 		= $_POST['yes'];
	$username 	= addslashes($_POST['username']);
	$password 	= addslashes($_POST['password']);
	
	if($yes == "YES" && $username != "" && $password != "")
	{
		include "../lib/dbconnect.php";
		
		$out_user = mysql_query("SELECT `user`
								FROM `registration`
								WHERE `user` = '$username'
								AND `password` = '$password'");
		$row_count = mysql_numrows($out_user);
		if($row_count < 1)
		{
			$err_msg = "Invalid login!";
		}
		if($row_count > 0)
		{
			while($row_user = mysql_fetch_array($out_user))
			{
				extract($row_user);
			}
			echo"<script language='javascript'>window.location.href=\"../pdfdw.php?invoiceno=$user\"; </script>";
		}
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
    $app_head
	$optlink
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
      <tr>
		<td height=\"50\" align=\"center\" valign=\"middle\" class=\"black12bold\">Download Applicant's Copy</td>
	  </tr>
	  <tr>
        <td height=\"200\" align=\"center\" valign=\"middle\">
			<table width=\"500\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
			  <tr>
				<td height=\"150\" align=\"left\" valign=\"top\"><fieldset class=\"field_set\">
				  <legend class=\"black12\">sign in</legend>
				  <form id=\"users\" name=\"users\" method=\"post\" action=\"plog.php\">
				  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
					<tr>
					  <td width=\"7%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"16%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"4%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"71%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"2%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">User ID</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
					  <td align=\"left\" valign=\"middle\"><span id=\"sprytextfield1\">
						<label>
						  <input name=\"username\" type=\"text\" class=\"textfieldUSER\" id=\"username\" />
						</label>
						<span class=\"textfieldRequiredMsg\">User ID is required!</span></span></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
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
    <td align=\"left\" valign=\"top\"><fieldset class=\"field_set\">
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
        <tr>
          <td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"80%\" align=\"left\" valign=\"middle\">$copyright</td>
         <td width=\"9%\" align=\"left\" valign=\"middle\"><img src=\"../images/tbl_logo.png\" class=\"img_padding\" width=\"94\" height=\"50\" /></td>
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

?>