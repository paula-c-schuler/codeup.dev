<?php  

require '../parks_login.php';
require '../db_connect.php';


$stmt = $dbc->query('SELECT * FROM parks');

echo "Columns: " . $stmt->columnCount() . PHP_EOL;
echo "Rows: " . $stmt->rowCount() . PHP_EOL;
 ?>
<html>
<head>
	<title>National Parks</title>
</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Location</th>
					<th>Name</th>
					<th>Date Established</th>
					<th>Area in Acres</th>
				</tr>
			</thead>



		</table>

	</body>
</html>





