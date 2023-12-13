<?php


$db_userid = "commondb_web";
$db_userpassword = "**commondb_web**";
$db_name = "commondb";
$servername = "192.168.61.105";
//$servername = "192.168.61.105";
mysql_connect($servername, $db_userid, $db_userpassword) or
   die('MySQL not connected.');

mysql_select_db($db_name) or
   die("Database not connected.");


// Create connection
$conn = mysqli_connect($servername, $db_userid, $db_userpassword, $db_name);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}



/*


  CREATE USER 'commondb_web'@'192.168.61.103' IDENTIFIED BY '**commondb_web**';
  grant select, insert, update, delete on sujantest.* to 'commondb_web'@'192.168.61.103' identified by '**commondb_web**';
  FLUSH PRIVILEGES;
 
 
 
 --DROP USER 'commondb_web'@'192.168.61.103';
 
  FLUSH PRIVILEGES;


*/
