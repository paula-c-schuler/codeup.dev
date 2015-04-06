<?php 

REQUIRE ('parks_migration_db_connect.php');

$parks = [
	['location' => '29.25 N, 103.25 W', 'name' => 'Big Bend', 
	'date_established' => 'June 12, 1944', 'area_in_acres' => '801163.21'],
	['location' => '36.06 N, 112.14 W', 'name' => 'Grand Canyon',
	'date_established' =>'February 26, 1919', 'area_in_acres' => '1217403.32'],
	['location' => '47.97 N, 123.50 W', 'name' => 'Olympic', 
	'date_established' => 'June 29, 1938', 'area_in_acres' => '922650.86'],
	['location' => '41.30 N, 124.00 W', 'name' => 'Redwood', 
	['date_established' => 'October 2, 1968', 'area_in_acres' => '112512.05'],
	['location' => '44.60 N, 110.50 W', 'name' => 'Yellowstone',
	'date_established' => 'March 1, 1872', 'area_in_acres' => '2219790.71'],
	['location' => '40.40 N, 105.58 W', 'name' => 'Rocky Mountain',
	'date_established' => 'January 26, 1915', 'area_in_acres' => '265828.41'],
	['location' => '38.42 N, 78.35 W', 'name' => 'Shenandoah', 
	'date_established' => 'May 22, 1926', 'area_in_acres' => '199045.23'],
	['location' => '48.50 N, 92.88 W', 'name' => 'Voyageurs',
	'date_established' =>'January 8, 1971', 'area_in_acres' => '218200.17'],
	['location' => '37.83 N, 119.50 W', 'name' =>'Yosemite',
	'date_established' => 'October 1, 1890', 'area_in_acres' => '761266.19'],
	['location' => '37.30 N, 113.05 W', 'name' => 'Zion',
	'date_established' =>'November 19, 1919', 'area_in_acres' => '146597.60'),
];
foreach ($parks as $park) {
	
    $query = "INSERT INTO parks (location, name, date_established, area_in_acres) 
    VALUES ('{$parks['location']}', '{$parks['name']}', str_to_date('{$parks['date_established']}', '%m,%d,%Y'), {$parks['area_in_acres']};

    $dbc->exec($query)";

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

 ?>