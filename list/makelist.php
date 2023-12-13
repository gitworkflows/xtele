<?php
	include "../lib/dbconnect.php";

	  // get Data from Admit Instruction

	$out_venue_instruction= mysql_query("SELECT * FROM `venue_instruction`");
	while($row_venue_instruction=mysql_fetch_array($out_venue_instruction))
	      {	extract($row_venue_instruction);}


	$rowtitel = "
		<tr>
			<td height=\"25\" align=\"right\" valign=\"bottom\" bgcolor=\"#FFFFFF\" class=\"black11\" colspan=\"5\">Invigilator's Signature & Date.........................................</td>
		</tr>
		<tr class=\"pbreak\">
			<td width=\"250\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Applicant's Information</td>
			<td width=\"100\"  align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Photo</td>
			<td width=\"50\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Signature</td>
			<td width=\"50\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Remark</td>
		</tr>";
	
	$rollstart 		= $_POST['s_roll'];
	$sroll 			= $_POST['s_roll'];
	$rollend 		= $_POST['e_roll'];

	$cuser 	= addslashes($_POST['username']);
	$cpassword 	= addslashes($_POST['password']);



if($cuser!="$userID")
  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=67\"; </script>";}


if($cpassword!="$paswd")

  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=68\"; </script>";}



	// Check Roll Range and get center name
	include "../lib/dbconnect.php";

	$range_out = mysql_query("SELECT * FROM `venue`
							WHERE `start_roll` <= $rollstart
							AND `end_roll` >= $rollend")or
							die("Error: Center out");
	$range_row = mysql_numrows($range_out);


	if($range_row < 1)
	{
		echo "Error: Invalid Roll Range";
		exit;
	}


	while($r_row = mysql_fetch_array($range_out))
	{
		extract($r_row);
	}

	$rr = 1;
	while ($rollend >= $rollstart)
	{
		$info_out = mysql_query("SELECT a.invoice AS invoice,
										a.post_code AS post_code,
										a.name AS fullname,
										a.father AS father,
										a.mother AS mother,
										b.pcode AS rollno,
										c.post_name AS post_name
										FROM cinfo a, registration b, post c
										WHERE b.pcode = '$rollstart'
										AND a.invoice = b.user
										AND c.post_code=a.post_code") or
										die(mysql_error());
		$row_count = mysql_numrows($info_out);
		while($info_row = mysql_fetch_array($info_out))
		{
		  extract($info_row);
		}


		$fullname		= 	strtoupper($fullname);
		$father			=	strtoupper($father);
		$photo_id = "$post_code"."/"."photo"."/"."$invoice".".jpg";
		
		if($rr >= 11)
		{
			$list_row .= "$rowtitel";
			$rr = 0;
		}
		if($row_count > 0)
		{
			$list_row .= "<tr>
			<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><span class=\"black10bold\"><B>Roll No: $rollno<br />
			Name: $fullname</span><br /></B>
			  <span class=\"black12\">
				Post: $post_name <br/>
				User ID: $invoice
			  </span></td>
			<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><img src=\"../images/$photo_id\" width=\"80\" height=\"80\" /></td>
			<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">&nbsp;</td>
			<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">&nbsp;</td>
		  </tr>";
		  $rr ++;
		}
		
		$rollstart ++;
		
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo " $org_name"; ?></title>
<link href="../lib/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
echo"
<table width=\"550\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td bgcolor=\"#FFFFFF\">
    
    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td width=\"10%\" height=\"60\" align=\"center\" valign=\"middle\"><img src=\"../images/govt_logo.png\" width=\"40\" height=\"40\" /></td>

        <td width=\"2%\" align=\"center\" valign=\"middle\">&nbsp;</td>
        <td width=\"58%\" align=\"center\" valign=\"middle\" class=\"black10\"> <br/><font size='2'><b>$org_name<br/></font><font size='1'>Attendance Sheet</font></span><br />Post Name: $post_name<br/>
	 Exam Center: $exam_center, Room No: $room_no, Floor:$floor, Building:$building
     <!--<td width=\"10%\" height=\"60\" align=\"center\" valign=\"middle\"><img src=\"../images/govt_logo.png\" width=\"40\" height=\"40\" /></td>-->
      </tr>
    </table>
	
    </td>
  </tr>
  <tr>
    <td><table width=\"550\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"black11\">
      <tr class=\"black12bold\">
        <td width=\"55%\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Applicant's Information</td>
        <td width=\"15%\"  align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Photo</td>
        <td width=\"15%\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Signature</td>
        <td width=\"15%\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Remark</td>
      </tr>

	$list_row
	<tr>
		<td height=\"30\" align=\"right\" valign=\"bottom\" bgcolor=\"#FFFFFF\" class=\"black11\" colspan=\"6\">
		Invigilator's Signature & Date.........................................</td>
	</tr>

    </table></td>
  </tr>
</table>";
?>
</body>
</html>
