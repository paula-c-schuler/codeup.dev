<?php 

// if key is not present, return false, otherwise true
// ISSET returns a boolean as a rule
function inputHas($key) {
	if(isset($_REQUEST[$key])) {
		return true;
	}
}

// if no key, return null, otherwise return its value
function inputGet($key) {
	if(!inputHas($key)) { 
		return null;
	} else {
		return  $_REQUEST[$key];
	}	
}

// return a safely escaped string
function escape($input) {
	$input = htmlspecialchars(strip_tags($input));
	return $input;
}

?>



<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>