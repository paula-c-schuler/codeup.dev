<?php  

$dbc = new PDO('mysql:host=127.0.0.1;dbname=parks_db', 'parks_user', 'freefree');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

