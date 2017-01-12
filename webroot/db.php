<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("OPENSHIFT_MYSQL_DB_HOST","OPENSHIFT_MYSQL_DB_USERNAME","OPENSHIFT_MYSQL_DB_PASSWORD","sampledb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>