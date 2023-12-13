

<?php
	if (!isset($_SESSION))
	{
	 session_start();
	}
	include "../lib/fx.php";
	
	$username = addslashes($_SESSION['ses_user']);
	$userpass = addslashes($_SESSION['ses_pass']);
	$auth 	  = $_SESSION['ses_auth'];
	$inv	  = addslashes($_POST['t']);
	
	if($auth != "HyeJKyufgh378934jkoyuAyukFhsstyKOFsjkfJKvggdy")
	{
		echo"<script language='javascript'>window.location.href=\"index.php\"; </script>";
		exit;
	}
	

    

	include "../lib/dbconnect.php";


       // get Data from Admit Instruction


//get Data

	$out_info1 = mysql_query("SELECT * FROM venue_instruction a, registration b
                                                                        WHERE b.user = '$username'
                                                                        AND b.password = '$userpass'
                                                                        AND a.post_code = b.post_code")or
                                                                        die("QFI79766554545788");
	$ii_count = mysql_numrows($out_info1);
	while($row_info1=mysql_fetch_array($out_info1))
	     {
		extract($row_info1);
	          }





       //get Data from post

	$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` >'99'");
	while($row_post=mysql_fetch_array($out_post))
	      {	extract($row_post);}



	require_once("../dompdf/dompdf_config.inc.php");

	include "../lib/dbconnect.php";
	
	// username & password check
	if($username != "" && $userpass != "")
	{
		$user_out = mysql_query("SELECT `user`, `password`, `pcode` FROM `registration` WHERE `user` = '$username'
								AND `password` = '$userpass'") or
								die("QUO345987656435");
		$user_count = mysql_numrows($user_out);
		while($row_user=mysql_fetch_array($user_out))
		{
			extract($row_user);
		}
	}




	if($username == "" || $userpass == "" || $user_count < 1)
	{
		// Invalid Login
		echo"<script language='javascript'>window.location.href=\"index.php?err=627\"; </script>";
		exit;
	}

	$invoiceno 	= $user;
	
	//get Data

	$out_info = mysql_query("SELECT a.invoice AS invoice,
                                                                        a.post_code AS post_code,
                                                                        a.name AS name,
                                                                        a.father AS father,
                                                                        a.mother AS mother,

     									a.permanent_dist AS permanent_dist,
	
                                                                        b.pcode AS pcode
                                                                        FROM cinfo a, registration b
                                                                        WHERE a.invoice = '$invoiceno'
                                                                        AND b.user = a.invoice
                                                                        AND a.fee = '1'")or
                                                                        die("QFI79766554545788");
	$i_count = mysql_numrows($out_info);
	while($row_info=mysql_fetch_array($out_info))
	     {
		extract($row_info);
	          }






	// Seat Plan
	
	$seat_out = mysql_query("SELECT         	exam_date_time  AS mcq,
							written_exam_time AS wr,
						        exam_center AS exam_center,
					       		room_no AS room_no,
					       		floor  AS floor,
					       		building AS building
				                        FROM venue
							WHERE start_roll <= '$pcode'
							AND end_roll  >= '$pcode'") or
							die(mysql_error()); //QST657843658764375643
	$seat_count = mysql_numrows($seat_out);
	while($seat_row=mysql_fetch_array($seat_out))
	{
		extract($seat_row);
	}



	$img_id = "$invoice" . ".jpg";
	
	if($i_count < 1 )
	{
		echo"<script language='javascript'>window.location.href=\"../err.php?err=832\"; </script>";
		exit;
	}


	// SystemID
	$sid	 	= "$invoice" . "$pcode";
	$sys_id		= strtoupper(md5($sid));
	


	// Download log

	$uptime = date("y-m-d H:i:s");
	$ip = $_SERVER['REMOTE_ADDR'];
	mysql_query("INSERT INTO `card_log` ( `sl` , `invoice` ,  `post_code` ,`uptime` , `ip` , `system_id` )
		VALUES ('0', '$invoice', '$post_code','$uptime', '$ip', '$sys_id')") or
								die("$invoice $uptime $ip $sys_id");
	

	// Post Out
	$out_post = mysql_query("SELECT `post_code`, `post_name` FROM `post` WHERE `post_code` = '$post_code'");
	while($row_post=mysql_fetch_array($out_post))
	{
		extract($row_post);
	}
	
	session_destroy();
	mysql_close();

		
		$sing_id = "../images/110/photo/au_sign.png";
		$department = "<span   class=\"black12bold\"> $auth_name</span><br /> $position <br />$name_of_dept<br />$ministry_name";





  if($post_code>'99')
   {

	$gen_ins = "<tr>
					<td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#CCCCCC\" class=\"black11bold\">Instructions to the Candidates</td>
				  </tr>
				  <tr>
					<td align=\"left\" valign=\"top\" bgcolor=\"white\"><table width=\"100%\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\" class=\"black10i\">
					 <tr>
				        	<td width=\"96%\" align=\"left\" valign=\"top\"><div align=\"left\"> $ins_01</div></td>
					  </tr>

					  <tr>
						<td align=\"left\" valign=\"top\"> $ins_02</td>
					  </tr>

					 <tr>
						<td align=\"left\" valign=\"top\"> $ins_03</td>
					  </tr>

  				          <tr>
						<td align=\"left\" valign=\"top\"> $ins_04</td>
					  </tr>

					 <tr>
						<td align=\"left\" valign=\"top\"> $ins_05</td>
					  </tr>


				          <tr>
						<td align=\"left\" valign=\"top\"> $ins_06</td>
					  </tr>

					 <tr>
						<td align=\"left\" valign=\"top\"> $ins_07</td>
					  </tr>
				  <tr>
						<td align=\"left\" valign=\"top\"> $ins_08</td>
					  </tr>

					 <tr>
						<td align=\"left\" valign=\"top\"> $ins_09</td>
					  </tr>

				      <tr>
						<td align=\"left\" valign=\"top\"> $ins_10</td>
					  </tr>

					 <tr>
						<td align=\"left\" valign=\"top\"> $ins_11</td>
					  </tr>

 					<tr>
						<td align=\"left\" valign=\"top\"> $ins_12</td>
					  </tr>

					 <tr>
						<td align=\"left\" valign=\"top\"> $ins_13</td>
					  </tr>

				      <tr>
						<td align=\"left\" valign=\"top\"> $ins_14</td>
					  </tr>

					 <tr>
						<td align=\"left\" valign=\"top\"> $ins_15</td>
					  </tr>


					</table></td>
				  </tr>";

                    }
  


  



//Application Head

  $app_head22 = "
		 <tr>
		<td align=\"left\" valign=\"top\"><table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">
		  <tr>
			<td bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
		
	<tr>
		     <td width=\"16%\" height=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
                                 <img src=\"../images/govt_logo.png\" width=\"80\" height=\"80\" /></td>

 		
<td width=\"64%\" height=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
 		         <font color='white'><font size='2'>Government of the People's Republic of Bangladesh</font><br />
  			  <font color='white'><font size='4'><b>$org_name</b></font><br />
  			  
  			 
						 <!--<font color='white'><font size='1'><b>http://vas.teletalk.com.bd</b></font><br/>-->
 
		<!--<td width=\"16%\" height=\"80\" align=\"center\" valign=\"middle\" bgcolor=\"Green\">
                                 <img src=\"../images/govt_logo.png\" width=\"80\" height=\"80\" /></td>-->
	        </tr>
			</table></td>
		  </tr>
		</table></td>
	  </tr>";





	$html="<html>
	<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<title>Admit Card</title>
	<link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" />
	</head>
	<body>


	<table width=\"550\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
	 
       $app_head22

 
	  <tr>
		<td height=\"10\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black14bold\">Admit Card for the post of '$post_name'</td>
	  </tr>
	  <tr>
		<td align=\"left\" valign=\"top\" bgcolor=\"#E4EBF1\"><table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">
		  <tr>
			<td bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
			  <tr>
				<td width=\"75%\" align=\"left\" valign=\"top\">
				
				<table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
				  <tr class=\"black12bold\">
					<td width=\"35%\" height=\"8\" bgcolor=\"#FFFFFF\">Roll No:</td>
					<td width=\"65%\" height=\"8\" bgcolor=\"#FFFFFF\" class=\"black14bold\">$pcode</td>
				  </tr>
				  <tr>
					<td height=\"8\" bgcolor=\"#FFFFFF\">Name:</td>
					<td height=\"8\" bgcolor=\"#FFFFFF\">$name</td>
				  </tr>

			
				  <tr>
					<td height=\"8\" bgcolor=\"#FFFFFF\">Mother's Name:</td>
					<td height=\"8\" bgcolor=\"#FFFFFF\">$mother</td>
				  </tr>


				  <tr>
					<td height=\"8\" bgcolor=\"#FFFFFF\">Father's Name:</td>
					<td height=\"8\" bgcolor=\"#FFFFFF\">$father</td>
				  </tr>



				   <tr>
                                        <td width=\"40%\"height=\"10\"  valign=\"top\" bgcolor=\"#FFFFFF\">Exam Date and Time :</td>
                                        <td width=\"60%\"height=\"10\" bgcolor=\"#FFFFFF\">
					$mcq<br />
					
                                  </tr>

				<tr>
                                        <td width=\"40%\"height=\"10\"  valign=\"top\" bgcolor=\"#FFFFFF\">Exam Center:</td>

                 <td width=\"60%\"height=\"10\" bgcolor=\"#FFFFFF\"> <!--$room_no-->Floor:$floor, Building:$building<br />                      
                  $exam_center
					
					</td>
                                  </tr>


				</table></td>


				<td width=\"25%\" align=\"right\" valign=\"top\" bgcolor=\"#FFFFFF\"><img src=\"../images/$post_code/photo/$img_id\" width=\"130\" height=\"130\" border=\"1\" /><br/></td>
	                         </tr>
	                   
			  <tr>
				<td width=\"25%\"align=\"left\" valign=\"top\"><img src=\"../images/$post_code/signature/$img_id\" width=\"140\" height=\"40\" /></td>
				<td width=\"25%\"align=\"right\" valign=\"top\">&nbsp;</td>
			  </tr>
			  <tr>
				<td width=\"25%\"align=\"left\" valign=\"top\">Candidate's Signature</td>
				<td width=\"25%\"align=\"right\" valign=\"top\">&nbsp;</td>
			  </tr>
			  </table></td>
		  </tr>
		</table></td>
	  </tr>
	  <tr>
		<td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black10\">
		  <tr>
			<td width=\"29%\">Downloading Date: $uptime</td>
			<td width=\"71%\" align=\"right\">User ID: <B>$invoice | System ID: $sys_id</td>
		  </tr>
		</table></td>
	  </tr>


$gen_ins
	

<tr>
		<td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black11\">
		  <tr>
			<td width=\"80%\"></td> <!--html comment code here-->
			<td align=\"center\" valign=\"middle\"><img src=\"$sing_id\" width=\"120\" height=\"40\" /></td>

			</tr>
		     <tr>
		     <td width=\"80%\"></td> <!--html comment code here-->
			<td align=\"center\" valign=\"middle\" class=\"black10\">$department</td>
			</tr>


		</table></td>
      </tr>
    </table></td>
	  </tr>

	  <tr>
		<td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\">&nbsp;</td> <!--html comment code here-->
	  </tr>


 	  <tr>
		<td align=\"left\" valign=\"top\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\">
      <tr>
        <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black11\">
		  <tr>
			<td width=\"70%\" align=\"left\" valign=\"bottom\">&copy;2021 $org_name, All Rights Reserved.</td>
			<td width=\"30%\" align=\"right\" valign=\"bottom\">Powered by: <img src=\"tbl_logo.png\" width=\"61\" height=\"38\" align=\"baseline\" /></td>
			</tr>
		</table></td>
      </tr>
    </table></td>
	  </tr>
	</table>
	</body>
	</html>";
	$filename = "AdmitCard_"."$invoice".".pdf";
	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream($filename);
?>
