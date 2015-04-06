<?php 

// *** return to variables later ***
// define('DB_HOST','127.0.0.1');

// define('DB_NAME','parks_db');

// define('DB_USER','parks_user'); 

// define('DB_PASS','freefree');

REQUIRE ('parks_migration_db_connect.php'); 

// echo connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'CREATE TABLE  (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    location VARCHAR(25) NOT NULL,
    name VARCHAR(25) NOT NULL,
    date_established(date) NOT NULL,
    area_in_acres(double) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

 ?>