<?php
define('DB_SERVER','10.0.0.82');
define('DB_USER','admin');
define('DB_PASS' ,'Ademariaulfa01_');
define('DB_NAME','newsportal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>