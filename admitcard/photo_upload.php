
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$page_title";?></title>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body ondragstart="return false" onselectstart="return false">
<?php
include "../lib/dbconnect.php";

$post_code 				= addslashes($_POST['post_code']);
$post_name 				= addslashes($_POST['post_name']);


session_start();

$invoice=$_SESSION['myValue22'];
$post_code=$_SESSION['postcode'];

echo "invoice = $invoice $post_code";


   //Get Data post name
	
	$out_post = mysql_query("SELECT `post_code`, `post_name`, `ad_no` FROM `post` WHERE `invoice` = '$invoice'");
	while($row_post=mysql_fetch_array($out_post))
	       {
		extract($row_post);
	          }



  echo"<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">";
		
		include "../lib/dbconnect.php";
	
		$docRoot = getenv("DOCUMENT_ROOT");
		$ip = $_SERVER['REMOTE_ADDR'];
		$applytime = date("Y-m-d H:i:s");
		$extime = date('Y-m-d H:i:s', strtotime('+72 hours'));
		
		$photo_name = $_FILES["photo"]["name"];
		$photo_kb = ($_FILES["photo"]["size"] / 1024);
		$photo_temp = $_FILES["photo"]["tmp_name"];
		$photo_size = GetImageSize("$photo_temp"); 
		$photo_width = $photo_size[0]; 
		$photo_height = $photo_size[1];
		$photo_ext = substr($photo_name, strpos($photo_name,'.'), strlen($photo_name)-1);
		$photo_ext=strtolower($photo_ext);
		
		$signature_name = $_FILES["signature"]["name"];
		$signature_kb = ($_FILES["signature"]["size"] / 1024);
		$signature_temp = $_FILES["signature"]["tmp_name"];
		$signature_size = GetImageSize("$signature_temp"); 
		$signature_width = $signature_size[0]; 
		$signature_height = $signature_size[1];
		$signature_ext = substr($signature_name, strpos($signature_name,'.'), strlen($signature_name)-1);
		$signature_ext=strtolower($signature_ext);
		
// Photo Validation
		if($err < 1)
		{
			$valid_photo = 1;
			if($photo_width != 300 || $photo_height != "300" || $photo_kb > 100 || $photo_ext != ".jpg")
			{
				$valid_photo = 0;
				$msg = "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
						  <tr>
							<td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
							<td height=\"310\" align=\"center\" valign=\"middle\">
								<span class=\"red12bold\">Error: Submission Failure, Please Try Again</span><br />
								<span class=\"red12\">Invalid Photo Size/Format!</span><br /><br />
								<a href=\"javascript:history.go(-2)\" class=\"mainlink\">Try Again!!</a></td>
                                                               
							</tr>
						</table>";
						$err = 1;
			}
		     }
		
if($err=='1')
 {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=19\"; </script>";}



// Signature Validation
		if($err < 1)
		{
			$valid_signature = 1;
			if($signature_width != "300" || $signature_height != "80" || $signature_kb > 60 || $signature_ext != ".jpg")
			{
				$valid_signature = 0;
				$msg = "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
						  <tr>
							<td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
							<td height=\"310\" align=\"center\" valign=\"middle\">
								<span class=\"red12bold\">Error: Submission Failure, Please Try Again</span><br />
								<span class=\"red12\">Invalid Signature Size/Format!</span><br /><br />
								<a href=\"javascript:history.go(-2)\" class=\"mainlink\">Try Again!!</a></td>
							</tr>
						</table>";
						$err = 1;
			}
		}
if($err=='1')
 {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=21\"; </script>";}



		//Grayscale or true color?
		if($err < 1)
		{
			$im = ImageCreateFromJpeg($photo_temp); 
			$imgw = imagesx($im);
			$imgh = imagesy($im);
			$r = array();
			$g = array();
			$b = array();
			$c = 0;
			for ($i=0; $i<$imgw; $i++)
			{
				for ($j=0; $j<$imgh; $j++)
				{
					// get the rgb value for current pixel
					$rgb = ImageColorAt($im, $i, $j); 
					// extract each value for r, g, b
					$r[$i][$j] = ($rgb >> 16) & 0xFF; 
					$g[$i][$j] = ($rgb >> 8) & 0xFF; 
					$b[$i][$j] = $rgb & 0xFF; 
					// count gray pixels (r=g=b)
					if ($r[$i][$j] == $g[$i][$j] && $r[$i][$j] == $b[$i][$j])
					{
						$c++;
					}
				}
			}
			$im_true_color = 1;
			if ($c == ($imgw*$imgh))  // image not true color
			{
				$im_true_color = 0;
				$msg = "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
						  <tr>
							<td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
							<td height=\"710\" align=\"center\" valign=\"middle\">
								<span class=\"red12bold\">Error: Submission Failure, Please Try Again</span><br />
								<span class=\"red12\">Photo must be in colour!</span><br /><br /> 
								<a href=\"javascript:history.go(-2)\" class=\"mainlink\">Try Again!!</a></td>
							</tr>
						</table>";
				$err = 1;
			}
		}


$valid_photo = $valid_signature = 1;

		if($valid_photo == "1" && $valid_signature == "1")
		{
			//echo "<img src=\"../images/loading.gif\" width=\"48\" height=\"48\" /> <br /> <br />
			//<span class=\"black12\">Your Request is processing! Please wait.... </span>";
			


// upload photo
  
function GeraHash($qtd){

//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.


$Caracteres = 'ABCDEFGHJKLMNPQRSTUVXWYZ123456789';
$QuantidadeCaracteres = strlen($Caracteres);
$QuantidadeCaracteres--;

$Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($Caracteres,$Posicao,1);
    }

return $Hash;
}

$p=GeraHash(6);


$photo=$invoice;

      

	      		$new_photo = "$photo"."$photo_ext";
			$output_file_p = "../images/$post_code/photo/$new_photo";
			

    // Convert photo  -----------------------
			$img_jpeg_p = imagecreatefromjpeg($photo_temp);
			$img_w_p = 150;
			$img_h_p = 150;
			$tmp_p=imagecreatetruecolor($img_w_p,$img_h_p);
			imagecopyresampled($tmp_p,$img_jpeg_p,0,0,0,0,$img_w_p,$img_h_p,$photo_width,$photo_height);
			imagejpeg($tmp_p,$output_file_p,80);
			imagedestroy($tmp_p);
			imagedestroy($img_jpeg_p);
			
	         // echo "photo:$new_photo";


    //upload signature
			$new_signature = "$photo"."$signature_ext";
			$output_file_s = "../images/$post_code/signature/$new_signature";
			// Convert signature  --------------
			$img_jpeg_s = imagecreatefromjpeg($signature_temp);
			$img_w_s = 300;
			$img_h_s = 80;
			$tmp_s=imagecreatetruecolor($img_w_s,$img_h_s);
			imagecopyresampled($tmp_s,$img_jpeg_s,0,0,0,0,$img_w_s,$img_h_s,$signature_width,$signature_height);
			imagejpeg($tmp_s,$output_file_s,80);
			imagedestroy($tmp_s);
			imagedestroy($img_jpeg_s);
			
		                     }

		if($err == "1"){echo"<script language='javascript'>window.location.href=\"../admitcard/inde00000x.php\"; </script>";}

			
        include "../lib/lastdate.php";
	include "../lib/dbconnect.php";
	include "../lib/fx.php";
	
        if($active == "0"){exit;}


	if (!isset($_SESSION)) {
		session_start();
	}
	$auth = $_SESSION['ses_auth'];
	
        $post_code 				= addslashes($_POST['post_code']);
        $post_name 				= addslashes($_POST['post_name']);
        $apply_post 				= addslashes($_POST['$apply_post']);
	

	


     
       	//Get Data post name
	
	$out_post = mysql_query("SELECT `post_code`, `post_name`, `ad_no` FROM `post` WHERE `post_code` = '$post_code'");
	while($row_post=mysql_fetch_array($out_post))
	       {
		extract($row_post);
	          }



	$invoiceno 	= $_GET['photo'];
	$cmobile 	= $_GET['cmobile'];

 

	$img_id = "$invoice" . ".jpg";
	$apply_post = "$post_name";
	
	
	
	?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$page_title";?></title>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php



echo"<table width=\"550\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
     <td height=\"120\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14\">
		   
    $app_head
    $toplink



</tr>
</table></td>
  </tr>


    <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><hr /></td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12bold\">
      <tr>
        <td width=\"50%\" align=\"left\" valign=\"middle\" bgcolor=\"#EAEAEA\">
		User ID: $photo</td>
        <td width=\"40%\" align=\"right\" valign=\"middle\" bgcolor=\"#EAEAEA\">
		<span class=\"black11\">Ref: $ad_no<span></td>
      </tr>
    </table></td>
  </tr>
 
            </table></td>


 

    </table></td>



    </table></td>
  </tr>

 

    <tr>
    <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black10\">
      <tr>
        <td width=\"65%\" align=\"left\" valign=\"bottom\">$copyright</td>
        <td width=\"35%\" align=\"right\" valign=\"middle\">$by <img src=\"../images/tbl_logo.jpg\" alt=\"\" width=\"61\" height=\"38\" align=\"absbottom\" /></td>
      </tr>
    </table></td>
  </tr>
  </table>";



$invoiceno=$p;
$_SESSION['invoice'] = $invoiceno;

$_SESSION['signature'] = $p;


mysql_close();



  echo"<script language='javascript'>window.location.href=\"admitcard/index.php\"; </script>";


?>
</body>
</html>








