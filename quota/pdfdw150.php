<?php


if (!isset($_SESSION)) {
		session_start();
	}
	

	include "../lib/dbconnect.php";
	include "../lib/fx.php";

	$servername = "localhost";
	$username = "beelynxo_web";
	$password = "bReBb5522";
	$dbname = "beelynxo_tel_breb";


	// Not Active
	if($active == "0"){exit;}
	
	$invoice = "NA";

        $invoiceno = $_SESSION['invoice'];
        $sign=$_SESSION['signature'];

     
       



	//get Data from cinfo
	$out_info = mysql_query("SELECT * FROM `cinfo` WHERE 
							`invoice` = '$invoiceno'");
	while($row_info=mysql_fetch_array($out_info))
	      {
		extract($row_info);
	         }

	//get Data from roll_final
	$out_roll = mysql_query("SELECT * FROM `venue` WHERE 
							 `post_code`='$post_code'");
	while($row_roll =mysql_fetch_array($out_roll ))
	      {
		extract($row_roll );
	         }

	//Get Data post name
	
	$out_post = mysql_query("SELECT `post_code`, `post_name`, `ad_no` FROM `post` WHERE `post_code` = '$post_code'");
	while($row_post=mysql_fetch_array($out_post))
	{
		extract($row_post);
	}
	



 include "../lib/dbconnect.php";
	

//get Data

	$out_info = mysql_query("SELECT a.invoice AS invoice,
                                                                        a.post_code AS post_code,
                                                                        a.name AS name,
                                                                        a.father AS father,
                                                                        a.mother AS mother,
									b. g_sub_name As g_sub_name,

                                                                        b.pcode AS applicant_roll
                                                                        FROM cinfo a, registration b
                                                                        WHERE a.invoice = '$invoiceno'
                                                                        AND b.user = a.invoice")or
                                                                        die("QFI79766554545788");
	$i_count = mysql_numrows($out_info);
	while($row_info=mysql_fetch_array($out_info))
	     {
		extract($row_info);
	          }



	// Seat Plan
	
	$seat_out = mysql_query("SELECT         	exam_date  AS exam_date,
							exm_time AS extime,
							viva_exm_time As viva,
							exam_centre AS exam_centre,
							room_no  AS room_no																					     FROM venue
							WHERE start_roll <= '$applicant_roll'
							AND end_roll  >= '$applicant_roll'") or
							die(mysql_error()); //QST657843658764375643
	$seat_count = mysql_numrows($seat_out);
	while($seat_row=mysql_fetch_array($seat_out))
	{
		extract($seat_row);
	}



	$img_id = "$invoice" . ".jpg";
	$apply_post = "$post_name";
	
	switch ($sex)
	{
		case 1: $sex_value = "Male"; break;
		case 2: $sex_value = "Female"; break;
		default: $sex_value = "";
	}
	switch ($ffq)
	{
		case 1: $ff_quota = "Freedom Fighter"; break;
		case 2: $ff_quota = "Child of Freedom Fighter"; break;
		case 3: $ff_quota = "Grand Child of Freedom Fighter"; break;
              	case 4: $ff_quota = "Physically Handicapped"; break;
 		case 5: $ff_quota = "Ethnic Minority"; break;
  		case 6: $ff_quota = "Ansar-VDP"; break;
		case 7: $ff_quota = "Non Quota"; break;
		default: $ff_quota = "";	}



	switch ($orp)
	{
		case 1: $orp_quota = "Yes"; break;
		case 2: $orp_quota = "No"; break;
		default: $orp_quota = "";
	}
	
	
// Educational Information
	$edu_out = mysql_query("SELECT * FROM `cedu` WHERE `invoice` = '$invoice' ORDER BY `sl`");
	while($row_edu=mysql_fetch_array($edu_out))
	{
		extract($row_edu);
	}
	
	if($h_exam != "NA" && $h_group != "NA")
	{
		$edu_tab .= "<tr  bgcolor=\"#DCDCDC\">
                        <td align=\"center\" valign=\"middle\">$h_exam</td>
                        <td align=\"center\" valign=\"middle\">$h_board</td>
                        <td align=\"center\" valign=\"middle\">$h_group</td>
                        <td align=\"center\" valign=\"middle\">$h_result ($h_result_type)</td>
                        <td align=\"center\" valign=\"middle\">$h_year</td>
                        <td align=\"center\" valign=\"middle\">$h_roll</td>
                        <td align=\"center\" valign=\"middle\">NA</td>
                    </tr>";
	}
	
	if($g_exam != "NA" && $g_sub != "NA")
	{
		$edu_tab .= "<tr  bgcolor=\"#E3E3E3\">
                        <td align=\"center\" valign=\"middle\">$g_exam</td>
                        <td align=\"center\" valign=\"middle\">$g_institute</td>
                        <td align=\"center\" valign=\"middle\">$g_sub</td>
                        <td align=\"center\" valign=\"middle\">$g_result ($g_result_type)</td>
                        <td align=\"center\" valign=\"middle\">$g_year</td>
                        <td align=\"center\" valign=\"middle\">NA</td>
                        <td align=\"center\" valign=\"middle\">$g_duration</td>
                      </tr>";
	}
	
	if($m_exam != "NA" && $m_sub != "NA")
	{
		$edu_tab.= "<tr bgcolor=\"#DCDCDC\">
                        <td align=\"center\" valign=\"middle\">$m_exam</td>
                        <td align=\"center\" valign=\"middle\">$m_institute</td>
                        <td align=\"center\" valign=\"middle\">$m_sub</td>
                        <td align=\"center\" valign=\"middle\">$m_result ($m_result_type)</td>
                        <td align=\"center\" valign=\"middle\">$m_year</td>
                        <td align=\"center\" valign=\"middle\">NA</td>
                        <td align=\"center\" valign=\"middle\">$m_duration</td>
                      </tr>";
	}
	
	if($tss > 0)
	{
		$ts_table = "<tr>
			  <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black10\">Typing Speed: Bengali: $tsb/min English: $tse/min</td>
			</tr>";
	}
	
	
	
	
// Generate PDF
require_once("../dompdf/dompdf_config.inc.php");
	
$html="
<head>
<title>$page_title</title>
<link href=\"../lib/style.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<table width=\"550\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
				<td width=\"20%\" align=\"center\" valign=\"middle\"><img src=\"../images/logo_new.jpg\" width=\"80\" height=\"100\" /></td>
				<td width=\"77%\" align=\"left\" valign=\"middle\">
				 <font color='black'><font size='4'><B>Bangladesh Rural Electrification Board (BREB)</B></font><br />
				<font color='black' size='3'><B>(Online Job Application Portal)</B></font></td>
				
			  </tr>


  	 <tr> <span class=\"black11\">Admit Card</td>
        
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12bold\">
      <tr>
        <td width=\"40%\" align=\"left\" valign=\"middle\" bgcolor=\"#EAEAEA\">
		User ID: $invoice</td>
        <td width=\"60%\" align=\"right\" valign=\"middle\" bgcolor=\"#EAEAEA\">
		<span class=\"black11\">Ref: $ad_no<span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
            <td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\">
              <tr>
                <td width=\"25%\" align=\"left\" valign=\"middle\"><img src=\"../images/$post_code/photo/$img_id\" width=\"120\" height=\"120\" border=\"1\" /></td>
                <td width=\"65%\" align=\"left\" valign=\"top\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
                  <tr bgcolor=\"#CCCCCC\">
                    <td width=\"34%\" align=\"left\" valign=\"middle\" class=\"black10\">Post Name</td>
                    <td width=\"66%\" align=\"left\" valign=\"middle\" class=\"black10\">$post_name</td>
                  </tr>
		


		<tr bgcolor=\"#E3E3E3\">
                    <td width=\"34%\" align=\"left\" valign=\"middle\">Roll No.</td>
                    <td width=\"66%\" align=\"left\" valign=\"middle\">$applicant_roll</td>
                  </tr>

		<tr bgcolor=\"#E3E3E3\">
                    <td width=\"34%\" align=\"left\" valign=\"middle\">Applicant's Name</td>
                    <td width=\"66%\" align=\"left\" valign=\"middle\">$name</td>
                  </tr>


                  <tr bgcolor=\"#DCDCDC\">
                    <td align=\"left\" valign=\"middle\">Father's Name</td>
                    <td align=\"left\" valign=\"middle\">$father</td>
                  </tr>
                  <tr bgcolor=\"#E3E3E3\">
                    <td align=\"left\" valign=\"middle\">Mother's Name</td>
                    <td align=\"left\" valign=\"middle\">$mother</td>
                  </tr>

                  <tr bgcolor=\"#DCDCDC\">
                    <td align=\"left\" valign=\"middle\">Date of Birth</td>
                    <td align=\"left\" valign=\"middle\">$dob</td>
                  </tr>

                  <tr bgcolor=\"#E3E3E3\">
                    <td align=\"left\" valign=\"middle\">Exam Date and Time</td>
                    <td align=\"left\" valign=\"middle\">$exam_date </td>
                  </tr>

  		<tr bgcolor=\"#DCDCDC\">
                    <td align=\"left\" valign=\"middle\">Exam Center </td>
                    <td align=\"left\" valign=\"middle\">$exam_centre</td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
  </tr>
  

 
 
  <tr>
    <td align=\"right\" valign=\"middle\" bgcolor=\"#FFFFFF\"><img src=\"../images/$post_code/signature/$sign.jpg\" width=\"220\" height=\"40\" border=\"0\" /></td>
  </tr>
  <tr>
    <td align=\"right\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black10\">-------------- Applicant's Signature --------------</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><hr></td>
  </tr>





<tr>
					<td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\" class=\"black11bold\">Instructions to the Candidates</td>
				  </tr>
				  <tr>
					<td align=\"left\" valign=\"top\" bgcolor=\"white\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black10i\">
					  <tr>
						<td width=\"4%\" align=\"center\" valign=\"top\">01.</td>
						<td width=\"96%\" align=\"left\" valign=\"top\"><div align=\"left\"> You must bring this card with you at the time of examination and show it to the invigilator on duty. You should preserve it for future Examinations/requirements. </div></td>
					  </tr>
					  <tr>
						<td align=\"center\" valign=\"top\">02.</td>
						<td align=\"left\" valign=\"top\"> You should bring two Black Ball Point Pens. Use of pencil is not allowed.</td>
					  </tr>


					  <tr>
						<td align=\"center\" valign=\"top\">03.</td>
						<td align=\"left\" valign=\"top\"><div align=\"justify\"> It is strictly prohibited to bring programmable calculator (you may use normal scientific calculator), mobile phone or any type of electronic devices (including smart watch) in examination hall. </div></td>
					  </tr>


					  <tr>
						<td align=\"center\" valign=\"top\">04.</td>
						<td align=\"left\" valign=\"top\"><div align=\"justify\">You should be present at the examination hall half an hour before the schedule time. </div></td>
					  </tr>

					 <tr>
						<td align=\"center\" valign=\"top\">05.</td>
						<td align=\"left\" valign=\"top\"><div align=\"justify\">No traveling allowance/fares will be provided for appearing at Examinations. </div></td>
					  </tr>


					<tr>
						<td align=\"center\" valign=\"top\">06.</td>
						<td align=\"left\" valign=\"top\"><div align=\"justify\"> Candidates who will involve in any unfair means or misconduct in examination hall, necessary legal steps will be taken as per rules and regulations of Authority.   </div></td>
					 </tr>


					



					</table></td>
				  </tr>


<tr>
		
	<td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black11\">
		  <tr>
			
			<td align=\"right\" valign=\"middle\"><img src=\"../images/au_sign.jpg\" width=\"220\" height=\"110\" /></td>

			</tr>
		
                      


		</table></td>
      </tr>
    </table></td>
	  </tr>

	  
  

  <tr>
    <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black10\">
      <tr>
        <td width=\"65%\" align=\"left\" valign=\"bottom\">$copyright</td>
        <td width=\"35%\" align=\"right\" valign=\"middle\">$by <img src=\"tbl_logo.jpg\" alt=\"\" width=\"61\" height=\"38\" align=\"absbottom\" /></td>
      </tr>
    </table></td>
  </tr>
  </table>
  </body>

</html>";


$filename = "Admitcard_$invoice".".pdf";
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream($filename);

mysql_close();
?>
