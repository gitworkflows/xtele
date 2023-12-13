<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File Upload with PHP</title>
</head>

<body>


			  <tr>
			<td align=\"middle\" valign=\"top\">&nbsp;</td>
			  

    <font size="5" color="red">Upload Authority signature with the name of  "au_sign.png"</font><br/><br/>
</tr>
    <form action="fileUpload.php" method="post" enctype="multipart/form-data">
        Upload an Authority image(*.png):
        <input type="file" name="myfile" id="fileToUpload">
        <input type="submit" name="submit" value="Upload Image Now" >
    </form>
</body>


</html>
