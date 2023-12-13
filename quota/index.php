<?php
	session_start();
	
	include "cardtime.php";
	include "../lib/fx.php";


      // echo"<script language='javascript'>window.location.href=\"../err.php?err=501\"; </script>"; exit;

       // Check User/Password



	$yes 		= $_POST['yes'];
	$cuser 	= addslashes($_POST['username']);
	$cpassword 	= addslashes($_POST['password']);
	$cpcode 	= addslashes($_POST['cpcode']);

	$err_msg = "";


 // echo "current user: $cuser";
 // echo "current password: $cpassword ";
 // echo "pcode: $cpcode";



 $ccpcode=$cpcode;

include "../lib/dbconnect.php";

$user_out = mysql_query("SELECT * FROM registration WHERE `user` = '$cuser' AND `password` = '$cpassword'");
   
   $user_count = mysql_numrows($user_out);


  while($row_user=mysql_fetch_array($user_out))
      {	extract($row_user);}



$invoiceno=$user;
$invoice=$user;




if($cuser!=$user)
  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=67\"; </script>";}


if($password!=$cpassword)
  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=68\"; </script>";}


//echo "pcode: $cpcode";
//echo "post code: $post_code";


if($cpcode=='1') $ff_quota="Freedom Fighter";
if($cpcode=='2') $ff_quota="Child of Freedom Fighter";
if($cpcode=='3') $ff_quota="Grand Child of Freedom Fighter"; 
if($cpcode=='4') $ff_quota="Physically Handicapped";
if($cpcode=='5') $ff_quota="Orphan";
if($cpcode=='6') $ff_quota="Ethnic Minority"; 
if($cpcode=='7') $ff_quota="Ansar-VDP";
if($cpcode=='8') $ff_quota="Non Quota";







///   ****************************************************** Sub Assistant Engineer ******************************************************************

if(($cuser!="") && ($cuser==$user)  && ($cpassword!="") && ($password==$cpassword))
         {

if($cpcode<'1')
  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=300\"; </script>";}




if($cpcode>'0')

{
   $username = "egcb";
   $password = "egcb2447";
   $dbname = "egcb";
   $servername = "localhost";


// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
               }

$sql ="INSERT INTO quota( sl , user_id, password , quota)
		VALUES ('0', '$invoice', '$cpassword', '$ff_quota')";



if ($conn->query($sql) === TRUE) {
    echo "Quota Information Submitted successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}

			$image_filepath = 'http://brebr.teletalk.com.bd/images/1009/photo/$img_id';
			$signature_filepath = 'http://brebr.teletalk.com.bd/images/1009/signature/$img_id';

	if (!is_array(@getimagesize($image_filepath)) || !is_array(@getimagesize($signature_filepath)))
			{
			$_SESSION['image_status'] = "yes";
			$card_link = "
			<form action=\"card.php\" method=\"post\" name=\"card_form\" id=\"card_form\">
			  <tr>
				<td align=\"left\" valign=\"top\">&nbsp;</td>
			  </tr>
			 
				  </table>
				</fieldset></td>
			  </tr>
			</form>";
			}

			else
			{
		$card_link = " Please send your photo (300x300) and signature (300x80) to vas.query@teletalk.com.bd";

}



    

   

       }







//echo "Original user: $fullname";
//echo "Original password: $invoice";




$invoiceno=$user;
$_SESSION['invoice'] = $invoiceno;

$_SESSION['signature'] = $user;



	
	if($yes == "YES" && $username != "" && $userpass != "")
	{
		include "../lib/dbconnect.php";



		// username & password check
/*
		$user_out = mysql_query("SELECT 				a.user AS invoice, 
										a.password AS  password,
										b.post_code AS post_code,
										b.name AS name,
										
										FROM registration a, cinfo b, post c
										WHERE a.user = '$username'
										AND a.password = '$userpass'
										AND e.invoice=a.user") or
										die("QUO345987656435");


*/



		$user_count = mysql_numrows($user_out);
		while($row_user=mysql_fetch_array($user_out))
		{
			extract($row_user);
		}
		// Invalid Login
		if($user_count < 1){$err_msg = "Invalid login!";}
		
		if($user_count > 0)
		{
			$img_id = "$invoice" . ".jpg";
			$_SESSION['ses_user'] = "$invoice";
			$_SESSION['ses_pass'] = "$password";
			$_SESSION['ses_auth'] = "HyeJKyufgh378934jkoyuAyukFhsstyKOFsjkfJKvggdy";
			
			$card_link = "
			<form action=\"card.php\" method=\"post\" name=\"card_form\" id=\"card_form\">
			  <tr>
				<td align=\"left\" valign=\"top\">&nbsp;</td>
			  </tr>
			  <tr>
				<td align=\"left\" valign=\"top\"><fieldset>
				  <legend class=\"black12\">Download Admit Card</legend>
				  <table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
					<tr>
					  <td width=\"10%\" align=\"left\" valign=\"top\">&nbsp;</td>
					  <td width=\"25%\" align=\"left\" valign=\"top\">
					  0<img src=\"../images/$post_code/photo/$img_id\" width=\"80\" height=\"80\" border=\"1\" />
					  <input type=\"hidden\" name=\"t\" id=\"t\" value=\"$invoice\" />
					  </td>
					  <td width=\"65%\" align=\"left\" valign=\"top\"><span class=\"black12bold\">$name</span><br />
						Admit Card is ready<br />
						<br />
						<input type=\"submit\" name=\"cardw\" id=\"cardw\" value=\" Download Admit Card \" />
						<br /></td>
					</tr>
				  </table>
				</fieldset></td>
			  </tr>
			</form>";
		}
		mysql_close();
	}

echo"
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>$page_title</title>";
?>



<link href="../lib/style.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<?php
echo"
</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"20\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head2
	$crdlink
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
              <tr>
		<td height=\"50\" align=\"center\" valign=\"middle\" class=\"black12bold\"><font color='red'><font size='4'>Please provide User ID, Password and Quota Information Correctly</td>
	        </tr>

   


		<td colspan=\"1\" align=\"center\" class=\"red12bold\"></td>

	  <tr>
        <td height=\"200\" align=\"center\" valign=\"middle\">
			<table width=\"500\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
			  <tr>
				<td height=\"300\" align=\"left\" valign=\"top\"><fieldset>
				  <legend class=\"black12\">sign in</legend>
				  <form id=\"users\" name=\"users\" method=\"post\" action=\"index.php\">
				  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
					<tr>
					  <td width=\"10%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"20%\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  
					</tr>
					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">User ID</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
					  <td align=\"left\" valign=\"middle\"><span id=\"sprytextfield1\">
						<label>
						  <input name=\"username\" type=\"text\" class=\"textfieldUSER\" id=\"username\" />
						</label>
						<span class=\"textfieldRequiredMsg\">User ID is required!</span></span></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>



					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">Password</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
					  <td align=\"left\" valign=\"middle\"><span id=\"sprypassword1\">
						<label>
						  <input name=\"password\" type=\"password\" class=\"textfieldPASS\" id=\"password\" />
						  </label>
						<span class=\"passwordRequiredMsg\">Password is required!</span></span></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>

         				<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">Select Quota</td>
					  <td align=\"left\" valign=\"middle\" class=\"black12\">:</td>
         				 <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"\"><select name=\"cpcode\" class=\"textfield02\" id=\"cpcode\">
             				   	<option value=\"0\">Select One</option>
				<option value=\"1\">Freedom Fighter</option>
				<option value=\"2\">Child of Freedom Fighter</option>
				<option value=\"3\">Grand Child of Freedom Fighter</option>
                                <option value=\"4\">Physically Handicapped</option>
				<option value=\"5\">Orphan</option>
				<option value=\"6\">Ethnic Minority</option>
				<option value=\"7\">Ansar-VDP</option>
				<option value=\"8\">Non Quota</option>
			

				


					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\"><input type=\"reset\" name=\"Reset\" id=\"button\" value=\"Reset\" />
						<input type=\"submit\" name=\"button2\" id=\"button2\" value=\"Submit\" /></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					<tr>
					  <td align=\"left\" valign=\"middle\">&nbsp; <input type=\"hidden\" name=\"yes\" id=\"yes\" value=\"YES\" /></td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td align=\"left\" valign=\"middle\" class=\"red12bold\">
					  $err_msg
					  </td>
					  <td align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					</table>
					</form>
				</fieldset></td>
				</tr>
				$card_link
			</table>
		</td>
      </tr>
	  <tr>
        <td height=\"50\" align=\"center\" valign=\"middle\">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bottom_bg\" class=\"black10\">$support</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\">&nbsp;</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\"><fieldset>
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
        <tr>
          <td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"80%\" align=\"left\" valign=\"middle\">$copyright</td>
          <td width=\"10%\" align=\"left\" valign=\"middle\">$by</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\"><img src=\"../images/tbl_logo.jpg\" width=\"94\" height=\"50\" /></td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
</table>
<script type=\"text/javascript\">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField(\"sprytextfield1\");
var sprypassword1 = new Spry.Widget.ValidationPassword(\"sprypassword1\");
swfobject.registerObject(\"FlashID\");
//-->
</script>
</body>
</html>";





session_start();

$_SESSION['myValue22']=$invoice; 




?>