<?php
	if (!isset($_SESSION)) {
		session_start();
	}
	

include "../lib/dbconnect.php";

	  // get Data from Admit Instruction

	$out_venue_instruction= mysql_query("SELECT * FROM `venue_instruction`");
	while($row_venue_instruction=mysql_fetch_array($out_venue_instruction))
	      {	extract($row_venue_instruction);}


	$rowtitel = "
		<tr>
			<td height=\"35\" align=\"right\" valign=\"bottom\" bgcolor=\"#FFFFFF\" class=\"black11\" colspan=\"6\">Invigilator's Signature & Date.........................................</td>
		</tr>

		<tr class=\"pbreak\">
			<td width=\"250\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Applicant's Information</td>
			<td width=\"100\"  align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Photo</td>
			<td width=\"100\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Signature</td>
			<td width=\"100\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Remark</td>
		</tr>
		<tr>
			<td height=\"10\" align=\"right\" valign=\"bottom\" bgcolor=\"#FFFFFF\" class=\"black11\" colspan=\"6\"></td>
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
		
		if($rr >=10)
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
			<td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\"><img src=\"../images/$photo_id\" width=\"80\" height=\"80\" /></td>
			<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">&nbsp;</td>
			<td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">&nbsp;</td>
		  </tr>";
		  $rr ++;
		}
		
		$rollstart ++;
		
	}


	include "lib/dbconnect.php";


	

        $post_code 				= addslashes($_POST['post_code']);
        $post_name 				= addslashes($_POST['post_name']);

	// Not Active
	if($active == "0"){exit;}
	
	$invoice = "NA";

        $invoiceno = $_SESSION['invoice'];
        $sign=$_SESSION['signature'];

        echo "Invoice: $sign<br/>"; 

 	$post_code=$_SESSION['postcode'];
	$postcode=$post_code;

	$post_name=$_SESSION['postname'];
	$postname=$post_name;
     




	//get Data from post

	$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
	while($row_post=mysql_fetch_array($out_post))
	      {	extract($row_post);}



	//get Data from cinfo

	$out_info = mysql_query("SELECT * FROM `cinfo` WHERE 
							`invoice` = '$invoiceno'");
	while($row_info=mysql_fetch_array($out_info))
	      {
		extract($row_info);
	         }


	//get Data from cedu

	$out_edu = mysql_query("SELECT * FROM `cedu` WHERE 
							`invoice` = '$invoiceno'");
	while($row_edu=mysql_fetch_array($out_edu))
	      {
		extract($row_edu);
	         }













///*****************************************************     pdfdw Function working ***************************************************************


include "lib/dbconnect.php";

	$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postcode'");
	while($row_post=mysql_fetch_array($out_post))
	      {	extract($row_post);}








// ***********************************************   Experienc print out   *********************************************





if(($job_exp=='1') && ($exp_flag=="5"))
   {
   $job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">



	  <tr bgcolor=\"#DCDCDC\">

   	      <td width=\"25%\" align=\"left\" valign=\"middle\">$org_name5</td>
              
              <td width=\"25%\" align=\"left\" valign=\"middle\">$age_as5</td>

    </table></td>

	</tr>";

}



else if(($job_exp=='1') && ($exp_flag=="4"))
   {
   $job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>





	 

    </table></td>

	</tr>";

   }

else if(($job_exp=='1') && ($exp_flag=="3"))
   {
   $job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
   

    </table></td>

	</tr>";
    }



else if(($job_exp=='1') && ($exp_flag=="2"))
   {
   $job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
            <tr bgcolor=\"#DCDCDC\">
              <td width=\"25%\" align=\"left\" valign=\"middle\"> Organization Name</td>

   
              </tr>


	

  	

    </table></td>

	</tr>";

}

else if(($job_exp=='1') && ($exp_flag=="1"))
   {
   $job_exp_tab = "<tr>

         
	<tr bgcolor=\"#CCCCCC\">
          <td  align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"0\" class=\"black10\">
           <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"white\" class=\"black12\">Professional Experience:</td>
  </tr>

 <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
            <tr bgcolor=\"#DCDCDC\">
              <td width=\"25%\" align=\"left\" valign=\"middle\"> Organization Name</td>
   
              </tr>

  	    

    </table></td>

	</tr>";

}


	
// *********************************************************              Generate PDF    *******************************************************************

require_once("dompdf/dompdf_config.inc.php");
	
$html="
<head>
<title>$page_title</title>
<link href=\"lib/style.css\" rel=\"stylesheet\" type=\"text/css\" />
<head>
<body>

<table width=\"550\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    
    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td width=\"10%\" height=\"60\" align=\"left\" valign=\"middle\"><img src=\"../images/govt_logo.png\" width=\"40\" height=\"40\" /></td>
				
        <td width=\"2%\" align=\"center\" valign=\"middle\">&nbsp;</td>
        <td width=\"78%\" align=\"center\" valign=\"middle\" class=\"black10\"> <font size='4'><b>$org_name<br/></font><font size='2'>Attendance Sheet</font></span><br/>Exam Center: Room No: $room_no,Floor No: $floor, Building: $building, $exam_center   <br/>Total : $total, Exam Date : $exam_date_time
	 <td width=\"10%\" height=\"60\" align=\"right\" valign=\"middle\"><img src=\"../images/nctb_logo.png\" width=\"40\" height=\"40\" /></td>

     </tr>

</table>

</table>
 

<table width=\"550\" border=\"0.5\" cellpadding=\"1\" cellspacing=\"1\" class=\"black10\">

  <tr>
 
    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">

     <tr>
        <td width=\"55%\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Applicant's Information</td>
        <td width=\"15%\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Photo</td>
        <td width=\"15%\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Signature</td>
        <td width=\"15%\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\">Remark</td>
      </tr>
	$list_row
	<tr>
		<td height=\"30\" align=\"right\" valign=\"bottom\" bgcolor=\"#FFFFFF\" class=\"black11\" colspan=\"8\">
		Invigilator's Signature & Date.........................................................</td><br/><br/>
                    
      </tr>




</table>

</table>

</body>

</html>";


$filename = "$start_roll-$end_roll".".pdf";
//$filename = "$start_roll"."-"."$end_roll".".pdf";
$dompdf = new DOMPDF();
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream($filename);

mysql_close();
?>
