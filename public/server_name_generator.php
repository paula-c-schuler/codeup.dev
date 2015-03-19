<?php $nouns = ["Cello", "Bass", "Guitar", "Troubador", "Singer", "Stage", "Conductor", "Drummer", "Microphone", "Fans"]; ?>
<?php $nounsRandom = rand(0, 9); ?>
<?php $adjectives = ["Boiling", "Salty", "Sweet", "Hot", "Flat", "Comfort", "Lumpy", "Melty", "Chewy", "Sticky"]; ?>
<?php $adjectivesRandom = rand(0, 9)?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			background-color: #603E11;
			width: 100%;
			height: 100%;
		}
		div {
			background-color: #ECE8DB;
			margin-top: 200px;
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
		<h1>Your Random Server Name Is: <?php echo "$adjectives[$adjectivesRandom]" . " " . "$nouns[$nounsRandom]" . PHP_EOL;?></h1>
	</div>
</body>
</html>




