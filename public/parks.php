<?php  

require '../parks_login.php';
require '../db_connect.php';

// get page
$userPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// define variable for how many allowed per page, up to limit of 10
$perPage = isset($_GET['perPage']) ? (int)$_GET['perPage'] : 4;

// offset variable created using variables defined above in ternery statement 
$start = ($userPage > 1) ? ($userPage * $perPage) - $perPage : 0;

// $stmt = $dbc->query('SELECT * FROM parks');
$parksReturn = $dbc->query('SELECT * FROM parks LIMIT ' . $perPage . ' OFFSET ' . $start)->fetchAll(PDO::FETCH_ASSOC);



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
				</tr>
			</thead>
				<!-- <?php foreach ($parksReturn as $park): ?> -->
				<tr>
					<td class='column1' 'td'><?= $park['location']; ?></td>	
					<td class='column2' 'td'><?= $park['name']; ?></td>
					<td class='column3' 'td'><?= $park['date_established']; ?></td>
					<td class='column4' 'td'><?= $park['area_in_acres']; ?></td>
				</tr>
			<!-- <?php endforeach; ?> -->
		</table>
		<!-- <button><a href="http://codeup.dev/parks.php"></a> Page 1 </button> -->
		<a id="next" href="http://codeup.dev/parks.php?perpage=4&page=2"> Next </a>
		<a id="previous" href="http://codeup.dev/parks.php?perpage=4&page=2"> Previous </a>
		
	</body>
</html>





