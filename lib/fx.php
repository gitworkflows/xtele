
<?php

// Maintanance.............


$m_active = "0";

if ($m_active == "3") {
	$active = "0";
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://www.gov.bd//errm.php\" />";
	exit;
}

// Color & Style


$top_bg		= "#E3E3E3";
$body_bg	= "#FFF380"; // #99ff66 #E3E3E3 #D3DBC0 #F1DCC9
$toplink_bg	= "Green";
$bottom_bg	= "lightGreen";
$shade1_bg	= "#E3E3E3";
$shade2_bg	= "#DCDCDC";
$box1		= "#A2A2A2";
$box2           = "lightgreen";
$post_bg 	= "#C3C3C3";


include "lib/dbconnect.php";
include "../lib/dbconnect.php";




//get Data from post

$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` >'109'");
while ($row_post = mysql_fetch_array($out_post)) {
	extract($row_post);
}


$page_title = "$company_name";
$cy = date('Y');

//Date for age ------------ 01 June 2016
//$date_limit = "2016-06-01";

// Days
$s = 1;
while ($s < 32) {
	if ($s < 10) {
		$s = "0$s";
	}
	$i_bday .= "<option value=\"$s\">$s</option>";
	$s++;
}
//Month
$select_month = "
				<option value=\"01\">01 - January</option>
				<option value=\"02\">02 - February</option>
				<option value=\"03\">03 - March</option>
				<option value=\"04\">04 - April</option>
				<option value=\"05\">05 - May</option>
				<option value=\"06\">06 - June</option>
				<option value=\"07\">07 - July</option>
				<option value=\"08\">08 - August</option>
				<option value=\"09\">09 - September</option>
				<option value=\"10\">10 - October</option>
				<option value=\"11\">11 - November</option>
				<option value=\"12\">12 - December</option>";

// Years
$p_y = date('Y');
$y = $p_y - 46;
$d_y = $p_y - 18;
while ($y <= $d_y) {
	$i_years .= "<option value=\"$y\">$y</option>";
	$y++;
}



$py = $p_y - 46 + 12;
while ($py <= $p_y) {
	$select_pyear .= "<option value=\"$py\">$py</option>";
	$py++;
}


//Application Head//using

/**$app_head = "	  <tr bgcolor=\"#FFFFFF\">
		<td align=\"left\" valign=\"top\"><table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">
		  <tr>
			<td bgcolor=\"#DCDCDC\" height=\"120\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
			  <tr>
				<td width=\"20%\" align=\"center\" valign=\"middle\"><img src=\"images/govt_logo.png\" width=\"80\" height=\"80\" /></td>
				<td width=\"700%\" align=\"left\" valign=\"middle\">
				 <font color='black'><font size='2'><B>Government of the People's Republic of Bangladesh</B></font><br />
				<font color='black' size='4'><B>Bangladesh Agricultural Research Institute (BARI)</B></font><br/><font color='black' size='2'><B>(Online Job Application Portal)</B></td>
				<td width=\"1%\" align=\"left\" valign=\"middle\" class=\"black10\"><img src=\"images/bari_logo.jpg\" width=\"80\" height=\"80\" /></td>
			  </tr>
			</table></td>
		  </tr>
		</table></td>
	  </tr>";****Sho_bh***/


/**$company_link="<a href="http://www.dakjibonbima.gov.bd/" target="_blank">www.dakjibonbima.gov.bd</a>";
echo"$company_link";**/
//<a href="http://www.dakjibonbima.gov.bd/" target="_blank">www.dakjibonbima.gov.bd</a>
//Edited Head (2 logos)
$app_head = "	  <tr>
		<td height=\"100\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14bold\">
		 <td height=\"120\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14\">
		  <tr>
			<td bgcolor=\"Green\" height=\"120\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
			  <tr>
				<td width=\"15%\" align=\"right\" valign=\"middle\"><img src=\"images/govt_logo.png\" width=\"90\" height=\"90\" /></td>
				
				<td width=\"70%\" align=\"center\" valign=\"middle\">
				 <font color='white'><font size='2'>Government of the People's Republic of Bangladesh</font><br />
				 	<font color='white'><font size='4'><b> $company_name </b></font><br />
					
				<font color='white'><font size='2'><b><a href=\"http://www.teletalk.com.bd/\" target=\"_blank\" style=\"color:#fff\">www.teletalk.com.bd</a></b></font><br/>
            
           <td width=\"15%\" align=\"right\" valign=\"middle\"></td>
				
				<!--<td width=\"10%\" align=\"right\" valign=\"middle\"><img src=\"images/paraj_logo.jpg\" width=\"90\" height=\"90\" /></td>-->
			 
			  </tr>
			</table></td>
		  </tr>
		</table></td>
		 </tr>";

//old Head
/***$app_head = "<tr>
		  <td height=\"100\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14bold\">
		  <td height=\"120\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14\">
		    <tr>
		      <td width=\"16%\" height=\"120\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
                                 <img src=\"images/pliec_logo.jpg\" width=\"94\" height=\"94\" /></td>
																 
 		
                                 
		      <td width=\"84%\" height=\"120\" align=\"left\" valign=\"middle\" bgcolor=\"Green\">
 		           <font color='white'>Government of the People's Republic of Bangladesh</font><br />
  			  <font color='white'><font size='5'> $company_name </font><br />
  			  <!---<font color='white'><font size='4'>Ministry of Cultural Affairs</font><br />---->
 	</tr>
	</table></td>
  		</tr>";***/






$app_head2 = "<tr>
		  <td height=\"100\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14bold\">
		  <td height=\"120\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14\">
		    <tr>
		      <td width=\"16%\" height=\"120\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
                                 <img src=\"../images/pliec_logo.png\" width=\"94\" height=\"94\" /></td>


		      <td width=\"84%\" height=\"120\" align=\"left\" valign=\"middle\" bgcolor=\"Green\">
 		           <font color='white'>Government of the People's Republic of Bangladesh</font><br />
  			  <font color='white'><font size='5'>$company_name</font><br />
		
	        </tr>
	</table></td>
  		</tr>";




$app_head3 = "<tr>
		  <td height=\"100\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14bold\">
		  <td height=\"120\" align=\"left\" valign=\"top\" class=\"green\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"white14\">
		    <tr>
		      <td width=\"16%\" height=\"120\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
                                 <img src=\"../images/pliec_logo.png\" width=\"94\" height=\"94\" /></td>

 		
		      <td width=\"84%\" height=\"120\" align=\"left\" valign=\"middle\" bgcolor=\"Green\">

  			  <font color='white'><font size='5'>$company_name</font><br />
 		           <font color='white'>(An Enterprise of Bangladesh Power Development Board)</font><br />
 

			
	        </tr>
	</table></td>
  		</tr>";





// Top Link #FF0000 

$toplink = "<tr>
				        <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"#38B003\">


					<table border=\"1\" BORDERCOLOR=White cellpadding=\"8\" cellspacing=\"0\" class=\"#FF0000\">
						<tr>

						  <td width=\"50\"align=\"middle\" valign=\"middle\"><a href=\"home.php\" class=\"link-home\"><font color='white'>Home</font></a></td>
                                        	  <td width=\"180\"align=\"middle\" valign=\"middle\"><a href=\"imsize.php\" class=\"link-home\"><font color='white'>Photo/Sign Validator</font></a></td>
						  <td width=\"120\"align=\"middle\" valign=\"middle\"><a href=\"options/pay.php\" class=\"link-home\"><font color='white'>Payment Status</font></a></td>
						  <td width=\"220\"align=\"middle\" valign=\"middle\"><a href=\"applicant/index.php\" class=\"link-home\"><font color='white'>Download Applicant's Copy</font></a></td>
						  <td width=\"107\"align=\"middle\" valign=\"middle\"><a href=\"admitcard/index.php\" class=\"link-home\"><font color='white'>Admit Card</font></a></td>
					<!--<td width=\"107\"align=\"middle\" valign=\"middle\"><a href=\"http://card.dter.teletalk.com.bd\" target=\"_blank\" class=\"link-home\"><font color='white'>Admit (Old)</font></a></td>-->

						</tr>
					</table>
				</td>
			</tr>";



//<td width=\"107\"align=\"middle\" valign=\"middle\"><a href=\"card_err.php\" class=\"link-home\"><font color='white'>Admit Card</font></a></td>


$optlink = "<tr>
				
                                  
                                  <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"#38B003\" class=\"black10\">

					<table border=\"1\" BORDERCOLOR=White cellpadding=\"8\" cellspacing=\"0\" class=\"red\">

					<tr>

                             		  <td width=\"152\" align=\"middle\" valign=\"middle\"><a href=\"../home.php\" class=\"link-home\">Home</a></td> 
                                              
					  <td width=\"152\"align=\"middle\" valign=\"middle\"><a href=\"pay.php\" class=\"link02\"><b>Payment Status</b></a></td>
				
					  <td width=\"152\"align=\"middle\" valign=\"middle\"><a href=\"invoice.php\" class=\"link02\"><b>Recover User ID</b></a></td>
			
					  <td width=\"152\"align=\"middle\" valign=\"middle\"><a href=\"pass.php\" class=\"link02\"><b>Recover Password</b></a></td>
					
					  <td width=\"152\"align=\"middle\" valign=\"middle\"><a href=\"../card_err.php\" class=\"link02\"><b>Admit Card</b></a></td>

					</tr>
					</table>
				</td>
			</tr>";



$app_down_link = "<tr>
				
                                  
                                  <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"#38B003\" class=\"black10\">

					<table border=\"1\" BORDERCOLOR=White cellpadding=\"8\" cellspacing=\"0\" class=\"red\">

					<tr>

                             		  <td width=\"190\" align=\"middle\" valign=\"middle\"><a href=\"../home.php\" class=\"link-home\"><B>Home</font></a></td> 
                                              
					  <td width=\"190\"align=\"middle\" valign=\"middle\"><a href=\"../options/pay.php\" class=\"link02\"><B><b>Payment Status</font></b></a></td>
				
					  <td width=\"190\"align=\"middle\" valign=\"middle\"><a href=\"../options/invoice.php\" class=\"link02\"><B><b>Recover User ID</font></b></a></td>
			
					  <td width=\"190\"align=\"middle\" valign=\"middle\"><a href=\"../options/pass.php\" class=\"link02\"><B><b>Recover Password</font></b></a></td>
					
					  <td width=\"152\"align=\"middle\" valign=\"middle\"><a href=\"../card_err.php\" class=\"link02\"><b>Admit Card</b></a></td> 

					</tr>
					</table>
				</td>
			</tr>";



$crdlink = "<tr>
				<td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"#38B003\">
					<table border=\"1\" BORDERCOLOR=White cellpadding=\"8\" cellspacing=\"0\" class=\"white\">
					<tr>
					  <td width=\"130\" align=\"middle\" valign=\"middle\"><a href=\"../home.php\" class=\"link-home\">Home</a></td>
					  <td width=\"174\"align=\"middle\" valign=\"middle\"><a href=\"../applicant/index.php\" class=\"link02\">Download Applicant's Copy</a></td>
					
					  <td width=\"140\"align=\"middle\" valign=\"middle\"><a href=\"../options/pay.php\" class=\"link02\">Payment Status</a></td>
		
					  <td width=\"186\"align=\"middle\" valign=\"middle\"><a href=\"../options/invoice.php\" class=\"link02\">Recover User ID</a></td>
				
					  <td width=\"130\" align=\"middle\" valign=\"middle\"><a href=\"../options/pass.php\" class=\"link02\">Recover Password</a></td>
					</tr>
					</table>
				</td>
			</tr>";

// CIF

$cif = "
<tr>
	<td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"#38B003\" class=\"black14bold\">
	Candidate's Information Form (CIF)
	</td>
</tr>";

// Upper Case
$uppercase = "onBlur=\"javascript:{this.value = this.value.toUpperCase(); }\"";

echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>$page_title</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/all.min.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"css/fontawesome.min.css\">
</head>
<body>
</body>
</html>";

$support = "<font size='1'><B><I>For any inconvenience, please send email to vas.query@teletalk.com.bd &nbsp;[Email Subject: $short_name]</I></B></font><br/>
 To know other jobs information, please visit: <a href=\"https://alljobs.teletalk.com.bd\" class=\"mainlink\" target=\"_blank\" style=\"color:#e50000\" >https://alljobs.teletalk.com.bd</a>
  <br/>
  <ul>
<li> <a href=\"https://www.facebook.com/alljobsbdTeletalk/\" target=\"_blank\"> <i class=\"fab fa-facebook-f\"></i></a> <li>
<li> <a href=\"https://www.linkedin.com/in/teletalk-bangladesh-limited-273002211/\" target=\"_blank\"> <i class=\"fab fa-linkedin-in\"></i></a><li>
<li> <a href=\"https://twitter.com/AlljobsT/\" target=\"_blank\"> <i class=\"fab fa-twitter\"></i></a><li>
<li> <a href=\"https://www.youtube.com/channel/UCFzL63e-p-nWd_jeV1iYz7g/\" target=\"_blank\"> <i class=\"fab fa-youtube\"></i></a><li>
<li> <a href=\"https://www.instagram.com/alljobsteletalk/\" target=\"_blank\"> <i class=\"fab fa-instagram\"></i></a><li>
 </ul>";

// $support = "<font size='1'><B><I>For any inconvenience, please send email to vas.query@teletalk.com.bd &nbsp;[Email Subject: $short_name]</B></I></font>";


//$support = "<font size='3'><font color='RED'><B><I><marquee>Online Application is not started yet! Application will be started on 27-3-2016</B></I></font>";
$copyright = "<tt>&copy;2021 $company_name All Rights Reserved.</tt>";
$by = "Powered by:<img src=\"images/tbl_logo.png\" width=\"94\" height=\"50\" />";
$tbllogo = "Powered by: <img src=\"./images/tbl_logo.png\" class=\"img_padding\" width=\"94\" height=\"50\" />";



?>

