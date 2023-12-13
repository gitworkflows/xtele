<?php
include "../lib/dbconnect.php";
include "../lib/fx.php";




$cuser	= addslashes($_POST['username']);
$cpassword	= addslashes($_POST['password']);


$pat = ":";
$ex = split($pat, $exam);
$exam_no = $ex[0];
$exam_xx = $ex[1];

$invoice = $msisdn = $i_count = $m_count = 0;
$appvalid = "OK";

$invoiceno=$cuser;


$user_out = mysql_query("SELECT * FROM registration WHERE `user` = '$cuser' AND `password` = '$cpassword'");
   
   $user_count = mysql_numrows($user_out);


while($row_user=mysql_fetch_array($user_out))
      {	extract($row_user);}


if($cuser=="" || $cpassword=="" )
   {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=68\"; </script>";}



if($cuser!=$user)

  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=67\"; </script>";}


if($password!=$cpassword)

  {echo"<script language='javascript'>window.location.href=\"../edu_err.php?err=67\"; </script>";}

   
 echo "$app_head";


// cinfo data inserting
 

include "../lib/dbconnect.php";

$ctime = date("Y-m-d H:i:s");

$sql ="INSERT INTO logapp ( sl , name, user_id, password , post_code, time)
		VALUES ('0', '$fullname', '$cuser', '$cpassword', '$post_code','$ctime')";



if ($conn->query($sql) === TRUE) {
    echo "Download successful!!<br/>Please check the download folder for your Applicant Copy.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


  echo"<script language='javascript'>window.location.href=\"pdfapp.php\"; </script>";




session_start();
$y=$invoiceno;

$_SESSION['myValue']=$y; 

session_start();
$_SESSION['postcode'] = $post_code;
$_SESSION['postname'] = $post_name;



?>
