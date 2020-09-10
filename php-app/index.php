<?php
 
 $servername = "percona";
 $username = "root";
 $password = "root";
 

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// Show all information, defaults to INFO_ALL
phpinfo();

?>
