<?php
//The server name must be put here.
$dbserver = "server_name";
//The database username and password must be put here like "root" and "" are the default username and paqssword for mysql.
$dbuser = "database_username";
$dbpass = "database_password";
//The database name must come here.
$dbname = "database_name";

$con = mysqli_connect($dbserver,$dbuser,$dbpass);

if(!$con){
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Successfully";
?>
