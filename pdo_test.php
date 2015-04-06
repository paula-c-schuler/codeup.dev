<?php 

// define constants
define('DB_HOST','127.0.0.1');

define('DB_NAME','employees');

define('DB_USER','codeup'); 

define('DB_PASS','codeup2015');

// create the connection to the database
REQUIRE ('db_connect.php'); 
echo ("I did it");

// echo connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

 ?>