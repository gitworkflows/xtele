<?php

include "lib/dbconnect.php";
if(isset($_GET['one_value']))
{
	$thevalue = $_GET['one_value'];
	$option_txt = "obj.options[obj.options.length] = new Option('Select One','');\n";
	
	$thana_out = mysql_query("SELECT `thana` FROM `div_dist_thana`
							 WHERE `dist_code` = '$thevalue' ORDER BY `thana`");
	$row_out = mysql_numrows($thana_out);
	$i = 0;
	while($i < $row_out)
	{
		$thana		= mysql_result($thana_out, $i, "thana");
		$option_txt .= "obj.options[obj.options.length] = new Option('$thana','$thana');\n";
		$i ++;
	}
	$option_txt .= "obj.options[obj.options.length] = new Option('Others','Others');\n";
	echo"$option_txt";
}
mysql_close();
?> 