<?php



	include "../lib/dbconnect.php";
	include "../lib/fx.php";
     
  
	
        if($active == "0"){exit;}


        $post_code 				= addslashes($_POST['post_code']);
        $post_name 				= addslashes($_POST['post_name']);
        $apply_post 				= addslashes($_POST['$apply_post']);
	$cuser 	= addslashes($_POST['username']);

session_start();

$userxxx=$_SESSION['userxxx'];
$invoice=$_SESSION['invoice11'];

$post_code=$_SESSION['post_code11'];





	//Get Data post name

	$out_post = mysql_query("SELECT `post_code`, `post_name`, `ad_no` FROM `post` WHERE `post_code` = '$post_code'");
	while($row_post=mysql_fetch_array($out_post))
	       {
		extract($row_post);
	          }


  //echo "User ID: $invoice";
  // echo "post_code: $post_code"; 


 
          ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$page_title";?></title>
<link href="../lib/style.css" rel="stylesheet" type="text/css" />
<script src="../lib/valid_preview.js"></script>
<script src="../lib/form_submit.js"></script>
<script src="../lib/imageup.js"></script>
<script type="text/javascript">


objImage = new Image();
function download()
{
	// preload the image file
	objImage.src="../images/pload.gif";
}
</script>
</head>
<body ondragstart="return false" onselectstart="return false" onLoad="download();">
<?php
	
echo "<form action=\"photo_upload.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"app_form\" id=\"app_form\" onsubmit=\"return app_form_validator(this)\">

		
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>

    $app_head2
    $toplink
  <tr>
  	<td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12bold\"><font size='4'><font color='RED'>Your Photo and Signature is not uploaded yet!<br/> Please Upload your Photo and Signature</td>
  </tr>


  <tr>
    <td align=\"left\" valign=\"top\">
      <table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12\">
       

        <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            
          </table></td>
        </tr>
        <tr bgcolor=\"$shade1_bg\">
          <td align=\"left\" valign=\"middle\"></td>
          <td align=\"center\" valign=\"middle\"></td>
          <td align=\"left\" valign=\"middle\">
		  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black12\">
            <tr>
              <td width=\"37%\" height=\"23\" align=\"left\" valign=\"middle\" class=\"red12bold\">$mobileno</td>
              <td width=\"21%\" align=\"right\" valign=\"middle\">&nbsp;</td>
              <td width=\"33%\" align=\"right\" valign=\"middle\" class=\"red12bold\">&nbsp;</td>
              <td width=\"9%\" align=\"left\" valign=\"middle\" class=\"red12bold\">&nbsp;</td>
              </tr>
          </table>
		  </td>
        </tr>
       


     
        </table></td>
        </tr>


	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12bold\">Photo &amp; Signature:</td>
          </tr>
        <tr>
          <td height=\"40\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black11\"><div align=\"justify\">Photo must be <span class=\"black11bold\"> 300 X 300 pixel</span> (width X height) and file size not more than <span class=\"red11\">100 KB</span> and Signature must be <span class=\"black11bold\"> 300 X 80 pixel</span> (width X height) and file size not more than <span class=\"red11\">60 KB</span>. <span class=\"black11bold\">Colour Photo is a must</span>. Black & White, Monochrome or Grayscale photo or any image other than photo will not be accepted. This application is capable to detect image with <span class=\"red11\">Facial Recognition</span>. Please avoid to upload unacceptable photo. Applicants may test their photo/signature for suitability through the 
          <a href=\"imsize.php\" target=\"_blank\" class=\"mainlink\">Photo/Signature Validator</a></div></td>
        </tr>
          <tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black12\">
            <tr>
              <td width=\"22%\" align=\"left\" valign=\"middle\">&nbsp;Upload Photo</td>
              <td width=\"7%\" align=\"center\" valign=\"middle\">:</td>
              <td width=\"71%\" align=\"left\" valign=\"middle\"><label>
                <input name=\"photo\" type=\"file\" class=\"textfield03\" id=\"photo\" onchange=\"return validateFileExtension(this)\"/>
              </label></td>
            </tr>
            <tr>
              <td align=\"left\" valign=\"middle\">&nbsp;Upload Signature</td>
              <td align=\"center\" valign=\"middle\">:</td>
              <td align=\"left\" valign=\"middle\"><label>
                <input name=\"signature\" type=\"file\" class=\"textfield03\" id=\"signature\" onchange=\"return validateFileExtension(this)\"/>
              </label></td>
            </tr>
          </table></td>
          </tr>
        



		<tr>
          <td colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                    <tr>
                      <td width=\"5%\" align=\"center\" valign=\"middle\"><input type=\"checkbox\" name=\"info_yes\" id=\"info_yes\" onclick=\"agreesubmit(this)\"/></td>
                      <td width=\"95%\" align=\"left\" valign=\"middle\" class=\"black11i\"><div align=\"justify\">I declare that I have submitted my own Photo (300*300) and Signature(300*80) in JPEG format.</div></td>
                    </tr>
                  </table></td>
        </tr>
        <tr>
          <td colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\"><input type=\"submit\" name=\"button\" id=\"button\" value=\"Submit the Application\" disabled/></td>
        </tr>
	<tr>
          <td height=\"30\" colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">
          <img name=\"im\" src=\"../images/blank.png\"></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"lightgreen\" class=\"black10\">$support</td>
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
</form>";



mysql_close();

session_start();
$_SESSION['myValue22']=$invoice; 
$_SESSION['postcode'] = $post_code;
$_SESSION['postname'] = $post_name;



?>
</body>
</html>


