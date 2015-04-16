<?php  
// EXERCISE 
// *************************************** CONNECTION CHALLENGES, DID THIS WORK WITHOUT TESTING *********
// improved userPage variable 
// added pagination code math pagination, echos the numerical links below
// added errors array
// added description column to table in SQL
// added back description portions of HTML on this file
// ******************************************************************************************************
// added if statement for user post




require '../parks_login.php';
require '../parks_migration_db_connect.php';
require '../ParksInput.php';

$errors = [];
$features = [];

// Try/Catch allows us to try a block of code and catch exceptions that may occur while that code is being executed. 
// This allows our code to continue runing and does not burden user with confusing error messages. 
// try {
// 	// check if value is string
// 	if (!is_string('name'))

// }


// No POST? This won't run, no worries.
if (!empty($_POST)) {
	
	try {
		$features['name'] = ParksInput::getString('name');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	try {
		$features['location'] = ParksInput::getString('location');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	try {
		$features['date_established'] = ParksInput::getString('date_established');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	try {
		$features['area_in_acres'] = ParksInput::getString('area_in_acres');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	try {
		$features['description'] = ParksInput::getString('description');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	if (!empty($errors)){

	$query = 'INSERT INTO parks (name, location, date_established, area_in_acres, description) 
			VALUES (:name, :location, :date_established, :area_in_acres, :description)';
var_dump($features);
	$stmt = $dbc->prepare($query);
	$stmt->bindValue(':name', $features['name'], PDO::PARAM_STR);
	$stmt->bindValue(':location', $features['location'], PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $features['date_established'], PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $features['area_in_acres'], PDO::PARAM_STR);
	$stmt->bindValue(':description', $features['description'], PDO::PARAM_STR);
	$stmt->execute(); 

	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
	}
}





// ---------------------------------FORM INPUT PROCESSING ends here

// ---------------------------------PAGINATION begins here
// get current page user sees
if (!empty($_GET['page'])) {
	$userPage = $_GET['page'];
} else {
	$userPage = 1;
}

// $userPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// limit number of results per page
$limitPerPage = isset($_GET['limitPerPage']) && $_GET['limitPerPage'] <= 24 ? (int)$_GET['limitPerPage'] : 4;

// determine next set of results based on current page
$start = ($userPage > 1) ? ($userPage * $limitPerPage) - $limitPerPage : 0;
$query = "SELECT * FROM parks LIMIT :limit OFFSET :offset";

// prepare statement
// bindValue added to ensure integer data type for limit and offset
$stmt = $dbc->prepare($query);
$stmt->bindValue(':limit', $limitPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $start, PDO::PARAM_INT);
$stmt->execute();
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_parks = $dbc->query('SELECT count(*) FROM parks')->fetchColumn();

$totalPages = ceil($total_parks/$limitPerPage);

// ----------------------------------PAGINATION ends here

var_dump($_POST);



?> 

<html>
<head>
	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css" src='/css/parks.css'></style>

	<title>National Parks</title>
</head>
	<body>
		<table>
			<thead>
				<tr>
					<th class='column2' 'th'>Name</th>
					<th class='column1' 'th'>Location</th>
					<th class='column3' 'th'>Date Established</th>
					<th class='column4' 'th'>Area in Acres</th>
					<th class='column5' 'th'>Description</th>
				</tr>
			</thead>
				<tbody>
					
					
					<?php foreach ($parks as $park): ?>
					
					<tr>
						<td class='column2 td'><?= $park['name']; ?></td>
						<td class='column1 td'><?= $park['location']; ?></td>
						<td class='column3 td'><?= $park['date_established']; ?></td>
						<td class='column4 td'><?= $park['area_in_acres']; ?></td>
						<td class='column5 td'><?= $park['description']; ?></td>

					</tr> 
					<?php endforeach; ?>

				</tbody>
		</table>


		<h3>If your favorite national park is not listed, add it here.</h3>

		<form method="POST" action="/parks.php"> 
	   		<p>
	        <label for="name" placeholder="Enter name.">Name</label>
	        <input id="name" name="name" type="text">
	    	</p>
	    	<p>
	        <label for="location" placeholder="State">Location</label>
	        <input id="location" name="location" type="text">
	    	</p>
	    	<p>
	        <label for="date_established" placeholder="Format YYYY-MM-DD.">Date established</label>
	        <input id="date_established" name="date_established" type="text">
	    	</p>
	    	<p>
	        <label for="area_in_acres" placeholder="How big is the park?">Area in Acres</label>
	        <input id="area_in_acres" name="area_in_acres" type="text">
	    	</p>

	    	<p>
	        <label for="description" placeholder="What you know about this park.">Description</label>
	        <input id="description" name="description" type="textarea">
	    	</p>
	    	<p>
	        <input type="submit">
	    	</p>
		</form>

		<div id="pagination">
			<?php for ($x = 1; $x <= $totalPages; $x++):?>
				<a href="?page=<?= $x; ?>&limitPerPage=<?= $limitPerPage ?>"><?= $x; ?></a>

			<?php endfor; ?>
		</div>

		<!-- <a id="next" onclick="http://codeup.dev/parks.php?perpage=4&page=2"> Next </a> -->

		<!-- <a id="previous" href="http://codeup.dev/parks.php?perpage=4&page=2"> Previous </a> -->
		
	</body>
</html>





