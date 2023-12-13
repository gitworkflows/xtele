<?php
include "../lib/fx.php";
echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>$page_title</title>";
?>
<link href="../lib/style.css" rel="stylesheet" type="text/css" />
<?php
echo"
</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"20\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head2
	$optlink
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td width=\"8%\" class=\"black14bold\">Help</td>
                  <td width=\"5%\">&nbsp;</td>
                  <td width=\"87%\">&nbsp;</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td colspan=\"2\" align=\"left\" valign=\"top\"><div align=\"justify\" class=\"black12bold\">01. Prepare your Photo and Signature</div></td>
                  </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td colspan=\"2\" align=\"right\" valign=\"middle\"><div align=\"justify\">You should upload a recent photo taken with a digital camera or scanned from a good quality printed image and  required to have a scanned 
                    (digital) signature as per the specifications.</div></td>
                  </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\"><div align=\"justify\">Photo dimensions are 300 X 300 pixels (Width X Height). The file size is less than 100 kbytes.<br />
                    With modern digital cameras, or even phones with built-in cameras, it is easy to create a very large file. But large images files can take a long time to upload and use a lot of storage space, so we have limited the upload size to 100Kbyte. If your image is too big you can easily make it smaller with an image editor.</div></td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\"><div align=\"justify\">Make sure that the picture is in colour.  Black &amp; White, Monochrome, Grayscale, Face too Close or too distance, Blurred, Too light or dark, Obscured, Uncropped or any image other than photo will not be accepted.</div></td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\"> <div align=\"justify\">Looking straight at the camera with a relaxed face.</div></td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\"> <div align=\"justify\">
                    <div align=\"justify\"> If the picture is taken on a sunny day, have the sun behind you, or place yourself in the shade, so that you are not squinting and there are no harsh shadows.</div>
                  </div></td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\"><div align=\"justify\">If you have to use flash, ensure there's no &quot;red-eye&quot;.</div></td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\">If you wear glasses make sure that there are no reflections and your eyes can be clearly seen.</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\">Hats and dark glasses are not acceptable. Religious headwear is allowed but it must not cover your face. </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\">
				  The applicant has to sign on white paper with Black Ink pen.<BR>
				  The signature must be signed only by the applicant and not by any other person.<BR>
				  The signature in admit card must be checked to the attendance sheet and wherever necessary.<BR>
				  Dimensions of signature are 300 x 80 pixels (Width X Height). Ensure that the size of the scanned image is not more than 60kb.</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\">You can check Photo/Signature dimensions and size by using<a href=\"../imsize.php\" class=\"link03\"> Photo/Signature Validator</a>.</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td colspan=\"2\" align=\"left\" valign=\"middle\"><span class=\"GrayBlue12\">02. Procedure for Uploading the Photo and Signature</span></td>
                  </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\">
				  There will be two separate links for uploading Photo and Signature<BR>
				  Click on the respective link and Browse and Select the location where the Photo / Signature file has been saved.<BR>
				  Select the file by clicking on it and Click the 'Open/Upload' button.</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td colspan=\"2\" align=\"left\" valign=\"middle\"><span class=\"GrayBlue12\">03. Downloads</span></td>
                  </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\">For more information, please download<a href=\"../doc/instructions.pdf\" class=\"link03\"> Instructions for Submitting Application</a>.</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">&raquo;</td>
                  <td align=\"left\" valign=\"top\">If you face some problems to read the pdf file, <a href=\"../doc/fonts.zip\" class=\"link03\">download the Bangla fonts</a>.</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">&nbsp;</td>
                  <td colspan=\"2\" align=\"left\" valign=\"middle\"><span class=\"black11i\">After registering online applicants are advised to take a printout/save as PDF of their system generated online application forms.</span></td>
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