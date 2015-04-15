<?php 

define('DB_HOST','127.0.0.1');

define('DB_NAME','parks_db');

define('DB_USER','parks_user'); 

define('DB_PASS','freefree');

REQUIRE ('db_connect.php'); 

// echo connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

 ?>