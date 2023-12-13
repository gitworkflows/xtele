<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Photo &amp; Signature Validator </title>
<link href="lib/style.css" rel="stylesheet" type="text/css" />
<script>
function validateFileExtension(fld)
{
	if(!/(\.jpg)$/i.test(fld.value))
	{
		alert("Image file format must be .jpg!!");
		fld.focus();
		fld.form.reset();
		return false;
	}
	return true;
}

function download()
{
	// preload the image file
	objImage.src="images/loader_valid.gif";
}

// Loading------------------------------------------------------
function changeVisibility1()
{
	document.images["loading1"].style.visibility="visible";
}
</script>
</head>

<body onLoad="download();>
<table width="883" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td height="300" align="left" valign="top">
    <form action="validator.php" method="post" enctype="multipart/form-data" name="valid" id="valid" onsubmit="return changeVisibility1(this);">
      <table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
        <tr>
          <td height="40" align="center" valign="middle" bgcolor="#FFF380" class="subField_Name">:: Photo &amp; Signature Validator ::</td>
        </tr>
        <tr>
          <td align="center" valign="middle" bgcolor="#FFF380" class="red12"><hr /></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#FFF380"><div align="justify"><span>Photo must be <span class="black12bold">300 X 300 pixel</span> (width X height) <span class="red12"><b>[ .jpg format]</b></span> and file size not more than <span class="red12">100 KB (Min. 4 KB)</span> and <span>Signature must be <span class="black12bold">300 X 80 pixel</span> (width X height) <span class="red12"><b>[ .jpg format]</b> </span> and file size not more than <span class="red12">60 KB (Min. 3 KB)</span>. <span class="black12bold">Colour Photo is a must</span>.</span></span> Black &amp; White, Monochrome or Grayscale photo or any image other than photo will not be accepted.  This application is capable to detect image with <span class="red12">Facial Recognition</span>. Please avoid to upload unacceptable  photo.</div></td>
        </tr>
        <tr>
          <td align="center" valign="middle" bgcolor="#FFF380">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" valign="middle" bgcolor="#FFF380"><p>
            <label>
              <input name="yes" type="hidden" id="yes" value="YES" />
              <input name="ps" type="radio" id="ps_01" value="vphoto" checked="checked" />
              Photo</label>
            <label>
              <input type="radio" name="ps" value="vsignature" id="ps_02" />
              Signature&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> 
            <input name="vfile" type="file" class="textfield06" id="vfile" onchange="return validateFileExtension(this)"/>
            &nbsp;
            <input type="submit" name="button2" id="button2" value="   Check Now   " /> 
             &nbsp;&nbsp;<img src="images/loader_valid.gif" border="0" align="absmiddle" name ="loading1" style="visibility:hidden"/>
          </p></td>
        </tr>
        
        <tr>
          <td height="30" align="center" valign="middle" bgcolor="#FFF380" class="red12bold">
          <?php
		  $ps = $_POST['ps'];
		  $yes = $_POST['yes'];
		  if($yes == "YES")
		  {
			$vfile_name = $_FILES["vfile"]["name"];
			$vfile_kb = ($_FILES["vfile"]["size"] / 1024);
			$vfile_temp = $_FILES["vfile"]["tmp_name"];
			$vfile_size = GetImageSize("$vfile_temp"); 
			$vfile_width = $vfile_size[0]; 
			$vfile_height = $vfile_size[1];
			$vfile_ext = substr($vfile_name, strpos($vfile_name,'.'), strlen($vfile_name)-1);
			$vfile_ext=strtolower($vfile_ext);
			
			$vfile_kb = sprintf ("%.2f", $vfile_kb);
			
			if($vfile_width > 0 && $vfile_height > 0)
			{
				$size_err = "(widht = $vfile_width, height = $vfile_height and size = $vfile_kb KB)";
			}
			
			if($ps == "vphoto")
			{
				if($vfile_width == "300" && $vfile_height == "300" && $vfile_kb <= 100 && $vfile_kb >= 4 && $vfile_ext == ".jpg")
				{
					echo "<p class=\"errmsg\">Photo is Valid!</p>";
				}
				else
				{
					echo "<p class=\"errmsg\">Photo File Size/Format is Invalid $size_err!</p>";
				}
			}
			if($ps == "vsignature")
			{
				if(($vfile_width == "300" && $vfile_height == "80" && $vfile_kb <= 40 && $vfile_kb >= 3) && ($vfile_ext == ".jpg"))
				{
				echo "<p class=\"errmsg\">Signature is Valid!</p>";
				}
				else
				{
					echo "<p class=\"errmsg\">Signature File Size/Format is Invalid $size_err!</p>";
				}
			}
		  }
		  ?>
          </td>
        </tr>
        <tr>
          <td height="50" align="center" valign="middle" bgcolor="#FFF380" class="red12bold">&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>
