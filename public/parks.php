<?php  

require '../parks_login.php';
require '../db_connect.php';


// $stmt = $dbc->query('SELECT * FROM parks');
$parksReturn = $dbc->query('SELECT * FROM parks')->fetchAll(PDO::FETCH_ASSOC);
 ?>
<html>
<head>
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
				<?php foreach ($parksReturn as $park): ?>
				<tr>
					<td class='column1' 'td'><?= $park['location']; ?></td>	
					<td class='column2' 'td'><?= $park['name']; ?></td>
					<td class='column3' 'td'><?= $park['date_established']; ?></td>
					<td class='column4' 'td'><?= $park['area_in_acres']; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>

	</body>
</html>





