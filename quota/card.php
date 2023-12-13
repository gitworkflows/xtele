<?php
include "../lib/fx.php";
include "cardtime.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$page_title";?></title>
<link href="../lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include "../lib/dbconnect.php";

$cuser	= addslashes($_POST['username']);
$cpassword	= addslashes($_POST['password']);
$exam		= addslashes($_POST['exam']);


 echo "Current User ID: $cuser";
 echo "Current Password: $cpassword";

$pat = ":";
$ex = split($pat, $exam);
$exam_no = $ex[0];
$exam_xx = $ex[1];

$invoice = $msisdn = $i_count = $m_count = 0;
$appvalid = "OK";




//Check User ID & Pass
$table = "registration" . "_" . "$exam_no";

$user_out = mysql_query("SELECT `user`, 'password', `msisdn`, 'exam_centre' FROM registration
						WHERE `user` = '$cuser'
                                                      AND `password` = '$cpassword'");

$user_count = mysql_numrows($user_out);
while($row_user=mysql_fetch_array($user_out))
     {
	extract($row_user);
         }


 echo "mobile no.: $msisdn<br/>";
 echo "User ID: $user";
 echo "Password: $exam_center";
 echo "Father Name: $fathername";



$invoice = $user;
$i_count = strlen($invoice);
$m_count = strlen($msisdn);




/*

// Invalid username & pass
if($i_count != "6" || $m_count != "13" || $username == "" || $password == "" || $user_count < 1)
{
	echo"<script language='javascript'>window.location.href=\"index.php?err=627\"; </script>";
	exit;
}
else
    {
	$table = "cinfo" . "_" . "$exam_no";
	//Get data from cinfo
	$info_out = mysql_query("SELECT `invoice`,
							`post_code`,
							`subject_code`,
							`fullname`,
							`father`,
							`mother`,
							`exam_centre`,
							`screening`
							FROM $table
							WHERE `invoice` = '$username'
							AND `fee` = '1'");
	while($info_row = mysql_fetch_array($info_out))
	    {
		extract($info_row);
	     }
	
	
	if($appvalid == "OK")
	{
		// Download log
		$uptime = date("Y-m-d H:i:s");
		$ip = $_SERVER['REMOTE_ADDR'];
		mysql_query("INSERT INTO `log_cards` (`sl` , `invoice` , `uptime` , `ip`)
									VALUES ('0', '$invoice','$uptime','$ip')") or
									die("CLG4365465878788888IN");
		
		// Other Data
		$photo_id = "$invoice" . ".jpg";
		
		if($subject_code > 200 && $subject_code < 300)
		{
			$date_out = mysql_query("SELECT * FROM `exam_date_time`
								WHERE `compulsory_sub` = '200'
								AND `exam_no` = '$exam_no'");
			while($date_row = mysql_fetch_array($date_out))
			{
				extract($date_row);
			}
		}
		



		// Get Roll NO
		$table = "roll" . "_" . "$exam_no";
		$roll_out = mysql_query("SELECT `roll` FROM $table
								WHERE `invoice` = '$invoice'");
		while($roll_row = mysql_fetch_array($roll_out))
		    {
			extract($roll_row);
		       }


		$rollno = "$roll";
				
		// Get Post Name
		$post_out = mysql_query("SELECT `post_name` FROM `post`
								WHERE `post_code` = '$post_code'");
		while($post_row = mysql_fetch_array($post_out))
		       {
			extract($post_row);
		        }

		// Get Subject Name
		$sub_out = mysql_query("SELECT `subject_name`
							   FROM optional_subject
							   WHERE subject_code = '$subject_code'");
		while($sub_row = mysql_fetch_array($sub_out))
		{
			extract($sub_row);
		}
		
		$table = "ntrcacentre" . "_" . "$exam_no";
		// Get Exam Centre
		$centre_out = mysql_query("SELECT `venue` FROM $table
								WHERE `centre` = '$exam_centre'
								AND subject_code = '$subject_code'
								AND $rollno >= `startroll`
								AND $rollno <= `endroll`");
		while($centre_row = mysql_fetch_array($centre_out))
		{
			extract($centre_row);
		}
		
// Uppercase
		$fullname		= 	strtoupper($fullname);
		$father			=	strtoupper($father);
		$mother			=	strtoupper($mother);
		$exam_centre	=	strtoupper($exam_centre);
		$venue 			= 	htmlspecialchars($venue);
		$venue			=	strtoupper($venue);
		
		$photo 		= "photo" . "_" . "$exam_no";
		$signature	= "signature" . "_" . "$exam_no";
		
		echo"<table width=\"650\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"2\">
	  <tr>
		<td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"650\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"0\">
		  <tr>
			<td height=\"100\" align=\"center\" valign=\"middle\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"black12\">
			  <tr>
				<td width=\"15%\" height=\"100\" align=\"center\" valign=\"middle\"><img src=\"../images/breb_logo.png\" width=\"70\" height=\"70\" /></td>
				<td width=\"70%\" height=\"100\" align=\"center\" valign=\"middle\">
				DTE<br/>
         		
          			</td>
				<td width=\"15%\" height=\"100\" align=\"center\" valign=\"middle\">&nbsp;</td>
			  </tr>
			</table></td>
		  </tr>
		  <tr>
			<td align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\" class=\"Field_Titel\"><strong>Admit Card</strong></td>
		  </tr>
		  <tr>
			<td align=\"left\" valign=\"top\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
			  <tr>
				<td width=\"486\" align=\"left\" valign=\"top\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
				  <tr>
					<td width=\"31%\" height=\"25\" class=\"black12bold\"><span class=\"black12\">Roll</span></td>
					<td width=\"3%\" height=\"25\" class=\"black12\"><span class=\"black12\">:</span></td>
					<td width=\"66%\" height=\"25\" class=\"black12bold\"><span class=\"black12\">$rollno</span></td>
				  </tr>
				  <tr>
					<td height=\"25\" class=\"black12bold\"><span class=\"black12\">Post</span></td>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">:</span></td>
					<td height=\"25\" class=\"black12bold\"><span class=\"black12\">$post_name</span></td>
				  </tr>
				  <tr>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">Name</span></td>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">:</span></td>
					<td height=\"25\"><span class=\"black12\">$fullname</span></td>
				  </tr>
				  <tr>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">Father's Name</span></td>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">:</span></td>
					<td height=\"25\"><span class=\"black12\">$father</span></td>
				  </tr>
				  <tr>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">Mother's Name</span></td>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">:</span></td>
					<td height=\"25\"><span class=\"black12\">$mother</span></td>
				  </tr>
				  <tr>
					<td height=\"25\" class=\"black12\"><p><span class=\"black12\">Compulsory  Subject</span></p></td>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">:</span></td>
					<td height=\"25\"><span class=\"black12\">[$compulsory_sub] Bangla, English, Mathematics &amp; General Knowledge</span></td>
				  </tr>
				  <tr>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">Optional  Subject</span></td>
					<td height=\"25\" class=\"black12\"><span class=\"black12\">:</span></td>
					<td height=\"25\"><span class=\"black12\">[$subject_code] $subject_name</span></td>
				  </tr>
				</table></td>
				<td width=\"158\" align=\"right\" valign=\"top\"><img src=\"../images/$photo/$photo_id\" alt=\"This browser might not support this image. please try with Mozilla Firefox to view the photo\" width=\"150\" height=\"150\" border=\"1\" /></td>
			  </tr>
			</table></td>
		  </tr>
		  <tr>
			<td align=\"left\" valign=\"top\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
			  <tr>
				<td align=\"left\" valign=\"top\" bgcolor=\"#999999\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"1\" class=\"black11\">
				  <tr class=\"black12bold\">
					<td width=\"14%\" height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"#CCCCCC\">Subject</td>
					<td width=\"24%\" height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"#CCCCCC\">Date</td>
					<td width=\"21%\" height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"#CCCCCC\">Time</td>
					<td width=\"41%\" height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"#CCCCCC\">Exam Center &amp; Venue</td>
				  </tr>
				  <tr>
					<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">Compulsory</td>
					<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">$examdate</td>
					<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">$examtime_c</td>
					<td rowspan=\"2\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">$exam_centre<br />
					  $venue</td>
				  </tr>
				  <tr>
					<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">Optional</td>
					<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">$examdate</td>
					<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">$examtime_o</td>
				  </tr>
				</table></td>
			  </tr>
			</table></td>
		  </tr>
		  <tr>
			<td align=\"left\" valign=\"top\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black11\">
			  <tr>
				<td width=\"47%\" align=\"left\" valign=\"middle\"><img src=\"../images/$signature/$photo_id\" alt=\"This browser might not support this image. please try with Mozilla Firefox to view the signature\" width=\"300\" height=\"80\" /></td>
				<td width=\"6%\" align=\"left\" valign=\"middle\">&nbsp;</td>
				<td width=\"47%\" align=\"left\" valign=\"middle\"><img src=\"../images/authsing.jpg\" width=\"300\" height=\"80\" /></td>
			  </tr>
			  <tr>
				<td align=\"center\" valign=\"middle\">Candidate's Signature</td>
				<td align=\"left\" valign=\"middle\">&nbsp;</td>
				<td align=\"center\" valign=\"middle\"><span class=\"black12bold\">
				
			  </tr>
			</table></td>
		  </tr>
		</table></td>
	  </tr>
	</table>";
	   }
         }
*/



?>
</body>
</html>
