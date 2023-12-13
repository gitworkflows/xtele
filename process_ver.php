<?php
include "lib/dbconnect.php";
include "lib/fx.php";




$cuser	  			= addslashes($_POST['name']);
$cpassword			= addslashes($_POST['fathername']);

$cday 				= addslashes($_POST['b_day']);
$cmonth 			= addslashes($_POST['b_month']);
$cyear 				= addslashes($_POST['b_year']);



$pat = ":";
$ex = split($pat, $exam);
$exam_no = $ex[0];
$exam_xx = $ex[1];

$invoice = $msisdn = $i_count = $m_count = 0;
$appvalid = "OK";

$invoiceno=$cuser;


$user_out = mysql_query("SELECT * FROM verification WHERE `user` = '$cuser' AND `password` = '$cpassword'");
   
   $user_count = mysql_numrows($user_out);


while($row_user=mysql_fetch_array($user_out))
      {	extract($row_user);}




if($cuser=="" || $cpassword=="" )
   {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=681\"; </script>";}



if($cuser!=$user)

  {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=671\"; </script>";}


if($password!=$cpassword)

  {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=671\"; </script>";}

   


if($day!=$cday)

  {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=682\"; </script>";}


if($month!=$cmonth)

  {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=683\"; </script>";}


if($year!=$cyear)

  {echo"<script language='javascript'>window.location.href=\"edu_err.php?err=684\"; </script>";}



 
include "lib/dbconnect.php";


 echo"<script language='javascript'>window.location.href=\"apply.php\"; </script>";




session_start();
$y=$invoiceno;

$_SESSION['myValue']=$y; 
$postid=1999;
session_start();
$_SESSION['postcode'] = $post_code;
$_SESSION['postname'] = $post_name;
$_SESSION['postno'] = $postid;


?>
