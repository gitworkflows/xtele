<?php
include "lib/lastdate.php";
include "lib/fx.php";
// Not Active
if ($active == "0") {
  exit;
}

/////////////////////////////////////---------------------------------------------------
session_start();
$postid = $_SESSION['postno'];



if ($postid == '1999') {
  $xx = 0;
} else {
  echo "<script language='javascript'>window.location.href=\"err.php?err=832\"; </script>";
  exit;
}


if ($postid == "") {
  echo "<script language='javascript'>window.location.href=\"err.php?err=8232\"; </script>";
  exit;
}

//echo "Post id: $postid";

session_destroy();
/////////////////////////////////////---------------------------------------------------
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
          if (tempobj.type.toLowerCase() == "submit")
            tempobj.disabled = !checkobj.checked
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
      <td height=\"300\" align=\"center\" valign=\"middle\"><table width=\"550\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"black10\">
          <tr>
            <td align=\"center\" valign=\"middle\"></td>
            </tr>
          <tr>
            <td align=\"center\" valign=\"middle\">&nbsp;</td>
          </tr>
          <tr>
            <td align=\"center\" valign=\"middle\">
            <fieldset class=\"field_set\">
            <legend align=\"center\" class=\"new_style_home\" ><b>Online and SMS based Recruitment System</b></legend>
            <form id=\"applyform\" name=\"applyform\" method=\"post\" action=\"premium-member.php\">
              <table width=\"500\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"black12\">
					<tr>
					  <td width=\"30\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td width=\"550\" align=\"left\" valign=\"middle\">&nbsp;</td>
					</tr>
					<tr class=\"black12bold\" bgcolor=\"Green\">
					  <td height=\"25\" align=\"left\" valign=\"middle\">&nbsp;</td>
					  <td height=\"25\" align=\"left\" valign=\"middle\"><font color='white'>Post Name<I>(Select any one and click Next button)</td>
					</tr>";

  include "lib/dbconnect.php";

  $postout = mysql_query("SELECT * FROM `post`
									   WHERE `post_active` = '1'
									   ORDER BY `post_code`");
  $post_i = mysql_numrows($postout);
  $i = 0;

  //  echo "Post=$post_i";

  while ($post_i > $i) {
    $bg = "lightgreen";
    if ($i % 2) {
      $bg = "limegreen";
    }

    //Post Loop

    $post_code    = mysql_result($postout, $i, "post_code");
    $post_name    = mysql_result($postout, $i, "post_name");

    echo "<tr bgcolor=\"$bg\">
						  <td width=\"40\ height=\"40\" align=\"left\" valign=\"middle\">
						  <input type=\"radio\" name=\"postid\" value=\"$post_code\" id=\"$post_code\" onClick=\"agreesubmit(this)\" />
						  </td>
						  <td width=\"340\" height=\"20\" align=\"left\" valign=\"middle\">$post_name</td>
					</tr>";

    $sl++;
    $i++;
  }
  echo "<tr bgcolor=\"lightgreen\">
                  <td align=\"left\" valign=\"middle\">&nbsp;</td>
                  <td align=\"right\" valign=\"middle\">
           		  <input name=\"next\" type=\"Submit\" disabled id=\"next\" value=\"   Next   \" />
                  </td>
                </tr>
                <tr>
                  <td align=\"left\" valign=\"middle\">&nbsp;</td>
                  <td align=\"left\" valign=\"middle\">&nbsp;</td>
                </tr>
              </table>
              </form>
			<script>
				document.forms.applyform.postid.checked=false
			</script>
            </fieldset>
            </td>
          </tr>
          <tr>
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