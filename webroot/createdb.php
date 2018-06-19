<?php
 // DB connection info
 

     $conn = mysqli_connect("10.129.0.57","admin","root");
	if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	 $sql = "CREATE DATABASE test";

if(mysqli_query($conn, $sql)){
    echo "Database demo created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?> 
 
