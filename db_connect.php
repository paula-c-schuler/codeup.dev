<?php  
// EXERCISE 9.1.1 AND 9.1.2 Creating tables in SQL with PHP

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

// Tell PDO to throw exceptions on error, rather than failing silently
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Display the PDO connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
