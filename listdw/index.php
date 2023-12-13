
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo " $org_name"; ?></title>

<link href="../lib/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include "../lib/dbconnect.php";
include "../lib/fx.php";
  // get Data from Admit Instruction

	$out_venue_instruction= mysql_query("SELECT * FROM `venue_instruction`");
	while($row_venue_instruction=mysql_fetch_array($out_venue_instruction))
	      {	extract($row_venue_instruction);}



     	echo "$app_head";
	echo "$cardlink";


echo"<table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td><form action=\"pdfdw.php\" method=\"post\" name=\"form1\" target=\"_blank\" id=\"form1\">
      <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
        <tr>
          <td height=\"60\" align=\"center\" valign=\"middle\" class=\"black12bold\"><font size='3'>Download Attendance Sheet</font></td>
        </tr>

        <tr>
          <td height=\"200\" align=\"center\" valign=\"middle\"><fieldset>
            <legend class=\"black12\">Print List(Print this list according to room wise)</legend>
            <table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
              <tr>
                <td width=\"16%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                <td width=\"17%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                <td width=\"2%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                <td width=\"53%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                <td width=\"12%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
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
                <td align=\"left\" valign=\"middle\">Start Roll</td>
		<td align=\"left\" valign=\"middle\">:</td>
 
                <td align=\"left\" valign=\"middle\"><input name=\"s_roll\" type=\"text\" class=\"textfield06\" id=\"s_roll\" maxlength=\"9\" /></td>
                <td align=\"left\" valign=\"middle\">&nbsp;</td>
              </tr>
              <tr>
                <td align=\"left\" valign=\"middle\">&nbsp;</td>
                <td align=\"left\" valign=\"middle\">End Roll</td>
		<td align=\"left\" valign=\"middle\">:</td>

                <td align=\"left\" valign=\"middle\"><label for=\"e_roll\"></label>
                  <input name=\"e_roll\" type=\"text\" class=\"textfield06\" id=\"e_roll\" maxlength=\"9\" /></td>
                <td align=\"left\" valign=\"middle\">&nbsp;</td>
              </tr>
              <tr>
                <td align=\"left\" valign=\"middle\">&nbsp;</td>
                <td align=\"left\" valign=\"middle\">&nbsp;</td>
                <td align=\"left\" valign=\"middle\">&nbsp;</td>
                <td align=\"left\" valign=\"middle\"><input type=\"reset\" name=\"Reset\" id=\"button\" value=\"Reset\" />
                  <input type=\"submit\" name=\"button2\" id=\"button2\" value=\"Download this file\" /></td>
                <td align=\"left\" valign=\"middle\">&nbsp;</td>
              </tr>
              <tr>
                <td height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                <td height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                <td height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                <td height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                <td height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
              </tr>
            </table>
          </fieldset></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>";
?>
</body>
</html>
