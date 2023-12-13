<?php
include "lib/lastdate.php";
include "lib/fx.php";
include "lib/fx_edu.php";
include "lib/dbconnect.php";
include "lib/randfx.php";

if($active == "0"){exit;}

$postid = 110;

$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postid'");

while($row_post=mysql_fetch_array($out_post))
{
	extract($row_post);
}


$post_count = 100;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$page_title";?></title>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="lib/ajax.js"></script>
<script src="lib/FormManager.js"></script>
<script src="lib/form_submit.js"></script>
<script src="lib/GetList.js"></script>
<script src="lib/gpaBox.js"></script>
<script src="lib/uniBox.js"></script>
<script src="lib/subBox.js"></script>
<script src="lib/examBox.js"></script>
<script src="lib/validator.js"></script>
<script src="lib/other_ps.js"></script>
<script type="text/javascript" src="lib/JobAddField.js"></script>
<script type="text/javascript" src="lib/JobEnable.js"></script>

<script type="text/javascript">
function dependencies()
{
    setupDependencies('app_form'); //name of form(s). Seperate each with a comma (ie: 'weboptions', 'myotherform' )
}

objImage = new Image();
function download()
{
	// preload the image file
	objImage.src="images/pload.gif";
}

// Loading------------------------------------------------------
function changeVisibility1()
{
	document.images["loading1"].style.visibility="visible";
}
function changeVisibility2()
{
	document.images["loading2"].style.visibility="visible";
}
function changeVisibility3()
{
	document.images["loading3"].style.visibility="visible";
}
function changeVisibility_hsc()
{
	document.images["loading_hsc"].style.visibility="visible";
}
function changeVisibility4()
{
	document.images["loading4"].style.visibility="visible";
}
</script>

<noscript>
	<style type="text/css">
		#appbody {display:none;}
	</style>
	<h1 align="center" style="color: red"> Please enable Javascript of your browser before you proceed. </h1>
</noscript>

</head>
<body id="appbody" ondragstart="return false" onselectstart="return false" onLoad="download(), dependencies();">
<?php
if ($post_count > 0)
{
	$v_code = random_code();
	$red_dot = "<span class=\"red12\">*</span>";
	if($edu_stage == "2"){$red_dot2 = "<span class=\"red12\">*</span>";}
	if($edu_stage == "3"){$red_dot2 = $red_dot3 = "<span class=\"red12\">*</span>";}
	if($edu_stage == "4"){$red_dot2 = $red_dot3 = $red_dot4 = "<span class=\"red12\">*</span>";}
	
	$dist_out = mysql_query("SELECT DISTINCT(`dist_code`), `dist_name`
								FROM `div_dist_thana` ORDER BY `dist_name`");
	$dist_row = mysql_numrows($dist_out);
	$hi = 0;
	while ($dist_row > $hi)
	{
		$dist_code		= mysql_result($dist_out, $hi, "dist_code");
		$dist_name		= mysql_result($dist_out, $hi, "dist_name");
		
		$select_dist .= "<option value=\"$dist_code\">$dist_name</option>";
		
		$hi ++;
	}

	$apply_post = "$post_name";

	echo "<form action=\"process_ver.php\" method=\"post\" onsubmit=\"return app_form_validator(this)\" name=\"app_form\" id=\"app_form\">
			
			<input type=\"hidden\" name=\"min_edu_stage\" id=\"min_edu_stage\" value=\"$min_edu_stage\" />
			<input type=\"hidden\" name=\"edu_stage\" id=\"edu_stage\" value=\"$edu_stage\" />
			<input type=\"hidden\" name=\"job_exp\" id=\"job_exp\" value=\"$job_exp\" />
			<input type=\"hidden\" name=\"edu_mas\" id=\"edu_mas\" value=\"$edu_mas\" />

<table width=\"1000\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">


  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>

  </tr>
  <tr>
            <td height=\"25\" align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\">
	   <table width=\"100%\" border=\"1\" align=\"center\"  cellpadding=\"5\" cellspacing=\"0\">
              <tr>
                <td width=\"1%\" align=\"left\" valign=\"middle\">
               <a href=\"http://teletalk.com.bd/packages/dataPackages.jsp?menuItem=7002&menuItem=7003&menuItem=7003\" width=\"100\" height=\"600\" target=\"_blank\" class=\"mainlink\"><img src=\"images/tbl_01.gif\" width=\"100\" height=\"550\" border=\"1\" /</a></td>

            

              <td width=\"85%\" align=\"left\" valign=\"top\">
               <table width=\"100%\" border=\"0\" cellpadding=\"2\" cellspacing=\"1\" class=\"black10\">
	$app_head
	$toplink
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">
      <table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12\">
        <tr bgcolor=\"#FFF380\">
          <td width=\"23%\" height=\"35\" align=\"left\" valign=\"middle\"></td>
          <td width=\"7%\" height=\"35\" align=\"center\" valign=\"middle\"></td>
          <td width=\"70%\" height=\"35\" align=\"left\" valign=\"middle\">
			  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
				 
			  </table>
		  </td>
		  <input type=\"hidden\" name=\"post_code\" id=\"post_code\" value=\"$post_code\" />
        </tr>

  <table width=\"450\" align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
  <tr>
    <td height=\"150\" align=\"left\" valign=\"top\"><fieldset class=\"field_set\">
      <legend class=\"new_style_home\"  align=\"center\" >Enter Valid User ID and Password</legend>
      <table>
       
  <tr>
    <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\" class=\"black10\"><!--Blank Row--></td>
  </tr>

       <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"#FFF380\" class=\"black12\">Enter User ID:$red_dot</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"#FFF380\">
	<input name=\"name\" type=\"text\" class=\"textfield02\" id=\"name\"  /></td>
        </tr>

<tr>

          <td align=\"left\" valign=\"middle\" bgcolor=\"#FFF380\" class=\"black12\">Enter Valid Password:$red_dot</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"#FFF380\">



	<input name=\"fathername\" type=\"password\" class=\"textfield02\" id=\"fathername\"  /></td>
        </tr>
      
       <tr>
    <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\" class=\"black10\"><!--Blank Row--></td>
  </tr>

        </table>
    </fieldset></td>
    </tr>
</table>
        
	



        <!--<tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">Date of Birth$red_dot</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><span class=\"black12\">Day</span>
            <select name=\"b_day\" class=\"textfield02\" id=\"b_day\">
              <option value=\"0\" selected=\"selected\">Select</option>
				$i_bday
            </select>
            <span class=\"black12\">Month</span>
            <select name=\"b_month\" class=\"textfield02\" id=\"b_month\">
              <option value=\"0\" selected=\"selected\">Select</option>
			  $select_month
            </select>
            <span class=\"black12\">Year</span>
            <select name=\"b_year\" class=\"textfield02\" id=\"b_year\">
              <option value=\"0\" selected=\"selected\">Select</option>
				$i_years
            </select></td>
        </tr>-->


      


      


     	  
        <tr>
          <td colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\" class=\"black11\">
            <input type=\"checkbox\" name=\"info_yes\" id=\"info_yes\" onclick=\"agreesubmit(this)\"/>
            The above information is correct and I would like to go to the next step.</td>
        </tr>
		<tr>
          <td colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\">
            <input type=\"submit\" name=\"button\" id=\"button\" value=\"   Next   \" disabled /></td>
        </tr>
		<tr>
          <td height=\"30\" colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\">
          <img name=\"im\" src=\"images/blank.png\"></td>
        </tr>
      </table>
    </td>
  </tr>

  

  <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"lightgreen\" class=\"black10\">$support</td>
  </tr>
  
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\"  class=\"black10\">&nbsp;</td>
  </tr>

  <tr>
    <td align=\"left\" valign=\"top\"><fieldset class=\"field_set\">
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
        <tr>
          <td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"80%\" align=\"left\" valign=\"middle\">$copyright</td>
          <td width=\"10%\" align=\"left\" valign=\"middle\">$tbllogo</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\">$flashlogo</td>
        </tr>
      </table>
    </fieldset></td>



  </tr>
</table>
<td width=\"0%\" align=\"left\" valign=\"middle\">
   <a href=\"http://teletalk.com.bd/packages/dataPackages.jsp?menuItem=7002&menuItem=7003&menuItem=7003\" width=\"100\" height=\"600\" target=\"_blank\" class=\"mainlink\"><img src=\"images/tbl_02.gif\" width=\"100\" height=\"550\" border=\"1\" /</a></td>
</form>";
}

mysql_close();

?>

</body>
</html>
