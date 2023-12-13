<?php
	include "../lib/dbconnect.php";

	  // get Data from Admit Instruction

	$out_venue_instruction= mysql_query("SELECT * FROM `venue_instruction`");
	while($row_venue_instruction=mysql_fetch_array($out_venue_instruction))
	      {	extract($row_venue_instruction);}


	$rowtitel = "
		<tr>
			<td height=\"25\" align=\"right\" valign=\"bottom\" bgcolor=\"#FFFFFF\" class=\"black11\" colspan=\"10\">Invigilator's Signature & Date.........................................</td>
		</tr>
		<tr class=\"pbreak\">
	<td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Sl.<br/>No.</td>
        <td width=\"120\"  align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Applicant Photograph</td>
        <td width=\"150\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Name & Roll Number</td>
        <td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Home District</td>       
	<td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Height (Male-1.68M or above)<br/>(Female- 1.57M <br/>or above)</td>
	<td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Weight (Male-50Kg or above)<br/>(Female- 46kg <br/>or above)</td>
	<td width=\"100\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Chest Measurement Male/Female<br/>(Normal:78cm Extendent:82cm)</td>
	<td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Comments<br/>(Passed/Failed)</td>
        <td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Applicant Signature</td>
		</tr>";
	
	$rollstart 		= $_POST['s_roll'];
	$sroll 			= $_POST['s_roll'];
	$rollend 		= $_POST['e_roll'];

	$cuser 	= addslashes($_POST['username']);
	$cpassword 	= addslashes($_POST['password']);

                 $sl_no=1;


if($cuser!="dnc2020")

  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=67\"; </script>";}


if($cpassword!="dN*20*20")

  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=67\"; </script>";}



	// Check Roll Range and get center name
	include "../lib/dbconnect.php";

	$range_out = mysql_query("SELECT * FROM `venue_att`
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
										a.permanent_dist AS permanent_dist,
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
		
		if($rr >= 10)
		{
			$list_row .= "$rowtitel";
			$rr = 0;
		}


		if($row_count > 0)
		{
			$list_row .= "<tr>
			<td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><span class=\"black10bold\">
					
			<B>$sl_no<br />			
			<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><img src=\"../images/$photo_id\" width=\"80\" height=\"80\" /></td>
			<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><span class=\"black10bold\">
               		   Name: $fullname</span><br /><B>Roll No: $rollno<br /></B> <span class=\"black12\"></span></td>

			<td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><span class=\"black10bold\">
		                    $permanent_dist<br/></td>
		<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><span class=\"black10bold\">

				<td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><span class=\"black10bold\">
		                    $height<br/></td>
		<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><span class=\"black10bold\">
			<td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><span class=\"black10bold\">
		                    $weight<br/></td>


	<td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">&nbsp;</td>

		  </tr>";
		}
		
		$rollstart ++;
		$rr ++;
		$sl_no++;
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
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td bgcolor=\"#FFFFFF\">
    
    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td width=\"10%\" height=\"60\" align=\"center\" valign=\"middle\"><img src=\"../images/govt_logo.png\" width=\"40\" height=\"40\" /></td>

        <td width=\"2%\" align=\"center\" valign=\"middle\">&nbsp;</td>
        <td width=\"58%\" align=\"center\" valign=\"middle\" class=\"black10\"> The Government of The People's Republic of Bangladesh<br/><font size='2'>$org_name<br/></font><br/><font size='3'><b>Attendance Sheet</font></b></span><br />
	<br/> <font size='2'>Exam Type: Physical Measurment Test  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     Post Name: $post_name<br/> <br/>
       <font size='2'>Exam Center: $exam_center
        <td width=\"10%\" height=\"60\" align=\"center\" valign=\"middle\"><img src=\"../images/com_logo.png\" width=\"40\" height=\"40\" /></td>
      </tr>
    </table>
	
    </td>
  </tr>
  <tr>
    <td><table width=\"760\" border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"black11\">
      <tr class=\"black12bold\">
	<td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Sl.<br/>No.</td>
        <td width=\"120\"  align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Applicant Photograph</td>
        <td width=\"150\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Name & Roll Number</td>
        <td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Home District</td>       
	<td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Height (Male-1.68M or above)<br/>(Female- 1.57M <br/>or above)</td>
	<td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Weight (Male-50Kg or above)<br/>(Female- 46kg <br/>or above)</td>
	<td width=\"100\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Chest Measurement Male/Female<br/>(Normal:78cm Extendent:82cm)</td>
	<td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Comments<br/>(Passed/Failed)</td>
        <td width=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Applicant Signature</td>

      </tr>

	$list_row
	<tr>
		<td height=\"25\" align=\"right\" valign=\"bottom\" bgcolor=\"#FFFFFF\" class=\"black11\" colspan=\"10\">
		Invigilator's Signature & Date.........................................</td>
	</tr>

    </table></td>
  </tr>
</table>";
?>
</body>
</html>
