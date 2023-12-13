<?php
include "dbconnect.php";

// Religion
$religion_list = mysql_query("SELECT * FROM `religion`");
$result_row = mysql_numrows($religion_list);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($religion_list, $si, "religion_value");
	$result_name			= mysql_result($religion_list, $si, "religion_name");

	$select_religion_list .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}

// Departmental Status Type
$dep_status_type = mysql_query("SELECT * FROM `dep_status_type`");
$result_row = mysql_numrows($dep_status_type);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($dep_status_type, $si, "status_value");
	$result_name			= mysql_result($dep_status_type, $si, "status_name");

	$select_dep_status_type .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}


// FFQ
$quota_list = mysql_query("SELECT * FROM `quota`");
$result_row = mysql_numrows($quota_list);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($quota_list, $si, "quota_value");
	$result_name			= mysql_result($quota_list, $si, "quota_name");

	$select_quota_list .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}


// Education Board
$board_out = mysql_query("SELECT * FROM `exam_board`");
$board_row = mysql_numrows($board_out);
$bi = 0;
while ($board_row > $bi) {
	$board_value		= mysql_result($board_out, $bi, "board_value");
	$board_name			= mysql_result($board_out, $bi, "board_name");

	$select_board .= "<option value=\"$board_value\">$board_name</option>";

	$bi++;
}


// Group SSC
$group_out = mysql_query("SELECT * FROM `exam_grp_ssc`");
$group_row = mysql_numrows($group_out);
$sgi = 0;
while ($group_row > $sgi) {
	$group_value		= mysql_result($group_out, $sgi, "group_value");
	$group_name			= mysql_result($group_out, $sgi, "group_name");

	$select_group_ssc .= "<option value=\"$group_value\">$group_name</option>";

	$sgi++;
}



// Group HSC
$group_out = mysql_query("SELECT * FROM `exam_grp_hsc`");
$group_row = mysql_numrows($group_out);
$hgi = 0;
while ($group_row > $hgi) {
	$group_value		= mysql_result($group_out, $hgi, "group_value");
	$group_name			= mysql_result($group_out, $hgi, "group_name");

	$select_group_hsc .= "<option value=\"$group_value\">$group_name</option>";

	$hgi++;
}


// SSC Exam
$ssc_out = mysql_query("SELECT * FROM `exam_ssc`");
$ssc_row = mysql_numrows($ssc_out);
$si = 0;
while ($ssc_row > $si) {
	$ssc_value			= mysql_result($ssc_out, $si, "exam_value");
	$ssc_name			= mysql_result($ssc_out, $si, "exam_name");

	$select_ssc_exam .= "<option value=\"$ssc_value\">$ssc_name</option>";

	$si++;
}

// SSC Result Type
$exam_result_type = mysql_query("SELECT * FROM `exam_result_type` WHERE exam_name='SSC'");
$result_row = mysql_numrows($exam_result_type);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($exam_result_type, $si, "type_value");
	$result_name			= mysql_result($exam_result_type, $si, "type_name");

	$select_ssc_result_type .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}

// HSC Exam
$hsc_out = mysql_query("SELECT * FROM `exam_hsc`");
$hsc_row = mysql_numrows($hsc_out);
$hi = 0;
while ($hsc_row > $hi) {
	$hsc_value			= mysql_result($hsc_out, $hi, "exam_value");
	$hsc_name			= mysql_result($hsc_out, $hi, "exam_name");

	$select_hsc_exam .= "<option value=\"$hsc_value\">$hsc_name</option>";

	$hi++;
}

// HSC Result Type
$exam_result_type = mysql_query("SELECT * FROM `exam_result_type` WHERE exam_name='HSC'");
$result_row = mysql_numrows($exam_result_type);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($exam_result_type, $si, "type_value");
	$result_name			= mysql_result($exam_result_type, $si, "type_name");

	$select_hsc_result_type .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}


// Graduation Exam
$gra_out = mysql_query("SELECT * FROM `exam_gra`");
$gra_row = mysql_numrows($gra_out);
$gi = 0;
while ($gra_row > $gi) {
	$gra_value			= mysql_result($gra_out, $gi, "exam_value");
	$gra_name			= mysql_result($gra_out, $gi, "exam_name");

	$select_gra_exam .= "<option value=\"$gra_value\">$gra_name</option>";

	$gi++;
}

// Graduation Result Type
$exam_result_type = mysql_query("SELECT * FROM `exam_result_type` WHERE exam_name='GRA'");
$result_row = mysql_numrows($exam_result_type);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($exam_result_type, $si, "type_value");
	$result_name			= mysql_result($exam_result_type, $si, "type_name");

	$select_gra_result_type .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}

// Graduation Duration
$course_duration = mysql_query("SELECT * FROM `course_duration` WHERE exam_name='GRA'");
$result_row = mysql_numrows($course_duration);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($course_duration, $si, "duration_value");
	$result_name			= mysql_result($course_duration, $si, "duration_text");

	$select_gra_duration .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}




// Master Exam
$mas_out = mysql_query("SELECT * FROM `exam_mas`");
$mas_row = mysql_numrows($mas_out);
$mi = 0;
while ($mas_row > $mi) {
	$mas_value			= mysql_result($mas_out, $mi, "exam_value");
	$mas_name			= mysql_result($mas_out, $mi, "exam_name");

	$select_mas_exam .= "<option value=\"$mas_value\">$mas_name</option>";

	$mi++;
}


// Masters Result Type
$exam_result_type = mysql_query("SELECT * FROM `exam_result_type` WHERE exam_name='MAS'");
$result_row = mysql_numrows($exam_result_type);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($exam_result_type, $si, "type_value");
	$result_name			= mysql_result($exam_result_type, $si, "type_name");

	$select_mas_result_type .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}

// Masters Duration
$course_duration = mysql_query("SELECT * FROM `course_duration` WHERE exam_name='MAS'");
$result_row = mysql_numrows($course_duration);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($course_duration, $si, "duration_value");
	$result_name			= mysql_result($course_duration, $si, "duration_text");

	$select_mas_duration .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}


//MAS Subject Out
$subject_out = mysql_query("SELECT * FROM `subject_edu` WHERE `edu_type` != 'P'");
$subject_row = mysql_numrows($subject_out);
$si = 0;

while ($subject_row > $si) {
	$edu_sub_code		= mysql_result($subject_out, $si, "edu_sub_code");
	$edu_sub_name		= mysql_result($subject_out, $si, "edu_sub_name");

	$select_sub_mas .= "<option value=\"$edu_sub_code\">$edu_sub_name</option>";

	$si++;
}

// University List
$uni_out = mysql_query("SELECT * FROM `university`");
$uni_row = mysql_numrows($uni_out);
$ui = 0;
while ($uni_row > $ui) {
	$uni_code			= mysql_result($uni_out, $ui, "uni_code");
	$uni_name			= mysql_result($uni_out, $ui, "uni_name");

	$select_uni .= "<option value=\"$uni_code\">$uni_name</option>";

	$ui++;
}


// phd Exam
$phd_out = mysql_query("SELECT * FROM `exam_phd`");
$phd_row = mysql_numrows($phd_out);
$pi = 0;
while ($phd_row > $pi) {
	$phd_value			= mysql_result($phd_out, $pi, "exam_value");
	$phd_name			= mysql_result($phd_out, $pi, "exam_name");

	$select_phd_exam .= "<option value=\"$phd_value\">$phd_name</option>";

	$pi++;
}


// PHD Result Type
$exam_result_type = mysql_query("SELECT * FROM `exam_result_type` WHERE exam_name='PHD'");
$result_row = mysql_numrows($exam_result_type);
$si = 0;
while ($result_row > $si) {
	$result_value			= mysql_result($exam_result_type, $si, "type_value");
	$result_name			= mysql_result($exam_result_type, $si, "type_name");

	$select_phd_result_type .= "<option value=\"$result_value\">$result_name</option>";

	$si++;
}
