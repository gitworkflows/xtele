<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link href="lib/style.css" rel="stylesheet" type="text/css" />
</head>

<body ondragstart="return false" onselectstart="return false">
  <?php


  include "lib/dbconnect.php";

  $postcode         = addslashes($_POST['postcode']);

  if (($post_code == "0") || ($post_code == "000")) {
    echo "<script language='javascript'>window.location.href=\"err.php?err=888\"; </script>";
    exit();
  }


  session_start();
  $postcode = $_SESSION['abc'];



  //get Data from post

  $out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
  while ($row_post = mysql_fetch_array($out_post)) {
    extract($row_post);
  }

  echo "<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head



  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">";

  include "lib/dbconnect.php";

  $docRoot = getenv("DOCUMENT_ROOT");
  //$ip = $_SERVER['REMOTE_ADDR'];

  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  //whether ip is from proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  //whether ip is from remote address
  else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }

  
  $alljobs_id = $_POST['alljobs_id'];

  $imageurl = $_POST["imageurl"];
  $signatureurl = $_POST["signatureurl"];


  $applytime = date("Y-m-d H:i:s");
  $extime = date('Y-m-d H:i:s', strtotime('+72 hours'));


  if($_FILES['photo']['size'] > 0 && !empty($_FILES['photo']['tmp_name']) && is_uploaded_file($_FILES['photo']['tmp_name'])) {
    $photo_name = $_FILES["photo"]["name"];
    $photo_kb = ($_FILES["photo"]["size"] / 1024);
    $photo_temp = $_FILES["photo"]["tmp_name"];
    $photo_size = GetImageSize("$photo_temp");
    $photo_width = $photo_size[0];
    $photo_height = $photo_size[1];
    $photo_ext = substr($photo_name, strpos($photo_name, '.'), strlen($photo_name) - 1);
    $photo_ext = strtolower($photo_ext);
  } else if(!empty($imageurl)) {
    $exploded = explode('/', $imageurl);
    $photo_name = end($exploded);
    $img_size = get_headers($imageurl, 1);
    $img_size_kb = $img_size["Content-Length"];
    $photo_kb = ($img_size_kb[1] / 1024);
    $photo_temp = $imageurl;
    $photo_size = getimagesize($photo_temp);
    $photo_width = $photo_size[0];
    $photo_height = $photo_size[1];
    $photo_ext = substr($photo_name, strpos($photo_name, '.'), strlen($photo_name) - 1);
    $photo_ext = strtolower($photo_ext);
  }

  if($_FILES['signature']['size'] > 0 && !empty($_FILES['signature']['tmp_name']) && is_uploaded_file($_FILES['signature']['tmp_name'])) {
    $signature_name = $_FILES["signature"]["name"];
    $signature_kb = ($_FILES["signature"]["size"] / 1024);
    $signature_temp = $_FILES["signature"]["tmp_name"];
    $signature_size = GetImageSize("$signature_temp");
    $signature_width = $signature_size[0];
    $signature_height = $signature_size[1];
    $signature_ext = substr($signature_name, strpos($signature_name, '.'), strlen($signature_name) - 1);
    $signature_ext = strtolower($signature_ext);
} else if(!empty($signatureurl)) {
    $exploded = explode('/', $signatureurl);
    $signature_name = end($exploded);
    $img_size = get_headers($signatureurl, 1);
    $img_size_kb = $img_size["Content-Length"];
    $signature_kb = ($img_size_kb[1] / 1024);
    $signature_temp = $signatureurl;
    $signature_size = getimagesize($signature_temp);
    $signature_width = $signature_size[0];
    $signature_height = $signature_size[1];
    $signature_ext = substr($signature_name, strpos($signature_name, '.'), strlen($signature_name) - 1);
    $signature_ext = strtolower($signature_ext);
  }

    // ************************************************ Need to remove this line ****************************************************************

    // Photo Validation
    if ($err < 1) {
      $valid_photo = 1;
      if ($photo_width != 300 || $photo_height != "300" || $photo_kb > 100 || $photo_kb < 4 || $photo_ext != ".jpg") {
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

    if ($err == '1') {
      echo "<script language='javascript'>window.location.href=\"edu_err.php?err=19\"; </script>";
      exit();
    }



    // Signature Validation
    if ($err < 1) {
      $valid_signature = 1;
      if ($signature_width != "300" || $signature_height != "80" || $signature_kb > 60 || $signature_kb < 3 || $signature_ext != ".jpg") {
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
    if ($err == '1') {
      echo "<script language='javascript'>window.location.href=\"edu_err.php?err=21\"; </script>";
      exit();
    }



    //Grayscale or true color?
    if ($err < 1) {
      $im = ImageCreateFromJpeg($photo_temp);
      $imgw = imagesx($im);
      $imgh = imagesy($im);
      $r = array();
      $g = array();
      $b = array();
      $c = 0;
      for ($i = 0; $i < $imgw; $i++) {
        for ($j = 0; $j < $imgh; $j++) {
          // get the rgb value for current pixel
          $rgb = ImageColorAt($im, $i, $j);
          // extract each value for r, g, b
          $r[$i][$j] = ($rgb >> 16) & 0xFF;
          $g[$i][$j] = ($rgb >> 8) & 0xFF;
          $b[$i][$j] = $rgb & 0xFF;
          // count gray pixels (r=g=b)
          if ($r[$i][$j] == $g[$i][$j] && $r[$i][$j] == $b[$i][$j]) {
            $c++;
          }
        }
      }
      $im_true_color = 1;
      if ($c == ($imgw * $imgh))  // image not true color
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

  if ($valid_photo == "1" && $valid_signature == "1") {
    //echo "<img src=\"images/loading.gif\" width=\"48\" height=\"48\" /> <br /> <br />
    //<span class=\"black12\">Your Request is processing! Please wait.... </span>";



    // upload photo

    function GeraHash($qtd)
    {

      //Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.


      $Caracteres = 'ABCDFGHJKLMNPQRSTUVXWYZ123456789';
      $QuantidadeCaracteres = strlen($Caracteres);
      $QuantidadeCaracteres--;

      $Hash = NULL;
      for ($x = 1; $x <= $qtd; $x++) {
        $Posicao = rand(0, $QuantidadeCaracteres);
        $Hash .= substr($Caracteres, $Posicao, 1);
      }

      return $Hash;
    }

    $p = GeraHash(8);
    $photo = $p;





      //upload Image
      $new_photo = "$p" . "$photo_ext";
      $output_file_p = "images/$post_code/photo/$new_photo";
      // Convert photo  -----------------------
      $img_jpeg_p = imagecreatefromjpeg($photo_temp);
      $img_w_p = 150;
      $img_h_p = 150;
      $tmp_p = imagecreatetruecolor($img_w_p, $img_h_p);
      imagecopyresampled($tmp_p, $img_jpeg_p, 0, 0, 0, 0, $img_w_p, $img_h_p, $photo_width, $photo_height);
      imagejpeg($tmp_p, $output_file_p, 80);
      imagedestroy($tmp_p);
      imagedestroy($img_jpeg_p);


      //upload signature
      $new_signature = "$p" . "$signature_ext";
      $output_file_s = "images/$post_code/signature/$new_signature";
      // Convert signature  --------------
      $img_jpeg_s = imagecreatefromjpeg($signature_temp);
      $img_w_s = 300;
      $img_h_s = 80;
      $tmp_s = imagecreatetruecolor($img_w_s, $img_h_s);
      imagecopyresampled($tmp_s, $img_jpeg_s, 0, 0, 0, 0, $img_w_s, $img_h_s, $signature_width, $signature_height);
      imagejpeg($tmp_s, $output_file_s, 80);
      imagedestroy($tmp_s);
      imagedestroy($img_jpeg_s);
  }

  if ($err == "1") {
    echo "$msg";
    exit();
  }


  //  ************************************************ Need to remove this line ****************************************************************




  $photo_confirm = "images/$post_code/photo/$new_photo";
  $sign_confirm = "images/$post_code/signature/$new_signature";

  if (file_exists($photo_confirm)) {
    $xx = 0;
  } else {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=21\"; </script>";
    exit();
  }

  if (file_exists($sign_confirm)) {
    $xx = 0;
  } else {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=21\"; </script>";
    exit();
  }
  //  ************************************************ Need to remove this line ****************************************************************








  include "lib/lastdate.php";
  include "lib/dbconnect.php";
  include "lib/fx.php";

  if ($active == "0") {
    exit;
  }


  if (!isset($_SESSION)) {
    session_start();
  }
  $auth = $_SESSION['ses_auth'];



  $post_code         = addslashes($_POST['post_code']);

  $post_name        = addslashes($_POST['post_name']);
  $apply_post         = addslashes($_POST['$apply_post']);

  $dept           = addslashes($_POST['dept']);
  $name           = addslashes($_POST['name']);
  $fathername       = addslashes($_POST['fathername']);
  $mothername       = addslashes($_POST['mothername']);
  $b_day           = addslashes($_POST['b_day']);
  $b_month         = addslashes($_POST['b_month']);
  $b_year         = addslashes($_POST['b_year']);
  $sex           = addslashes($_POST['sex']);
  $age_as         = addslashes($_POST['$age_as']);
  $age_as1         = addslashes($_POST['$age_as1']);
  $age_as2         = addslashes($_POST['$age_as2']);
  $age_as3         = addslashes($_POST['$age_as3']);
  $age_as4         = addslashes($_POST['$age_as4']);
  $age_as5         = addslashes($_POST['$age_as5']);

  $nationality       = addslashes($_POST['nationality']);
  $nid          = addslashes($_POST['nid']);
  $nid_no          = addslashes($_POST['nid_no']);
  $passport        = addslashes($_POST['passport']);
  $passport_no      = addslashes($_POST['passport_no']);
  $breg          = addslashes($_POST['breg']);
  $breg_no        = addslashes($_POST['breg_no']);
  $religion         = addslashes($_POST['religion']);
  $mstatus         = addslashes($_POST['mstatus']);
  $s_name         = addslashes($_POST['s_name']);
  $ffq           = addslashes($_POST['ffq']);
  $ff_quota           = addslashes($_POST['ff_quota']);

  $home_dist      = addslashes($_POST['menu_dist']);

  $copy           = addslashes($_POST['copy']);
  $present_care       = addslashes($_POST['present_care']);
  $present_vill       = addslashes($_POST['present_vill']);
  $present_dist_name       = addslashes($_POST['present_dist_name']);

  $present_dist      = addslashes($_POST['menu_one']);
  $present_ps       = addslashes($_POST['menu_one_list']);
  $present_ops       = addslashes($_POST['ops1']);
  $present_post       = addslashes($_POST['present_post']);
  $present_pcode       = addslashes($_POST['present_pcode']);


  $permanent_care     = addslashes($_POST['permanent_care']);
  $permanent_vill     = addslashes($_POST['permanent_vill']);
  $permanent_dist_name       = addslashes($_POST['permanent_dist_name']);

  $permanent_dist      = addslashes($_POST['menu_two']);
  $permanent_care     = addslashes($_POST['permanent_care']);
  $permanent_ps       = addslashes($_POST['menu_two_list']);
  $permanent_ops       = addslashes($_POST['ops2']);
  $permanent_post     = addslashes($_POST['permanent_post']);
  $permanent_pcode     = addslashes($_POST['permanent_pcode']);
  $mobileno         = addslashes($_POST['mobileno']);
  $confirmmobile         = addslashes($_POST['confirmmobile']);

  $Email           = addslashes($_POST['Email']);

  $masters        = addslashes($_POST['masters']);
  $phd        = addslashes($_POST['phd']);
  $dri_lic         = addslashes($_POST['dri_lic']);
  $dri_lic_type         = addslashes($_POST['dri_lic_type']);




  $ageactual           = addslashes($_POST['ageactual']);

  $ref_name_1         = addslashes($_POST['ref_name_1']);
  $ref_post_1         = addslashes($_POST['ref_post_1']);
  $ref_org_1         = addslashes($_POST['ref_org_1']);
  $ref_contact_1      = addslashes($_POST['ref_contact_1']);
  $ref_mail_1         = addslashes($_POST['ref_mail_1']);
  $ref_name_2         = addslashes($_POST['ref_name_2']);
  $ref_post_2         = addslashes($_POST['ref_post_2']);
  $ref_org_2         = addslashes($_POST['ref_org_2']);
  $ref_contact_2      = addslashes($_POST['ref_contact_2']);
  $ref_mail_2         = addslashes($_POST['ref_mail_2']);

  $validation       = addslashes($_POST['validation']);
  $code           = addslashes($_POST['code']);

  $exam1          = addslashes($_POST['exam1']);
  $institute1        = addslashes($_POST['institute1']);
  $year1          = addslashes($_POST['year1']);
  $roll1          = addslashes($_POST['roll1']);
  $result1        = addslashes($_POST['result1']);
  $result_gpa1              = addslashes($_POST['result_gpa1']);
  $result_eq1        = addslashes($_POST['result_eq1']);
  $subject1        = addslashes($_POST['subject1']);

  $exam2          = addslashes($_POST['exam2']);
  $institute2        = addslashes($_POST['institute2']);
  $year2          = addslashes($_POST['year2']);
  $roll2          = addslashes($_POST['roll2']);
  $result2        = addslashes($_POST['result2']);
  $result_gpa2        = addslashes($_POST['result_gpa2']);
  $result_eq2        = addslashes($_POST['result_eq2']);
  $subject2        = addslashes($_POST['subject2']);


  $exam3          = addslashes($_POST['exam3']);
  $institute3        = addslashes($_POST['institute3']);
  $year3          = addslashes($_POST['year3']);
  $roll3          = addslashes($_POST['roll3']);
  $result3        = addslashes($_POST['result3']);
  $result_gpa3        = addslashes($_POST['result_gpa3']);
  $result_eq3        = addslashes($_POST['result_eq3']);
  $subject3        = addslashes($_POST['subject3']);
  $duration3    = addslashes($_POST['duration3']);


  $exam4          = addslashes($_POST['exam4']);
  $institute4        = addslashes($_POST['institute4']);
  $year4          = addslashes($_POST['year4']);
  $roll4          = addslashes($_POST['roll4']);
  $result4        = addslashes($_POST['result4']);
  $result_gpa4        = addslashes($_POST['result_gpa4']);
  $result_eq4        = addslashes($_POST['result_eq4']);
  $subject4        = addslashes($_POST['subject4']);
  $duration4    = addslashes($_POST['duration4']);



  $exam5          = addslashes($_POST['exam5']);
  $institute5        = addslashes($_POST['institute5']);
  $year5          = addslashes($_POST['year5']);
  $roll5          = addslashes($_POST['roll5']);
  $result5        = addslashes($_POST['result5']);
  $result_gpa5        = addslashes($_POST['result_gpa5']);
  $result_eq5        = addslashes($_POST['result_eq5']);
  $subject5        = addslashes($_POST['subject5']);
  $duration5    = addslashes($_POST['duration5']);

  $job_no    = addslashes($_POST['job_no']);
  $ds    = addslashes($_POST['ds']);


  $job_post1    = addslashes($_POST['job_post1']);
  $organization1    = addslashes($_POST['organization1']);
  $job_res1    = addslashes($_POST['job_res1']);

  $t_day1           = addslashes($_POST['t_day1']);
  $t_month1         = addslashes($_POST['t_month1']);
  $t_year1         = addslashes($_POST['t_year1']);

  $f_day1           = addslashes($_POST['f_day1']);
  $f_month1         = addslashes($_POST['f_month1']);
  $f_year1         = addslashes($_POST['f_year1']);


  $till_now         = addslashes($_POST['till_now']);



  $job_post2    = addslashes($_POST['job_post2']);
  $organization2    = addslashes($_POST['organization2']);
  $job_res2    = addslashes($_POST['job_res2']);

  $t_day2           = addslashes($_POST['t_day2']);
  $t_month2         = addslashes($_POST['t_month2']);
  $t_year2         = addslashes($_POST['t_year2']);

  $f_day2           = addslashes($_POST['f_day2']);
  $f_month2         = addslashes($_POST['f_month2']);
  $f_year2         = addslashes($_POST['f_year2']);




  $job_post3    = addslashes($_POST['job_post3']);
  $organization3    = addslashes($_POST['organization3']);
  $job_res3    = addslashes($_POST['job_res3']);

  $t_day3           = addslashes($_POST['t_day3']);
  $t_month3         = addslashes($_POST['t_month3']);
  $t_year3         = addslashes($_POST['t_year3']);

  $f_day3           = addslashes($_POST['f_day3']);
  $f_month3         = addslashes($_POST['f_month3']);
  $f_year3         = addslashes($_POST['f_year3']);



  $job_post4    = addslashes($_POST['job_post4']);
  $organization4    = addslashes($_POST['organization4']);
  $job_res4    = addslashes($_POST['job_res4']);

  $t_day4           = addslashes($_POST['t_day4']);
  $t_month4         = addslashes($_POST['t_month4']);
  $t_year4         = addslashes($_POST['t_year4']);

  $f_day4           = addslashes($_POST['f_day4']);
  $f_month4         = addslashes($_POST['f_month4']);
  $f_year4         = addslashes($_POST['f_year4']);



  $job_post5    = addslashes($_POST['job_post5']);
  $organization5    = addslashes($_POST['organization5']);
  $job_res5    = addslashes($_POST['job_res5']);

  $t_day5           = addslashes($_POST['t_day5']);
  $t_month5         = addslashes($_POST['t_month5']);
  $t_year5         = addslashes($_POST['t_year5']);

  $f_day5           = addslashes($_POST['f_day5']);
  $f_month5         = addslashes($_POST['f_month5']);
  $f_year5         = addslashes($_POST['f_year5']);


  // Experience information

  $six_trai       = addslashes($_POST['six_trai']);
  $texp         = addslashes($_POST['exp']);
  $exp1           = addslashes($_POST['exp1']);
  $exp2         = addslashes($_POST['exp2']);
  $exp3           = addslashes($_POST['exp3']);
  $exp4         = addslashes($_POST['exp4']);
  $exp5           = addslashes($_POST['exp5']);

  $draft_man         = addslashes($_POST['draft_man']);
  $sur_vey         = addslashes($_POST['sur_vey']);
  $typ_spd         = addslashes($_POST['typ_spd']);
  $data_entry           = addslashes($_POST['data_entry']);
  $typ_speed           = addslashes($_POST['typ_speed']);
  $steno_typ           = addslashes($_POST['steno_typ']);
  $com_cer         = addslashes($_POST['com_cer']);





  $eight_cert         = addslashes($_POST['eight_cert']);
  $dri_lic         = addslashes($_POST['dri_lic']);

  $exp_one           = addslashes($_POST['exp_one']);
  $exp_two           = addslashes($_POST['exp_two']);
  $exp_three           = addslashes($_POST['exp_three']);
  $exp_four           = addslashes($_POST['exp_four']);
  $exp_five           = addslashes($_POST['exp_five']);


  $pass8           = addslashes($_POST['pass8']);
  $pexp5           = addslashes($_POST['pexp5']);
  $pexp2           = addslashes($_POST['pexp2']);
  $pexp4           = addslashes($_POST['pexp4']);
  $pexp22           = addslashes($_POST['pexp22']);
  $memcs           = addslashes($_POST['memcs']);
  $cddc             = addslashes($_POST['cddc']);
  $trai6             = addslashes($_POST['trai6']);

  $exp           = addslashes($_POST['exp']);
  $experience           = addslashes($_POST['experience']);

  $progexp5         = addslashes($_POST['progexp5']);
  $progexp2           = addslashes($_POST['progexp2']);
  $progexp4         = addslashes($_POST['progexp4']);
  $progexp22           = addslashes($_POST['progexp22']);
  $membercs           = addslashes($_POST['membercs']);
  $cerddc           = addslashes($_POST['cerddc']);
  $training           = addslashes($_POST['training']);


  $one_expvalue_110           = addslashes($_POST['one_expvalue_110']);
  $two_expvalue_110           = addslashes($_POST['two_expvalue_110']);
  $three_expvalue_110           = addslashes($_POST['three_expvalue_110']);
  $four_expvalue_110           = addslashes($_POST['four_expvalue_110']);


  $one_expvalue_120           = addslashes($_POST['one_expvalue_120']);
  $two_expvalue_120           = addslashes($_POST['two_expvalue_120']);
  $three_expvalue_120           = addslashes($_POST['three_expvalue_120']);

  $one_expvalue_130           = addslashes($_POST['one_expvalue_130']);
  $two_expvalue_130           = addslashes($_POST['two_expvalue_130']);
  $three_expvalue_130           = addslashes($_POST['three_expvalue_130']);



  $one_expvalue_140           = addslashes($_POST['one_expvalue_140']);
  $two_expvalue_140           = addslashes($_POST['two_expvalue_140']);
  $three_expvalue_140           = addslashes($_POST['three_expvalue_140']);

  $one_expvalue_150           = addslashes($_POST['one_expvalue_150']);
  $two_expvalue_150           = addslashes($_POST['two_expvalue_150']);
  $three_expvalue_150           = addslashes($_POST['three_expvalue_150']);

  $one_expvalue_160           = addslashes($_POST['one_expvalue_160']);
  $two_expvalue_160           = addslashes($_POST['two_expvalue_160']);
  $three_expvalue_160           = addslashes($_POST['three_expvalue_160']);


  $one_expvalue_170           = addslashes($_POST['one_expvalue_170']);
  $two_expvalue_170           = addslashes($_POST['two_expvalue_170']);
  $three_expvalue_170           = addslashes($_POST['three_expvalue_170']);


  $one_expvalue_180           = addslashes($_POST['one_expvalue_180']);
  $two_expvalue_180           = addslashes($_POST['two_expvalue_180']);
  $three_expvalue_180           = addslashes($_POST['three_expvalue_180']);


  $one_expvalue_190           = addslashes($_POST['one_expvalue_190']);
  $two_expvalue_190           = addslashes($_POST['two_expvalue_190']);
  $three_expvalue_190           = addslashes($_POST['three_expvalue_190']);


  $one_expvalue_200           = addslashes($_POST['one_expvalue_200']);
  $two_expvalue_200           = addslashes($_POST['two_expvalue_200']);
  $three_expvalue_200           = addslashes($_POST['three_expvalue_200']);


  $one_expvalue_210           = addslashes($_POST['one_expvalue_210']);
  $two_expvalue_210           = addslashes($_POST['two_expvalue_210']);
  $three_expvalue_210           = addslashes($_POST['three_expvalue_210']);


  $one_expvalue_220           = addslashes($_POST['one_expvalue_220']);
  $two_expvalue_220           = addslashes($_POST['two_expvalue_220']);
  $three_expvalue_220           = addslashes($_POST['three_expvalue_220']);


  $one_expvalue_230           = addslashes($_POST['one_expvalue_230']);
  $two_expvalue_230           = addslashes($_POST['two_expvalue_230']);
  $three_expvalue_230           = addslashes($_POST['three_expvalue_230']);



  $one_expvalue_240           = addslashes($_POST['one_expvalue_240']);
  $two_expvalue_240           = addslashes($_POST['two_expvalue_240']);
  $three_expvalue_240           = addslashes($_POST['three_expvalue_240']);



  $one_expvalue_250           = addslashes($_POST['one_expvalue_250']);
  $two_expvalue_250           = addslashes($_POST['two_expvalue_250']);
  $three_expvalue_250           = addslashes($_POST['three_expvalue_250']);



  $one_expvalue_260           = addslashes($_POST['one_expvalue_260']);
  $two_expvalue_260           = addslashes($_POST['two_expvalue_260']);
  $three_expvalue_260           = addslashes($_POST['three_expvalue_260']);


  $one_expvalue_270           = addslashes($_POST['one_expvalue_270']);
  $two_expvalue_270           = addslashes($_POST['two_expvalue_270']);
  $three_expvalue_270           = addslashes($_POST['three_expvalue_270']);


  $one_expvalue_280           = addslashes($_POST['one_expvalue_280']);
  $two_expvalue_280           = addslashes($_POST['two_expvalue_280']);
  $three_expvalue_280           = addslashes($_POST['three_expvalue_280']);


  $one_expvalue_290           = addslashes($_POST['one_expvalue_290']);
  $two_expvalue_290           = addslashes($_POST['two_expvalue_290']);
  $three_expvalue_290           = addslashes($_POST['three_expvalue_290']);

  $one_expvalue_300           = addslashes($_POST['one_expvalue_300']);
  $two_expvalue_300           = addslashes($_POST['two_expvalue_300']);
  $three_expvalue_300           = addslashes($_POST['three_expvalue_300']);



  $one_expvalue_310           = addslashes($_POST['one_expvalue_310']);
  $two_expvalue_310           = addslashes($_POST['two_expvalue_310']);
  $three_expvalue_310           = addslashes($_POST['three_expvalue_310']);


  $one_expvalue_320           = addslashes($_POST['one_expvalue_320']);
  $two_expvalue_320           = addslashes($_POST['two_expvalue_320']);
  $three_expvalue_320           = addslashes($_POST['three_expvalue_320']);


  $one_expvalue_330           = addslashes($_POST['one_expvalue_330']);
  $two_expvalue_330           = addslashes($_POST['two_expvalue_330']);
  $three_expvalue_330           = addslashes($_POST['three_expvalue_330']);


  $one_expvalue_340           = addslashes($_POST['one_expvalue_340']);
  $two_expvalue_340           = addslashes($_POST['two_expvalue_340']);
  $three_expvalue_340           = addslashes($_POST['three_expvalue_340']);

  $one_expvalue_350           = addslashes($_POST['one_expvalue_350']);
  $two_expvalue_350           = addslashes($_POST['two_expvalue_350']);
  $three_expvalue_350           = addslashes($_POST['three_expvalue_350']);

  $one_expvalue_360           = addslashes($_POST['one_expvalue_360']);
  $two_expvalue_360           = addslashes($_POST['two_expvalue_360']);
  $three_expvalue_360           = addslashes($_POST['three_expvalue_360']);

  $one_expvalue_370           = addslashes($_POST['one_expvalue_370']);
  $two_expvalue_370           = addslashes($_POST['two_expvalue_370']);
  $three_expvalue_370           = addslashes($_POST['three_expvalue_370']);

  $one_expvalue_380           = addslashes($_POST['one_expvalue_380']);
  $two_expvalue_380           = addslashes($_POST['two_expvalue_380']);
  $three_expvalue_380           = addslashes($_POST['three_expvalue_380']);



  $one_expvalue_400           = addslashes($_POST['one_expvalue_400']);
  $two_expvalue_400           = addslashes($_POST['two_expvalue_400']);
  $three_expvalue_400           = addslashes($_POST['three_expvalue_400']);



  $ca_cert         = addslashes($_POST['ca_cert']);
  $cma_cert         = addslashes($_POST['cma_cert']);
  $ad_no         = addslashes($_POST['ad_no']);
  $dob  = "$b_year" . "-" . "$b_month" . "-" . "$b_day";


  /*if($till_now = "1")
{$till_now = "Till Now";}

else
 {$till_now = "NA";}*/

  //echo "This is Till Now:$till_now, In DB:$till_now1";

  /*

if($post_code=='110' || $post_code=='130'|| $post_code=='160'|| $post_code=='170')
    { $job_exp=2;}

*/

  session_start();
  $present_ps_name = $_SESSION['present_ps'];
  $permanent_ps_name = $_SESSION['permanent_ps'];





  if ($result1 == "GPA-4") {
    $result1 = "out of GPA-4";
  }

  if ($result1 == "GPA-5") {
    $result1 = "out of GPA-5";
  }

  if ($result2 == "GPA-4") {
    $result2 = "out of GPA-4";
  }

  if ($result2 == "GPA-5") {
    $result2 = "out of GPA-5";
  }


  if ($result3 == "GPA-4") {
    $result3 = "out of GPA-4";
  }

  if ($result3 == "GPA-5") {
    $result3 = "out of GPA-5";
  }



  if ($result4 == "GPA-4") {
    $result4 = "out of GPA-4";
  }

  if ($result4 == "GPA-5") {
    $result4 = "out of GPA-5";
  }

  if ($result2 == "GPA-6") {
    $result2 = "Passed";
  }

  if ($result3 == "GPA-6") {
    $result3 = "Passed";
  }

  if ($result4 == "GPA-6") {
    $result4 = "Passed";
  }


  if ($result_gpa1 == '1' && $result1 == "Division") {
    $result_gpa1 = "1st";
  }

  if ($result_gpa1 == '2' && $result1 == "Division") {
    $result_gpa1 = "2nd";
  }

  if ($result_gpa1 == '3' && $result1 == "Division") {
    $result_gpa1 = "3rd";
  }




  if ($result_gpa2 == '1' && $result2 == "Division") {
    $result_gpa2 = "1st";
  }

  if ($result_gpa2 == '2' && $result2 == "Division") {
    $result_gpa2 = "2nd";
  }

  if ($result_gpa2 == '3' && $result2 == "Division") {
    $result_gpa2 = "3rd";
  }




  if ($result_gpa3 == '1' && $result3 == "Division") {
    $result_gpa3 = "1st";
  }

  if ($result_gpa3 == '2' && $result3 == "Division") {
    $result_gpa3 = "2nd";
  }

  if ($result_gpa3 == '3' && $result3 == "Division") {
    $result_gpa3 = "3rd";
  }

  //echo "$post_code,$result_gpa3,$result3";			
  if ($post_code == '250') {
    if ($result_gpa3 == '1' && $result3 == "Class") {
      $result_gpa3 = "MBBS Pass";
    }
  } else {
    if ($result_gpa3 == '1' && $result3 == "Class") {
      $result_gpa3 = "1st";
    }
  }

  if ($result_gpa3 == '1' && $result3 == "Class") {
    $result_gpa3 = "1st";
  }

  if ($result_gpa3 == '2' && $result3 == "Class") {
    $result_gpa3 = "2nd";
  }

  if ($result_gpa3 == '3' && $result3 == "Class") {
    $result_gpa3 = "3rd";
  }


  // MBBS Degree
  //if (($post_code=='250') && ($result_gpa3="MBBS Pass"))
  //  {$result3="";}



  if ($result_gpa4 == '1' && $result4 == "Class") {
    $result_gpa4 = "1st";
  }

  if ($result_gpa4 == '2' && $result4 == "Class") {
    $result_gpa4 = "2nd";
  }

  if ($result_gpa4 == '3' && $result4 == "Class") {
    $result_gpa4 = "3rd";
  }






  session_start();

  $age_as1 = $_SESSION['myValue1'];
  $age_as2 = $_SESSION['myValue2'];
  $age_as3 = $_SESSION['myValue3'];
  $age_as4 = $_SESSION['myValue4'];
  $age_as5 = $_SESSION['myValue5'];



  /*if($ds=='1')
 {$ds="BNFE Employee";}*/





  //echo "dfdfdfdfd: $result1";


  ///*****************************************************      Function working ***************************************************************

  //get Data from post

  $out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
  while ($row_post = mysql_fetch_array($out_post)) {
    extract($row_post);
  }



  // *********************************************************  Post Code = 110  ***********************************************************************




  if ($exp_110_03 != "0") {
    $exp_110_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_110_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_110</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_110_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_110</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_110_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_110</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
  } else if ($exp_110_02 != "0") {
    $exp_110_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_110_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_110</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_110_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_110</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
  } else if ($exp_110_01 != "0") {
    $exp_110_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_110_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_110</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
  }



  // *********************************************************  Post Code = 120  ***********************************************************************




  if ($exp_120_03 != "0") {
    $exp_120_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_120_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_120</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_120_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_120</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_120_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_120</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
  } else if ($exp_120_02 != "0") {
    $exp_120_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_120_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_120</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_120_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_120</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
  } else if ($exp_120_01 != "0") {
    $exp_120_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_120_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_120</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
  }


  // *********************************************************  Post Code = 130  ***********************************************************************




  if ($exp_130_03 != "0") {
    $exp_130_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_130_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_130</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_130_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_130</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_130_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_130</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
  } else if ($exp_130_02 != "0") {
    $exp_130_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_130_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_130</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_130_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_130</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
  } else if ($exp_130_01 != "0") {
    $exp_130_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_130_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_130</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
  }


  //echo "pld post code = $post_code  new post code= $postcode";

  // *********************************************************  Post Code = 140  ***********************************************************************


  if ($postcode == '140') {


    if ($exp_140_03 != "0") {
      $exp_140_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_140_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_140</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_140_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_140</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_140_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_140</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_140_02 != "0") {
      $exp_140_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_140_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_140</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_140_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_140</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_140_01 != "0") {
      $exp_140_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_140_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_140</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }




  // *********************************************************  Post Code = 150  ***********************************************************************



  if ($postcode == '150') {



    if ($exp_150_03 != "0") {
      $exp_150_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_150_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_150</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_150_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_150</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_150_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_150</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_150_02 != "0") {
      $exp_150_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_150_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_150</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_150_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_150</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_150_01 != "0") {
      $exp_150_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_150_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_150</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }



  // *********************************************************  Post Code = 160  ***********************************************************************



  if ($postcode == '160') {

    if ($exp_160_03 != "0") {
      $exp_160_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_160_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_160</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_160_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_160</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_160_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_160</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_160_02 != "0") {
      $exp_160_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_160_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_160</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_160_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_160</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_160_01 != "0") {
      $exp_160_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_160_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_160</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }

  // *********************************************************  Post Code = 170  ***********************************************************************



  if ($postcode == '170') {



    if ($exp_170_03 != "0") {
      $exp_170_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_170_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_170</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_170_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_170</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_170_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_170</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_170_02 != "0") {
      $exp_170_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_170_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_170</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_170_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_170</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_170_01 != "0") {
      $exp_170_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_170_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_170</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }


  // *********************************************************  Post Code = 180  ***********************************************************************



  if ($postcode == '180') {



    if ($exp_180_03 != "0") {
      $exp_180_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_180_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_180</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_180_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_180</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_180_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_180</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_180_02 != "0") {
      $exp_180_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_180_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_180</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_180_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_180</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_180_01 != "0") {
      $exp_180_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_180_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_180</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }

  // *********************************************************  Post Code = 190  ***********************************************************************




  if ($postcode == '190') {


    if ($exp_190_03 != "0") {
      $exp_190_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_190_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_190</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_190_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_190</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_190_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_190</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_190_02 != "0") {
      $exp_190_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_190_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_190</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_190_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_190</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_190_01 != "0") {
      $exp_190_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_190_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_190</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }



  // *********************************************************  Post Code = 200  ***********************************************************************





  if ($postcode == '200') {

    if ($exp_200_03 != "0") {
      $exp_200_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_200_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_200</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_200_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_200</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_200_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_200</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_200_02 != "0") {
      $exp_200_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_200_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_200</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_200_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_200</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_200_01 != "0") {
      $exp_200_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_200_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_200</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 210  ***********************************************************************

  if ($postcode == '210') {


    if ($exp_210_03 != "0") {
      $exp_210_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_210_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_210</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_210_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_210</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_210_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_210</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_210_02 != "0") {
      $exp_210_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_210_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_210</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_210_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_210</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_210_01 != "0") {
      $exp_210_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_210_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_210</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }




  // *********************************************************  Post Code = 220  ***********************************************************************

  if ($postcode == '220') {


    if ($exp_220_03 != "0") {
      $exp_220_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_220_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_220</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_220_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_220</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_220_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_220</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_220_02 != "0") {
      $exp_220_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_220_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_220</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_220_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_220</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_220_01 != "0") {
      $exp_220_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_220_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_220</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 230  ***********************************************************************

  if ($postcode == '230') {


    if ($exp_230_03 != "0") {
      $exp_230_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_230_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_230</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_230_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_230</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_230_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_230</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_230_02 != "0") {
      $exp_230_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_230_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_230</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_230_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_230 ($dri_lic_type)</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_230_01 != "0") {
      $exp_230_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_230_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_230</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }



  // *********************************************************  Post Code = 240  ***********************************************************************

  if ($postcode == '240') {


    if ($exp_240_03 != "0") {
      $exp_240_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_240_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_240</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_240_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_240</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_240_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_240</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_240_02 != "0") {
      $exp_240_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_240_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_240</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_240_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_240</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_240_01 != "0") {
      $exp_240_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_240_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_240</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }



  // *********************************************************  Post Code = 250  ***********************************************************************

  if ($postcode == '250') {


    if ($exp_250_03 != "0") {
      $exp_250_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_250_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_250</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_250_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_250</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_250_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_250</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_250_02 != "0") {
      $exp_250_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_250_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_250</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_250_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_250</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_250_01 != "0") {
      $exp_250_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Experience Information:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_250_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_250</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 260  ***********************************************************************




  if ($postcode == '260') {


    if ($exp_260_03 != "0") {
      $exp_260_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_260_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_260</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_260_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_260</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_260_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_260</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_260_02 != "0") {
      $exp_260_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_260_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_260</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_260_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_260</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_260_01 != "0") {
      $exp_260_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_260_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_260</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 270  ***********************************************************************




  if ($postcode == '270') {


    if ($exp_270_03 != "0") {
      $exp_270_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_270_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_270</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_270_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_270</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_270_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_270</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_270_02 != "0") {
      $exp_270_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_270_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_270</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_270_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_270</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_270_01 != "0") {
      $exp_270_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_270_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_270</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 280  ***********************************************************************




  if ($postcode == '280') {


    if ($exp_280_03 != "0") {
      $exp_280_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_280_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_280</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_280_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_280</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_280_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_280</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_280_02 != "0") {
      $exp_280_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_280_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_280</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_280_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_280</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_280_01 != "0") {
      $exp_280_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_280_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_280</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 290  ***********************************************************************




  if ($postcode == '290') {


    if ($exp_290_03 != "0") {
      $exp_290_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_290_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_290</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_290_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_290</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_290_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_290</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_290_02 != "0") {
      $exp_290_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_290_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_290</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_290_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_290</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_290_01 != "0") {
      $exp_290_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_290_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_290</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 300  ***********************************************************************




  if ($postcode == '300') {


    if ($exp_300_03 != "0") {
      $exp_300_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_300_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_300</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_300_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_300</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_300_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_300</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_300_02 != "0") {
      $exp_300_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_300_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_300</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_300_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_300</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_300_01 != "0") {
      $exp_300_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_300_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_300</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 310  ***********************************************************************




  if ($postcode == '310') {


    if ($exp_310_03 != "0") {
      $exp_310_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_310_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_310</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_310_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_310</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_310_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_310</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_310_02 != "0") {
      $exp_310_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_310_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_310</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_310_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_310</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_310_01 != "0") {
      $exp_310_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_310_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_310</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }





  // *********************************************************  Post Code = 320  ***********************************************************************




  if ($postcode == '320') {


    if ($exp_320_03 != "0") {
      $exp_320_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_320_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_320</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_320_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_320</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_320_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_320</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_320_02 != "0") {
      $exp_320_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_320_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_320</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_320_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_320</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_320_01 != "0") {
      $exp_320_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_320_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_320</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }




  // *********************************************************  Post Code = 330  ***********************************************************************




  if ($postcode == '330') {


    if ($exp_330_03 != "0") {
      $exp_330_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_330_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_330</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_330_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_330</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_330_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_330</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_330_02 != "0") {
      $exp_330_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_330_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_330</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_330_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_330</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_330_01 != "0") {
      $exp_330_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_330_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_330</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }








  // *********************************************************  Post Code = 340  ***********************************************************************




  if ($postcode == '340') {


    if ($exp_340_03 != "0") {
      $exp_340_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_340_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_340</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_340_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_340</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_340_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_340</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_340_02 != "0") {
      $exp_340_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_340_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_340</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_340_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_340</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_340_01 != "0") {
      $exp_340_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_340_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_340</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }

  // *********************************************************  Post Code = 350  ***********************************************************************




  if ($postcode == '350') {


    if ($exp_350_03 != "0") {
      $exp_350_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_350_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_350</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_350_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_350</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_350_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_350</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_350_02 != "0") {
      $exp_350_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_350_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_350</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_350_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_350</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_350_01 != "0") {
      $exp_350_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_350_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_350</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }


  // *********************************************************  Post Code = 360  ***********************************************************************


  if ($postcode == '360') {


    if ($exp_360_03 != "0") {
      $exp_360_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_360_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_360</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_360_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_360</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_360_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_360</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_360_02 != "0") {
      $exp_360_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_360_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_360</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_360_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_360</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_360_01 != "0") {
      $exp_360_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_360_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_360</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }


  // *********************************************************  Post Code = 370  ***********************************************************************

  if ($postcode == '370') {


    if ($exp_370_03 != "0") {
      $exp_370_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_370_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_370</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_370_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_370</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_370_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_370</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_370_02 != "0") {
      $exp_370_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_370_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_370</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_370_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_370</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_370_01 != "0") {
      $exp_370_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_370_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_370</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }



  // *********************************************************  Post Code = 380  ***********************************************************************

  if ($postcode == '380') {


    if ($exp_380_03 != "0") {
      $exp_380_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_380_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_380</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_380_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_380</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_380_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_380</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_380_02 != "0") {
      $exp_380_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_380_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_380</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_380_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_380</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_380_01 != "0") {
      $exp_380_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_380_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_380</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }



  // *********************************************************  Post Code = 400  ***********************************************************************




  if ($postcode == '400') {


    if ($exp_400_03 != "0") {
      $exp_400_03_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_400_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_400</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_400_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_400</td>
	         </tr>


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_400_03  </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$three_expvalue_400</td>
	         </tr>

		</table></td>
	</tr>
	
	</tr>";
    } else if ($exp_400_02 != "0") {
      $exp_400_02_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_400_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_400</td>
	         </tr>

            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_400_02 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$two_expvalue_400</td>
	         </tr>


          </table></td>
	</tr>
	
	</tr>";
    } else if ($exp_400_01 != "0") {
      $exp_400_01_tab = "<tr>
 	 <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Mandatory Professional Experience:</td>
 	 </tr>
         
	
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">


            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >$exp_400_01 </td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$one_expvalue_400</td>
	         </tr>

          </table></td>
	</tr>
	
	</tr>";
    }
  }

















  // ***********************************************   Experienc print out   *********************************************


  // ***********************************************   Experienc print out   *********************************************

  if (($t_year1 != "") && ($t_month1 != "") && ($t_day1 != "")) {
    $exp_flag = '1';
  }


  if (($t_year2 != "") && ($t_month2 != "") && ($t_day2 != "")) {
    $exp_flag = '2';
  }


  if (($t_year3 != "") && ($t_month3 != "") && ($t_day3 != "")) {
    $exp_flag = '3';
  }


  if (($t_year4 != "") && ($t_month4 != "") && ($t_day4 != "")) {
    $exp_flag = '4';
  }


  if (($t_year5 != "") && ($t_month5 != "") && ($t_day5 != "")) {
    $exp_flag = '5';
  }



  // 5 nos Experience


  if (($job_exp == '1') && ($exp_flag == "5")) {
    $job_exp_tab = "<tr>


  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

    <tr>
     <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
   <table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
      


   
	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Organization Name</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      <td width=\"25%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">End Date</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>

          <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day1/$t_month1/$t_year1</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day1/$f_month1/$f_year1<br/> $till_now</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


 	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day2/$t_month2/$t_year2</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day2/$f_month2/$f_year2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as2</td>
            </tr>

	 <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day3/$t_month3/$t_year3</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day3/$f_month3/$f_year3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as3</td>
         </tr>


	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization4</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post4</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res4</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day4/$t_month4/$t_year4</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day4/$f_month4/$f_year4</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as4</td>
            </tr>

 	<tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization5</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post5</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res5</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day5/$t_month5/$t_year5</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day5/$f_month5/$f_year5</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as5</td>
    


     </table> 

  </tr>";
  } else if (($job_exp == '1') && ($exp_flag == "4")) {
    $job_exp_tab = "<tr>


  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

    <tr>
     <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
   <table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
      


   
	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Organization Name</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      <td width=\"25%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">End Date</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>

          <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day1/$t_month1/$t_year1</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day1/$f_month1/$f_year1 <br/>$till_now</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


 	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day2/$t_month2/$t_year2</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day2/$f_month2/$f_year2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as2</td>
            </tr>

	 <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day3/$t_month3/$t_year3</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day3/$f_month3/$f_year3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as3</td>
         </tr>


	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization4</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post4</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res4</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day4/$t_month4/$t_year4</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day4/$f_month4/$f_year4</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as4</td>
            </tr>

 	
     </table> 

  </tr>";
  } else if (($job_exp == '1') && ($exp_flag == "3")) {
    $job_exp_tab = "<tr>


  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

    <tr>
     <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
   <table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
      


   
	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Organization Name</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      <td width=\"25%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">End Date</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>

          <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day1/$t_month1/$t_year1</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day1/$f_month1/$f_year1 <br/>$till_now</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


 	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day2/$t_month2/$t_year2</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day2/$f_month2/$f_year2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as2</td>
            </tr>

	 <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day3/$t_month3/$t_year3</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day3/$f_month3/$f_year3</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as3</td>
         </tr>

 	
     </table> 

  </tr>";
  } else if (($job_exp == '1') && ($exp_flag == "2")) {
    $job_exp_tab = "<tr>


  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

    <tr>
     <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
   <table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
      


   
	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Organization Name</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      <td width=\"25%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">End Date</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>

          <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day1/$t_month1/$t_year1</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day1/$f_month1/$f_year1 <br/>$till_now</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


 	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day2/$t_month2/$t_year2</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day2/$f_month2/$f_year2</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as2</td>
            </tr>

	
 	
     </table> 

  </tr>";
  } else if (($job_exp == '1') && ($exp_flag == "1")) {
    $job_exp_tab = "<tr>


  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

    <tr>
     <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">
   <table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
      


   
	   <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Organization Name</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Post Name</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Responsibilities</td>
  	      <td width=\"25%\" align=\"left\" valign=\"middle\">Start Date</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">End Date</td>
 	      <td width=\"25%\" align=\"left\" valign=\"middle\">Total Experience</td>
   
              </tr>

          <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$organization1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_post1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$job_res1</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$t_day1/$t_month1/$t_year1</td>	
              <td width=\"25%\" align=\"left\" valign=\"middle\">$f_day1/$f_month1/$f_year1 <br/>$till_now</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as1</td>
            </tr>


 	   	
     </table> 

  </tr>";
  }



  // ******************************************************  End of Experiences **************************************************************************




  /// *********************************************************************** Final funtion  **********************************************************************

  $ttt = 0;


  include "lib/dbconnect.php";

  // SQL query
  $strSQL = "SELECT * FROM cedu WHERE invoice = '$photo'";

  // Execute the query (the recordset $rs contains the result)

  $rs = mysql_query($strSQL);


  while ($row = mysql_fetch_array($rs)) {

    $ttt = $row['invoice'] . "<br />";
  }

  if (($post_code == "0") || ($post_code == "000")) {
    echo "<script language='javascript'>window.location.href=\"err.php?err=888\"; </script>";
    exit();
  } else {


    if ($ttt == '0') {

      $sql = "INSERT INTO cedu (sl,invoice,post_code,post_name,
s_exam ,s_roll ,s_board ,s_year ,s_group ,s_result ,s_result_type ,s_result_eq ,
h_exam ,h_roll ,h_board ,h_year ,h_group ,h_result ,h_result_type ,h_result_eq ,
g_exam ,g_sub ,g_institute , g_year ,g_duration ,g_result ,g_result_type ,g_result_eq ,
m_exam ,m_sub ,m_institute , m_year ,m_duration ,m_result ,m_result_type ,m_result_eq ,
p_exam ,p_sub ,p_institute , p_year ,p_duration ,p_result ,p_result_type ,p_result_eq ,
job_exp , computer_literacy , curricular,exp_five, ageactual,eight_pass) 


VALUES ('0','$photo','$post_code','$post_name',
'$exam1','$roll1','$institute1','$year1','$subject1','$result_gpa1','$result1','$result_eq1',
'$exam2','$roll2','$institute2','$year2','$subject2','$result_gpa2','$result2','$result_eq2',
'$exam3','$subject3','$institute3','$year3','$duration3','$result_gpa3','$result3','$result_eq3',
'$exam4','$subject4','$institute4','$year4','$duration4','$result_gpa4','$result4','$result_eq4',
'$exam5','$subject5','$institute5','$year5','$duration5','$result_gpa5','$result5','$result_eq5',

'$experience','$computer_literacy','$curricular','$exp_five','$ageactual','$eight_cert')";
    } else {
      echo "<script language='javascript'>window.location.href=\"err.php?err=142\"; </script>";
      exit();
    }



    if (mysqli_query($conn, $sql)) {
      $as = 'dfd';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      exit();
    }
  }


  switch ($nid) {
    case 1:
      $nid_value = "$nid_no";
      break;
    case 2:
      $nid_value = "N/A";
      break;
    default:
      $nid_value = "";
  }


  if ($passport == "No") {
    $passport_no = "N/A";
  }
  if ($nid == "No") {
    $nid_no = "N/A";
  }
  if ($breg == "No") {
    $breg_no = "N/A";
  }


  if (($post_code == "0") || ($post_code == "000")) {
    echo "<script language='javascript'>window.location.href=\"err.php?err=888\"; </script>";
    exit();
  } else {

    // cinfo data inserting

    include "lib/dbconnect.php";



    $sql = "INSERT INTO cinfo ( sl , invoice , post_code ,post_name, name , father , mother, b_date, b_month, b_year, dob , age_as , sex , nid , nid_no , passport,passport_no,breg,breg_no, religion , mstatus , s_name , alljobs_id, ffq , dept, homedistrict , 
present_care , present_vill , present_dist , present_ps , present_post , present_pcode , permanent_care , permanent_vill, permanent_dist, permanent_ps, permanent_post, permanent_pcode, mobile, email,loginIP, inTime , extime , fee , 
screening, vcode,   d_status, org_name1, post_name1, responsible1, start_date1, end_date1, till_now1, texp1, org_name2, post_name2, responsible2, start_date2, end_date2, texp2, org_name3, post_name3, responsible3, start_date3, end_date3,texp3, org_name4, post_name4, responsible4, start_date4, end_date4,texp4, org_name5, post_name5, responsible5, start_date5, end_date5,texp5, 
age_as1, age_as2,age_as3,age_as4, age_as5, one_expvalue_110,two_expvalue_110,three_expvalue_110,one_expvalue_120,two_expvalue_120,three_expvalue_120,one_expvalue_130,two_expvalue_130,three_expvalue_130, one_expvalue_140,two_expvalue_140,three_expvalue_140, 
one_expvalue_150,two_expvalue_150,three_expvalue_150, one_expvalue_160,two_expvalue_160,three_expvalue_160,one_expvalue_170,two_expvalue_170,three_expvalue_170,
one_expvalue_180,two_expvalue_180,three_expvalue_180,one_expvalue_190,two_expvalue_190,three_expvalue_190,one_expvalue_200,two_expvalue_200,three_expvalue_200,
one_expvalue_210,two_expvalue_210,three_expvalue_210,one_expvalue_220,two_expvalue_220,three_expvalue_220,one_expvalue_230,two_expvalue_230,three_expvalue_230,one_expvalue_240,two_expvalue_240,three_expvalue_240,one_expvalue_250,two_expvalue_250,three_expvalue_250,
one_expvalue_260,two_expvalue_260,three_expvalue_260,one_expvalue_270,two_expvalue_270,three_expvalue_270,one_expvalue_280,two_expvalue_280,three_expvalue_280,one_expvalue_290,two_expvalue_290,three_expvalue_290,
one_expvalue_300,two_expvalue_300,three_expvalue_300,one_expvalue_310,two_expvalue_310,three_expvalue_310,
one_expvalue_320,two_expvalue_320,three_expvalue_320,one_expvalue_330,two_expvalue_330,three_expvalue_330,
one_expvalue_340,two_expvalue_340,three_expvalue_340,one_expvalue_350,two_expvalue_350,three_expvalue_350,
one_expvalue_360,two_expvalue_360,three_expvalue_360,one_expvalue_370,two_expvalue_370,three_expvalue_370,one_expvalue_380,two_expvalue_380,three_expvalue_380,


draftman, surveyor,data_entry,typ_speed,typ_spd,steno_typ, com_cer, eight_pass,dri_lic,dri_lic_type,exp_three )


VALUES ('0', '$photo', '$post_code', '$post_name','$name', '$fathername', '$mothername', '$b_day', '$b_month', '$b_year','$dob', '$ageactual', '$sex', '$nid', '$nid_no','$passport','$passport_no','$breg','$breg_no', '$religion ', '$mstatus', '$s_name', '$alljobs_id', '$ff_quota','$dept','$homedistrict',
'$present_care', '$present_vill', '$present_dist_name', '$present_ps_name', '$present_post', '$present_pcode', '$permanent_care', '$permanent_vill', '$permanent_dist_name', '$permanent_ps_name', '$permanent_post', '$permanent_pcode', '$mobileno', '$Email','$ip', '$applytime', '$extime',
'$fee', '$screening', '$vcode','$ds','$organization1', '$job_post1','$job_res1','$t_day1/$t_month1/$t_year1','$f_day1/$f_month1/$f_year1','$till_now', '$texp1','$organization2', '$job_post2','$job_res2','$t_day2/$t_month2/$t_year2','$f_day2/$f_month2/$f_year2', '$texp2','$organization3', 
'$job_post3','$job_res3','$t_day3/$t_month3/$t_year3','$f_day3/$f_month3/$f_year3', '$texp3','$organization4', '$job_post4','$job_res4','$t_day4/$t_month4/$t_year4','$f_day4/$f_month4/$f_year4', '$texp4','$organization5', '$job_post5','$job_res5','$t_day5/$t_month5/$t_year5','$f_day5/$f_month5/$f_year5', '$texp5','$age_as1','$age_as2','$age_as3','$age_as4','$age_as5','$one_expvalue_110','$two_expvalue_110','$three_expvalue_110','$one_expvalue_120','$two_expvalue_120','$three_expvalue_120','$one_expvalue_130','$two_expvalue_130',
'$three_expvalue_130','$one_expvalue_140','$two_expvalue_140','$three_expvalue_140','$one_expvalue_150','$two_expvalue_150','$three_expvalue_150',

'$one_expvalue_160','$two_expvalue_160','$three_expvalue_160','$one_expvalue_170','$two_expvalue_170','$three_expvalue_170',
'$one_expvalue_180','$two_expvalue_180','$three_expvalue_180','$one_expvalue_190','$two_expvalue_190','$three_expvalue_190',
'$one_expvalue_200','$two_expvalue_200','$three_expvalue_200','$one_expvalue_210','$two_expvalue_210','$three_expvalue_210',

'$one_expvalue_220','$two_expvalue_220','$three_expvalue_220','$one_expvalue_230','$two_expvalue_230','$three_expvalue_230',
'$one_expvalue_240','$two_expvalue_240','$three_expvalue_240','$one_expvalue_250','$two_expvalue_250','$three_expvalue_250',
'$one_expvalue_260','$two_expvalue_260','$three_expvalue_260','$one_expvalue_270','$two_expvalue_270','$three_expvalue_270',


'$one_expvalue_280','$two_expvalue_280','$three_expvalue_280','$one_expvalue_290','$two_expvalue_290','$three_expvalue_290',
'$one_expvalue_300','$two_expvalue_300','$three_expvalue_300','$one_expvalue_310','$two_expvalue_310','$three_expvalue_310',
'$one_expvalue_320','$two_expvalue_320','$three_expvalue_320','$one_expvalue_330','$two_expvalue_330','$three_expvalue_330',
'$one_expvalue_340','$two_expvalue_340','$three_expvalue_340','$one_expvalue_350','$two_expvalue_350','$three_expvalue_350',
'$one_expvalue_360','$two_expvalue_360','$three_expvalue_360','$one_expvalue_370','$two_expvalue_370','$three_expvalue_370','$one_expvalue_380','$two_expvalue_380','$three_expvalue_380',

'$draft_man','$sur_vey','$data_entry','$typ_speed','$typ_spd','$steno_typ','$com_cer','$eight_cert','$dri_lic','$dri_lic_type','$exp_three')";



    if (mysqli_query($conn, $sql)) {
      $as = 'dfd';
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      exit();
    }
  }





  $out_info = mysql_query("SELECT p_value FROM 'photo_sign' WHERE 
							`p_value` = '$p'
							AND `mobile` = '$cmobile'");
  while ($row_info = mysql_fetch_array($out_info)) {
    extract($row_info);
  }




  $invoiceno   = $_GET['photo'];
  $cmobile   = $_GET['cmobile'];



  $img_id = "$invoice" . ".jpg";
  $apply_post = "$post_name";

  switch ($sex) {
    case 1:
      $sex_value = "Male";
      break;
    case 2:
      $sex_value = "Female";
      break;
    case 3:
      $sex_value = "Others";
      break;
    default:
      $sex_value = "";
  }




  switch ($mstatus) {
    case 1:
      $ms_value = "Married" . " - " . "Spouse Name: " . "$s_name";
      break;
    case 2:
      $ms_value = "Single";
      break;
    default:
      $ms_value = "";
  }




  if ($departmental == "1") {
    $dept_app = "(Departmental)";
  }

  if ($ffq_active == '1') {
    $ffq_tab = "<tr>
                   <td align=\"left\" valign=\"middle\">Quota</td>
                    
                    <td align=\"left\" valign=\"middle\">$ff_quota</td>
                    
                   

                  </tr>";
  }


  if ($post_code == '000') {
    $dri_lic_tab = "<tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >Driving License</td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$dri_lic</td>
	         </tr>";
  }



  ?>



  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo "$page_title"; ?></title>

    <link href="lib/style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <?php



    echo "<table width=\"700\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
              <tr>
		$app_head
  		</tr>



 	<tr> 
            <td width=\"100%\" align=\"center\" valign=\"middle\">Application Form(Applicant's Copy)</td>
 	   </tr>





  <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><hr /></td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12bold\">
      <tr>
        <td width=\"50%\" align=\"left\" valign=\"middle\" bgcolor=\"#EAEAEA\">
		User ID: $photo</td>
        <td width=\"50%\" align=\"right\" valign=\"middle\" bgcolor=\"#EAEAEA\">
		<span class=\"black11\">Ref: $ad_no<span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
            <td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\">
              <tr>
                <td width=\"25%\" align=\"left\" valign=\"middle\"><img src=\"images/$post_code/photo/$photo.jpg\" width=\"150\" height=\"150\" border=\"1\" /></td>
            

              <td width=\"75%\" align=\"left\" valign=\"top\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
                  <tr>
                    <td width=\"34%\" align=\"left\" valign=\"middle\" class=\"black11\">Post Name</td>
                    <td width=\"66%\" align=\"left\" valign=\"middle\" class=\"black11\">$post_name $dept_app</td>
                  </tr>
				  <tr>
                    <td width=\"34%\" align=\"left\" valign=\"middle\">Applicant's Name</td>
                    <td width=\"66%\" align=\"left\" valign=\"middle\">$name</td>
                  </tr>
                  <tr>
                    <td align=\"left\" valign=\"middle\">Father's Name</td>
                    <td align=\"left\" valign=\"middle\">$fathername</td>
                  </tr>
                  <tr>
                    <td align=\"left\" valign=\"middle\">Mother's Name</td>
                    <td align=\"left\" valign=\"middle\">$mothername</td>
                  </tr>
                  <tr>
                    <td align=\"left\" valign=\"middle\">Date of Birth</td>
                    <td align=\"left\" valign=\"middle\">$b_day/$b_month/$b_year($ageactual)</td>
                  </tr>
                  <tr>
                    <td align=\"left\" valign=\"middle\">Contact Mobile</td>
                    <td align=\"left\" valign=\"middle\">$mobileno</td>
                  </tr>
		  
		   <tr>
                    <td align=\"left\" valign=\"middle\">Email</td>
                    <td align=\"left\" valign=\"middle\">$Email</td>
                  </tr>

		

		<tr>
                    <td align=\"left\" valign=\"middle\">Gender</td>
                    <td align=\"left\" valign=\"middle\">$sex_value</td>
                  </tr>
				  <tr>
                    <td align=\"left\" valign=\"middle\">Religion</td>
                    <td align=\"left\" valign=\"middle\">$religion</td>
                  </tr>

		  $ffq_tab
		  
		  <tr>
                    <td align=\"left\" valign=\"middle\">Home District</td>
                    <td align=\"left\" valign=\"middle\">$permanent_dist_name</td>
                  </tr>


                </table></td>
              </tr>
            </table></td>
  </tr>

  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#F5F9BD\">
      <table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\">
        <tr>
          <td width=\"100%\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
       <tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">National ID</td>
             <td width=\"25%\" align=\"left\" valign=\"middle\">$nid_value</td>
             <td width=\"25%\" align=\"left\" valign=\"middle\">Passport ID</td>
            <td width=\"25%\" align=\"left\" valign=\"middle\">$passport_no</td>
 	   </tr>


 		<tr>
              <td width=\"25%\" align=\"left\" valign=\"middle\">Birth Registration</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$breg_no</td>
             <td width=\"25%\" align=\"left\" valign=\"middle\">Marital Status</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$ms_value</td>

            </tr>
        
       
          </table></td>
        </tr>


       <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Address Information:</td>
  </tr>


 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
         

	      <tr bgcolor=\"#CCCCCC\">
              <td width=\"25%\" align=\"left\" valign=\"middle\">Mailing/Present Address</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\"></td>


              <td width=\"25%\" align=\"left\" valign=\"middle\">Permanent Address</td>
               <td width=\"25%\" align=\"left\" valign=\"middle\"></td>

            </tr>


			
   	
              <td width=\"25%\" align=\"left\" valign=\"middle\"> Care of</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$present_care</td>


              <td width=\"25%\" align=\"left\" valign=\"middle\">Care of</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$permanent_care</td>

            </tr>

              <td width=\"25%\" align=\"left\" valign=\"middle\">Village/Town/Road/House/Flat</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$present_vill</td>


              <td width=\"25%\" align=\"left\" valign=\"middle\">Village/Town/Road/House/Flat</td>
              <td width=\"25%\" align=\"left\" valign=\"middle\">$permanent_vill</td>
            </tr>


              <td align=\"left\" valign=\"middle\">Post Office</td>
              <td align=\"left\" valign=\"middle\">$present_post</td>


              <td align=\"left\" valign=\"middle\">Post Office</td>
              <td align=\"left\" valign=\"middle\">$permanent_post</td>
            </tr>



              <td align=\"left\" valign=\"middle\">Post Code</td>
              <td align=\"left\" valign=\"middle\">$present_pcode</td>


              <td align=\"left\" valign=\"middle\">Post Code</td>
              <td align=\"left\" valign=\"middle\">$permanent_pcode</td>
            </tr>
           

              <td align=\"left\" valign=\"middle\">P.S./Upazila</td>
              <td align=\"left\" valign=\"middle\">$present_ps_name</td>


              <td align=\"left\" valign=\"middle\">P.S./Upazila</td>
              <td align=\"left\" valign=\"middle\">$permanent_ps_name</td>
            </tr>
           

              <td align=\"left\" valign=\"middle\">District</td>
              <td align=\"left\" valign=\"middle\">$present_dist_name</td>


              <td align=\"left\" valign=\"middle\">District</td>
              <td align=\"left\" valign=\"middle\">$permanent_dist_name</td>
            </tr>
           

    </table></td>




  
        <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">Academic Qualifications:</td>
        </tr>

        <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
                      <tr>
 			<tr bgcolor=\"#CCCCCC\">
                        <td width=\"32%\" height=\"20\" align=\"center\" valign=\"middle\">Examination</td>
                        <td width=\"30%\" align=\"center\" valign=\"middle\">Board/Institute</td>
                        <td width=\"20%\" align=\"center\" valign=\"middle\">Group/Subject/Degree</td>
                        <td width=\"10%\" align=\"center\" valign=\"middle\">Result</td>
                        <td width=\"5%\" align=\"center\" valign=\"middle\">Year</td>
                        <td width=\"5%\" align=\"center\" valign=\"middle\">Roll</td>
                        <td width=\"5%\" align=\"center\" valign=\"middle\">Duration</td>
                      </tr>
                  

                  <tr>
                        <td width=\"32%\" height=\"20\" align=\"left\" valign=\"middle\">$exam1</td>
                        <td width=\"30%\" align=\"left\" valign=\"middle\">$institute1</td>
                        <td width=\"25%\" align=\"left\" valign=\"middle\">$subject1</td>
                        <td width=\"10%\" align=\"left\" valign=\"middle\">$result_gpa1 $result1 </td>
                        <td width=\"5%\" align=\"left\" valign=\"middle\">$year1</td>
                        <td width=\"5%\" align=\"left\" valign=\"middle\">$roll1</td>
                        <td width=\"5%\" align=\"left\" valign=\"middle\">$duration1</td>
                      </tr>
                                       



                  <tr>
                        <td width=\"30%\" height=\"20\" align=\"left\" valign=\"middle\">$exam2</td>
                        <td width=\"28%\" align=\"left\" valign=\"middle\">$institute2</td>
                        <td width=\"14%\" align=\"left\" valign=\"middle\">$subject2</td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$result_gpa2 $result2 </td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$year2</td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$roll2</td>
                        <td width=\"4%\" align=\"left\" valign=\"middle\">$duration2</td>
                      </tr>

    
                   <tr>
                        <td width=\"30%\" height=\"30\" align=\"left\" valign=\"middle\">$exam3</td>
                        <td width=\"28%\" align=\"left\" valign=\"middle\">$institute3</td>
                        <td width=\"14%\" align=\"left\" valign=\"middle\">$subject3</td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$result_gpa3 $result3</td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$year3</td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$roll3</td>
                        <td width=\"4%\" align=\"left\" valign=\"middle\">$duration3</td>
                      </tr>
                             
         <tr>
                        <td width=\"30%\" height=\"40\" align=\"left\" valign=\"middle\">$exam4</td>
                        <td width=\"28%\" align=\"left\" valign=\"middle\">$institute4</td>
                        <td width=\"14%\" align=\"left\" valign=\"middle\">$subject4</td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$result_gpa4 $result4</td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$year4</td>
                        <td width=\"8%\" align=\"left\" valign=\"middle\">$roll4</td>
                        <td width=\"4%\" align=\"left\" valign=\"middle\">$duration4</td>
                      </tr>
                             
        
                        
		  $edu_table
                     </table></td>
             
        </tr>


	






        $SSC_tab
        $SSC_hsc_tab
        $SSC_hsc_gra_tab
 
$job_exp_tab
        $exp_110_01_tab
	$exp_110_02_tab
	$exp_110_03_tab

        $exp_120_01_tab
	$exp_120_02_tab
	$exp_120_03_tab

        $exp_130_01_tab
	$exp_130_02_tab
	$exp_130_03_tab

        $exp_140_01_tab
	$exp_140_02_tab
	$exp_140_03_tab

        $exp_150_01_tab
	$exp_150_02_tab
	$exp_150_03_tab


        $exp_160_01_tab
	$exp_160_02_tab
	$exp_160_03_tab

    
        $exp_170_01_tab
	$exp_170_02_tab
	$exp_170_03_tab

        
        $exp_180_01_tab
	$exp_180_02_tab
	$exp_180_03_tab

        $exp_190_01_tab
	$exp_190_02_tab
	$exp_190_03_tab


        $exp_200_01_tab
	$exp_200_02_tab
	$exp_200_03_tab


        $exp_210_01_tab
	$exp_210_02_tab
	$exp_210_03_tab


        $exp_220_01_tab
	$exp_220_02_tab
	$exp_220_03_tab


        $exp_230_01_tab
	$exp_230_02_tab
	$exp_230_03_tab


        $exp_240_01_tab
	$exp_240_02_tab
	$exp_240_03_tab


        $exp_250_01_tab
	$exp_250_02_tab
	$exp_250_03_tab


         $exp_260_01_tab
	$exp_260_02_tab
	$exp_260_03_tab



        $exp_270_01_tab
	$exp_270_02_tab
	$exp_270_03_tab



        $exp_280_01_tab
	$exp_280_02_tab
	$exp_280_03_tab



        $exp_290_01_tab
	$exp_290_02_tab
	$exp_290_03_tab



        $exp_300_01_tab
	$exp_300_02_tab
	$exp_300_03_tab

        $exp_310_01_tab
	$exp_310_02_tab
	$exp_310_03_tab


        $exp_320_01_tab
	$exp_320_02_tab
	$exp_320_03_tab


        $exp_330_01_tab
	$exp_330_02_tab
	$exp_330_03_tab


        $exp_340_01_tab
	$exp_340_02_tab
	$exp_340_03_tab


        $exp_350_01_tab
	$exp_350_02_tab
	$exp_350_03_tab
	
	$exp_360_01_tab
	$exp_360_02_tab
	$exp_360_03_tab
	
	$exp_370_01_tab
	$exp_370_02_tab
	$exp_370_03_tab
	
	$exp_380_01_tab
	$exp_380_02_tab
	$exp_380_03_tab

    
	<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">

	<table width=\"100%\" border=\"1\" cellpadding=\"3\" cellspacing=\"1\" class=\"black12\">
           
           $dri_lic_tab
	         
            <tr>
              <td width=\"50%\" align=\"left\" valign=\"middle\" >Departmental status</td>
              <td width=\"50%\" align=\"center\" valign=\"middle\" >$ds</td>
	         </tr>
	         
	         </table>
	         </td>
	</tr>
	

  

	
		<tr>
          <td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">---------- *** ----------</td>
       </tr>

        <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><div align=\"justify\" class=\"black11i\">I declare that the information provided in this form are correct, true and complete to the best of my knowledge and belief. If any information is found false, incorrect, incomplete or if any ineligibility is detected before or after the examination, any action can be taken against me by the Authority including cancellation of my candidature.</div></td>
        </tr>
        <tr>
          <td align=\"right\" valign=\"middle\" bgcolor=\"#FFFFFF\"><img src=\"images/$post_code/signature/$photo.jpg\" width=\"300\" height=\"80\" border=\"0\" /></td>
        </tr>
		<tr>
          <td align=\"right\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black11\"> -------------- Applicant's Signature --------------</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><hr></td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12\">
      <tr>
        <td align=\"middle\" valign=\"middle\"><span class=\"black12bold\">Congratulations!! Application Submitted Successfully.<br/>N.B: Please print this document for further reference by clicking 'Print'option or <br/>Download this form in PDF form by clicking 'Download this 'Application Form''.</span><br/><br/>
		<span class=\"black11i\">Please click <a href=\"JavaScript:window.print();\" class=\"link03\"><span class=\"red12bold\">Print</a> to print this document.</span></td>
      
      <tr>
        <td align=\"left\" valign=\"middle\"> <div align=\"justify\"> Your User ID:<span class=\"red12bold\">$photo</span>, Please keep this number to pay the application fee  within <span class=\"red12bold\">$extime</span>[YYYY-MM-DD hrs:min:sec] from any <span class=\"red12bold\">Teletalk</span> prepaid mobile phone by SMS.<br /><br />
		1st - SMS Format: $short_name &lt;space&gt; &lt;User ID&gt;  and send SMS to <span class=\"red12bold\">16222</span><br />
		<span class=\"black11i\">[Example : $short_name $photo]. 1st-SMS Reply: Returns a PIN (8 Digits) like 13423495</span><br />
		2nd - SMS Format: $short_name &lt;space&gt; &lt;YES&gt; &lt;space&gt; &lt;PIN&gt;  and send SMS to <span class=\"red12bold\">16222</span><br />
		<span class=\"black11i\">[Example : $short_name YES 13423495]. 2nd-SMS Reply: Returns a USER ID &amp; PASSWORD</span><br /><br/>
		N.B: Please preserve the User ID &amp; Password. You will need User ID &amp; Password to download Admit card.
         </div></td>
      </tr>
    </table></td>
  </tr>

   <tr>
    <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><a href=\"pdfdw.php\" class=\"mainlink\">Download this 'Application Form'</a></td>
  </tr>

    <tr>
    <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black10\">
      <tr>
        <td width=\"65%\" align=\"left\" valign=\"bottom\">$copyright</td>
        <td width=\"35%\" align=\"right\" valign=\"middle\"> Powered By &nbsp; <img src=\"images/tbl_logo.jpg\" alt=\"\" width=\"61\" height=\"38\" align=\"absbottom\" /></td>
      </tr>
    </table></td>
  </tr>
  </table>";




    $_SESSION = array(); // reset session array
    session_destroy();   // destroy session.
    $invoiceno = $p;
    session_start();
    $_SESSION['invoice'] = $invoiceno;

    $_SESSION['signature'] = $p;

    //session_start();
    $_SESSION['postcode'] = $post_code;
    $_SESSION['postname'] = $post_name;



    mysql_close();



    ?>
  </body>

  </html>