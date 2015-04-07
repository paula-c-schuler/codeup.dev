<?php  

require '../parks_login.php';
require '../db_connect.php';


// $stmt = $dbc->query('SELECT * FROM parks');
$parksReturn = $dbc->query('SELECT * FROM parks')->fetchAll(PDO::FETCH_ASSOC);
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
				<tr>
					<?php     
					foreach ($parksReturn as $park) {
						echo $park['location'];
					} 
					?>
				</tr>
			
		</table>

	</body>
</html>





