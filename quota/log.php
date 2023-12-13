

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";


// cinfo data inserting
$servername = "localhost";
$username = "breb_web";
$password = "breb*9090";
$dbname = "breb";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO log(sl,name)
VALUES('0', 'John')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 