<?php
include "../lib/lastdate.php";
include "../lib/fx.php";
// Not Active
if($active == "0"){exit;}

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

<title>$page_title</title>

<link href=\"../lib/style.css\" rel=\"stylesheet\" type=\"text/css\" />

</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"22\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>


    $app_head
    $toplink




  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
      <tr>
        <td height=\"300\" align=\"center\" valign=\"middle\"><table width=\"550\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
          <tr>
            <td align=\"center\" valign=\"middle\"><fieldset>
              <legend class=\"black12\"> Registration </legend>
              <table width=\"430\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                  <td width=\"48\" align=\"center\" valign=\"middle\">&nbsp;</td>
                  <td width=\"352\" align=\"left\" valign=\"middle\">&nbsp;</td>
                </tr>
                <tr>

                  <td height=\"35\" align=\"left\" valign=\"middle\"><img src=\"../images/ico_red.png\" width=\"25	\" height=\"25\" /></td>
                  <td height=\"35\" align=\"left\" valign=\"middle\"><a href=\"../doc/ad.pdf\" target=\"_blank\" class=\"mainlink\">Advertisement(Click here to download Advertisement)</a></td>
                </tr>
				<tr>
                  <td height=\"35\" align=\"left\" valign=\"middle\"><img src=\"../images/ico_cyan.png\" width=\"25\" height=\"25\" /></td>
                  <td height=\"35\" align=\"left\" valign=\"middle\"><a href=\"../doc/instructions.pdf\" target=\"_blank\" class=\"mainlink\">Instructions(Click here to download Instructions) </a></td>
                </tr>
                <tr>
                  <td height=\"35\" align=\"left\" valign=\"middle\"><img src=\"../images/ico_green.png\" width=\"25\" height=\"25\" /></td>
                  <td height=\"35\" align=\"left\" valign=\"middle\"><a href=\"../apply.php\" class=\"mainlink\">Application Form(Click here to apply Online)</a></td>
                  </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">&nbsp;</td>
                  <td align=\"left\" valign=\"middle\">&nbsp;</td>
                  </tr>
                </table>
              </fieldset>
              </td>
            </tr>
          </table></td>
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
          <td width=\"10%\" align=\"left\" valign=\"middle\">$by</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\">$flashlogo</td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
</table>
</body>
</html>";

?>