<?php
	
	if (!isset($_SESSION)) {
		session_start();
	}
	session_destroy();
	
	include "lib/fx.php";
	include "lib/dbconnect.php";

	$err = $_GET['err'];


	$post_code 				= addslashes($_POST['post_code']);

 	$post_code=$_SESSION['postcode'];
	$postcode=$post_code;

   //get Data from post

	$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
	while($row_post=mysql_fetch_array($out_post))
	      {	extract($row_post);}






	switch($err)
	{
		
		case "10": $msg = "<p class=\"errmsg\">Please fill up/ Select all the fields of S.S.C or Equivalent Level.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		
		case "110": $msg = "<p class=\"errmsg\"> $exp_110_01 required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "111": $msg = "<p class=\"errmsg\">$exp_110_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "112": $msg = "<p class=\"errmsg\">$exp_110_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "113": $msg = "<p class=\"errmsg\">$exp_110_04  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;



		case "120": $msg = "<p class=\"errmsg\">$exp_120_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "121": $msg = "<p class=\"errmsg\">$exp_120_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "122": $msg = "<p class=\"errmsg\">$exp_120_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;
		


		case "130": $msg = "<p class=\"errmsg\">$exp_130_01 required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "131": $msg = "<p class=\"errmsg\">$exp_130_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "132": $msg = "<p class=\"errmsg\">$exp_130_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;
		
		

		case "140": $msg = "<p class=\"errmsg\">$exp_140_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "141": $msg = "<p class=\"errmsg\">$exp_140_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "142": $msg = "<p class=\"errmsg\">$exp_140_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		

		case "150": $msg = "<p class=\"errmsg\">$exp_150_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "151": $msg = "<p class=\"errmsg\">$exp_150_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "152": $msg = "<p class=\"errmsg\">$exp_150_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;




		case "160": $msg = "<p class=\"errmsg\">$exp_160_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "161": $msg = "<p class=\"errmsg\">$exp_160_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "162": $msg = "<p class=\"errmsg\">$exp_160_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;




		case "170": $msg = "<p class=\"errmsg\">$exp_170_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "171": $msg = "<p class=\"errmsg\">$exp_170_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "172": $msg = "<p class=\"errmsg\">$exp_170_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;





		case "180": $msg = "<p class=\"errmsg\">$exp_180_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "181": $msg = "<p class=\"errmsg\">$exp_180_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "182": $msg = "<p class=\"errmsg\">$exp_180_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;







		case "190": $msg = "<p class=\"errmsg\">$exp_190_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "191": $msg = "<p class=\"errmsg\">$exp_190_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "192": $msg = "<p class=\"errmsg\">$exp_190_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;



		case "200": $msg = "<p class=\"errmsg\">$exp_200_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "201": $msg = "<p class=\"errmsg\">$exp_200_02 required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "202": $msg = "<p class=\"errmsg\">$exp_200_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;





		case "210": $msg = "<p class=\"errmsg\">$exp_210_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "211": $msg = "<p class=\"errmsg\">$exp_210_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "212": $msg = "<p class=\"errmsg\">$exp_210_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;




		case "220": $msg = "<p class=\"errmsg\">$exp_220_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "221": $msg = "<p class=\"errmsg\">$exp_220_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "222": $msg = "<p class=\"errmsg\">$exp_220_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;






		case "230": $msg = "<p class=\"errmsg\">$exp_230_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "231": $msg = "<p class=\"errmsg\">$exp_230_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "232": $msg = "<p class=\"errmsg\">$exp_230_03 : required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;





		case "240": $msg = "<p class=\"errmsg\">$exp_240_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "241": $msg = "<p class=\"errmsg\">$exp_240_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "242": $msg = "<p class=\"errmsg\">$exp_240_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;




		case "250": $msg = "<p class=\"errmsg\">$exp_250_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "251": $msg = "<p class=\"errmsg\">$exp_250_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "252": $msg = "<p class=\"errmsg\">$exp_250_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;




		case "260": $msg = "<p class=\"errmsg\">$exp_260_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "261": $msg = "<p class=\"errmsg\">$exp_260_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "262": $msg = "<p class=\"errmsg\">$exp_260_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;






		case "270": $msg = "<p class=\"errmsg\">$exp_270_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "271": $msg = "<p class=\"errmsg\">$exp_270_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "272": $msg = "<p class=\"errmsg\">$exp_270_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;





		case "280": $msg = "<p class=\"errmsg\">$exp_280_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "281": $msg = "<p class=\"errmsg\">$exp_280_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "282": $msg = "<p class=\"errmsg\">$exp_280_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;







		case "290": $msg = "<p class=\"errmsg\">$exp_290_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "291": $msg = "<p class=\"errmsg\">$exp_290_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "292": $msg = "<p class=\"errmsg\">$exp_290_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;




		case "300": $msg = "<p class=\"errmsg\">$exp_300_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "301": $msg = "<p class=\"errmsg\">$exp_300_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "302": $msg = "<p class=\"errmsg\">$exp_300_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;




		case "310": $msg = "<p class=\"errmsg\">$exp_310_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "311": $msg = "<p class=\"errmsg\">$exp_310_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "312": $msg = "<p class=\"errmsg\">$exp_310_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;





		case "320": $msg = "<p class=\"errmsg\">$exp_320_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "321": $msg = "<p class=\"errmsg\">$exp_320_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "322": $msg = "<p class=\"errmsg\">$exp_320_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;




		case "330": $msg = "<p class=\"errmsg\">$exp_330_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "331": $msg = "<p class=\"errmsg\">$exp_330_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "332": $msg = "<p class=\"errmsg\">$exp_330_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;



		case "340": $msg = "<p class=\"errmsg\">$exp_340_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "341": $msg = "<p class=\"errmsg\">$exp_340_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "342": $msg = "<p class=\"errmsg\">$exp_340_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;



		case "350": $msg = "<p class=\"errmsg\">$exp_350_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "351": $msg = "<p class=\"errmsg\">$exp_350_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "352": $msg = "<p class=\"errmsg\">$exp_350_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;



case "360": $msg = "<p class=\"errmsg\">$exp_360_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "361": $msg = "<p class=\"errmsg\">$exp_360_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "362": $msg = "<p class=\"errmsg\">$exp_360_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;
					
					
					
		case "370": $msg = "<p class=\"errmsg\">$exp_370_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "371": $msg = "<p class=\"errmsg\">$exp_370_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "372": $msg = "<p class=\"errmsg\">$exp_370_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;
					
					
		case "380": $msg = "<p class=\"errmsg\">$exp_380_01  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;	

		case "381": $msg = "<p class=\"errmsg\">$exp_380_02  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;

		case "382": $msg = "<p class=\"errmsg\">$exp_380_03  required.</p>
			  	<p><a href=\"javascript:history.go(-1)\" class=\"mainlink\"><b>Click here to
edit the application!!</b></a></p>";
					$toplink = "";break;
					
					


		case "283": $msg = "<p class=\"errmsg\">The reffered district is not eligible for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break; 


		case "284": $msg = "<p class=\"errmsg\">Finance/Accounting subject required at Honors/Masters level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break; 



		case "285": $msg = "<p class=\"errmsg\">Graduation in Electrical/ Mechanical Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break; 

		case "286": $msg = "<p class=\"errmsg\"> 15 Years Job experience required for this post. </n>Please fill up all the field of Professional Experience.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "287": $msg = "<p class=\"errmsg\"> 12 Years Job experience required for this post. </n>Please fill up all the field of Professional Experience.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "288": $msg = "<p class=\"errmsg\"> 5 Years Job experience required for this post. </n>Please fill up all the field of Professional Experience.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;
 

		case "402": $msg = "<p class=\"errmsg\"> Commerce background required at Graduation level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;
 
		//default: $msg = "<p class=\"errmsg\">Access Denied!</p>";
				// $toplink = "";
	          }
                   
echo"<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>$page_title</title>
<link href=\"lib/style.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"20\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head
	$toplink
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"$body_bg\">
	$msg</td>
  </tr>
  <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bottom_bg\" class=\"black10\">$support</td>
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
          <td width=\"10%\" align=\"left\" valign=\"middle\">$by</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\">$flashlogo</td>
        </tr>
      </table>
    </fieldset></td>
</table>
</body>
</html>";
?>
