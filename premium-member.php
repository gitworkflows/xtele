<?php
include "lib/lastdate.php";
include "lib/fx.php";

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


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo "$page_title"; ?></title>
  <link href="lib/style.css" rel="stylesheet" type="text/css" />
  <script>
    //"Accept terms" form submission- By Dynamic Drive
    //For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
    //This credit MUST stay intact for use

    var checkobj

    function agreesubmit(el) {
      checkobj = el
      if (document.all || document.getElementById) {
        for (i = 0; i < checkobj.form.length; i++) { //hunt down submit button
          var tempobj = checkobj.form.elements[i]
          if (tempobj.type.toLowerCase() == "submit") {

            if (el.value == '1') {
              tempobj.disabled = true;
              document.getElementById('alljobs_id').hidden = false;
            } else {
              tempobj.disabled = !checkobj.checked;
              document.getElementById('alljobs_id').hidden = true;
            }
            document.getElementById('member_id').value = '';
          }
        }
      }
    }

    function defaultagree(el) {
      if (!document.all && !document.getElementById) {
        if (window.checkobj && checkobj.checked)
          return true
        else {
          alert("Please read/accept terms to submit form")
          return false
        }
      }
    }

    function onChangeMemberId() {
      if (document.getElementById('member_id').value) {
        document.getElementById('button').disabled = false;
      } else {
        document.getElementById('button').disabled = true;
      }
    }
  </script>
  <?php
  echo "
</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">

<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"10\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>


    $app_head
    $toplink


  <tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"$body_bg\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\">
      <tr>
      <td height=\"300\" align=\"center\" valign=\"middle\"><table width=\"600\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
          <tr>
            <td align=\"center\" valign=\"middle\"></td>
            </tr>
          <tr>
            <td align=\"center\" valign=\"middle\">&nbsp;</td>
          </tr>";
  echo "<tr>
    <td align=\"left\" valign=\"top\" bgcolor=\"#FFF380\">
    <form id=\"memberform\" name=\"memberform\" method=\"post\" action=\"application.php\">
    <input type=\"hidden\" name=\"postid\" value=\"$post_code\" id=\"$post_code\" />
    <fieldset class=\"field_set\">
      <legend align=\"center\" class=\"new_style_home\"><b>Online and SMS based Recruitment System</b></legend>
      <table width=\"90%\" align=\"center\" border=\"0\" cellpadding=\"5\" cellspacing=\"0\" class=\"black12\">
        <tbody>
        <tr><td height=\"10\" colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\">
        </td></tr>
        <tr bgcolor=\"lightgreen\">
          <td width=\"30%\" height=\"35\" align=\"left\" valign=\"middle\">Post Name</td>
          <td width=\"5%\" height=\"35\" align=\"center\" valign=\"middle\">:</td>
          <td width=\"65%\" height=\"35\" align=\"left\" valign=\"middle\">
			  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
				  <tbody><tr>
					<td style=\"font-weight:bold\" width=\"60%\" align=\"left\" valign=\"middle\" class=\"black12\">$post_name</td>
				  </tr>
			  </tbody></table>
		  </td>
		  <input type=\"hidden\" name=\"post_code\" id=\"post_code\" value=\"220\">
        </tr><tr bgcolor=\"limegreen\">
          <td height=\"30\" align=\"left\" valign=\"middle\" class=\"black12\">Are you a Premium Member of Alljobs?<span class=\"red12\">*</span></td>
          <td height=\"30\" align=\"center\" valign=\"middle\" class=\"black12\">:</td>
          <td height=\"30\" align=\"left\" valign=\"middle\">
              <label><input name=\"nid\" type=\"radio\" onclick=\"agreesubmit(this)\" id=\"nid_01\" value=\"1\" /> <span class=\"black12\">Yes</span></label>
              <label id=\"alljobs_id\" hidden=\"true\"><span class=\"black11\">[Enter AllJobs ID]</span> 
              <input name=\"member_id\" id=\"member_id\" onkeyup=\"onChangeMemberId()\" onchange=\"onChangeMemberId()\" style=\"width: 100px;\" type=\"text\" class=\"DEPENDS ON nid BEING 1\"  maxlength=\"20\">
              </label>
              <label><input type=\"radio\" name=\"nid\" onclick=\"agreesubmit(this)\" value=\"2\" id=\"nid_02\" /> <span class=\"black12\">No</span></label></td>
        </tr><tr bgcolor=\"lightgreen\">
          <td colspan=\"3\" align=\"center\" valign=\"middle\">
            <input type=\"submit\" name=\"button\" id=\"button\" value=\"   Next   \" disabled=\"\"></td>
        </tr><tr bgcolor=\"lightgreen\">
          <td colspan=\"3\" align=\"center\" valign=\"middle\" class=\"black11\">
          <font color=\"BlUE\"> <font size=\"2\"> N.B. The Premium Member will get data auto fill facility from <a target=\"_blank\" href=\"https://alljobs.teletalk.com.bd/\">Alljobs</a></font></font></td>
        </tr>
		    <tr bgcolor=\"lightgreen\">
          <td height=\"0\" colspan=\"3\" align=\"center\" valign=\"middle\">
          <img name=\"im\" src=\"images/blank.png\"></td>
        </tr>
        <tr><td height=\"10\" colspan=\"3\" align=\"center\" valign=\"middle\" bgcolor=\"#FFF380\">
        </td></tr>
      </tbody></table>
      </fieldset>
      </form>
    </td>
  </tr>";

  echo "<tr>
            <td align=\"center\" valign=\"middle\">&nbsp;</td>
          </tr>
          <tr>
            <td align=\"center\" valign=\"middle\">&nbsp;</td>
          </tr>
          </table></td>
      </tr>
    </table></td>
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
</body>
</html>";
  mysql_close();

  //echo "$postid    dfdfd : $post_code,,,user:$user,,,cuser:$cuser";


  ?>