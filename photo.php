<?php

####################################################################
# File Upload Form 1.1
####################################################################
# For updates visit http://www.zubrag.com/scripts/
####################################################################

####################################################################
#  SETTINGS START
####################################################################

// Folder to upload files to. Must end with slash /
define('DESTINATION_FOLDER','/www/zubrag/tmp/');

// Maximum allowed file size, Kb
// Set to zero to allow any size
define('MAX_FILE_SIZE', 0);

// Upload success URL. User will be redirected to this page after upload.
define('SUCCESS_URL','http://www.example.com/upload-success.html');

// Allowed file extensions. Will only allow these extensions if not empty.
// Example: $exts = array('avi','mov','doc');
$exts = array();

// rename file after upload? false - leave original, true - rename to some unique filename
define('RENAME_FILE', true);

// put a string to append to the uploaded file name (after extension);
// this will reduce the risk of being hacked by uploading potentially unsafe files;
// sample strings: aaa, my, etc.
define('APPEND_STRING', '');

// Need uploads log? Logs would be saved in the MySql database.
define('DO_LOG', true);

// MySql data (in case you want to save uploads log)
define('DB_HOST','localhost'); // host, usually localhost
define('DB_DATABASE','breb'); // database name
define('DB_USERNAME','razzak'); // username
define('DB_PASSWORD','*razzak#'); // password

/* NOTE: when using log, you have to create mysql table first for this script.
Copy paste following into your mysql admin tool (like PhpMyAdmin) to create table
If you are on cPanel, then prefix _uploads_log on line 205 with your username, so it would be like myusername_uploads_log

CREATE TABLE _uploads_log (
  log_id int(11) unsigned NOT NULL auto_increment,
  log_filename varchar(128) default '',
  log_size int(10) default 0,
  log_ip varchar(24) default '',
  log_date timestamp,
  PRIMARY KEY  (log_id),
  KEY (log_filename)
);

*/

####################################################################
###  END OF SETTINGS.   DO NOT CHANGE BELOW
####################################################################

// Allow script to work long enough to upload big files (in seconds, 2 days by default)
@set_time_limit(172800);

// following may need to be uncommented in case of problems
// ini_set("session.gc_maxlifetime","10800");

function showUploadForm($message='') {
  $max_file_size_tag = '';
  if (MAX_FILE_SIZE > 0) {
    // convert to bytes
    $max_file_size_tag = "<input name='MAX_FILE_SIZE' value='".(MAX_FILE_SIZE*1024)."' type='hidden' >\n";
  }

  // Load form template
  include ('file-upload.html');
}

// errors list
$errors = array();

$message = '';

// we should not exceed php.ini max file size
$ini_maxsize = ini_get('upload_max_filesize');
if (!is_numeric($ini_maxsize)) {
  if (strpos($ini_maxsize, 'M') !== false)
    $ini_maxsize = intval($ini_maxsize)*1024*1024;
  elseif (strpos($ini_maxsize, 'K') !== false)
    $ini_maxsize = intval($ini_maxsize)*1024;
  elseif (strpos($ini_maxsize, 'G') !== false)
    $ini_maxsize = intval($ini_maxsize)*1024*1024*1024;
}
if ($ini_maxsize < MAX_FILE_SIZE*1024) {
  $errors[] = "Alert! Maximum upload file size in php.ini (upload_max_filesize) is less than script's MAX_FILE_SIZE";
}

// show upload form
if (!isset($_POST['submit'])) {
  showUploadForm(join('',$errors));
}

// process file upload
else {
  
  while(true) {

    // make sure destination folder exists
    if (!@file_exists(DESTINATION_FOLDER)) {
      $errors[] = "Destination folder does not exist or no permissions to see it.";
      break;
    }

    // check for upload errors
    $error_code = $_FILES['filename']['error'];
    if ($error_code != UPLOAD_ERR_OK) {
      switch($error_code) {
        case UPLOAD_ERR_INI_SIZE: 
          // uploaded file exceeds the upload_max_filesize directive in php.ini
          $errors[] = "File is too big (1).";
          break;
        case UPLOAD_ERR_FORM_SIZE: 
          // uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form
          $errors[] = "File is too big (2).";
          break;
        case UPLOAD_ERR_PARTIAL:
          // uploaded file was only partially uploaded.
          $errors[] = "Could not upload file (1).";
          break;
        case UPLOAD_ERR_NO_FILE:
          // No file was uploaded
          $errors[] = "Could not upload file (2).";
          break;
        case UPLOAD_ERR_NO_TMP_DIR:
          // Missing a temporary folder
          $errors[] = "Could not upload file (3).";
          break;
        case UPLOAD_ERR_CANT_WRITE:
          // Failed to write file to disk
          $errors[] = "Could not upload file (4).";
          break;
        case 8:
          // File upload stopped by extension
          $errors[] = "Could not upload file (5).";
          break;
      } // switch

      // leave the while loop
      break;
    }

    // get file name (not including path)
    $filename = @basename($_FILES['filename']['name']);

    // filename of temp uploaded file
    $tmp_filename = $_FILES['filename']['tmp_name'];

    $file_ext = @strtolower(@strrchr($filename,"."));
    if (@strpos($file_ext,'.') === false) { // no dot? strange
      $errors[] = "Suspicious file name or could not determine file extension.";
      break;
    }
    $file_ext = @substr($file_ext, 1); // remove dot

    // check file type if needed
    if (count($exts)) {   /// some day maybe check also $_FILES['user_file']['type']
      if (!@in_array($file_ext, $exts)) {
        $errors[] = "Files of this type are not allowed for upload.";
        break;
      }
    }

    // destination filename, rename if set to
    $dest_filename = $filename;
    if (RENAME_FILE) {
      $dest_filename = md5(uniqid(rand(), true)) . '.' . $file_ext;
    }
    // append predefined string for safety
    $dest_filename = $dest_filename . APPEND_STRING;

    // get size
    $filesize = intval($_FILES["filename"]["size"]); // filesize($tmp_filename);

    // make sure file size is ok
    if (MAX_FILE_SIZE > 0 && MAX_FILE_SIZE*1024 < $filesize) {
      $errors[] = "File is too big (3).";
      break;
    }

    if (!@move_uploaded_file($tmp_filename , DESTINATION_FOLDER . $dest_filename)) {
      $errors[] = "Could not upload file (6).";
      break;
    }

    if (DO_LOG) {
      // Establish DB connection
      $link = @mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
      if (!$link) {
        $errors[] = "Could not connect to mysql.";
        break;
      }
      $res = @mysql_select_db(DB_DATABASE, $link);
      if (!$res) {
        $errors[] = "Could not select database.";
        break;
      }
      $m_ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
      $m_size = $filesize;
      $m_fname = mysql_real_escape_string($dest_filename);
      $sql = "insert into _uploads_log (log_filename,log_size,log_ip) values ('$m_fname','$m_size','$m_ip')";
      $res = @mysql_query($sql);
      if (!$res) {
        $errors[] = "Could not run query.";
        break;
      }
      @mysql_free_result($res);
      @mysql_close($link);
    } // if (DO_LOG)


    // redirect to upload success url
    header('Location: ' . SUCCESS_URL);
    die();

    break;

  } // while(true)

  // Errors. Show upload form.
  $message = join('',$errors);
  showUploadForm($message);

}

?>