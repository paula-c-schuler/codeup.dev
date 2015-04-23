<?
// EXERCISE 7.1.1 PHP with HTML - function complete

function pageController()
{
	$data = [];
	$data['nouns'] = ["Cello", "Bass", "Guitar", "Troubador", "Singer", "Stage", 
	"Conductor", "Drummer", "Microphone", "Fans"];
	$data["nounsRandom"] = array_rand($data['nouns']); 
	echo $data['nounsRandom'];
	$data['adjectives'] = ["Boiling", "Salty", "Sweet", "Hot", "Flat", "Comfort", 
	"Lumpy", "Melty", "Chewy", "Sticky"];
	$data["adjectivesRandom"] = array_rand($data['adjectives']);
	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' 
	type='text/css'>
	<style type="text/css">
		body {
			background-color: #603E11;
			width: 100%;
			height: 100%;
			font-family: 'Indie Flower', cursive;
		}
		div {
			background-color: #ECE8DB;
			margin-top: 100px;
			margin-right: 200px;
			margin-left: 200px;
			padding: 50px;
			text-align: center;
		}
	</style>
	<title>Your Random Server Name Is:  </title>
</head>
<body>
	<div>
		<h1>Your Random Server Name Is:   
			<?= $adjectives[$adjectivesRandom] . 
			" " . $nouns[$nounsRandom] . PHP_EOL;?></h1>
	</div>
</body>
</html>




