<?php 


// cut to save in case needed later. It did work. 
// this is inserted not selected
$stmt = $dbc->prepare('INSERT INTO parks (location, name, 
	date_established, area_in_acres, description) 
	VALUES (:location, :name, :date_established, :area_in_acres, 
	:description)');
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;













 ?>