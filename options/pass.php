<?php
include "../lib/fx.php";

$yes     = addslashes($_POST['yes']);
$inv     = addslashes($_POST['inv']);
$inv    = strtoupper($inv);
$smobile   = addslashes($_POST['smobile']);

if ($yes == "YES") {
  if ($inv != "" && $smobile != "") {
    include "../lib/dbconnect.php";
    //get Data from cinfo and registration
    $out_info = mysql_query("SELECT a.invoice AS invoice, 
									a.mother AS mother,
									a.dob AS dob,
									b.password AS password
									FROM cinfo a, registration b
									WHERE a.invoice = '$inv'
									AND a.mobile = '$smobile'
									AND a.fee = '1'
									AND b.user = '$inv'");
    while ($row_info = mysql_fetch_array($out_info)) {
      extract($row_info);
    }
    $row_count = mysql_numrows($out_info);

    if ($row_count < 1) {
      $msg = "<span class=\"red12bold\"> Sorry, Password Not Found!! Try Again...</span>";
    }
    if ($row_count > 0) {
      $msg = "User ID: $invoice<br />
				<span class=\"red12bold\">Password: $password</span><br />
				Mother's Name: $mother<br />
				Date of Birth: $dob [YYYY-MM-DD]";
    }
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo "$page_title"; ?></title>
  <link href="../lib/style.css" rel="stylesheet" type="text/css" />
  <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
  <script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
  <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
  <link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
  <link href="../css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="..css/fontawesome.min.css" rel="stylesheet" type="text/css" />
</head>
<?php


include "../lib/dbconnect.php";
include "../lib/fx.php";


//get Data from post

$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code`>'109'");
while ($row_post = mysql_fetch_array($out_post)) {
  extract($row_post);
}






echo "<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
 
<tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
  
 <tr>
   $app_head
	        </tr>
	</table></td>





	$optlink
  </tr>
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"$body_bg\">
<form id=\"invoce\" name=\"invoce\" method=\"post\" action=\"pass.php\">
<table width=\"550\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td height=\"150\" align=\"left\" valign=\"top\"><fieldset class=\"field_set\">
      <legend class=\"black12bold\">Recover Password</legend>
      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
        <tr>
          <td width=\"10%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"25%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"5%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"55%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"5%\" align=\"left\" valign=\"middle\">&nbsp;</td>
        </tr>
        <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td align=\"left\" valign=\"middle\" class=\"black12\">User ID</td>
          <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\"><span id=\"sprytextfield1\">
            <label>
              <input name=\"inv\" type=\"text\" class=\"textfieldUSER\" id=\"inv\" />
            </label>
            <span class=\"textfieldRequiredMsg\">User ID is required!</span></span></td>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
        </tr>
        <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td align=\"left\" valign=\"middle\" class=\"black12\">Mobile Number</td>
          <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\"><span id=\"sprytextfield3\">
            <input name=\"smobile\" type=\"text\" class=\"textfieldUSER\" id=\"smobile\" />
            <span class=\"textfieldRequiredMsg\">Mobile Number is required!</span></span></td>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
        </tr>
        <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td align=\"left\" valign=\"middle\" class=\"black12\"><input name=\"yes\" type=\"hidden\" id=\"yes\" value=\"YES\" /></td>
          <td align=\"left\" valign=\"middle\" class=\"black12\">&nbsp;</td>
          <td align=\"left\" valign=\"middle\"><input type=\"reset\" name=\"Reset\" id=\"button\" value=\"Reset\" />
            <input type=\"submit\" name=\"button2\" id=\"button2\" value=\"Submit\" /></td>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
        </tr>
        <tr>
          <td align=\"left\" valign=\"middle\">&nbsp;</td>
          <td align=\"left\" valign=\"middle\" class=\"black11\">&nbsp;</td>
          <td align=\"left\" valign=\"middle\" class=\"black11\">&nbsp;</td>
          <td align=\"left\" valign=\"middle\" class=\"black11\">
		  $msg
          </td>

          <td align=\"left\" valign=\"middle\">&nbsp;</td>
        </tr>
        </table>
    </fieldset></td>
    </tr>
</table>
        </form>
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
          <td width=\"10%\" align=\"left\" valign=\"middle\">Powered by:</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\"><img src=\"../images/tbl_logo.png\" class=\"img_padding\" width=\"94\" height=\"50\" /></td>
        </tr>
      </table>
    </fieldset class=\"field_set\"></td>
  </tr>
</table>
<script type=\"text/javascript\">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField(\"sprytextfield1\");
var sprytextfield3 = new Spry.Widget.ValidationTextField(\"sprytextfield3\");
//-->
</script>
</body>";
?>

</html>