<?php
include "lib/lastdate.php";
include "lib/fx.php";
include "lib/fx_edu.php";
include "lib/dbconnect.php";
include "lib/randfx.php";
include "lib/alljobsapi.php";

if ($active == "0") {
  exit;
}

$postid = $_POST['postid'];

if ($postid == "") {
  echo "<script language='javascript'>window.location.href=\"err.php?err=832\"; </script>";
  exit;
}
$out_post = mysql_query("SELECT * FROM `post` WHERE `post_code` = '$postid'");

while ($row_post = mysql_fetch_array($out_post)) {
  extract($row_post);
}


$post_count = mysql_numrows($out_post);
if ($post_count < 1) {
  echo "<script language='javascript'>window.location.href=\"err.php?err=832\"; </script>";
  exit;
}



// Experience Information for different Post ***************************************************** =========================================================



// ************************************************  Post Code = 110  *************************************************************************************


if ($exp_110_01 != "0") {
  $exp_110_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience/Others Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_110_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_110\" value=\"Yes\" id=\"one_expvalue_110_01\" />
            <span class=\"black12\">Yes</span></label>


            <label>
              <input type=\"radio\" name=\"one_expvalue_110\" value=\"No\" id=\"one_expvalue_110_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_110_02 != "0") {
  $exp_110_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_110_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_110\" value=\"Yes\" id=\"two_expvalue_110_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_110\" value=\"No\" id=\"two_expvalue_110_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_110_03 != "0") {
  $exp_110_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c.$exp_110_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_110\" value=\"Yes\" id=\"three_expvalue_110_01\" /> 
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_110\" value=\"No\" id=\"three_expvalue_110_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 120  *************************************************************************************


if ($exp_120_01 != "0") {
  $exp_120_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience/Others Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_120_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_120\" value=\"Yes\" id=\"one_expvalue_120_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_120\" value=\"No\" id=\"one_expvalue_120_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_120_02 != "0") {
  $exp_120_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_120_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_120\" value=\"Yes\" id=\"two_expvalue_120_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_120\" value=\"No\" id=\"two_expvalue_120_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_120_03 != "0") {
  $exp_120_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_120_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_120\" value=\"Yes\" id=\"three_expvalue_120_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_120\" value=\"No\" id=\"three_expvalue_120_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}








// ************************************************  Post Code = 130  *************************************************************************************


if ($exp_130_01 != "0") {
  $exp_130_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_130_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_130\" value=\"Yes\" id=\"one_expvalue_130_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_130\" value=\"No\" id=\"one_expvalue_130_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_130_02 != "0") {
  $exp_130_02_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_130_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>

            <input type=\"radio\" name=\"two_expvalue_130\" value=\"Yes\" id=\"two_expvalue_130_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_130\" value=\"No\" id=\"two_expvalue_130_02\" />
              <span class=\"black12\">No</span></label>
	
        </tr>";
}





if ($exp_130_03 != "0") {
  $exp_130_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_130_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_130\" value=\"Yes\" id=\"three_expvalue_130_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_130\" value=\"No\" id=\"three_expvalue_130_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 140  *************************************************************************************


if ($exp_140_01 != "0") {
  $exp_140_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_140_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_140\" value=\"Yes\" id=\"one_expvalue_140_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_140\" value=\"No\" id=\"one_expvalue_140_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_140_02 != "0") {
  $exp_140_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_140_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_140\" value=\"Yes\" id=\"two_expvalue_140_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_140\" value=\"No\" id=\"two_expvalue_140_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_140_03 != "0") {
  $exp_140_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_140_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_140\" value=\"Yes\" id=\"three_expvalue_140_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_140\" value=\"No\" id=\"three_expvalue_140_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}







// ************************************************  Post Code = 150  *************************************************************************************


if ($exp_150_01 != "0") {
  $exp_150_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_150_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_150\" value=\"Yes\" id=\"one_expvalue_150_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_150\" value=\"No\" id=\"one_expvalue_150_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_150_02 != "0") {
  $exp_150_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_150_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_150\" value=\"Yes\" id=\"two_expvalue_150_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_150\" value=\"No\" id=\"two_expvalue_150_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_150_03 != "0") {
  $exp_150_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_150_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_150\" value=\"Yes\" id=\"three_expvalue_150_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_150\" value=\"No\" id=\"three_expvalue_150_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}







// ************************************************  Post Code = 160  *************************************************************************************


if ($exp_160_01 != "0") {
  $exp_160_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_160_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_160\" value=\"Yes\" id=\"one_expvalue_160_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_160\" value=\"No\" id=\"one_expvalue_160_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_160_02 != "0") {
  $exp_160_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_160_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_160\" value=\"Yes\" id=\"two_expvalue_160_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_160\" value=\"No\" id=\"two_expvalue_160_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_160_03 != "0") {
  $exp_160_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_160_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_160\" value=\"Yes\" id=\"three_expvalue_160_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_160\" value=\"No\" id=\"three_expvalue_160_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 170  *************************************************************************************


if ($exp_170_01 != "0") {
  $exp_170_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_170_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_170\" value=\"Yes\" id=\"one_expvalue_170_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_170\" value=\"No\" id=\"one_expvalue_170_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_170_02 != "0") {
  $exp_170_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_170_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_170\" value=\"Yes\" id=\"two_expvalue_170_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_170\" value=\"No\" id=\"two_expvalue_170_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_170_03 != "0") {
  $exp_170_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_170_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_170\" value=\"Yes\" id=\"three_expvalue_170_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_170\" value=\"No\" id=\"three_expvalue_170_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 180  *************************************************************************************


if ($exp_180_01 != "0") {
  $exp_180_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_180_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_180\" value=\"Yes\" id=\"one_expvalue_180_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_180\" value=\"No\" id=\"one_expvalue_180_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_180_02 != "0") {
  $exp_180_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_180_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_180\" value=\"Yes\" id=\"two_expvalue_180_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_180\" value=\"No\" id=\"two_expvalue_180_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_180_03 != "0") {
  $exp_180_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_180_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_180\" value=\"Yes\" id=\"three_expvalue_180_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_180\" value=\"No\" id=\"three_expvalue_180_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 190  *************************************************************************************


if ($exp_190_01 != "0") {
  $exp_190_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_190_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_190\" value=\"Yes\" id=\"one_expvalue_190_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_190\" value=\"No\" id=\"one_expvalue_190_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_190_02 != "0") {
  $exp_190_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_190_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_190\" value=\"Yes\" id=\"two_expvalue_190_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_190\" value=\"No\" id=\"two_expvalue_190_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_190_03 != "0") {
  $exp_190_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_190_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_190\" value=\"Yes\" id=\"three_expvalue_190_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_190\" value=\"No\" id=\"three_expvalue_190_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 200  *************************************************************************************


if ($exp_200_01 != "0") {
  $exp_200_01_tab = "<tr>
   <tr>
      <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

      <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table></td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_200_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_200\" value=\"Yes\" id=\"one_expvalue_200_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_200\" value=\"No\" id=\"one_expvalue_200_02\" />
              <span class=\"black12\">No</span>
		</label>
	        </tr>";
}



if ($exp_200_02 != "0") {
  $exp_200_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_200_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\">
          <label>
            <input type=\"radio\" name=\"two_expvalue_200\" value=\"Yes\" id=\"two_expvalue_200_01\" />
            <span class=\"black12\">Yes</span></label>
           
           
             <label>
              <input type=\"radio\" name=\"two_expvalue_200\" value=\"No\" id=\"two_expvalue_200_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_200_03 != "0") {
  $exp_200_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_200_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_200\" value=\"Yes\" id=\"three_expvalue_200_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_200\" value=\"No\" id=\"three_expvalue_200_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 210  *************************************************************************************


if ($exp_210_01 != "0") {
  $exp_210_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_210_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_210\" value=\"Yes\" id=\"one_expvalue_210_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_210\" value=\"No\" id=\"one_expvalue_210_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_210_02 != "0") {
  $exp_210_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_210_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_210\" value=\"Yes\" id=\"two_expvalue_210_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_210\" value=\"No\" id=\"two_expvalue_210_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_210_03 != "0") {
  $exp_210_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_210_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_210\" value=\"Yes\" id=\"three_expvalue_210_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_210\" value=\"No\" id=\"three_expvalue_210_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 220  *************************************************************************************


if ($exp_220_01 != "0") {
  $exp_220_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_220_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_220\" value=\"Yes\" id=\"one_expvalue_220_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_220\" value=\"No\" id=\"one_expvalue_220_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_220_02 != "0") {
  $exp_220_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_220_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_220\" value=\"Yes\" id=\"two_expvalue_220_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_220\" value=\"No\" id=\"two_expvalue_220_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_220_03 != "0") {
  $exp_220_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_220_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_220\" value=\"Yes\" id=\"three_expvalue_220_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_220\" value=\"No\" id=\"three_expvalue_220_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 230  *************************************************************************************


if ($exp_230_01 != "0") {
  $exp_230_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_230_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_230\" value=\"Yes\" id=\"one_expvalue_230_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_230\" value=\"No\" id=\"one_expvalue_230_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_230_02 != "0") {
  $exp_230_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_230_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_230\" value=\"Yes\" id=\"two_expvalue_230_01\" />
            <span class=\"black12\">Yes</span></label>
           
 
              <label>
<span class=\"black11\">[Please Select your Driving License Type]</span> 
            <select name=\"dri_lic_type\" class=\"DEPENDS ON two_expvalue_230 BEING Yes\" id=\"dri_lic_type\" style=\"width:80px;\">
                  <option value=\"Heavy\">Heavy</option>
                  <option value=\"Light\">Light</option>
              </select>
              </label>


            <label>
              <input type=\"radio\" name=\"two_expvalue_230\" value=\"No\" id=\"two_expvalue_230_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_230_03 != "0") {
  $exp_230_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_230_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_230\" value=\"Yes\" id=\"three_expvalue_230_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_230\" value=\"No\" id=\"three_expvalue_230_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 240  *************************************************************************************


if ($exp_240_01 != "0") {
  $exp_240_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_240_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_240\" value=\"Yes\" id=\"one_expvalue_240_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_240\" value=\"No\" id=\"one_expvalue_240_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_240_02 != "0") {
  $exp_240_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_240_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_240\" value=\"Yes\" id=\"two_expvalue_240_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_240\" value=\"No\" id=\"two_expvalue_240_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_240_03 != "0") {
  $exp_240_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_240_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_240\" value=\"Yes\" id=\"three_expvalue_240_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_240\" value=\"No\" id=\"three_expvalue_240_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 250  *************************************************************************************


if ($exp_250_01 != "0") {
  $exp_250_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_250_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_250\" value=\"Yes\" id=\"one_expvalue_250_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_250\" value=\"No\" id=\"one_expvalue_250_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_250_02 != "0") {
  $exp_250_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_250_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_250\" value=\"Yes\" id=\"two_expvalue_250_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_250\" value=\"No\" id=\"two_expvalue_250_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_250_03 != "0") {
  $exp_250_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_250_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_250\" value=\"Yes\" id=\"three_expvalue_250_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_250\" value=\"No\" id=\"three_expvalue_250_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}






// ************************************************  Post Code = 260  *************************************************************************************


if ($exp_260_01 != "0") {
  $exp_260_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_260_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_260\" value=\"Yes\" id=\"one_expvalue_260_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_260\" value=\"No\" id=\"one_expvalue_260_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_260_02 != "0") {
  $exp_260_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_260_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_260\" value=\"Yes\" id=\"two_expvalue_260_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_260\" value=\"No\" id=\"two_expvalue_260_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_260_03 != "0") {
  $exp_260_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_260_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_260\" value=\"Yes\" id=\"three_expvalue_260_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_260\" value=\"No\" id=\"three_expvalue_260_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 270  *************************************************************************************


if ($exp_270_01 != "0") {
  $exp_270_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_270_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_270\" value=\"Yes\" id=\"one_expvalue_270_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_270\" value=\"No\" id=\"one_expvalue_270_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_270_02 != "0") {
  $exp_270_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_270_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_270\" value=\"Yes\" id=\"two_expvalue_270_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_270\" value=\"No\" id=\"two_expvalue_270_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_270_03 != "0") {
  $exp_270_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_270_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_270\" value=\"Yes\" id=\"three_expvalue_270_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_270\" value=\"No\" id=\"three_expvalue_270_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 280  *************************************************************************************


if ($exp_280_01 != "0") {
  $exp_280_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_280_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_280\" value=\"Yes\" id=\"one_expvalue_280_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_280\" value=\"No\" id=\"one_expvalue_280_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_280_02 != "0") {
  $exp_280_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_280_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_280\" value=\"Yes\" id=\"two_expvalue_280_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_280\" value=\"No\" id=\"two_expvalue_280_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_280_03 != "0") {
  $exp_280_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_280_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_280\" value=\"Yes\" id=\"three_expvalue_280_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_280\" value=\"No\" id=\"three_expvalue_280_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}




// ************************************************  Post Code = 290  *************************************************************************************


if ($exp_290_01 != "0") {
  $exp_290_01_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_290_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_290\" value=\"Yes\" id=\"one_expvalue_290_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_290\" value=\"No\" id=\"one_expvalue_290_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_290_02 != "0") {
  $exp_290_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_290_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_290\" value=\"Yes\" id=\"two_expvalue_290_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_290\" value=\"No\" id=\"two_expvalue_290_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_290_03 != "0") {
  $exp_290_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_290_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_290\" value=\"Yes\" id=\"three_expvalue_290_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_290\" value=\"No\" id=\"three_expvalue_290_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}







// ************************************************  Post Code = 300  *************************************************************************************


if ($exp_300_01 != "0") {
  $exp_300_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_300_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_300\" value=\"Yes\" id=\"one_expvalue_300_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_300\" value=\"No\" id=\"one_expvalue_300_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_300_02 != "0") {
  $exp_300_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_300_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_300\" value=\"Yes\" id=\"two_expvalue_300_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_300\" value=\"No\" id=\"two_expvalue_300_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_300_03 != "0") {
  $exp_300_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_300_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_300\" value=\"Yes\" id=\"three_expvalue_300_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_300\" value=\"No\" id=\"three_expvalue_300_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}











// ************************************************  Post Code = 310  *************************************************************************************


if ($exp_310_01 != "0") {
  $exp_310_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_310_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_310\" value=\"Yes\" id=\"one_expvalue_310_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_310\" value=\"No\" id=\"one_expvalue_310_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_310_02 != "0") {
  $exp_310_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_310_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_310\" value=\"Yes\" id=\"two_expvalue_310_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_310\" value=\"No\" id=\"two_expvalue_310_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_310_03 != "0") {
  $exp_310_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_310_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_310\" value=\"Yes\" id=\"three_expvalue_310_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_310\" value=\"No\" id=\"three_expvalue_310_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}








// ************************************************  Post Code = 320  *************************************************************************************


if ($exp_320_01 != "0") {
  $exp_320_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_320_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_320\" value=\"Yes\" id=\"one_expvalue_320_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_320\" value=\"No\" id=\"one_expvalue_320_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_320_02 != "0") {
  $exp_320_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_320_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_320\" value=\"Yes\" id=\"two_expvalue_320_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_320\" value=\"No\" id=\"two_expvalue_320_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_320_03 != "0") {
  $exp_320_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_320_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_320\" value=\"Yes\" id=\"three_expvalue_320_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_320\" value=\"No\" id=\"three_expvalue_320_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}








// ************************************************  Post Code = 330  *************************************************************************************


if ($exp_330_01 != "0") {
  $exp_330_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_330_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_330\" value=\"Yes\" id=\"one_expvalue_330_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_330\" value=\"No\" id=\"one_expvalue_330_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_330_02 != "0") {
  $exp_330_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_330_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_330\" value=\"Yes\" id=\"two_expvalue_330_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_330\" value=\"No\" id=\"two_expvalue_330_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_330_03 != "0") {
  $exp_330_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_330_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_330\" value=\"Yes\" id=\"three_expvalue_330_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_330\" value=\"No\" id=\"three_expvalue_330_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}






// ************************************************  Post Code = 340  *************************************************************************************


if ($exp_340_01 != "0") {
  $exp_340_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_340_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_340\" value=\"Yes\" id=\"one_expvalue_340_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_340\" value=\"No\" id=\"one_expvalue_340_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_340_02 != "0") {
  $exp_340_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_340_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_340\" value=\"Yes\" id=\"two_expvalue_340_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_340\" value=\"No\" id=\"two_expvalue_340_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_340_03 != "0") {
  $exp_340_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_340_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_340\" value=\"Yes\" id=\"three_expvalue_340_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_340\" value=\"No\" id=\"three_expvalue_340_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}





// ************************************************  Post Code = 350  *************************************************************************************


if ($exp_350_01 != "0") {
  $exp_350_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_350_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_350\" value=\"Yes\" id=\"one_expvalue_350_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_350\" value=\"No\" id=\"one_expvalue_350_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_350_02 != "0") {
  $exp_350_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_350_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_350\" value=\"Yes\" id=\"two_expvalue_350_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_350\" value=\"No\" id=\"two_expvalue_350_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_350_03 != "0") {
  $exp_350_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_350_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_350\" value=\"Yes\" id=\"three_expvalue_350_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_350\" value=\"No\" id=\"three_expvalue_350_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}


// ************************************************  Post Code = 360  *************************************************************************************


if ($exp_360_01 != "0") {
  $exp_360_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_360_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_360\" value=\"Yes\" id=\"one_expvalue_360_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_360\" value=\"No\" id=\"one_expvalue_360_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_360_02 != "0") {
  $exp_360_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_360_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_360\" value=\"Yes\" id=\"two_expvalue_360_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_360\" value=\"No\" id=\"two_expvalue_360_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_360_03 != "0") {
  $exp_360_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_360_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_360\" value=\"Yes\" id=\"three_expvalue_360_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_360\" value=\"No\" id=\"three_expvalue_360_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}


// ************************************************  Post Code = 370  *************************************************************************************


if ($exp_370_01 != "0") {
  $exp_370_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_370_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_370\" value=\"Yes\" id=\"one_expvalue_370_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_370\" value=\"No\" id=\"one_expvalue_370_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_370_02 != "0") {
  $exp_370_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_370_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_370\" value=\"Yes\" id=\"two_expvalue_370_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_370\" value=\"No\" id=\"two_expvalue_370_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_370_03 != "0") {
  $exp_370_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_370_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_370\" value=\"Yes\" id=\"three_expvalue_370_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_370\" value=\"No\" id=\"three_expvalue_370_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}


// ************************************************  Post Code = 380  *************************************************************************************


if ($exp_380_01 != "0") {
  $exp_380_01_tab = "<tr>


   <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Mandatory Professional Experience:</td>
		</table>
		  </td>
	   </tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">a. $exp_380_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_380\" value=\"Yes\" id=\"one_expvalue_380_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_380\" value=\"No\" id=\"one_expvalue_380_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}



if ($exp_380_02 != "0") {
  $exp_380_02_tab = "<tr>

		
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">b. $exp_380_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_380\" value=\"Yes\" id=\"two_expvalue_380_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_380\" value=\"No\" id=\"two_expvalue_380_02\" />
              <span class=\"black12\">No</span>
			</label>
		
	
        </tr>";
}





if ($exp_380_03 != "0") {
  $exp_380_03_tab = "<tr>

          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">c. $exp_380_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_380\" value=\"Yes\" id=\"three_expvalue_380_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_380\" value=\"No\" id=\"three_expvalue_380_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>";
}







/*




if($exp_110eeeeeeeeeeeeeeeeeeeee_01!="0")
{
	$exp_110_tab = "<tr>


<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
		          </tr>


	
	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">$exp_110_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_110\" value=\"Yes\" id=\"one_expvalue_110_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_110\" value=\"No\" id=\"one_expvalue_110_02\" />
              <span class=\"black12\">No</span>
			</label>
		</tr>

		<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">$exp_110_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_110\" value=\"Yes\" id=\"two_expvalue_110_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_110\" value=\"No\" id=\"two_expvalue_110_02\" />
              <span class=\"black12\">No</span>
			</label>
		</tr>

	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">$exp_110_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_110\" value=\"Yes\" id=\"three_expvalue_110_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_110\" value=\"No\" id=\"three_expvalue_110_02\" />
              <span class=\"black12\">No</span>
			</label>
	
        </tr>

	
	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">$exp_110_04</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"four_expvalue_110\" value=\"Yes\" id=\"four_expvalue_110_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"four_expvalue_110\" value=\"No\" id=\"four_expvalue_110_02\" />
              <span class=\"black12\">No</span>
			</label>
	        </tr>";
 
}

*/





/**
if($exp_120_01!="0")
{
	$exp_120_tab = "<tr>


 	<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">

      <table width=\"230\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">

       <tr bgcolor=\"$box1\">
          <td width=\"100%\" height=\"35\" align=\"left\" valign=\"middle\">Experience Information:</td>
		</table>
		  </td>
		          </tr>
		
	
	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">$exp_120_01</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"one_expvalue_120\" value=\"Yes\" id=\"one_expvalue_120_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"one_expvalue_120\" value=\"No\" id=\"one_expvalue_120_02\" />
              <span class=\"black12\">No</span>
			</label>
		</tr>

		<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">$exp_120_02</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"two_expvalue_120\" value=\"Yes\" id=\"two_expvalue_120_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"two_expvalue_120\" value=\"No\" id=\"two_expvalue_120_02\" />
              <span class=\"black12\">No</span>
			</label>
		</tr>


	
	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">$exp_120_03</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"three_expvalue_120\" value=\"Yes\" id=\"three_expvalue_120_01\" />
            <span class=\"black12\">Yes</span></label>
           
            <label>
              <input type=\"radio\" name=\"three_expvalue_120\" value=\"No\" id=\"three_expvalue_120_02\" />
              <span class=\"black12\">No</span>
			</label>
	


        </tr>";
 
}
 **/


















if ($post_code == '000') {
  $graduation_result = "                    <tr>
                      <td width=\"55%\" align=\"left\" valign=\"middle\">
                        <select name=\"result3\" class=\"textfield07\" id=\"result3\" onchange=\"Show_GpaTextBox(this.id,'result_gpa3');\" >
                          	<option value=\"0\" selected=\"selected\">Select One</option>
                          	<option value=\"1\">MBBS Pass</option>

                        </select>
                      </td>
                      <td width=\"25%\" align=\"left\" valign=\"middle\" id=\"TextBox_Marks3\">
		    <input name=\"result_gpa3\" class=\"textfield_gpa\" id=\"result_gpa3\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,flot)\" size=\"4\" maxlength=\"4\" /></td>
                    <td width=\"20%\" align=\"left\" valign=\"middle\" id=\"Caption_Marks3\" class=\"black11\">&nbsp;</td>
					</tr>";
} else {
  $graduation_result = "                    <tr>
                      <td width=\"55%\" align=\"left\" valign=\"middle\">
                        <select name=\"result3\" class=\"textfield07\" id=\"result3\" onchange=\"Show_GpaTextBox(this.id,'result_gpa3');\" >
                          <option value=\"0\" selected=\"selected\">Select One</option>
							            $select_gra_result_type
                        </select>
                      </td>
                      <td width=\"25%\" align=\"left\" valign=\"middle\" id=\"TextBox_Marks3\">
		    <input name=\"result_gpa3\" class=\"textfield_gpa\" id=\"result_gpa3\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,flot)\" size=\"4\" maxlength=\"4\" /></td>
                    <td width=\"20%\" align=\"left\" valign=\"middle\" id=\"Caption_Marks3\" class=\"black11\">&nbsp;</td>
					</tr>";
}











if ($edu_stage == '1') {
  $SSC_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            <tr>
              <td width=\"97%\" align=\"left\" valign=\"top\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                  <td width=\"50%\" height=\"30\" align=\"left\" valign=\"middle\">Academic Qualifications:</td>
                   </tr>
                             
              
                         </table></td>
              <td width=\"3%\" align=\"left\" valign=\"top\">&nbsp;</td>
            </tr>



            <tr>
              <td align=\"left\" valign=\"top\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td height=\"25\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"black12bold\">SSC or Equivalent Level$red_dot3</td>
                  <td align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"subblack12\">&nbsp;</td>
                </tr>


   		 <tr>
                          <td width=\"37%\" align=\"left\" valign=\"middle\">Examination</td>                          
                          <td width=\"63%\" align=\"left\" valign=\"middle\"><select name=\"exam1\" class=\"textfield06a\" id=\"exam1\" onchange=\"get_sub_ssc(this), changeVisibility_ssc(this)\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
			     $select_ssc_exam
                          </select></td>
                      
           	     </td>
                 <td align=\"left\" valign=\"middle\">Result</td>
                          <td align=\"left\" valign=\"middle\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" class=\"black12\" style=\"margin-bottom:1px;\">
                            <tr>
                              <td width=\"55%\" align=\"left\" valign=\"middle\">
                              <select name=\"result1\" class=\"textfield07\" id=\"result1\" onchange=\"Show_GpaTextBox(this.id,'result_gpa1');\" >
                                <option value=\"0\"selected=\"selected\">Select</option>
                                $select_ssc_result_type
                              </select></td>
                              <td width=\"25%\" align=\"left\" valign=\"middle\" id=\"TextBox_Marks1\">
							  <input name=\"result_gpa1\" class=\"textfield_gpa\" id=\"result_gpa1\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,flot)\" size=\"4\" maxlength=\"4\" /></td>
                              <td align=\"left\" valign=\"middle\" id=\"Caption_Marks1\" class=\"black11\">&nbsp;</td>
                            </tr>
                          </table></td>
               
                </tr>


		<tr>
                          <td align=\"left\" valign=\"middle\">Board</td>
                          <td align=\"left\" valign=\"middle\"><select name=\"institute1\" class=\"textfield06a\" id=\"institute1\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
                            $select_board
                          </select>
			</td>

                  <td align=\"left\" valign=\"middle\">Passing Year</td>
                          <td align=\"left\" valign=\"middle\"><select name=\"year1\" class=\"textfield07\" id=\"year1\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
                            $select_pyear
                    </select>
                  </td>
                </tr>




                <tr>
                   <td height=\"25\" align=\"left\" valign=\"middle\">Roll No</td>
                          <td height=\"25\" align=\"left\" valign=\"middle\"><input name=\"roll1\" type=\"text\" class=\"textfield07b\" id=\"roll1\" onkeypress=\"return alpha(event,numbers)\" /></td>
                   </td>


                 
                 <td align=\"left\" valign=\"middle\">Group/Subject</td>
                          <td align=\"left\" valign=\"middle\"><select name=\"subject1\" class=\"textfield07\" id=\"subject1\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
                            $select_group_ssc
                          </select>                  </td>
                </tr>
              </table>
			  </td>
              <td align=\"left\" valign=\"top\">&nbsp;</td>
            </tr>
			<tr class=\"gap01\">
              <td align=\"left\" valign=\"top\">&nbsp;</td>
              <td align=\"left\" valign=\"top\">&nbsp;</td>
            </tr>
            
			$mas_tab
  			$phd_tab

 
		  </table></td>
        </tr>";
}





if ($edu_mas > 0) {
  $mas_tab = "<tr>
              <td align=\"left\" valign=\"top\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"black12bold\">Masters/Equivalent Level$red_dot4<input name=\"masters\" type=\"checkbox\" id=\"masters\" value=\"1\" onclick=\"masfd();\" /> <span class=\"black11\">if applicable</span></td>
                  <td align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"subblack14\">&nbsp;</td>
                </tr>
                <tr>
                  <td width=\"19%\" align=\"left\" valign=\"top\">Examination</td>
                  <td width=\"34%\" align=\"left\" valign=\"top\">
                    <select name=\"exam4\" class=\"textfield06a\" id=\"exam4\" onchange=\"Show_ExamTextBox(this.id,'other_exam4')\" disabled >
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_mas_exam
                    </select>
					<input name=\"other_exam4\" type=\"text\" class=\"textfield06\" id=\"other_exam4\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                  <td width=\"17%\" align=\"left\" valign=\"top\">Result</td>
                  <td width=\"30%\" align=\"left\" valign=\"top\">
                    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" class=\"black14\" style=\"margin-bottom:1px;\">
                    <tr>
                      <td width=\"55%\" align=\"left\" valign=\"middle\">
                        <select name=\"result4\" class=\"textfield07\" id=\"result4\" onchange=\"Show_GpaTextBox(this.id,'result_gpa4');\" disabled >
                            <option value=\"0\" selected=\"selected\">Select One</option>
                            $select_mas_result_type
                        </select>
                      </td>
                      <td width=\"25%\" align=\"left\" valign=\"middle\" id=\"TextBox_Marks4\"><input name=\"result_gpa4\" class=\"textfield_gpa\" id=\"result_gpa4\" style=\"VISIBILITY: hidden\"  onkeypress=\"return alpha(event,flot)\" size=\"4\" maxlength=\"4\" /></td>
                    <td width=\"20%\" align=\"left\" valign=\"middle\" id=\"Caption_Marks4\" class=\"black11\">&nbsp;</td>
					</tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">Subject/Degree</td>
                  <td align=\"left\" valign=\"top\">
                    <select name=\"subject4\" class=\"textfield06a\" id=\"subject4\" onchange=\"Show_SubTextBox(this.id,'other_subject4');\" disabled >
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_sub_mas
                    </select>
					<input name=\"other_subject4\" type=\"text\" class=\"textfield06\" id=\"other_subject4\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                  <td align=\"left\" valign=\"top\">Passing Year</td>
                  <td align=\"left\" valign=\"top\">
                    <select name=\"year4\" class=\"textfield07\" id=\"year4\" disabled >
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_pyear
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">University/Institute</td>
                  <td align=\"left\" valign=\"top\">
				  <select name=\"institute4\" class=\"textfield06a\" id=\"institute4\" onchange=\"Show_UniTextBox(this.id,'other_institute4');\" disabled >
                        <option value=\"0\" selected=\"selected\">Select One</option>
						$select_uni
                      </select>
					  <input name=\"other_institute4\" type=\"text\" class=\"textfield06\" id=\"other_institute4\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" />
				  </td>
                  <td align=\"left\" valign=\"top\">Course Duration</td>
                  <td align=\"left\" valign=\"top\">
                    <select name=\"duration4\" class=\"textfield07\" id=\"duration4\" disabled>
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_mas_duration
                    </select>
                  </td>
                </tr>
              </table></td>
              <td align=\"left\" valign=\"top\">&nbsp;</td>
            </tr>";
}







if (($edu_stage == '2') || ($edu_stage == '3')) {
  $SSC_hsc_gra_tab = "<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            <tr>
              <td width=\"97%\" align=\"left\" valign=\"top\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                <tr>
                  <td width=\"50%\" height=\"30\" align=\"left\" valign=\"middle\">Academic Qualifications:</td>
                  <td width=\"1%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                  <td width=\"49%\" height=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">
                    <tr>
                      <td height=\"25\" bgcolor=\"$box1\" class=\"black12bold\">SSC or Equivalent Level <!--<span class=\"red12\">*--></span></td>
                    </tr>
                    <tr>
                      <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                        <tr>
                          <td width=\"37%\" align=\"left\" valign=\"middle\">Examination</td>
                          <td width=\"63%\" align=\"left\" valign=\"middle\">
			  <select name=\"exam1\" class=\"textfield06a\" id=\"exam1\" onchange=\"get_sub_ssc(this), changeVisibility_ssc(this)\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
			     					$select_ssc_exam
                          </select></td>
                        </tr>
                        <tr>
                          <td align=\"left\" valign=\"middle\">Board</td>
                          <td align=\"left\" valign=\"middle\"><select name=\"institute1\" class=\"textfield06a\" id=\"institute1\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
                            $select_board
                          </select></td>
                        </tr>
						 <tr>
                          <td height=\"25\" align=\"left\" valign=\"middle\">Roll No</td> 
                          <td height=\"25\" align=\"left\" valign=\"middle\"><input name=\"roll1\" type=\"text\" class=\"textfield07b\" id=\"roll1\" onkeypress=\"return alpha(event,numbers)\" /></td>
                        </tr>
                        <tr>
                          <td align=\"left\" valign=\"middle\">Result</td>
                          <td align=\"left\" valign=\"middle\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" class=\"black12\" style=\"margin-bottom:1px;\">
                            <tr>
                              <td width=\"55%\" align=\"left\" valign=\"middle\">
                              <select name=\"result1\" class=\"textfield07\" id=\"result1\" onchange=\"Show_GpaTextBox(this.id,'result_gpa1');\" >
                                <option value=\"0\"selected=\"selected\">Select</option>
                                $select_ssc_result_type
                              </select></td>
                              <td width=\"25%\" align=\"left\" valign=\"middle\" id=\"TextBox_Marks1\">
							  <input name=\"result_gpa1\" class=\"textfield_gpa\" id=\"result_gpa1\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,flot)\" size=\"4\" maxlength=\"4\" /></td>
                              <td align=\"left\" valign=\"middle\" id=\"Caption_Marks1\" class=\"black11\">&nbsp;</td>
                            </tr>
                          </table></td>
                        </tr>

                        <tr>
                          <td align=\"left\" valign=\"middle\">Group/Subject <img src=\"images/loader.gif\" border=\"0\" align=\"absmiddle\" name =\"loading_ssc\" style=\"visibility:hidden\"/></td>
                          <td align=\"left\" valign=\"middle\"><select name=\"subject1\" class=\"textfield07\" id=\"subject1\">
                            <option value=\"0\"selected=\"selected\">Select One</option>
                            $select_group_ssc
                          </select></td>
                        </tr>






                        <tr>
                          <td align=\"left\" valign=\"middle\">Passing Year</td>
                          <td align=\"left\" valign=\"middle\"><select name=\"year1\" class=\"textfield07\" id=\"year1\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
                            $select_pyear
                          </select></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                  <td rowspan=\"2\" align=\"left\" valign=\"middle\">&nbsp;</td>
                  <td class=\"bdr02\" align=\"left\" valign=\"top\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
                    <tr>
                      <td height=\"25\" bgcolor=\"$box1\" class=\"black12bold\">HSC or Equivalent Level <!--<span class=\"red12\">*</span>--></td>
                    </tr>
                    <tr>
                      <td><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                       <tr>
                          <td width=\"37%\" align=\"left\" valign=\"middle\">Examination</td>
                          <td width=\"63%\" align=\"left\" valign=\"middle\">




			  <select name=\"exam2\" class=\"textfield06a\" id=\"exam2\" onchange=\"get_sub_hsc(this), changeVisibility_hsc(this)\">
                            <option value=\"0\"selected=\"selected\">Select One</option>
							$select_hsc_exam
                          </select></td>











                        </tr>
                        <tr>
                          <td align=\"left\" valign=\"middle\">Board</td>
                          <td align=\"left\" valign=\"middle\"><select name=\"institute2\" class=\"textfield06a\" id=\"institute2\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
							$select_board
                          </select></td>
                        </tr>
						<td height=\"25\" align=\"left\" valign=\"middle\">Roll No</td>
                        <td height=\"25\"align=\"left\" valign=\"middle\"><input name=\"roll2\" type=\"text\" class=\"textfield07b\" id=\"roll2\" onkeypress=\"return alpha(event,numbers)\"/></td>
                        </tr>
                        <tr>
                          <td align=\"left\" valign=\"middle\">Result</td>
                          <td align=\"left\" valign=\"middle\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" class=\"black12\" style=\"margin-bottom:1px;\">
                            <tr>
                              <td width=\"55%\" align=\"left\" valign=\"middle\">
                              <select name=\"result2\" class=\"textfield07\" id=\"result2\" onchange=\"Show_GpaTextBox(this.id,'result_gpa2');\" >
                                <option value=\"0\"selected=\"selected\">Select</option>
                            $select_hsc_result_type
                              </select></td>
                              <td width=\"25%\" align=\"left\" valign=\"middle\" id=\"TextBox_Marks2\"><input name=\"result_gpa2\" class=\"textfield_gpa\" id=\"result_gpa2\" style=\"VISIBILITY: hidden\"  onkeypress=\"return alpha(event,flot)\" size=\"4\" maxlength=\"4\" /></td>
                            <td width=\"20%\" align=\"left\" valign=\"middle\" id=\"Caption_Marks2\" class=\"black11\">&nbsp;</td>
							</tr>
                          </table></td>
                        </tr>







                        <tr>
                          <td align=\"left\" valign=\"middle\">Group/Subject <img src=\"images/loader.gif\" border=\"0\" align=\"absmiddle\" name =\"loading_hsc\" style=\"visibility:hidden\"/></td>
                          <td align=\"left\" valign=\"middle\"><select name=\"subject2\" class=\"textfield07\" id=\"subject2\">
                            <option value=\"0\"selected=\"selected\">Select One</option>
                          $select_group_hsc
                            </select></td>



                        </tr>
                        <tr>
                          <td align=\"left\" valign=\"middle\">Passing Year</td>
                          <td align=\"left\" valign=\"middle\"><select name=\"year2\" class=\"textfield07\" id=\"year2\">
                            <option value=\"0\" selected=\"selected\">Select One</option>
                            $select_pyear
                          </select></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\" class=\"gap01\">&nbsp;</td>
                  <td align=\"left\" valign=\"middle\" class=\"gap01\">&nbsp;</td>
                </tr>
              </table></td>
              <td width=\"3%\" align=\"left\" valign=\"top\">&nbsp;</td>
            </tr>



            <tr>
              <td align=\"left\" valign=\"top\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td height=\"25\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"black12bold\">Graduation/Equivalent Level$red_dot3</td>
                  <td align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"subblack12\">&nbsp;</td>
                </tr>
                <tr>
                  <td width=\"19%\" align=\"left\" valign=\"top\">Examination</td>
                  <td width=\"34%\" align=\"left\" valign=\"middle\">
                    <select name=\"exam3\" class=\"textfield06a\" id=\"exam3\" onchange=\"get_sub_gra(this), Show_ExamTextBox(this.id,'other_exam3'), changeVisibility3(this);\">
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_gra_exam
                    </select>
		<input name=\"other_exam3\" type=\"text\" class=\"textfield06\" id=\"other_exam3\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                  <td width=\"17%\" align=\"left\" valign=\"top\">Result</td>
                  <td width=\"30%\" align=\"left\" valign=\"top\">
                    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" class=\"black12\" style=\"margin-bottom:1px;\">
			$graduation_result
                  </table>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">Subject/Degree <img src=\"images/loader.gif\" border=\"0\" align=\"absmiddle\" name =\"loading3\" style=\"visibility:hidden\"/></td>
                  <td align=\"left\" valign=\"top\">
                    <select name=\"subject3\" class=\"textfield06a\" id=\"subject3\" onchange=\"Show_SubTextBox(this.id,'other_subject3');\">
                      <option value=\"0\" selected=\"selected\">Select One</option>
		   $edu_subject
                    </select>
		<input name=\"other_subject3\" type=\"text\" class=\"textfield06\" id=\"other_subject3\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                  <td align=\"left\" valign=\"top\">Passing Year</td>
                  <td align=\"left\" valign=\"top\">
                    <select name=\"year3\" class=\"textfield07\" id=\"year3\">
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_pyear
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">University/Institute</td>
                  <td align=\"left\" valign=\"middle\"><select name=\"institute3\" class=\"textfield06a\" id=\"institute3\" onchange=\"Show_UniTextBox(this.id,'other_institute3');\">
                        <option value=\"0\" selected=\"selected\">Select One</option>
			$select_uni
                      </select>
					  <input name=\"other_institute3\" type=\"text\" class=\"textfield06\" id=\"other_institute3\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" /></td>
                  <td align=\"left\" valign=\"top\">Course Duration</td>
                  <td align=\"left\" valign=\"top\">
                      <select name=\"duration3\" class=\"textfield07\" id=\"duration3\">
                      <option value=\"0\" selected=\"selected\">Select One</option>
											$select_gra_duration
                    </select>
                  </td>
                </tr>
              </table>
			  </td>
              <td align=\"left\" valign=\"top\">&nbsp;</td>
            </tr>
			<tr class=\"gap01\">
              <td align=\"left\" valign=\"top\">&nbsp;</td>
              <td align=\"left\" valign=\"top\">&nbsp;</td>
            </tr>
            
			$mas_tab
  			$phd_tab

 
		  </table></td>
        </tr>";
}










if ($phd > 0) {
  $phd_tab = "<tr>
              <td align=\"left\" valign=\"top\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"black12bold\">Ph.D Level$red_dot5<input name=\"phd\" type=\"checkbox\" id=\"phd\" value=\"1\" onclick=\"phdfd();\" /> <span class=\"black11\">if applicable</span></td>
                  <td align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"subblack15\">&nbsp;</td>
                </tr>
                <tr>
                  <td width=\"19%\" align=\"left\" valign=\"top\">Examination</td>
                  <td width=\"35%\" align=\"left\" valign=\"top\">
                    <select name=\"exam5\" class=\"textfield06a\" id=\"exam5\" onchange=\"Show_ExamTextBox(this.id,'other_exam5')\" disabled >
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_phd_exam
                    </select>
		  <input name=\"other_exam5\" type=\"text\" class=\"textfield06\" id=\"other_exam5\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                  <td width=\"17%\" align=\"left\" valign=\"top\">Result</td>
                  <td width=\"30%\" align=\"left\" valign=\"top\">
                    <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"1\" class=\"black15\" style=\"margin-bottom:1px;\">
                    <tr>
                      <td width=\"55%\" align=\"left\" valign=\"middle\">
                        <select name=\"result5\" class=\"textfield07\" id=\"result5\" onchange=\"Show_GpaTextBox(this.id,'result_gpa5');\" disabled >
                            <option value=\"0\" selected=\"selected\">Select One</option>
                       			$select_phd_result_type
                        </select>
                      </td>
                      <td width=\"25%\" align=\"left\" valign=\"middle\" id=\"TextBox_Marks5\"><input name=\"result_gpa5\" class=\"textfield_gpa\" id=\"result_gpa5\" style=\"VISIBILITY: hidden\"  onkeypress=\"return alpha(event,flot)\" size=\"5\" maxlength=\"5\" /></td>
                    <td width=\"20%\" align=\"left\" valign=\"middle\" id=\"Caption_Marks5\" class=\"black11\">&nbsp;</td>
					</tr>
                  </table>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">Subject/Degree</td>
                  <td align=\"left\" valign=\"top\">
                    <select name=\"subject5\" class=\"textfield06a\" id=\"subject5\" onchange=\"Show_SubTextBox(this.id,'other_subject5');\" disabled >
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_sub_mas
                    </select>
					<input name=\"other_subject5\" type=\"text\" class=\"textfield06\" id=\"other_subject5\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                  <td align=\"left\" valign=\"top\">Passing Year</td>
                  <td align=\"left\" valign=\"top\">
                    <select name=\"year5\" class=\"textfield07\" id=\"year5\" disabled >
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_pyear
                    </select>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">University/Institute</td>
                  <td align=\"left\" valign=\"top\">
				  <select name=\"institute5\" class=\"textfield06a\" id=\"institute5\" onchange=\"Show_UniTextBox(this.id,'other_institute5');\" disabled >
                        <option value=\"0\" selected=\"selected\">Select One</option>
						$select_uni
                      </select>
					  <input name=\"other_institute5\" type=\"text\" class=\"textfield06\" id=\"other_institute5\" style=\"VISIBILITY: hidden\" onkeypress=\"return alpha(event,letters)\" />
				  </td>
                  <td align=\"left\" valign=\"top\">Course Duration</td>
                  <td align=\"left\" valign=\"top\">
                    <select name=\"duration5\" class=\"textfield07\" id=\"duration5\" disabled>
                      <option value=\"0\" selected=\"selected\">Select One</option>
                      $select_mas_duration
                    </select>
                  </td>
                </tr>
              </table></td>
              <td align=\"left\" valign=\"top\">&nbsp;</td>
            </table></td>
              <td align=\"left\" valign=\"top\">&nbsp;</td>
            </tr>";
}









if ($job_exp > 0) {
  $job_tab = "<tr>
			  <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
				<tr>
				  <td width=\"97%\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"bdr02\">
					<tr>
					  <td height=\"25\" colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"black12bold\"> Professional Experience
						<input name=\"job_no\" type=\"checkbox\" id=\"job_no\" value=\"1\" onclick=\"jfd();\" />
						<span class=\"black10\">if applicable(Please fill up latest Experience first)
						<input type=\"hidden\" name=\"job_exp\" id=\"job_exp\" value=\"$job_exp\" />
						</td>
					  <td align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"black12\">&nbsp;</td>
					</tr>


	

					<tr>
					  <td width=\"19%\" align=\"left\" valign=\"middle\">Designation/Post Name</td>
					  <td width=\"36%\" align=\"left\" valign=\"middle\">
						<input name=\"job_post1\" type=\"text\" class=\"textfield06\" id=\"job_post1\" onkeypress=\"return alpha(event,letters)\" disabled />
					  </td>
					  <td width=\"15%\" align=\"left\" valign=\"middle\">Organization Name</td>
					  <td width=\"30%\" align=\"left\" valign=\"middle\">
						<input name=\"organization1\" type=\"text\" class=\"textfield06\" id=\"organization1\" onkeypress=\"return alpha(event,letters)\" disabled />
					  </td>
					</tr>
					<tr>
					  <td align=\"left\" valign=\"middle\">Length of Service</td>
					  <td align=\"left\" valign=\"middle\"><select name=\"t_day1\" class=\"textfield02a\" id=\"t_day1\" disabled>
						<option selected=\"selected\" value=\"0\">Day</option>
						$i_bday
						</select>
						 <select name=\"t_month1\" class=\"textfield02a\" id=\"t_month1\" disabled>
						  <option selected=\"selected\" value=\"0\">Month</option>
						  $select_month
						  </select>
						<select name=\"t_year1\" class=\"textfield02a\" id=\"t_year1\" disabled>
						  <option selected=\"selected\" value=\"0\">Year</option>
						  $select_pyear
						  </select>
						<br />

						------------------- to -------------------<br />
						<select name=\"f_day1\" class=\"textfield02a\" id=\"f_day1\" disabled>
						  <option selected=\"selected\" value=\"0\">Day</option>
						  $i_bday
						  </select>
						<select name=\"f_month1\" class=\"textfield02a\" id=\"f_month1\" disabled>
						  <option value=\"0\" selected=\"selected\">Month</option>
						  $select_month
						  </select>
						<select name=\"f_year1\" class=\"textfield02a\" id=\"f_year1\" disabled>
						  <option selected=\"selected\" value=\"0\">Year</option>
						   $select_pyear
						  </select>
						  <br/>
						  <input name=\"till_now\" type=\"checkbox\" id=\"till_now\" value=\"1\" disabled onclick=\"till_date();\" />
						  <span class=\"green10\" >Presently Working
						<br/></td>


					  <td align=\"left\" valign=\"middle\">Responsibilities</td>
					  <td align=\"left\" valign=\"middle\">
						<textarea name=\"job_res1\" cols=\"45\" rows=\"4\" class=\"textfield06\" id=\"job_res1\" onkeypress=\"return alpha(event,letters+numbers+custom)\" disabled></textarea>
						</td>
	




					</tr>
				  </table></td>
				  <td width=\"3%\">&nbsp;</td>
				</tr>
				<tr>
				  <td height=\"60\" align=\"center\" valign=\"middle\"><div id='job_fields'></div>
					 <div id='job_addmorelink'>
					 	<span class=\"red10bold\">Adding more field may blank some previous field(s)! So first add fields as much as needed</span></br>
						<input name=\"job_button\" id=\"job_button\" type=\"button\" onClick=\"addJobField(2)\" value=\"Add More Job Description!\" disabled>
						<input type=\"hidden\" name=\"number_job_fields\" value=\"2\" />
					</div></td>
				  <td>&nbsp;</td>
				</tr>
			  </table></td>
			  </tr>";
}




if ($ffq_active == '1') {
  $ffq_tab = "<tr>


	<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Quota<span class=\"red12\">*</span></td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><select name=\"ffq\" class=\"textfield02\" id=\"ffq\">
                <option value=\"0\" selected=\"selected\">Select One</option>
              $select_quota_list
              </select></td>
 			  </tr>";
}




if ($post_code == '000') {
  $dri_lic_tab = "<tr>
			<tr>
          <td height=\"30\" align=\"right\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\"><mark>If <b> Yes, </b>Please write your <br/><b>Driving License Number</b></mark></td>
          <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><input name=\"dri_lic\" type=\"text\" class=\"textfield04\" id=\"dri_lic\" /></td>
        </tr>
</tr>";
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo "$page_title"; ?></title>
  <link href="lib/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="lib/ajax.js"></script>
  <script src="lib/FormManager.js"></script>
  <script src="lib/form_submit.js"></script>
  <script src="lib/GetList.js"></script>
  <script src="lib/gpaBox.js"></script>
  <script src="lib/uniBox.js"></script>
  <script src="lib/deptBox.js"></script>
  <script src="lib/subBox.js"></script>
  <script src="lib/examBox.js"></script>
  <script src="lib/validator.js"></script>
  <script src="lib/other_ps.js"></script>
  <script type="text/javascript" src="lib/JobAddField.js"></script>
  <script type="text/javascript" src="lib/JobEnable.js"></script>

  <script type="text/javascript">
    function dependencies() {
      setupDependencies('app_form'); //name of form(s). Seperate each with a comma (ie: 'weboptions', 'myotherform' )
    }

    objImage = new Image();

    function download() {
      // preload the image file
      objImage.src = "images/pload.gif";
    }

    // Loading------------------------------------------------------
    function changeVisibility1() {
      if (document.images["loading1"]) {
        document.images["loading1"].style.visibility = "visible";
      }
    }

    function changeVisibility2() {
      if (document.images["loading2"]) {
        document.images["loading2"].style.visibility = "visible";
      }
    }

    function changeVisibility3() {
      if (document.images["loading3"]) {
        document.images["loading3"].style.visibility = "visible";
      }
    }

    function changeVisibility_hsc() {
      if (document.images["loading_hsc"]) {
        document.images["loading_hsc"].style.visibility = "visible";
      }
    }

    function changeVisibility_ssc() {
      if (document.images["loading_ssc"]) {
        document.images["loading_ssc"].style.visibility = "visible";
      }
    }


    function changeVisibility4() {
      if (document.images["loading4"]) {
        document.images["loading4"].style.visibility = "visible";
      }
    }
  </script>

  <noscript>
    <style type="text/css">
      #appbody {
        display: none;
      }
    </style>
    <h1 align="center" style="color: red"> Please enable Javascript of your browser before you proceed. </h1>
  </noscript>

</head>

<body id="appbody" ondragstart="return false" onselectstart="return false" onLoad="download(), dependencies();">
  <?php
  if ($post_count > 0) {
    $v_code = random_code();
    $red_dot = "<span class=\"red12\">*</span>";
    if ($edu_stage == "2") {
      $red_dot2 = "<span class=\"red12\">*</span>";
    }
    if ($edu_stage == "3") {
      $red_dot2 = $red_dot3 = "<span class=\"red12\">*</span>";
    }
    if ($edu_stage == "4") {
      $red_dot2 = $red_dot3 = $red_dot4 = "<span class=\"red12\">*</span>";
    }

    $dist_out = mysql_query("SELECT DISTINCT(`dist_code`), `dist_name`
								FROM `div_dist_thana` ORDER BY `dist_name`");
    $dist_row = mysql_numrows($dist_out);
    $hi = 0;
    while ($dist_row > $hi) {
      $dist_code    = mysql_result($dist_out, $hi, "dist_code");
      $dist_name    = mysql_result($dist_out, $hi, "dist_name");

      $select_dist .= "<option value=\"$dist_code\">$dist_name</option>";

      $hi++;
    }

    $apply_post = "$post_name";

    echo "<form action=\"preview.php\" method=\"post\" onsubmit=\"return app_form_validator(this)\" name=\"app_form\" id=\"app_form\">
			
			<input type=\"hidden\" name=\"min_edu_stage\" id=\"min_edu_stage\" value=\"$min_edu_stage\" />
			<input type=\"hidden\" name=\"edu_stage\" id=\"edu_stage\" value=\"$edu_stage\" />
			<input type=\"hidden\" name=\"job_exp\" id=\"job_exp\" value=\"$job_exp\" />
			<input type=\"hidden\" name=\"edu_mas\" id=\"edu_mas\" value=\"$edu_mas\" />

<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
	$app_head
	$toplink
  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\">
      <table width=\"100%\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12\">
        <tr bgcolor=\"$box1\">
          <td width=\"23%\" height=\"35\" align=\"left\" valign=\"middle\">Name of the Post</td>
          <td width=\"7%\" height=\"35\" align=\"center\" valign=\"middle\">:</td>
          <td width=\"70%\" height=\"35\" align=\"left\" valign=\"middle\">
			  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
				  <tr>
					<td width=\"60%\" align=\"left\" valign=\"middle\" class=\"black12\">$apply_post</td>
					
				  </tr>
			  </table>
		  </td>
		  <input type=\"hidden\" name=\"post_code\" id=\"post_code\" value=\"$post_code\" />
        </tr>

 


<tr style=\"height: 40px;\">
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Applicant's Name$red_dot</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td align=\"left\" style=\"position:relative\" valign=\"middle\" bgcolor=\"$shade1_bg\"><input name=\"name\" type=\"text\" class=\"textfield03 short-width\" id=\"name\" onkeypress=\"return alpha(event,letters)\" $uppercase />
          <label id=\"alljobs_id\" style=\"margin-right: 14px;line-height: 6px;float: right; font-size: 12px; font-weight: bold;\"></label>
          <img src=\"\" id=\"photo_view\" style=\"display:none; position: absolute;right: 16px;width: 82px;height: 82px;top: 20px;border: 2px dashed #38B003;padding: 5px;border-radius: 4px;background-color: #fff;\" alt=\"Photo Preview...\">
          </td>
        </tr>
        <tr style=\"height: 40px;\">
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Father's Name$red_dot</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><input name=\"fathername\" type=\"text\" class=\"textfield03 short-width\" id=\"fathername\" onkeypress=\"return alpha(event,letters)\" $uppercase /></td>
        </tr>
        <tr style=\"height: 40px;\">
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Mother's Name$red_dot</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><input name=\"mothername\" type=\"text\" class=\"textfield03 short-width\" id=\"mothername\" onkeypress=\"return alpha(event,letters)\" $uppercase /></td>
        </tr>
        <tr>
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
        </tr>
        <tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Gender$red_dot</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">
		  	<label>
                <input type=\"radio\" name=\"sex\" value=\"1\" id=\"sex_01\" />
                <span class=\"black12\">Male</span>
			</label>
            <label>
                  <input type=\"radio\" name=\"sex\" value=\"2\" id=\"sex_02\" />
                  <span class=\"black12\">Female</span>
			</label>
			 		<label>
                  <input type=\"radio\" name=\"sex\" value=\"3\" id=\"sex_03\" />
                  <span class=\"black12\">Others</span>
					</label>
			</td>
        </tr>
		<tr>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">Nationality$red_dot</td>
          <td align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            <tr>
		      <td width=\"30%\" align=\"left\" valign=\"middle\"><select name=\"nationality\" class=\"textfield02\" id=\"nationality\">
		        <option value=\"Bangladeshi\" selected=\"selected\">Bangladeshi</option>
		        </select></td>
		      <td width=\"40%\" align=\"right\" valign=\"middle\" class=\"black12\">Religion$red_dot :</td>
		      <td width=\"25%\" align=\"right\" valign=\"middle\">
              <select name=\"religion\" class=\"textfield02\" id=\"religion\">
                <option value=\"0\" selected=\"selected\">Select One</option>
                $select_religion_list
              </select></td>
		      <td width=\"5%\" align=\"left\" valign=\"middle\">&nbsp;</td>
		      </tr>
		    </table></td>
        </tr>
		<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">National ID</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
                  <input name=\"nid\" type=\"radio\" id=\"nid_01\" value=\"1\" /> <span class=\"black12\">Yes</span></label>
                <label><span class=\"black11\">[National ID Number]</span> 
                  <input name=\"nid_no\" id=\"xplod\" type=\"text\" class=\"DEPENDS ON nid BEING 1\"  maxlength=\"20\" onkeypress=\"return alpha(event,numbers)\"></label>
                <label><input type=\"radio\" name=\"nid\" value=\"2\" id=\"nid_02\" /> <span class=\"black12\">No</span></label></td>
        </tr>
		<tr> <td width=\"100%\" bgcolor=\"$shade2_bg\" colspan=\"3\" align=\"center\" ><i>'National ID' or 'Birth Registration no.' is mandatory$red_dot</i></td></tr>
		<tr>
		<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">Passport ID</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"passport\" value=\"1\" id=\"passpost_01\" />
            <span class=\"black12\">Yes</span></label>
            <label><span class=\"black11\">[Passport Number]</span>
              <input name=\"passport_no\" type=\"text\" id=\"xplod\" class=\"DEPENDS ON passport BEING 1\" onkeypress=\"return alpha(event,numbers+letters)\" $uppercase />
            </label>
            <label>
              <input type=\"radio\" name=\"passport\" value=\"2\" id=\"passpost_02\" />
              <span class=\"black12\">No</span>
			</label>
        </tr>
		<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">Birth Registration</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\"><label>
            <input type=\"radio\" name=\"breg\" value=\"1\" id=\"breg_01\" />
            <span class=\"black12\">Yes</span></label>
            <label><span class=\"black11\">[Registration Number]</span>
              <input name=\"breg_no\" type=\"text\" id=\"xplod\" class=\"DEPENDS ON breg BEING 1\" onkeypress=\"return alpha(event,numbers+letters)\" $uppercase />
            </label>
            <label>
              <input type=\"radio\" name=\"breg\" value=\"2\" id=\"breg_02\" />
              <span class=\"black12\">No</span>
			</label>
        </tr>
        <tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Marital Status$red_dot</td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><label>
            <input type=\"radio\" name=\"mstatus\" value=\"1\" id=\"mstatus_01\" />
            <span class=\"black12\">Married</span></label>
            <label><span class=\"black11\">[Spouse Name]</span>
              <input name=\"s_name\" type=\"text\" id=\"xplod\" class=\"DEPENDS ON mstatus BEING 1\" onkeypress=\"return alpha(event,letters)\" $uppercase />
            </label>
            <label>
              <input type=\"radio\" name=\"mstatus\" value=\"2\" id=\"mstatus_02\" />
              <span class=\"black12\">Single</span>
			</label></td>
        </tr>
	




	$ffq_tab
     



		<tr>
          <td colspan=\"3\" align=\"left\" valign=\"middle\" bgcolor=\"$shade2_bg\" class=\"black12\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
            <tr>
              <td width=\"48%\" align=\"left\" valign=\"middle\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td td height=\"25\" colspan=\"2\" align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"black12\">Mailing/Present Address$red_dot</td>
                </tr>
				<tr>
                  <td width=\"47%\" align=\"left\" valign=\"middle\">Care of</td>
                  <td width=\"53%\" align=\"left\" valign=\"middle\">
                    <input name=\"present_care\" type=\"text\" class=\"textfield06\" id=\"present_care\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">
				  Village/Town/<br />
                  Road/House/Flat</td>
                  <td width=\"53%\" align=\"left\" valign=\"middle\">
                    <textarea name=\"present_vill\" cols=\"45\" rows=\"2\" class=\"textfield06\" id=\"present_vill\" onkeypress=\"return alpha(event,letters+numbers+custom)\"></textarea>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">District</td>
                  <td align=\"left\" valign=\"middle\">
                    <select name=\"menu_one\" class=\"textfield06a\" id=\"menu_one\" onchange=\"get_one_list(this); changeVisibility1(this)\">
                    <option value=\"0\" selected=\"selected\">Select One</option>
					$select_dist
					</select>
				  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">P.S./Upazila 


			<img src=\"images/loader.gif\" border=\"0\" align=\"absmiddle\" name =\"loading1\" style=\"visibility:visible\"/></td>
                  <td align=\"left\" valign=\"middle\">
                    <select name=\"menu_one_list\" class=\"textfield06a\" id=\"menu_one_list\" onchange=\"Show_ops1TextBox(this.id,'ops1');\">
                      <option value=\"0\"selected=\"selected\">Select One</option>
                      </select><br />
			<input name=\"ops1\" type=\"text\" class=\"textfield06\" id=\"ops1\" style=\"VISIBILITY: hidden\" />
				  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Post Office</td>
                  <td align=\"left\" valign=\"middle\">
                    <input name=\"present_post\" type=\"text\" class=\"textfield06\" id=\"present_post\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Post Code</td>
                  <td align=\"left\" valign=\"middle\">
                    <input name=\"present_pcode\" type=\"text\" class=\"textfield06\" id=\"present_pcode\" onkeypress=\"return alpha(event,numbers)\" />
                  </td>
                </tr>
              </table></td>
              <td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
              <td width=\"48%\" align=\"left\" valign=\"middle\" class=\"bdr02\"><table width=\"100%\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
                <tr>
                  <td td height=\"25\" colspan=\"2\" align=\"left\" valign=\"middle\" bgcolor=\"$box1\" class=\"black12\">Permanent Address$red_dot <input name=\"copy\" type=\"checkbox\" id=\"copy\" value=\"yes\" onClick=\"fd();\"/><span class=\"black11i\">same as present address</span></td>
                </tr>
				<tr>
                  <td width=\"47%\" align=\"left\" valign=\"middle\">Care of</td>
                  <td width=\"53%\" align=\"left\" valign=\"middle\">
                    <input name=\"permanent_care\" type=\"text\" class=\"textfield06\" id=\"permanent_care\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">
				  Village/Town/<br />
                  Road/House/Flat</td>
                  <td width=\"53%\" align=\"left\" valign=\"middle\">
                    <textarea name=\"permanent_vill\" cols=\"45\" rows=\"2\" class=\"textfield06\" id=\"permanent_vill\" onkeypress=\"return alpha(event,letters+numbers+custom)\"></textarea>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Home District</td>
                  <td align=\"left\" valign=\"middle\">
                    <select name=\"menu_two\" class=\"textfield06a\" id=\"menu_two\" onchange=\"get_two_list(this); changeVisibility2(this)\">
                    <option value=\"0\" selected=\"selected\">Select One</option>
					$select_dist
					</select>
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"top\">P.S./Upazila <img src=\"images/loader.gif\" border=\"0\" align=\"absmiddle\" name =\"loading2\" style=\"visibility:hidden\"/></td>
                  <td align=\"left\" valign=\"middle\">
                    <select name=\"menu_two_list\" class=\"textfield06a\" id=\"menu_two_list\" onchange=\"Show_ops1TextBox(this.id,'ops2');\">
                      <option  value=\"0\"selected=\"selected\">Select One</option>
                    </select><br />
					<input name=\"ops2\" type=\"text\" class=\"textfield06\" id=\"ops2\" style=\"VISIBILITY: hidden\" />
				  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Post Office</td>
                  <td align=\"left\" valign=\"middle\">
                    <input name=\"permanent_post\" type=\"text\" class=\"textfield06\" id=\"permanent_post\" onkeypress=\"return alpha(event,letters)\" />
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">Post Code</td>
                  <td align=\"left\" valign=\"middle\">
                    <input name=\"permanent_pcode\" type=\"text\" class=\"textfield06\" id=\"permanent_pcode\" onkeypress=\"return alpha(event,numbers)\" />
                  </td>
                </tr>
              </table></td>
              <td width=\"3%\" align=\"left\" valign=\"middle\">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Mobile Number$red_dot</td>
          <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black12\">
            <tr>
              <td width=\"26%\" height=\"23\" align=\"left\" valign=\"middle\"><input name=\"mobileno\" type=\"text\" class=\"textfield02\" id=\"mobileno\" maxlength=\"11\" onkeypress=\"return alpha(event,numbers)\" onselectstart=\"return false\" onpaste=\"return false\" onCopy=\"return false\" onCut=\"return false\" onDrag=\"return false\" onDrop=\"return false\" autocomplete=\"off\" /></td>
              <td width=\"70%\" align=\"left\" valign=\"middle\" class=\"red11\">Please mention a Mobile Number of any operator. Relevant information will be sent by SMS to that number.</td>
              <td width=\"4%\" align=\"left\" valign=\"middle\" class=\"red12\">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
		<tr>
          <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Confirm Mobile$red_dot</td>
          <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black12\">
            <tr>
              <td width=\"26%\" height=\"23\" align=\"left\" valign=\"middle\"><input name=\"confirmmobile\" type=\"text\" class=\"textfield02\" id=\"confirmmobile\" maxlength=\"11\" onkeypress=\"return alpha(event,numbers)\" onselectstart=\"return false\" onpaste=\"return false\" onCopy=\"return false\" onCut=\"return false\" onDrag=\"return false\" onDrop=\"return false\" autocomplete=\"off\" /></td>
              <td width=\"70%\" align=\"left\" valign=\"middle\" class=\"black11\">&laquo; Please Retype Mobile Number.</td>
              <td width=\"4%\" align=\"left\" valign=\"middle\" class=\"red12\">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
		<tr>
          <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">Email</td>
          <td height=\"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td height=\"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\"><input name=\"Email\" type=\"text\" class=\"textfield03\" id=\"Email\" /></td>
        </tr>
 	



       


        $SSC_tab
        $SSC_hsc_tab
        $SSC_hsc_gra_tab
 
	$job_tab
 

        $exp_110_01_tab
	$exp_110_02_tab
	$exp_110_03_tab

        $exp_120_01_tab
	$exp_120_02_tab
	$exp_120_03_tab

        $exp_130_01_tab
	$exp_130_02_tab
	$exp_130_03_tab

        $exp_140_01_tab
	$exp_140_02_tab
	$exp_140_03_tab

        $exp_150_01_tab
	$exp_150_02_tab
	$exp_150_03_tab

        $exp_160_01_tab
	$exp_160_02_tab
	$exp_160_03_tab

    
        $exp_170_01_tab
	$exp_170_02_tab
	$exp_170_03_tab

        
        $exp_180_01_tab
	$exp_180_02_tab
	$exp_180_03_tab

        $exp_190_01_tab
	$exp_190_02_tab
	$exp_190_03_tab


        $exp_200_01_tab
	$exp_200_02_tab
	$exp_200_03_tab


        $exp_210_01_tab
	$exp_210_02_tab
	$exp_210_03_tab


        $exp_220_01_tab
	$exp_220_02_tab
	$exp_220_03_tab


        $exp_230_01_tab
	$exp_230_02_tab
	$exp_230_03_tab


        $exp_240_01_tab
	$exp_240_02_tab
	$exp_240_03_tab


        $exp_250_01_tab
	$exp_250_02_tab
	$exp_250_03_tab

        $exp_260_01_tab
	$exp_260_02_tab
	$exp_260_03_tab



        $exp_270_01_tab
	$exp_270_02_tab
	$exp_270_03_tab



        $exp_280_01_tab
	$exp_280_02_tab
	$exp_280_03_tab



        $exp_290_01_tab
	$exp_290_02_tab
	$exp_290_03_tab



        $exp_300_01_tab
	$exp_300_02_tab
	$exp_300_03_tab

        $exp_310_01_tab
	$exp_310_02_tab
	$exp_310_03_tab


        $exp_320_01_tab
	$exp_320_02_tab
	$exp_320_03_tab


        $exp_330_01_tab
	$exp_330_02_tab
	$exp_330_03_tab


        $exp_340_01_tab
	$exp_340_02_tab
	$exp_340_03_tab


        $exp_350_01_tab
	$exp_350_02_tab
	$exp_350_03_tab
	
	 $exp_360_01_tab
	$exp_360_02_tab
	$exp_360_03_tab
	
	 $exp_370_01_tab
	$exp_370_02_tab
	$exp_370_03_tab
	
	 $exp_380_01_tab
	$exp_380_02_tab
	$exp_380_03_tab
	
$dri_lic_tab

<tr>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\"><b>Departmental Candidate Status</b></td>
          <td height = \"30\" align=\"center\" valign=\"middle\" bgcolor=\"$shade1_bg\" class=\"black12\">:</td>
          <td height = \"30\" align=\"left\" valign=\"middle\" bgcolor=\"$shade1_bg\">
              <select name=\"ds\" class=\"textfield02\" id=\"ds\" onchange=\"Show_DeptTextBox(this.id,'other_department');\">
                  <option value=\"0\" selected=\"selected\">Select One</option>
                  $select_dep_status_type
                </select>
<input name=\"other_department\" type=\"text\" class=\"textfield06\" id=\"other_department\" style=\"VISIBILITY: hidden\" />
              </td>
        </tr> 



     	  
		  <tr>
			  <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">Validation Code$red_dot</td>
			  <td align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\" class=\"black12\">:</td>
			  <td align=\"left\" valign=\"middle\" bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
				<tr>
				  <td width=\"43%\" align=\"left\" valign=\"middle\"><iframe name=\"t_img\" src=\"txtimg.php?v_code=$v_code\" width=\"220\" height=\"40\" marginwidth=\"5\" marginheight=\"5\" hspace=\"0\" vspace=\"0\" frameborder=\"0\" scrolling=\"no\"></iframe></td>
				  <td width=\"37%\" align=\"left\" valign=\"middle\"><input type=\"hidden\" name=\"code\" id=\"code\" value=\"$v_code\" />
				<input name=\"validation\" type=\"text\" class=\"textfield01\" id=\"validation\" /></td>
				<td width=\"20%\" align=\"left\" valign=\"middle\"><span class=\"black10\">&laquo; Enter the Code</span></td>
				</tr>
			  </table></td>
			</tr>
      <tr>
      <td>
      </td>
      </tr>
        <tr>
          <td style=\"font-style: italic;position: relative;text-align: left; height: 68px; padding-left: 60px; font-size: 12px;\" colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\" class=\"black11\">
            <input type=\"checkbox\" name=\"info_yes\" id=\"info_yes\" onclick=\"agreesubmit(this)\"/>
            The above information is correct and I would like to go to the next step.
            
            <img src=\"\" id=\"signature_view\" style=\"display:none; position: absolute;right: 10px;width: 200px; height: 53px; top: 5px;border: 2px dashed rgb(56, 176, 3);  padding: 5px; border-radius: 4px; background-color: #f2f2f2;\" alt=\"Signature Preview...\">
      
            </td>
        </tr>
		<tr>
          <td colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">
            <input type=\"submit\" name=\"button\" id=\"button\" value=\"   Next   \" disabled /></td>
        </tr>
	<tr>
          <td height=\"10\" colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"$box1\">
          <img name=\"im\" src=\"images/blank.png\"></td>
        </tr> 
      </table>
    </td>
  </tr>
  <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"lightgreen\" class=\"black10\">$support</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\">&nbsp;</td>
  </tr>
  <tr>
    <td align=\"left\" valign=\"top\"><fieldset class=\"field_set\">
      <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
        <tr>
          <td width=\"1%\" align=\"left\" valign=\"middle\">&nbsp;</td>
          <td width=\"80%\" align=\"left\" valign=\"middle\">$copyright</td>
          <td width=\"10%\" align=\"left\" valign=\"middle\">$by</td>
          <td width=\"9%\" align=\"left\" valign=\"middle\">$flashlogo</td>
        </tr>
      </table>
    </fieldset></td>
  </tr>
</table>
</form>";
  }

  mysql_close();



  ?>
</body>

</html>



<script src="lib/jquery.min.js"></script>
<script type="text/javascript" src="lib/autofill.js"></script>
<script>
  $(document).ready(function() {
    setTimeout(function() {
      document.getElementById('menu_one') && get_one_list(document.getElementById('menu_one'));
      document.getElementById('exam3') && get_sub_gra(document.getElementById('exam3'));
    }, 1000);

    var alljobs_info = <?php print json_encode($jobs_info); ?>;
    var userId = '<?php echo $user; ?>';

    if(userId && !alljobs_info.data){
      alert('Premium member with id: ' + userId +' not found!');
    } else{
      autoFill.setData(alljobs_info);
    }
  });
</script>