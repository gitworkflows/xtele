<?php

if (isset($_GET['one_value'])) {
    $thevalue = $_GET['one_value'];
    $execute_query = 0;

    include 'lib/dbconnect.php';

    switch ($thevalue) {
        case '1':
        $subject_out = mysql_query("SELECT * FROM `subject_edu` WHERE `edu_type` = 'E' or `edu_type` = 'Z'");
        $execute_query = 1;
        break;

        case '6':
        $subject_out = mysql_query("SELECT * FROM `subject_edu` WHERE `edu_type` = 'F' or `edu_type` = 'Z'");
        $execute_query = 1;
        break;

		case '7':
        $subject_out = mysql_query("SELECT * FROM `subject_edu` WHERE `edu_type` = 'B' or `edu_type` = 'Z'");
        $execute_query = 1;
        break;

        case '2':
        $subject_out = mysql_query("SELECT * FROM `subject_edu` WHERE `edu_type` = 'A' or `edu_type` = 'Z'");
        $execute_query = 1;
        break;

        case '3':
        $subject_out = mysql_query("SELECT * FROM `subject_edu` WHERE `edu_type` = 'M' or `edu_type` = 'Z'");
        $execute_query = 1;
        break;

        case '4':
        $subject_out = mysql_query("SELECT * FROM `subject_edu` WHERE `edu_type` = 'G' or `edu_type` = 'Z'");
        $execute_query = 1;
        break;

        case '5':
        $subject_out = mysql_query("SELECT * FROM `subject_edu` WHERE `edu_type` = 'P' or `edu_type` = 'Z'");
        $execute_query = 1;
        break;

        case '-1':
        echo "obj.options[obj.options.length] = new Option('Select One','');\n";
        break;

        default:
        $subject_out = mysql_query('SELECT * FROM `subject_edu`');
        $execute_query = 1;
    }

    if ($execute_query == '1') {
        $subject_arr = [];
        while ($row = mysql_fetch_assoc($subject_out)) {
            $obj = (object) [
                'edu_sub_code' => $row['edu_sub_code'],
                'edu_sub_name' => $row['edu_sub_name'],
            ];
            if ($row['edu_sub_name'] != 'Others') {
                array_push($subject_arr, $obj);
            }
        }
        usort($subject_arr, function ($a, $b) {
            return strcmp($a->edu_sub_name, $b->edu_sub_name);
        });

        echo "obj.options[obj.options.length] = new Option('Select One','');\n";
        foreach ($subject_arr as $key => $value) {
            echo "obj.options[obj.options.length] = new Option('$value->edu_sub_name','$value->edu_sub_code');\n";
        }
        echo "obj.options[obj.options.length] = new Option('Others','999');\n";

        //Subject Out
        // $subject_row = mysql_numrows($subject_out);
        // $si = 0;
        // echo "obj.options[obj.options.length] = new Option('Select One','');\n";

        // while ($subject_row > $si) {
        //     $edu_sub_code = mysql_result($subject_out, $si, 'edu_sub_code');
        //     $edu_sub_name = mysql_result($subject_out, $si, 'edu_sub_name');

        //     echo "obj.options[obj.options.length] = new Option('$edu_sub_name','$edu_sub_code');\n";

        //     ++$si;
        // }
    }
}
mysql_close();
