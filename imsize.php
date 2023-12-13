<?php
	include "lib/fx.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$page_title";?></title>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body ondragstart="return false" onselectstart="return false">
<?php
echo"<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head
	$toplink
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
         <tr>
        <td width=\"4%\" align=\"left\" valign=\"middle\">&nbsp;</td>
        <td width=\"92%\" align=\"center\" valign=\"middle\">&nbsp;</td>
        <td width=\"4%\" align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
      <tr>
        <td width=\"4%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
        <td width=\"92%\" height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\"><a href=\"http://www.picresize.com/\" target=\"_blank\" class=\"link01\">Click Here to Open Online Image Resize Tools</a></td>
        <td width=\"4%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
      <tr>
        <td width=\"4%\" align=\"left\" valign=\"middle\">&nbsp;</td>
        <td width=\"92%\" align=\"center\" valign=\"middle\">&nbsp;</td>
        <td width=\"4%\" align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
      <tr>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
        <td height=\"250\" align=\"center\" valign=\"middle\"><iframe src=\"validator.php\" name=\"validator\" width=\"700\" marginwidth=\"0\" height=\"270\" marginheight=\"0\" scrolling=\"No\" frameborder=\"0\" hspace=\"0\" vspace=\"0\" id=\"validator\"></iframe></td>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
      <tr>
        <td height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
        <td height=\"30\" align=\"center\" valign=\"middle\" class=\"subField_Name\">Sample Photo &amp; Signature</td>
        <td height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
      <tr>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
        <td align=\"center\" valign=\"middle\"><iframe src=\"sample.php\" name=\"sample\" width=\"700\" marginwidth=\"0\" height=\"360\" marginheight=\"0\" scrolling=\"No\" frameborder=\"0\" hspace=\"0\" vspace=\"0\" id=\"sample\"></iframe></td>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
      <tr>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
      <tr>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
        <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><a href=\"http://www.picresize.com/\" target=\"_blank\" class=\"link01\">Click Here to Open Online Image Resize Tools</a></td>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
      <tr>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
        <td align=\"left\" valign=\"middle\">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
    <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bottom_bg\" class=\"black11\">$support</td>
  </tr>
    <tr>
    <td align=\"left\" valign=\"top\">&nbsp;</td>
  </tr>
   <tr>
    <td align=\"left\" valign=\"top\"><fieldset class=\"field_set\" >
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
        <tr>
          <td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"80%\" align=\"left\" valign=\"middle\">$copyright</td>
          <td width=\"10%\" align=\"left\" valign=\"middle\">Powered by:</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\"><img src=\"images/tbl_logo.png\" width=\"94\" height=\"50\" /></td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
</table>";
?>
</body>
</html>
