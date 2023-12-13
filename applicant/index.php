<?php
include "../lib/fx.php";
include "cardtime.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo "$page_title"; ?></title>
  <link href="../lib/style.css" rel="stylesheet" type="text/css" />
  <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
  <script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
  <script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
  <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
  <link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
  <link href="../css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="..css/fontawesome.min.css" rel="stylesheet" type="text/css" />
</head>

<body ondragstart="return false" onselectstart="return false">
  <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="10" align="center" valign="middle" bgcolor="#BEEA93" class="topbg">&nbsp;</td>
    </tr>

    <?php
    include "../lib/fx.php";
    include "../lib/dbconnect.php";

    //get Data from post

    $out_post = mysql_query("SELECT * FROM `post` WHERE `post_code`>'109'");
    while ($row_post = mysql_fetch_array($out_post)) {
      extract($row_post);
    }


    echo  "<tr>
		 $app_head
			
	        </tr>
	</table></td>
  		</tr>";

    echo "$app_down_link";

    ?>

    </td>
    </tr>
    <?php
    echo "$cardlink";
    ?>
    <tr>
      <td height="300" align="center" valign="middle" bgcolor="#FFF380">

        <form id="users" name="users" method="post" action="process.php">

          <table width="500" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="110" align="left" valign="top">
                <fieldset class="field_set">
                  <legend class="black12">Log in</legend>
                  <table width="100%" border="0" cellspacing="0" cellpadding="3">
                    <tr>
                      <td width="7%" align="left" valign="middle">&nbsp;</td>
                      <td width="16%" align="left" valign="middle">&nbsp;</td>
                      <td width="4%" align="left" valign="middle">&nbsp;</td>
                      <td width="71%" align="left" valign="middle">&nbsp;</td>
                      <td width="2%" align="left" valign="middle">&nbsp;</td>
                    </tr>

                    <tr>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle" class="black12">User ID</td>
                      <td align="left" valign="middle" class="black12">:</td>
                      <td align="left" valign="middle"><span id="sprytextfield1">

                          <label>
                            <input name="username" type="text" class="textfieldUSER" id="username" />
                          </label>
                          <span class="textfieldRequiredMsg">User ID is required!</span></span></td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>



                    <tr>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle" class="black12">Password</td>
                      <td align="left" valign="middle" class="black12">:</td>
                      <td align="left" valign="middle"><span id="sprypassword1">
                          <label>
                            <input name="password" type="password" class="textfieldPASS" id="password" />
                          </label>
                          <span class="passwordRequiredMsg">Password is required!</span></span></td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>



                    <tr>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle"><input type="reset" name="Reset" id="button" value="Reset" />
                        <input type="submit" name="button2" id="button2" value="Submit" />
                      </td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle" class="red12bold">


                        <?php

                        include "../lib/fx.php";

                        $err = addslashes($_GET['err']);
                        $invoice = addslashes($_GET['invoice']);
                        $msg = "";



                        //  if($err == "627") {$msg = "Invalid login!";}



                        if (($err >= 0 && $err < 50) && $invoice != "") {
                          include "../lib/dbconnect.php";
                          $err_out = mysql_query("SELECT `err_msg`
			  						  FROM `errors`
									  WHERE `err_id` = '$err'");
                          while ($row_err = mysql_fetch_array($err_out)) {
                            extract($row_err);
                          }
                          $name_out = mysql_query("SELECT `fullname`
			  						  FROM `cinfo`
									  WHERE `invoice` = '$invoice'");
                          while ($row_name = mysql_fetch_array($name_out)) {
                            extract($row_name);
                          }
                          $img_id = "$invoice" . ".jpg";

                          $msg = "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\" class=\"black11\">
            <tr>
              <td width=\"25%\" align=\"left\" valign=\"top\"><img src=\"../images/photo/$img_id\" width=\"80\" height=\"80\" border=\"1\" /></td>
              <td width=\"75%\" align=\"left\" valign=\"top\">
			  <span class=\"black12bold\">$fullname</span><br/>
			  <span class=\"red12\">$err_msg</span></td>
            </tr>
          </table>";
                        }
                        echo "$msg";
                        ?>
                      </td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </table>
                </fieldset>
              </td>
            </tr>
          </table>
        </form>
      </td>
    </tr>







    <tr>
      <td height="25" align="center" valign="middle" bgcolor="lightgreen" class="black11"><?php echo "$support"; ?></td>
    </tr>
    <tr>
      <td align="center" valign="middle" class="black11">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top">
        <fieldset class=field_set>
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tr>
              <td width="1%" align="left" valign="middle">&nbsp;</td>
              <td width="80%" align="left" valign="middle" class="black10"> <?php echo "$copyright"; ?></td>

              <td width="50%" align="left" valign="middle" class="black10"> <?php echo "$tbllogo"; ?></td>
              <td width="9%" align="left" valign="middle"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="61" height="38">

                </object></td>
            </tr>
          </table>
        </fieldset>
      </td>
    </tr>
  </table>

  <script type="text/javascript">
    <!--
    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
    var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
    swfobject.registerObject("FlashID");
    //
    -->
    $invoiceno
    =
    $cuser;
    $_SESSION['invoice']
    =
    $invoiceno;
    echo
    "password:
    $password
    ";


  </script>
</body>


</html>