<?php
include "../lib/fx.php";
include "../lib/dbconnect.php";

// Post Code & Name out
$post_out = mysql_query("SELECT `post_code`, `post_name` FROM `post` WHERE `post_code` > 100") or
	die(mysql_error());
$post_row = mysql_numrows($post_out);
$pi = 0;

while ($post_row > $pi) {
	$pc		= mysql_result($post_out, $pi, "post_code");
	$pn		= mysql_result($post_out, $pi, "post_name");
	$ad		= mysql_result($post_out, $pi, "ad_no");

	$select_pcode .= "<option value=\"$pc\">$pn (Ref: $ad)</option>";

	$pi++;
}

$yes 		= $_POST['yes'];

$sname 		= strtoupper(addslashes($_POST['sname']));
$sfather 	= strtoupper(addslashes($_POST['sfather']));
$smobile 	= addslashes($_POST['smobile']);


if ($yes == "YES") {
	if ($sname != "" && $sfather != "" && $smobile != "") {
		//get Data from cinfo
		$out_info = mysql_query("SELECT `invoice`, `mother`, `dob`, `fee`
									FROM `cinfo`
									WHERE `name` LIKE '%$sname%'
									AND `father` LIKE '%$sfather%'
									AND `mobile` = '$smobile'") or
			die(mysql_error());
		while ($row_info = mysql_fetch_array($out_info)) {
			extract($row_info);
		}
		$row_count = mysql_numrows($out_info);



		if ($row_count < 1) {
			$msg = "<span class=\"red12bold\"> Sorry, User ID not found!! Try again...</span>";
		}

		$x = 0;
		while ($row_count > $x) {
			$invoice		= mysql_result($out_info, $x, "invoice");
			$mother			= mysql_result($out_info, $x, "mother");
			$dob			= mysql_result($out_info, $x, "dob");
			$fee			= mysql_result($out_info, $x, "fee");

			if ($fee > 0) {
				$fp = "Fee Paid";
			}
			if ($fee < 1) {
				$fp = "Fee Unpaid";
			}

			$msg .= "User ID: <span class=\"red12bold\"> $invoice </span>($fp)<br />
				Mother Name: $mother<br />
				Date of Birth: $dob [YYYY-MM-DD]<br /><hr><br />";

			$x++;
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



echo "
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>

$app_head
	        </tr>
	</table></td>


	$optlink
  </tr>
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"$body_bg\">
		<form id=\"invoce\" name=\"invoce\" method=\"post\" action=\"invoice.php\">
			<table width=\"550\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
			  <tr>
				<td height=\"150\" align=\"left\" valign=\"top\"><fieldset class=\"field_set\">
				  <legend class=\"black12bold\">Recover User ID</legend>
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
					  <td align=\"left\" valign=\"middle\" class=\"black12\">Name</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
					  <td align=\"left\" valign=\"middle\"><span id=\"sprytextfield1\">
						<input name=\"sname\" type=\"text\" class=\"textfieldUSER\" id=\"sname\" />
						<span class=\"textfieldRequiredMsg\">Applicant's name is required!</span></span></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">Father's Name</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
					  <td align=\"left\" valign=\"middle\"><span id=\"sprytextfield2\">
						<input name=\"sfather\" type=\"text\" class=\"textfieldUSER\" id=\"sfather\" />
						<span class=\"textfieldRequiredMsg\">Father's name is required!</span></span></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">Mobile Number</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
					  <td align=\"left\" valign=\"middle\"><span id=\"sprytextfield3\">
						<input name=\"smobile\" type=\"text\" class=\"textfieldUSER\" id=\"smobile\" maxlength=\"11\"/>
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

                                         <tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">User ID: <span class=\"red12bold\"> $invoice </span> </td>
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
          <td width=\"9%\" align=\"left\" valign=\"middle\"><img src=\"../images/tbl_logo.png\" class=\"img_padding\" width=\"94\" height=\"50\"  /></td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
</table>
<script type=\"text/javascript\">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField(\"sprytextfield1\");
var sprytextfield2 = new Spry.Widget.ValidationTextField(\"sprytextfield2\");
var sprytextfield3 = new Spry.Widget.ValidationTextField(\"sprytextfield3\");
//-->
</script>
</body>";
?>

</html>