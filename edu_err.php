<?php

// get Data from err_info

include "lib/dbconnect.php";

$out_err_info = mysql_query("SELECT * FROM `err_info` ");
while ($row_err_info = mysql_fetch_array($out_err_info)) {
    extract($row_err_info);
}



if (! isset($_SESSION)) {
    session_start();
}
session_destroy();

include "lib/fx.php";

$err = $_GET['err'];

switch ($err) {
    
    case "10":
        $msg = "<p class=\"errmsg\">Please fill up/ Select all the fields of S.S.C or Equivalent Level.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "101":
        $msg = "<p class=\"errmsg\">GPA value at SSC level can't null.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    case "102":
        $msg = "<p class=\"errmsg\">GPA value at HSC level can't null.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    case "103":
        $msg = "<p class=\"errmsg\">GPA value at Graduation level can't null.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    case "104":
        $msg = "<p class=\"errmsg\">GPA value at Masters level can't null.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "105":
        $msg = "<p class=\"errmsg\">Please enter valid GPA value. It should be less than 4 for GPA 4 and less than 5 for GPA 5.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "106":
        $msg = "<p class=\"errmsg\">Minimum 2nd Class or equivalent CGPA at Graduation level required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "107":
        $msg = "<p class=\"errmsg\">Minimum 2nd Division or equivalent CGPA at HSC level required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "108":
        $msg = "<p class=\"errmsg\">Minimum 2nd Division or equivalent CGPA at HSC level or 2 Years experience with SSC pass (min 2nd Division) required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "109":
        $msg = "<p class=\"errmsg\">Minimum 2nd Division or equivalent CGPA at SSC level with Science background required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;



        case "110":
        $msg = "<p class=\"errmsg\"> Masters Passing year can't less than Graduation passing year.</p>
                <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;

        case "111":
        $msg = "<p class=\"errmsg\"> Graduation Duration should be 4 Years or more.</p>
                <p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;

    
    case "11":
        $msg = "<p class=\"errmsg\">Please fill up/ Select all the fields of H.S.C or Equivalent Level.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "12":
        $msg = "<p class=\"errmsg\">4 years Honors in Physics or Chemistry required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "13":
        $msg = "<p class=\"errmsg\">Please fill up/ Select all the fields of Graduation or Equivalent level.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "14":
        $msg = "<p class=\"errmsg\">4 years Honors in Physics or Chemistry required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "19":
        $msg = "<p class=\"errmsg\">Invalid Photo Size/Format! Photo size should be 300*300. (Minimum 4KB allowed) Please try again.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "20":
        $msg = "<p class=\"errmsg\">Please fill up H.S.C or Equivalent Level information.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "21":
        $msg = "<p class=\"errmsg\">Invalid Photo/ Signature size.<br/>Photo size should be 300*300 and Signature size should be 300*80.(Minimum 4KB Photo/3KB Signature allowed). Please go back of your browser and refresh then re-upload Photo and Signature and click 'Submit the Application' button again.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "30":
        $msg = "<p class=\"errmsg\">Please fill up Graduation/ Equivalent Level information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "40":
        $msg = "<p class=\"errmsg\">Please fill up Masters/ Equivalent Level information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "31":
        $msg = "<p class=\"errmsg\">Graduation/ Equivalent Level must required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "50":
        $msg = "<p class=\"errmsg\">Please fill up the Reference 01 information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "51":
        $msg = "<p class=\"errmsg\">Please fill up the Reference 02 information properly.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "52":
        $msg = "<p class=\"errmsg\">Error: Validation code mismatch</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "53":
        $msg = "<p class=\"errmsg\">Third Division/Class is not allowed.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "54":
        $msg = "<p class=\"errmsg\">CGPA value <2.25 is not elligible for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "55":
        $msg = "<p class=\"errmsg\"> This Subject is not elligible for the post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "56":
        $msg = "<p class=\"errmsg\"> Graduation Passing year can't less than HSC/SSC passing year.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "57":
        $msg = "<p class=\"errmsg\"> HSC Passing year can't less or equal to SSC passing year.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "58":
        $msg = "<p class=\"errmsg\"> Graduation/HSC/SSC Passing year can't less than birth year.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "59":
        $msg = "<p class=\"errmsg\"> Pleae enter same mobile no.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "60":
        $msg = "<p class=\"errmsg\"> SSC Passsing year is not valid.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "61":
        $msg = "<p class=\"errmsg\"> February month will be 28 or 29 days.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "62":
        $msg = "<p class=\"errmsg\"> April/June/September/November month is 30 days.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "64":
        $msg = "<p class=\"errmsg\"> 6 months training course on Computer required for this post.</p>
			  	<p><a href=\"home.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "67":
        $msg = "<p class=\"errmsg\"> User ID or Password mismatch.<br/> Please recheck the User ID and Password.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "68":
        $msg = "<p class=\"errmsg\"> User ID or Password may be blank.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    

    case "69":
        $msg = "<p class=\"errmsg\"> Download Successful.Please check the download folder.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "70":
        $msg = "<p class=\"errmsg\"> This subject is not allowed for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    
    case "71":
        $msg = "<p class=\"errmsg\"> Please select Examination of HSC or Equivalent level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "72":
        $msg = "<p class=\"errmsg\"> Please select Examination of Graudation/Equivalent level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "73":
        $msg = "<p class=\"errmsg\">  Please select Examination of Masters/Equivalent level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "74":
        $msg = "<p class=\"errmsg\">  Higher Secondary School certificate in Business Studies or equivalent degree with three years job experience in related field is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "75":
        $msg = "<p class=\"errmsg\">  If Masters not available then B.Sc Engineer degree is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "76":
        $msg = "<p class=\"errmsg\"> Three 1st Class/Division required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "77":
        $msg = "<p class=\"errmsg\">  3rd division is not allowed for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "78":
        $msg = "<p class=\"errmsg\">  1st class Masters degree or 2nd class masters and 2nd class in Pass course or 4 years honors degree required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "79":
        $msg = "<p class=\"errmsg\">  Two 1st class/Division requirerd in case of B.Ag(Agriculture) for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "80":
        $msg = "<p class=\"errmsg\">  Three 1st class/Division requirerd in case of Masters level for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "81":
        $msg = "<p class=\"errmsg\">  M.Sc degree required if B.Sc(Agriculture) is not available for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "82":
        $msg = "<p class=\"errmsg\">  B.Sc Engineering degree required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "83":
        $msg = "<p class=\"errmsg\">  B.Sc Engineering/Honors degree required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "84":
        $msg = "<p class=\"errmsg\">  Masters/Equivalent level degree must required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "85":
        $msg = "<p class=\"errmsg\"> 1st Class Masters degree from a recognized university, or 2nd Class Masters degree with 2nd class Honors degree required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "86":
        $msg = "<p class=\"errmsg\"> Graduation with Three years administrative job experience is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "87":
        $msg = "<p class=\"errmsg\">  Masters/Equivalent level degree required if Dimloma in Engineering with 1st class and 2nd Division in SSC level not available.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "88":
        $msg = "<p class=\"errmsg\">  Post Graduate Degree in (Science) with at least two 1st Class or division from any recognized university required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "89":
        $msg = "<p class=\"errmsg\">  Please fillup Graduation/Equivalent information properly.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "90":
        $msg = "<p class=\"errmsg\">  At least Two 1st Class or division from any recognized university required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "91":
        $msg = "<p class=\"errmsg\">  HSC (Science) or equivalent certification is required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "92":
        $msg = "<p class=\"errmsg\">  Five years job experience in related field is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "93":
        $msg = "<p class=\"errmsg\"> Diploma in Engineering with 5 years experience required for this post</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "94":
        $msg = "<p class=\"errmsg\"> B.Sc Engineering degree/ Diploma in Engineering with 5 years experience required for this post</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "95":
        $msg = "<p class=\"errmsg\"> No third division is allowed for this post</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "96":
        $msg = "<p class=\"errmsg\">  Graduation in Commerce required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "97":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "98":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Civil/Mechanical/Electrical/Computer/Automobile required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "99":
        $msg = "<p class=\"errmsg\">  Minimum Masters or Graduation with 3 years experience required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "100":
        $msg = "<p class=\"errmsg\">  4 years honors degree in commerce background required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "150":
        $msg = "<p class=\"errmsg\">  Masters or 4 years honors in commerce background or Graduation with 3 years experience required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "151":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering with Civil/Mechanical/Electrical & Electronics/Computer science & Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "152":
        $msg = "<p class=\"errmsg\">  4 years B.Sc in Engineering with Civil/Mechanical/Electrical & Electronics/Computer science & Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "153":
        $msg = "<p class=\"errmsg\">  Please fill up all the field of Professional Experience.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "154":
        $msg = "<p class=\"errmsg\">  3 years related job experience required in case of Pass course(B.Com.) for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "155":
        $msg = "<p class=\"errmsg\">  2 years experience in Data Entry/Control Operator for Departmental Candidate required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "156":
        $msg = "<p class=\"errmsg\">Please fill up the Computer Typing speed information properly.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "157":
        $msg = "<p class=\"errmsg\"> Please fill up the Stenotype Typing speed information properly.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "158":
        $msg = "<p class=\"errmsg\"> Masters in Library Science/ Diploma in Library science with 2nd class honors required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "159":
        $msg = "<p class=\"errmsg\"> Diploma in Survey required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "196":
        $msg = "<p class=\"errmsg\">  Masters or 4 years honors in commerce background or Graduation with 3 years experience required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "197":
        $msg = "<p class=\"errmsg\"> Only Freedom Fighter Quota is applicable for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "198":
        $msg = "<p class=\"errmsg\"> This district is not eligible for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "199":
        $msg = "<p class=\"errmsg\"> Masters degree or Bachelor degree with 4 years duration is required.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "200":
        $msg = "<p class=\"errmsg\"> Atleast second class or equivalent CGPA is required at Graduation level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "201":
        $msg = "<p class=\"errmsg\">  Graduation in Law degree required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "202":
        $msg = "<p class=\"errmsg\">  Higer Secondary School in Commerce degree required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "203":
        $msg = "<p class=\"errmsg\"> Minimum Masters degree with second class having 4 years duration Bachelor degree with 7 Years relevant experience are required.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "204":
        $msg = "<p class=\"errmsg\">  Master in Commerce degree required for this post.</p>
				<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "205":
        $msg = "<p class=\"errmsg\"> Atleast second class or equivalent CGPA is required at HSC level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "206":
        $msg = "<p class=\"errmsg\"> Applicant can not be both Son/Daughter of Freedom Fighter and Grand Son/Daughter of Freedom Fighter.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "207":
        $msg = "<p class=\"errmsg\"> Applicant should be trained on computer.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "208":
        $msg = "<p class=\"errmsg\"> Required Computer typing speed ( 25 words per minute in Bangla & 30 words per minute in English).</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "209":
        $msg = "<p class=\"errmsg\"> Required Stenotype typing speed ( 45 words per minute in Bangla & 70 words per minute in English).</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "210":
        $msg = "<p class=\"errmsg\"> Required Computer typing speed ( 20 words per minute in Bangla & 20 words per minute in English).</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
    case "211":
        $msg = "<p class=\"errmsg\"> Please selection Experience type (Related to tourism board)</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "212":
        $msg = "<p class=\"errmsg\"> Required 5 years experience at Govt or autonomous or International tourism board.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "213":
        $msg = "<p class=\"errmsg\"> Required 10 years experience at non-government tourism board.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "214":
        $msg = "<p class=\"errmsg\">  Higher Secondary School certificate in Business Studies is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "215":
        $msg = "<p class=\"errmsg\">  Masters or 4 years honors or Graduation with 3 years experience required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
        $toplink = "";
        break;
    
    case "216":
        $msg = "<p class=\"errmsg\">   Atleast second class or equivalent CGPA is required at Graduation level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "217":
        $msg = "<p class=\"errmsg\">  Only Female candidate are allowed to apply for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "218":
        $msg = "<p class=\"errmsg\">  Certification from Bangladesh Medical and Dental Council (BM&DC) is required to apply for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "219":
        $msg = "<p class=\"errmsg\">  M.B.B.S. degree is required to apply for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "220":
        $msg = "<p class=\"errmsg\">  Dental Surgery is not allowed for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "221":
        $msg = "<p class=\"errmsg\">  Minimum  MBA  or First class in Masters level or second class in  graduation level with first class in graduation level is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "222":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Civil required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "223":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Mechanical required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "224":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Electrical / Electrical & Electronics Technology required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "225":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Computer Science & Technology required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "226":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Automobile Technology required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "227":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering with Civil Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "228":
        $msg = "<p class=\"errmsg\">  4 years B.Sc in Engineering with Civil Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "229":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Civil required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "230":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering with Mechanical Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "231":
        $msg = "<p class=\"errmsg\">  4 years B.Sc in Engineering with Mechanical Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "232":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Mechanical required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "233":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering with  Electrical / Electrical & Electronics Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "234":
        $msg = "<p class=\"errmsg\">  4 years B.Sc in Engineering with Electrical / Electrical & Electronics Engineering required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "235":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Electrical & Electronics Technology required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "236":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering with Computer Science required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "237":
        $msg = "<p class=\"errmsg\">  4 years B.Sc in Engineering with Computer Science required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "238":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Computer Science & Technology required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "239":
        $msg = "<p class=\"errmsg\">  In case of Pass course(Commerce), first class degree in Masters level is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "240":
        $msg = "<p class=\"errmsg\">  Masters in Commerce related subject is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "241":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering with Chemical Engineering is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "242":
        $msg = "<p class=\"errmsg\">  4 years B.Sc in Engineering with Chemical Engineering is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "243":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering with Petroleum Engineering is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "244":
        $msg = "<p class=\"errmsg\">  4 years B.Sc in Engineering with Petroleum Engineering is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "245":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering with Petroleum Engineering is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "246":
        $msg = "<p class=\"errmsg\">  4 years B.Sc in Engineering with Petroleum Engineering is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "247":
        $msg = "<p class=\"errmsg\">  Graduation degree in Geology is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "248":
        $msg = "<p class=\"errmsg\">  4 Years Graduation degree  or first class Masters degree in Geology is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "249":
        $msg = "<p class=\"errmsg\">  Minimum First Class in Masters level and second class in 3 years Pass course is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "250":
        $msg = "<p class=\"errmsg\">  Minimum second Class in Masters level and second class in 3 years Pass course is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "251":
        $msg = "<p class=\"errmsg\">  Graduation degree in Chemistry is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "252":
        $msg = "<p class=\"errmsg\">  4 Years Graduation degree  or first class Masters degree in Chemistry is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "253":
        $msg = "<p class=\"errmsg\">  First class Masters degree in Chemistry with 3 years pass Course is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "254":
        $msg = "<p class=\"errmsg\">  First class Masters degree in Geology with 3 years pass Course is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "255":
        $msg = "<p class=\"errmsg\">  Minimum Masters or  Graduation in Commerce & 3 years related experience required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "256":
        $msg = "<p class=\"errmsg\">  Graduation in Commerce with 3 years related job experience or Masters degree in Commerce required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "257":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Chemical required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "258":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Power Technology required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "259":
        $msg = "<p class=\"errmsg\">  Diploma in Engineering with Architecture Technology required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "260":
        $msg = "<p class=\"errmsg\">  During education life, atleast two first class or equivalent degree is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "261":
        $msg = "<p class=\"errmsg\">  First class or equivalent degree is required at S.S.C. or equivalent and Diploma in Engineering Exam level for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "262":
        $msg = "<p class=\"errmsg\">  Home district and Permanent adress home district should be same for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "263":
        $msg = "<p class=\"errmsg\">  Minimum 2nd class masters and 2nd class in Pass course or 4 years honors degree required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "264":
        $msg = "<p class=\"errmsg\">  In case of 3 years pass course, Applicant should have Master level degree in Commerce (M.B.A. / M.Com.) for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "265":
        $msg = "<p class=\"errmsg\">  Applicant should have 4 years duration graduation degree in Commerce background for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "266":
        $msg = "<p class=\"errmsg\">  Applicant should have graduation degree (Hounours/Pass course) in Commerce background for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "267":
        $msg = "<p class=\"errmsg\">  Applicant should be passed in MBBS exam for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "268":
        $msg = "<p class=\"errmsg\">  The reffered district is not allowed for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "269":
        $msg = "<p class=\"errmsg\">  At least eight pass required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "270":
        $msg = "<p class=\"errmsg\">  03 years draftmanship degree required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "271":
        $msg = "<p class=\"errmsg\">  03 years diploman on Survey required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "272":
        $msg = "<p class=\"errmsg\">  Science backgrund in Graduation level required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "273":
        $msg = "<p class=\"errmsg\">  Experience on Word processing, Data entry, Typing reqired for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "274":
        $msg = "<p class=\"errmsg\">  Minimum Typing speed on Bangla-20 words and English-20 words required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "275":
        $msg = "<p class=\"errmsg\"> Minimum Typing speed on Bangla-30 words and English-40 words required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "276":
        $msg = "<p class=\"errmsg\"> 03 years job experience is required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "277":
        $msg = "<p class=\"errmsg\"> Driving License required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "278":
        $msg = "<p class=\"errmsg\">  B.Sc Engineering(Electrical/Mechanical)/ Diploma Engineering(Electrical/Mechanical) with 03 years job experience required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "279":
        $msg = "<p class=\"errmsg\">  At least Second class or equivalent CGPA is required at Masters level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "280":
        $msg = "<p class=\"errmsg\">  B.Sc in Engineering(Mechanical/Marine/Naval Architechture) or 3rd Class Competency Certificate(Dake/Motor) required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "281":
        $msg = "<p class=\"errmsg\"> 05 years job experience required for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "282":
        $msg = "<p class=\"errmsg\">  B.Sc Engineering(Electrical)/ Diploma Engineering(Electrical) with 03 years job experience required in this post related field.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "283":
        $msg = "<p class=\"errmsg\">  03 years job experience required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "284":
        $msg = "<p class=\"errmsg\">  04 years honors degree required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "285":
        $msg = "<p class=\"errmsg\">  2nd class Honors/Marster degree in Statistics/Economics/ Mathmatics required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "286":
        $msg = "<p class=\"errmsg\"> Dhaka and Kishoreganj district is only allowed for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "287":
        $msg = "<p class=\"errmsg\"> Dhaka, Gazipur, Mymenshing, Kishoreganj, Netrokona and Sherpur district is only allowed for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "288":
        $msg = "<p class=\"errmsg\"> Graduation in Library Science/Masters required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "289":
        $msg = "<p class=\"errmsg\"> Graduation in Science background with Chemistry required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "291":
        $msg = "<p class=\"errmsg\">Graduation in Electrical/ Mechanical Engineering required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "292":
        $msg = "<p class=\"errmsg\">Graduation in Electrical/ Mechanical/ Civil Engineering required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "293":
        $msg = "<p class=\"errmsg\">Masters in Finance/Accounting required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "294":
        $msg = "<p class=\"errmsg\"> B.Sc in CSE/IT/ECE/ETE required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "295":
        $msg = "<p class=\"errmsg\"> Diploma in Electrical/ Mechanical/ Civil Engineering required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "296":
        $msg = "<p class=\"errmsg\">Masters degree required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "297":
        $msg = "<p class=\"errmsg\">B.Sc in Environmental Engineering/ Disaster and Environmental Engineering or Masters with Honors in Environmental Science/ Geography and Environmental Studies required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "298":
        $msg = "<p class=\"errmsg\"> LLM Degree required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "299":
        $msg = "<p class=\"errmsg\"> Masters with Honors degree required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "300":
        $msg = "<p class=\"errmsg\"> Please Select Quota Option</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "170":
        $msg = "<p class=\"errmsg\">Chemistry subject required at Graduation level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "280":
        $msg = "<p class=\"errmsg\">Science background required at HSC level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "380":
        $msg = "<p class=\"errmsg\">Science background required at Graduation level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "290":
        $msg = "<p class=\"errmsg\">Passed from Technical Education Board or General Mechanics/Firm Machinery subject required for this Post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "330":
        $msg = "<p class=\"errmsg\"> SSC pass required from Technical Education Board</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "330":
        $msg = "<p class=\"errmsg\"> SSC pass required from Technical Education Board</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "600":
        $msg = "<p class=\"errmsg\"> First division or equivalent CGPA required at SSC level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "601":
        $msg = "<p class=\"errmsg\"> Textile Technology at SSC(Vocational) level is required </p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "603":
        $msg = "<p class=\"errmsg\"> 2nd division or equivalent CGPA required at SSC level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;



       case "671":
        $msg = "<p class=\"errmsg\"> Valid Key or Valid PIN mis match.<br/> Please recheck the Valid Key and Valid PIN.</p>
                <p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
        
    
    case "681":
        $msg = "<p class=\"errmsg\"> Valid Key or Valid PIN may be blank.</p>
                <p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;
    

   case "682":
        $msg = "<p class=\"errmsg\"> Birth day mismatched.</p>
                <p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;

   case "683":
        $msg = "<p class=\"errmsg\"> Birth month mismatched</p>
                <p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;


   case "684":
        $msg = "<p class=\"errmsg\"> Birth year mismatched.</p>
                <p><a href=\"home.php\" class=\"mainlink\">Back</a></p>";
        $toplink = "";
        break;

        
    
    case "700":
        $msg = "<p class=\"errmsg\">At least 2nd divsion or equivalent CGPA required at HSC level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "701":
        $msg = "<p class=\"errmsg\">Commerce background required at HSC level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "800":
        $msg = "<p class=\"errmsg\">At least 2nd divsion or equivalent CGPA required at Graduation level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "401":
        $msg = "<p class=\"errmsg\">Graduation in Computer Science or Minimum 2nd class Masters degree in Mathematics/Economics/Physics/Statistics required for this post</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "402":
        $msg = "<p class=\"errmsg\">Commerce background required at Graduation level.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "801":
        $msg = "<p class=\"errmsg\">1st divsion or equivalent CGPA required at SSC and HSC level</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "802":
        $msg = "<p class=\"errmsg\">2nd class Graduation with  4 years honors/ B.Sc Engineering/ Masters with 2nd Class required for this post.   </p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "807":
        $msg = "<p class=\"errmsg\">Min 2nd class in B.Sc Engineering(CSE) or Min 2nd class in Diploma in Engineering with 05 years experiences in Govt./Semi Govt./Autonomous organization required this post.   </p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
    case "808":
        $msg = "<p class=\"errmsg\">MBBS degree required from any govt. certified institute for this post.   </p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "809":
        $msg = "<p class=\"errmsg\">Only those people are eligible who avail Freedom fighter quota</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "810":
        $msg = "<p class=\"errmsg\">Your subject of Honours is not eligible to apply for this post</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "811":
        $msg = "<p class=\"errmsg\">Your subject of HSC is not eligible to apply for this post</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "812":
        $msg = "<p class=\"errmsg\">1st class/equivalent cgpa in Masters in Library Science is required.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "813":
        $msg = "<p class=\"errmsg\">1st class/equivalent cgpa in Masters or 2nd class/equivalent cgpa in Masters with minimum 2nd class/equivalent cgpa in Honors degree in Public Administration/Political Science/Economics/Sociology/International Relations/Mass Communication & Journalism/Anthropology/Population Sciences/Peace and Conflict Studies/Women and Gender Studies/Development Studies/English is required.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "814":
        $msg = "<p class=\"errmsg\">1st class/equivalent cgpa in Masters or 2nd class/equivalent cgpa in Masters with minimum 2nd class/equivalent cgpa in Honors degree in Public Administration/Political Science/Economics/Sociology/International Relations/Mass Communication & Journalism/Anthropology/Population Sciences/Peace and Conflict Studies/Women and Gender Studies/Development Studies/English/Statistics is required.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    case "815":
        $msg = "<p class=\"errmsg\">Honours in Commerce background is needed to apply for this post.</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
        $toplink = "";
        break;
    
     


 	

		case "1101": $msg = "<p class=\"errmsg\">$err_110_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1102": $msg = "<p class=\"errmsg\">$err_110_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1103": $msg = "<p class=\"errmsg\">$err_110_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;




		case "1201": $msg = "<p class=\"errmsg\">$err_120_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1202": $msg = "<p class=\"errmsg\">$err_120_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1203": $msg = "<p class=\"errmsg\">$err_120_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;



		case "1301": $msg = "<p class=\"errmsg\">$err_130_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1302": $msg = "<p class=\"errmsg\">$err_130_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1303": $msg = "<p class=\"errmsg\">$err_130_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;



		case "1401": $msg = "<p class=\"errmsg\">$err_140_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1402": $msg = "<p class=\"errmsg\">$err_140_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1403": $msg = "<p class=\"errmsg\">$err_140_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "1501": $msg = "<p class=\"errmsg\">$err_150_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1502": $msg = "<p class=\"errmsg\">$err_150_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1503": $msg = "<p class=\"errmsg\">$err_150_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "1701": $msg = "<p class=\"errmsg\">$err_170_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1702": $msg = "<p class=\"errmsg\">$err_170_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1703": $msg = "<p class=\"errmsg\">$err_170_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "1601": $msg = "<p class=\"errmsg\">$err_160_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1602": $msg = "<p class=\"errmsg\">$err_160_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1603": $msg = "<p class=\"errmsg\">$err_160_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;



		case "1801": $msg = "<p class=\"errmsg\">$err_180_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1802": $msg = "<p class=\"errmsg\">$err_180_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1803": $msg = "<p class=\"errmsg\">$err_180_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;




		case "1901": $msg = "<p class=\"errmsg\">$err_190_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1902": $msg = "<p class=\"errmsg\">$err_190_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "1903": $msg = "<p class=\"errmsg\">$err_190_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "2001": $msg = "<p class=\"errmsg\">$err_200_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2002": $msg = "<p class=\"errmsg\">$err_200_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2003": $msg = "<p class=\"errmsg\">$err_200_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;




		case "2101": $msg = "<p class=\"errmsg\">$err_210_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2102": $msg = "<p class=\"errmsg\">$err_210_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2103": $msg = "<p class=\"errmsg\">$err_210_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;



		case "2201": $msg = "<p class=\"errmsg\">$err_220_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2202": $msg = "<p class=\"errmsg\">$err_220_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2203": $msg = "<p class=\"errmsg\">$err_220_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "2301": $msg = "<p class=\"errmsg\">$err_230_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2302": $msg = "<p class=\"errmsg\">$err_230_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2303": $msg = "<p class=\"errmsg\">$err_230_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;




		case "2401": $msg = "<p class=\"errmsg\">$err_240_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2402": $msg = "<p class=\"errmsg\">$err_240_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2403": $msg = "<p class=\"errmsg\">$err_240_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "2501": $msg = "<p class=\"errmsg\">$err_250_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2502": $msg = "<p class=\"errmsg\">$err_250_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2503": $msg = "<p class=\"errmsg\">$err_250_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "2601": $msg = "<p class=\"errmsg\">$err_260_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2602": $msg = "<p class=\"errmsg\">$err_260_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2603": $msg = "<p class=\"errmsg\">$err_260_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "2701": $msg = "<p class=\"errmsg\">$err_270_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2702": $msg = "<p class=\"errmsg\">$err_270_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2703": $msg = "<p class=\"errmsg\">$err_270_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "2801": $msg = "<p class=\"errmsg\">$err_280_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2802": $msg = "<p class=\"errmsg\">$err_280_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2803": $msg = "<p class=\"errmsg\">$err_280_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "2901": $msg = "<p class=\"errmsg\">$err_290_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2902": $msg = "<p class=\"errmsg\">$err_290_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "2903": $msg = "<p class=\"errmsg\">$err_290_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "3001": $msg = "<p class=\"errmsg\">$err_300_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3002": $msg = "<p class=\"errmsg\">$err_300_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3003": $msg = "<p class=\"errmsg\">$err_300_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "3101": $msg = "<p class=\"errmsg\">$err_310_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3102": $msg = "<p class=\"errmsg\">$err_310_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3103": $msg = "<p class=\"errmsg\">$err_310_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "3201": $msg = "<p class=\"errmsg\">$err_320_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3202": $msg = "<p class=\"errmsg\">$err_320_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3203": $msg = "<p class=\"errmsg\">$err_320_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "3301": $msg = "<p class=\"errmsg\">$err_330_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3302": $msg = "<p class=\"errmsg\">$err_330_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3303": $msg = "<p class=\"errmsg\">$err_330_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;



		case "3401": $msg = "<p class=\"errmsg\">$err_340_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3402": $msg = "<p class=\"errmsg\">$err_340_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3403": $msg = "<p class=\"errmsg\">$err_340_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


		case "3501": $msg = "<p class=\"errmsg\">$err_350_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3502": $msg = "<p class=\"errmsg\">$err_350_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3503": $msg = "<p class=\"errmsg\">$err_350_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;



case "3601": $msg = "<p class=\"errmsg\">$err_360_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3602": $msg = "<p class=\"errmsg\">$err_360_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3603": $msg = "<p class=\"errmsg\">$err_360_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


case "3701": $msg = "<p class=\"errmsg\">$err_370_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3702": $msg = "<p class=\"errmsg\">$err_370_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3703": $msg = "<p class=\"errmsg\">$err_370_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;


case "3801": $msg = "<p class=\"errmsg\">$err_380_01</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3802": $msg = "<p class=\"errmsg\">$err_380_02</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;

		case "3803": $msg = "<p class=\"errmsg\">$err_380_03</p>
			  	<p><a href=\"applicant/index.php\" class=\"mainlink\"></a></p>";
					$toplink = "";	break;



    // default: $msg = "<p class=\"errmsg\">Access Denied!</p>";
    // $toplink = "";
}

echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>$page_title</title>
<link href=\"lib/style.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body ondragstart=\"return false\" onselectstart=\"return false\">
<table width=\"760\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
  <tr>
    <td height=\"20\" align=\"center\" valign=\"middle\" class=\"topbg\">&nbsp;</td>
  </tr>
    $app_head
	$toplink
  <tr>
    <td height=\"300\" align=\"center\" valign=\"middle\" bgcolor=\"$body_bg\">
	$msg</td>
  </tr>
  <tr>
    <td height=\"25\" align=\"center\" valign=\"middle\" bgcolor=\"$bottom_bg\" class=\"black10\">$support</td>
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
</table>
</body>
</html>";
?>
