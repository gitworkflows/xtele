
<?php


if ($min_edu_stage == '3') {

  if ($exam1 <= '0' || $institute1 <= '0' || $year1 <= '0' || $result1 <= '0' || $roll1 <= '0' || $subject1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=10\"; </script>";
  }
  if ($result1 == '4' && $result_gpa1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=101\"; </script>";
  }
  if ($result1 == '5' && $result_gpa1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=101\"; </script>";
  }



  if ($exam2 <= '0' || $institute2 <= '0' || $year2 <= '0' || $result2 <= '0' || $roll2 <= '0' || $subject2 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=20\"; </script>";
  }
  if ($result2 == '4' && $result_gpa2 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=102\"; </script>";
  }
  if ($result2 == '5' && $result_gpa2 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=102\"; </script>";
  }



  if ($exam3 <= '0' || $institute3 <= '0' || $year3 <= '0' || $result3 <= '0' || $duration3 <= '0' || $subject3 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=30\"; </script>";
  }
  if ($result3 == '4' && $result_gpa3 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=103\"; </script>";
  }
  if ($result3 == '5' && $result_gpa3 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=103\"; </script>";
  }
}





if ($min_edu_stage == '2') {

  if ($exam1 <= '0' || $institute1 <= '0' || $year1 <= '0' || $result1 <= '0' || $roll1 <= '0' || $subject1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=10\"; </script>";
  }
  if ($result1 == '4' && $result_gpa1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=101\"; </script>";
  }
  if ($result1 == '5' && $result_gpa1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=101\"; </script>";
  }



  if ($exam2 <= '0' || $institute2 <= '0' || $year2 <= '0' || $result2 <= '0' || $roll2 <= '0' || $subject2 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=20\"; </script>";
  }
  if ($result2 == '4' && $result_gpa2 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=102\"; </script>";
  }
  if ($result2 == '5' && $result_gpa2 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=102\"; </script>";
  }
}




if ($min_edu_stage == '1') {

  if ($exam1 <= '0' || $institute1 <= '0' || $year1 <= '0' || $result1 <= '0' || $roll1 <= '0' || $subject1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=10\"; </script>";
  }
  if ($result1 == '4' && $result_gpa1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=101\"; </script>";
  }
  if ($result1 == '5' && $result_gpa1 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=101\"; </script>";
  }
}




if ($result1 == '6') {
  $result1 = "B Grade(5 Subjects)";
}

if ($result1 == '7') {
  $result1 = "C Grade(5 Subjects)";
}

if ($result2 == '6') {
  $result2 = "B Grade(2 Subjects)";
}

if ($result2 == '7') {
  $result2 = "C Grade(2 Subjects)";
}

// Wrong Input

if (($result1 == '4') && ($result_gpa1 <= '0' || $result_gpa1 > '4')) {
  echo "<script language='javascript'>window.location.href=\"edu_err.php?err=105\"; </script>";
}
if (($result1 == '5') && ($result_gpa1 <= '0' || $result_gpa1 > '5')) {
  echo "<script language='javascript'>window.location.href=\"edu_err.php?err=105\"; </script>";
}


if (($result2 == '4') && ($result_gpa2 <= '0' || $result_gpa2 > '4')) {
  echo "<script language='javascript'>window.location.href=\"edu_err.php?err=105\"; </script>";
}
if (($result2 == '5') && ($result_gpa2 <= '0' || $result_gpa2 > '5')) {
  echo "<script language='javascript'>window.location.href=\"edu_err.php?err=105\"; </script>";
}

if (($result3 == '4') && ($result_gpa3 <= '0' || $result_gpa3 > '4')) {
  echo "<script language='javascript'>window.location.href=\"edu_err.php?err=105\"; </script>";
}
if (($result3 == '5') && ($result_gpa3 <= '0' || $result_gpa3 > '5')) {
  echo "<script language='javascript'>window.location.href=\"edu_err.php?err=105\"; </script>";
}

if (($result4 == '4') && ($result_gpa4 <= '0' || $result_gpa4 > '4')) {
  echo "<script language='javascript'>window.location.href=\"edu_err.php?err=105\"; </script>";
}
if (($result4 == '5') && ($result_gpa4 <= '0' || $result_gpa4 > '5')) {
  echo "<script language='javascript'>window.location.href=\"edu_err.php?err=105\"; </script>";
}







// **********************************************  SSC result (GPA Calculation) ***************************************************************
if ($result1 == "5") {

  if ($result_gpa1 >= "3" && $result_gpa1 <= "5") {
    $result1 = "1";
  }

  if ($result_gpa1 >= "2" && $result_gpa1 < "3") {
    $result1 = "2";
  }


  if ($result_gpa1 > "0" && $result_gpa1 < "2") {
    $result1 = "3";
  }
}


if ($result1 == "4") {

  if ($result_gpa1 >= "3" && $result_gpa1 <= "4") {
    $result1 = "1";
  }

  if ($result_gpa1 >= "2.25" && $result_gpa1 < "3") {
    $result1 = "2";
  }

  if ($result_gpa1 > "0" && $result_gpa1 < "2.25") {
    $result1 = "3";
  }
}

/*if($result_gpa1 >="3" && $result_gpa1 <="5" )
         {$result1="1";}  
          

 if($result_gpa1 >="2" && $result_gpa1 <"3")
         {$result1="2";}  

     
 if ($result_gpa1 >"0" && $result_gpa1 <"2" )
         {$result1="3";}*/





//*****************************************      HSC result(GPA Calculation) *********************************************************************

if ($result2 == "5") {

  if ($result_gpa2 >= "3" && $result_gpa2 <= "5") {
    $result2 = "1";
  }

  if ($result_gpa2 >= "2" && $result_gpa2 < "3") {
    $result2 = "2";
  }



  if ($result_gpa2 > "0" && $result_gpa2 < "2") {
    $result2 = "3";
  }
}


if ($result2 == "4") {

  if ($result_gpa2 >= "3" && $result_gpa2 <= "4") {
    $result2 = "1";
  }

  if ($result_gpa2 >= "2.25" && $result_gpa2 < "3") {
    $result2 = "2";
  }

  if ($result_gpa2 > "0" && $result_gpa2 < "2.25") {
    $result2 = "3";
  }
}

/*if($result_gpa2 >="3" && $result_gpa2 <="5" )
         {$result2="1";}  

   if($result_gpa2 >="2" && $result_gpa2 <"3")
         {$result2="2";}  


 
    if ($result_gpa2 >"0" && $result_gpa2 <"2" )
         {$result2="3";}*/


//**************************************       BSC result(GPA Calculation)  ************************************************************************

if ($result3 == "4") {


  if ($result_gpa3 >= "3" && $result_gpa3 <= "4") {
    $result3 = "1";
  }


  if ($result_gpa3 >= "2.25" && $result_gpa3 < "3") {
    $result3 = "2";
  }


  if ($result_gpa3 > "0" && $result_gpa3 < "2.25") {
    $result3 = "3";
  }
}


if ($result3 == "5") {

  if ($result_gpa3 >= "3.75" && $result_gpa3 <= "5") {
    $result3 = "1";
  }

  if ($result_gpa3 >= "2.813" && $result_gpa3 < "3.75") {
    $result3 = "2";
  }

  if ($result_gpa3 > "0" && $result_gpa3 < "2.813") {
    $result3 = "3";
  }
}


// **********************************************       MSC result (GPA Calculation) **************************************************************************

if ($result4 == "4") {

  if ($result_gpa4 >= "3" && $result_gpa4 <= "4") {
    $result4 = "1";
  }

  if ($result_gpa4 >= "2.25" && $result_gpa4 < "3") {
    $result4 = "2";
  }

  if ($result_gpa4 > "0" && $result_gpa4 < "2.25") {
    $result4 = "3";
  }
}

if ($result4 == "5") {
  if ($result_gpa4 >= "3.75" && $result_gpa4 <= "5") {
    $result4 = "1";
  }

  if ($result_gpa4 >= "2.813" && $result_gpa4 < "3.75") {
    $result4 = "2";
  }

  if ($result_gpa4 > "0" && $result_gpa4 < "2.813") {
    $result4 = "3";
  }
}




// ***************************************************** End of Common result info *****************************************************************************







//************************************************************** Post Code = 110 ********************************************************************************
if ($postcode == '110') {
}

//echo "Y:$total_years, M: $total_month, DD:$total_days";
//************************************************************** Post Code = 120_ ************************************************************************

if ($postcode == '120') {
}


//************************************************************** Post Code = 130 ************************************************************************
if ($postcode == '130') {
}


//************************************************************** Post Code = 140 ************************************************************************

if ($postcode == '140') {
}


//************************************************************** Post Code =150 ************************************************************************

if ($postcode == '150') {
}

//************************************************************** Post Code = 160 ************************************************************************

if ($postcode == '160') {
}

//************************************************************** Post Code = 170 ************************************************************************

if ($postcode == '170') {
}

//************************************************************** Post Code = 180 ************************************************************************

if ($postcode == '180') {
}

//************************************************************** Post Code = 190 ************************************************************************

if ($postcode == '190') {
}


//************************************************************** Post Code = 200 ************************************************************************

if ($postcode == '200') {
}

//************************************************************** Post Code = 210 ************************************************************************

if ($postcode == '210') {
}

//************************************************************** Post Code = 220 ************************************************************************

if ($postcode == '220') {
}

//************************************************************** Post Code = 230 ************************************************************************

if ($postcode == '230') {
}


//************************************************************** Post Code = 240 ************************************************************************

if ($postcode == '240') {
}

//************************************************************** Post Code = 250 ************************************************************************

if ($postcode == '250') {
}
//************************************************************** Post Code = 260 ************************************************************************

if ($postcode == '260') {
}


//************************************************************** Post Code = 270 ************************************************************************

if ($postcode == '270') {
}

//************************************************************** Post Code = 280 ************************************************************************

if ($postcode == '280') {
}

//************************************************************** Post Code = 290 ************************************************************************

if ($postcode == '290') {
}

//************************************************************** Post Code = 300 ************************************************************************

if ($postcode == '300') {
}

//************************************************************** Post Code = 310 ************************************************************************

if ($postcode == '310') {
}


//************************************************************** Post Code = 320 ************************************************************************

if ($postcode == '320') {
}

//************************************************************** Post Code = 330 ************************************************************************

if ($postcode == '330') {
}



//************************************************************** Post Code = 340 ************************************************************************

if ($postcode == '340') {
}


//************************************************************** Post Code = 350 ************************************************************************

if ($postcode == '350') {
}


//************************************************************** Post Code = 360 ************************************************************************

if ($postcode == '360') {
}

//************************************************************** Post Code = 370 ************************************************************************

if ($postcode == '370') {
}


//************************************************************** Post Code = 380 ************************************************************************

if ($postcode == '380') {
}


//  ***********************************************  if Masters Required *********************************************************

if ($exam4 > '0') {

  if ($exam4 <= '0' || $institute4 <= '0' || $year4 <= '0' || $result4 <= '0' || $duration4 <= '0' || $subject4 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=40\"; </script>";
  }
  if ($result4 == '4' && $result_gpa4 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=104\"; </script>";
  }
  if ($result4 == '5' && $result_gpa4 <= '0') {
    echo "<script language='javascript'>window.location.href=\"edu_err.php?err=104\"; </script>";
  }
}



?>
