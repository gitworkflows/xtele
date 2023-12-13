<?php

if(isset($_GET['one_value'])){
	$thevalue = $_GET['one_value'];
	$execute_query = 0;
	
	include "lib/dbconnect.php";
	
	switch($thevalue)
	{
		//S.S.C Vocational
		case "3":
		$subject_out = mysql_query("SELECT * FROM `exam_grp_ssc` WHERE `group_type` = 'T' or `group_type` = 'Z'");
		$execute_query = 1;
		break;
		
		//Dakhil Vocational
		case "6":
		$subject_out = mysql_query("SELECT * FROM `exam_grp_ssc` WHERE `group_type` = 'T' or `group_type` = 'Z'");
		$execute_query = 1;
		break;

		//Diploma
		/*case "7":
		$subject_out = mysql_query("SELECT * FROM `exam_grp_hsc` WHERE `group_type` = 'T' or `group_type` = 'Z'");
		$execute_query = 1;
		break;*/
		
		//General
		case "1":
		$subject_out = mysql_query("SELECT * FROM `exam_grp_ssc` WHERE `group_type` = 'G' or `group_type` = 'Z'");
		$execute_query = 1;
		break;
		
		//General
		case "2":
		$subject_out = mysql_query("SELECT * FROM `exam_grp_ssc` WHERE `group_type` = 'G' or `group_type` = 'Z'");
		$execute_query = 1;
		break;
		
		//General
		/*case "3":
		$subject_out = mysql_query("SELECT * FROM `exam_grp_hsc` WHERE `group_type` = 'G' or `group_type` = 'Z'");
		$execute_query = 1;
		break;*/
		
		//General
		case "4":
		$subject_out = mysql_query("SELECT * FROM `exam_grp_ssc` WHERE `group_type` = 'G' or `group_type` = 'Z'");
		$execute_query = 1;
		break;
		
		//General
		case "5":
		$subject_out = mysql_query("SELECT * FROM `exam_grp_ssc` WHERE `group_type` = 'G' or `group_type` = 'Z'");
		$execute_query = 1;
		break;
		
		case "-1":
		echo "obj.options[obj.options.length] = new Option('Select One','');\n";
		break;
		
		default:
		$subject_out = mysql_query("SELECT * FROM `exam_grp_ssc`");
		$execute_query = 1;
	}
	
	if($execute_query == "1")
	{
		//Subject Out
		$subject_row = mysql_numrows($subject_out);
		$si = 0;
		echo "obj.options[obj.options.length] = new Option('Select One','');\n";
		while ($subject_row > $si)
		{
			$edu_sub_code		= mysql_result($subject_out, $si, "group_value");
			$edu_sub_name		= mysql_result($subject_out, $si, "group_name");
			
			echo "obj.options[obj.options.length] = new Option('$edu_sub_name','$edu_sub_code');\n";
			
			$si ++;
		}
	}
  
}
mysql_close();
?> 