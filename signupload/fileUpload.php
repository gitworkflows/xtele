
<?php
	include "../lib/fx.php";

    $currentDir = getcwd();
    $uploadDirectory = "../images/110/photo/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['png']; // Get all the file extensions

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $uploadDirectory . au_sign.".".png; 


    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "<font size='5' color='red'>JPEG/JPG image is not allowed.<br/> Please upload a PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {

                echo "<font size='5' color='green'>The Authority Signature " . basename($fileName) . " has been uploaded successfully.";

            } 
         else 
             {echo "<font size='5' color='red'> Folder ../images/110 folder is not exist. Please create a folder under iamges folder ";}
        }
        else {
            foreach ($errors as $error) {
                echo $error . "<br/>These are the errors" . "\n";
            }
        }
    }

   	       
?>

