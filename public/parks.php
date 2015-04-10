<?php  
require '../parks_login.php';
require '../db_connect.php';

// get current page
$userPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// limit number of results per page
$perPage = isset($_GET['perPage']) ? (int)$_GET['perPage'] : 4;

// determine next set of results based on current page
$start = ($userPage > 1) ? ($userPage * $perPage) - $perPage : 0;
$query = "SELECT * FROM parks LIMIT :limit OFFSET :offset";

// prepare statement
// bindValue added to ensure integer data type for limit and offset
$stmt = $dbc->prepare($query);
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $start, PDO::PARAM_INT);
$stmt->execute();
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);





// Commenting this alive creates undefined variable for description in html
// $query = 'INSERT INTO parks (location, name, date_established, area_in_acres) 
// 		VALUES (:location, :name, :date_established, :area_in_acres)';
// $stmt = $dbc->prepare($query);
// echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;



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
						<td class='column1 td'><?php echo $park['location']; ?></td>	
						<td class='column2 td'><?php echo $park['name']; ?></td>
						<td class='column3 td'><?php echo $park['date_established']; ?></td>
						<td class='column4 td'><?php echo $park['area_in_acres']; ?></td>
						<!-- <td class='column5 td'><?php echo $park['description']; ?></td> -->
						<?php endforeach; ?>
					</tr> 

				</tbody>
		</table>
		<!-- <button><a href="http://codeup.dev/parks.php"></a> Page 1 </button> -->

		<a id="next" onclick="'page'++"> Next </a>

		<a id="previous" href="http://codeup.dev/parks.php?perpage=4&page=2"> Previous </a>
		<script type="text/javascript"></script>
	</body>
</html>





