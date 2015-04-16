<?php  
// EXERCISE 9.
*************************************** CONNECTION CHALLENGES, DID THIS WORK WITHOUT TESTING *********
// improved userPage variable 
// added pagination code math pagination, echos the numerical links below
// added errors array
// added description column to table in SQL
// added back description portions of HTML on this file
******************************************************************************************************
define('DB_HOST','127.0.0.1');
define('DB_NAME','parks_db');
define('DB_USER','parks_user'); 
define('DB_PASS','freefree');

require '../parks_login.php';
require '../parks_migration_db_connect.php';
require '../ParksInput.php';

$errors = [];






// ---------------------------------PAGINATION begins here
// get current page user sees
if (!empty($_GET['page']))
{
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
$parksResultsPerPage = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_parks = $dbc->query('SELECT count(*) FROM parks')->fetchColumn();

$totalPages = ceil($total_parks/$limitPerPage);

// ----------------------------------PAGINATION ends here

// Commenting this alive creates undefined variable for description in html
$query = 'INSERT INTO parks (location, name, date_established, area_in_acres, description) 
		VALUES (:location, :name, :date_established, :area_in_acres, :description)';
$stmt = $dbc->prepare($query);
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;



 ?>
<html>
<head>
	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css" src='/css/parks.css'></style>

	<title>National Parks</title>
</head>
	<body>
<!-- Table that displays listed national parks -->
		<table>
			<thead>
				<tr>
					<th class='column1' 'th'>Location</th>
					<th class='column2' 'th'>Name</th>
					<th class='column3' 'th'>Date Established</th>
					<th class='column4' 'th'>Area in Acres</th>
					<!-- <th class='column5' 'th'>Description</th> -->
				</tr>
			</thead>
				<tbody>
					
					
					<?php foreach ($parks as $park): ?>
					
					<tr>
						<td class='column2 td'><?php echo $park['name']; ?></td>
						<td class='column1 td'><?php echo $park['location']; ?></td>
						<td class='column3 td'><?php echo $park['date_established']; ?></td>
						<td class='column4 td'><?php echo $park['area_in_acres']; ?></td>
						<!-- <td class='column5 td'><?php echo $park['description']; ?></td> -->

						<?php endforeach; ?>
					</tr> 

				</tbody>
		</table>


		<h3>If your favorite national park is not listed, add it here.</h3>


		<form method="POST"> 
	   		<p>
	        <label for="name">Name</label>
	        <input id="name" name="name" type="text">
	    	</p>
	    	<p>
	        <label for="location">Location</label>
	        <input id="location" name="location" type="text">
	    	</p>
	    	<p>
	        <label for="date_established">Established</label>
	        <input id="date_established" name="date-established" type="text">
	    	</p>
	    	<p>
	        <label for="area_in_acres">Area in Acres</label>
	        <input id="area_in_acres" name="area_in_acres" type="text">
	    	</p>

	    	<p>
	        <label for="description">Description</label>
	        <input id="description" name="description" type="text">
	    	</p>
	    	<p>
	        <input type="submit">
	    	</p>
		</form>

		<div id="pagination">
			<?php for ($x = 1; $x <= $totalPages; $x++)   ?>
				<a href="page=<?php echo $x; ?>&&limitPerPage=<?php echo $limitPerPage ?>"> <?php echo $x; ?> </a>

			<?php endfor; ?>
		</div>

		<a id="next" onclick="http://codeup.dev/parks.php?perpage=4&page=2"> Next </a>

		<a id="previous" href="http://codeup.dev/parks.php?perpage=4&page=2"> Previous </a>
		<script type="text/javascript"></script>
	</body>
</html>





