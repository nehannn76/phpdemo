<?php
   define('DB_SERVER', '172.30.145.52');
   define('DB_USERNAME', 'admin');
     define('DB_PASSWORD', 'root');
   define('DB_DATABASE','test');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) ;
?>
