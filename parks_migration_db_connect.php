<?php  
// THIS FILE WAS DEPRECATED, USED ONLY FOR TESTING. REPLACED WITH ANOTHER TESTING FILE.
$dbc = new PDO('mysql:host=127.0.0.1;dbname=parks_db', 'parks_user', 'freefree');

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
