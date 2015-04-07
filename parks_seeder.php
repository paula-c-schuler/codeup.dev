<?php 

require 'parks_login.php';
require 'db_connect.php'; 


$parks = 
[
	['location' => '29.25 N, 103.25 W', 'name' => 'Big Bend', 

	'date_established' => '1944-06-12', 'area_in_acres' => 801163.21],

	['location' => '36.06 N, 112.14 W', 'name' => 'Grand Canyon',

	'date_established' =>'1919-02-26', 'area_in_acres' => 1217403.32],

	['location' => '47.97 N, 123.50 W', 'name' => 'Olympic', 

	'date_established' => '1938-06-29', 'area_in_acres' => 922650.86],

	['location' => '41.30 N, 124.00 W', 'name' => 'Redwood', 

	'date_established' => '1968-10-02', 'area_in_acres' => 112512.05],

	['location' => '44.60 N, 110.50 W', 'name' => 'Yellowstone',

	'date_established' => '1872-03-01', 'area_in_acres' => 2219790.71],

	['location' => '40.40 N, 105.58 W', 'name' => 'Rocky Mountain',

	'date_established' => '1915-01-26', 'area_in_acres' => 265828.41],

	['location' => '38.42 N, 78.35 W', 'name' => 'Shenandoah', 

	'date_established' => '1926-05-22', 'area_in_acres' => 199045.23],

	['location' => '48.50 N, 92.88 W', 'name' => 'Voyageurs',

	'date_established' =>'1971-01-08', 'area_in_acres' => 218200.17],

	['location' => '37.83 N, 119.50 W', 'name' =>'Yosemite',

	'date_established' => '1890-10-01', 'area_in_acres' => 761266.19],

	['location' => '37.30 N, 113.05 W', 'name' => 'Zion',

	'date_established' =>'1919-11-19', 'area_in_acres' => 146597.60]
];

foreach ($parks as $park) {
	
    $query = "INSERT INTO parks (location, name, date_established, area_in_acres) 
    VALUES ('{$park['location']}', '{$park['name']}','{$park['date_established']}', '{$park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}

 ?>