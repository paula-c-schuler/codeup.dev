<? 
// EXERCISE 7.1.1 - PHP with HTML - done and functional.
// EXERCISE 7.1.2


function pageController()
{
    $arrayFaves = [];
    
    $arrayFaves['favorites'] = ["Polcinego", "Plane Tickets", 
    "Photos", "Writing", "Cathedral Acoustics"];

    return $arrayFaves;    
}

// Call the pageController function, extract array as local variables.
extract(pageController());

?>

<!DOCTYPE html> 
<html>
<head>
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script 
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		background-color: #AF92BA;
	}
	h1 {
		text-align: center;
	}
	table {
		text-align: center;
	}
	tr {
		text-align: center;
	}
	</style>
	<table></table>
	<title>my_favorites</title>
</head>
<body>
	<h1>My Favorites</h1>
	<table class="table table-striped">        
		<? foreach ($favorites as $fave): ?>
		<tr>	 
			<td><?= $fave ?></td>
		</tr>
		<? endforeach ?>
				
	</table>


</body>
</html>