 <?php


      //get Data from post

      $out_dist_info = mysql_query("SELECT * FROM `dist_info` WHERE `post_code` = '$postcode'");
      while ($row_dist_info = mysql_fetch_array($out_dist_info)) {
            extract($row_dist_info);
      }


      // ************************************************************ District information  ************************************************


      if (($postcode == '110') || ($postcode == '120') || ($postcode == '130') || ($postcode == '140') || ($postcode == '150')) {

            /*if (($ffq == '4') || ($ffq == '5'))
         {$xx=0;} 
        
 else*/

            if (($permanent_dist == $dist_01) ||
                  ($permanent_dist == $dist_02) ||
                  ($permanent_dist == $dist_03) ||
                  ($permanent_dist == $dist_04) ||
                  ($permanent_dist == $dist_05) ||
                  ($permanent_dist == $dist_06) ||
                  ($permanent_dist == $dist_07) ||
                  ($permanent_dist == $dist_08) ||
                  ($permanent_dist == $dist_09) ||
                  ($permanent_dist == $dist_10) ||
                  ($permanent_dist == $dist_11) ||
                  ($permanent_dist == $dist_12) ||
                  ($permanent_dist == $dist_13) ||
                  ($permanent_dist == $dist_14) ||
                  ($permanent_dist == $dist_15) ||
                  ($permanent_dist == $dist_16) ||
                  ($permanent_dist == $dist_17) ||
                  ($permanent_dist == $dist_18) ||
                  ($permanent_dist == $dist_19) ||
                  ($permanent_dist == $dist_20) ||
                  ($permanent_dist == $dist_21) ||
                  ($permanent_dist == $dist_22) ||
                  ($permanent_dist == $dist_23) ||
                  ($permanent_dist == $dist_24) ||
                  ($permanent_dist == $dist_25) ||
                  ($permanent_dist == $dist_26) ||
                  ($permanent_dist == $dist_27) ||
                  ($permanent_dist == $dist_28) ||
                  ($permanent_dist == $dist_29) ||
                  ($permanent_dist == $dist_30) ||
                  ($permanent_dist == $dist_31) ||
                  ($permanent_dist == $dist_32) ||
                  ($permanent_dist == $dist_33) ||
                  ($permanent_dist == $dist_34) ||
                  ($permanent_dist == $dist_35) ||
                  ($permanent_dist == $dist_36) ||
                  ($permanent_dist == $dist_37) ||
                  ($permanent_dist == $dist_38) ||
                  ($permanent_dist == $dist_39) ||
                  ($permanent_dist == $dist_40) ||
                  ($permanent_dist == $dist_41) ||
                  ($permanent_dist == $dist_42) ||
                  ($permanent_dist == $dist_43) ||
                  ($permanent_dist == $dist_44) ||
                  ($permanent_dist == $dist_45) ||
                  ($permanent_dist == $dist_46) ||
                  ($permanent_dist == $dist_47) ||
                  ($permanent_dist == $dist_48) ||
                  ($permanent_dist == $dist_49) ||
                  ($permanent_dist == $dist_50) ||
                  ($permanent_dist == $dist_51) ||
                  ($permanent_dist == $dist_52) ||
                  ($permanent_dist == $dist_53) ||
                  ($permanent_dist == $dist_54) ||
                  ($permanent_dist == $dist_55) ||
                  ($permanent_dist == $dist_56) ||
                  ($permanent_dist == $dist_57) ||
                  ($permanent_dist == $dist_58) ||
                  ($permanent_dist == $dist_59) ||
                  ($permanent_dist == $dist_60) ||
                  ($permanent_dist == $dist_61) ||
                  ($permanent_dist == $dist_62) ||
                  ($permanent_dist == $dist_63) ||
                  ($permanent_dist == $dist_64)
            ) {
                  echo "<script language='javascript'>window.location.href=\"exp_err.php?err=283\"; </script>";
            }
      }





      /**if ($postcode == '190')
 {

if ((($ffq == '4')||($ffq == '5')) &&  (($permanent_dist==$dist_01)||($permanent_dist==$dist_02)||($permanent_dist==$dist_03)||($permanent_dist==$dist_04)||($permanent_dist==$dist_05)||($permanent_dist==$dist_06)||($permanent_dist==$dist_07)||($permanent_dist==$dist_08) || ($permanent_dist==$dist_09) || ($permanent_dist==$dist_10) || ($permanent_dist==$dist_11) ||($permanent_dist==$dist_12)||($permanent_dist==$dist_13)||($permanent_dist==$dist_14)||($permanent_dist==$dist_15)||($permanent_dist==$dist_16)||($permanent_dist==$dist_18)||($permanent_dist==$dist_20)||($permanent_dist==$dist_21)||($permanent_dist==$dist_22)||($permanent_dist==$dist_23)||($permanent_dist==$dist_24)||($permanent_dist==$dist_27)||($permanent_dist==$dist_29)||($permanent_dist==$dist_30)||($permanent_dist==$dist_31)||($permanent_dist==$dist_32)||($permanent_dist==$dist_45)||($permanent_dist==$dist_47)||($permanent_dist==$dist_48)||($permanent_dist==$dist_49)||($permanent_dist==$dist_25)||($permanent_dist==$dist_26)||($permanent_dist==$dist_17)||($permanent_dist==$dist_19)||($permanent_dist==$dist_28)||($permanent_dist==$dist_46)))
         {$xx=0;}
        
 else if (($permanent_dist==$dist_01)||
($permanent_dist==$dist_02)||
($permanent_dist==$dist_03)||
($permanent_dist==$dist_04)||
($permanent_dist==$dist_05)||
($permanent_dist==$dist_06)||
($permanent_dist==$dist_07)||
($permanent_dist==$dist_08)||
($permanent_dist==$dist_09)||
($permanent_dist==$dist_10)||
($permanent_dist==$dist_11)||
($permanent_dist==$dist_12)||
($permanent_dist==$dist_13)||
($permanent_dist==$dist_14)||
($permanent_dist==$dist_15)||
($permanent_dist==$dist_16)||
($permanent_dist==$dist_17)||
($permanent_dist==$dist_18)||
($permanent_dist==$dist_19)||
($permanent_dist==$dist_20)||
($permanent_dist==$dist_21)||
($permanent_dist==$dist_22)||
($permanent_dist==$dist_23)||
($permanent_dist==$dist_24)||
($permanent_dist==$dist_25)||
($permanent_dist==$dist_26)||
($permanent_dist==$dist_27)||
($permanent_dist==$dist_28)||
($permanent_dist==$dist_29)||
($permanent_dist==$dist_30)||
($permanent_dist==$dist_31)||
($permanent_dist==$dist_32)||
($permanent_dist==$dist_33)||
($permanent_dist==$dist_34)||
($permanent_dist==$dist_35)||
($permanent_dist==$dist_36)||
($permanent_dist==$dist_37)||
($permanent_dist==$dist_38)||
($permanent_dist==$dist_39)||
($permanent_dist==$dist_40)||
($permanent_dist==$dist_41)||
($permanent_dist==$dist_42)||
($permanent_dist==$dist_43)||
($permanent_dist==$dist_44)||
($permanent_dist==$dist_45)||
($permanent_dist==$dist_46)||
($permanent_dist==$dist_47)||
($permanent_dist==$dist_48)||
($permanent_dist==$dist_49)||
($permanent_dist==$dist_50)||
($permanent_dist==$dist_51)||
($permanent_dist==$dist_52)||
($permanent_dist==$dist_53)||
($permanent_dist==$dist_54)||
($permanent_dist==$dist_55)||
($permanent_dist==$dist_56)||
($permanent_dist==$dist_57)||
($permanent_dist==$dist_58)||
($permanent_dist==$dist_59)||
($permanent_dist==$dist_60)||
($permanent_dist==$dist_61)||
($permanent_dist==$dist_62)||
($permanent_dist==$dist_63)||
($permanent_dist==$dist_64))

           { echo "<script language='javascript'>window.location.href=\"exp_err.php?err=283\"; </script>";}
    
     }**/

      //************************************************************ District information  ************************************************























      /*
 * District Code District Name
 * 1 Panchagarh
 * 2 Thakurgaon
 * 3 Dinajpur
 * 4 Nilphamari
 * 5 Lalmonirhat
 * 6 Rangpur
 * 7 Kurigram
 * 8 Gaibanda
 * 9 Jaipurhat
 * 10 Bogra
 * 11 Naogaon
 * 12 Natore
 * 13 Chapai Nawabganj
 * 14 Rajshahi
 * 15 Sirajganj
 * 16 Pabna
 * 17 Kushtia
 * 18 Meharpur
 * 19 Chuadanga
 * 20 Jhenaidah
 * 21 Magura
 * 22 Narail
 * 23 Jessore
 * 24 Satkhira
 * 25 Khulna
 * 26 Bagerhat
 * 27 Pirojpur
 * 28 Jhalokhathi
 * 29 Barisal
 * 30 Bhola
 * 31 Patuakhali
 * 32 Barguna
 * 33 Netrokona
 * 34 Mymensingh
 * 35 Sherpur
 * 36 Jamalpur
 * 37 Tangail
 * 38 Kishorganj
 * 39 Manikganj
 * 40 Dhaka
 * 41 Gazipur
 * 42 Narsingdi
 * 43 Narayanganj
 * 44 Munshiganj
 * 45 Faridpur
 * 46 Rajbari
 * 47 Gopalganj
 * 48 Madaripur
 * 49 Shariatpur
 * 50 Sunamganj
 * 51 Sylhet
 * 52 Mouluvibazar
 * 53 Habiganj
 * 54 Brahamanbaria
 * 55 Comilla
 * 56 Chandpur
 * 57 Luxmipur
 * 58 Noakhali
 * 59 Feni
 * 60 Chittagong
 * 61 Cox`s Bazar
 * 62 Khagrachhari
 * 63 Rangamati
 * 64 Bandarban
 *
 */
      ?>

