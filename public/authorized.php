<?php
// <!-- *** EXERCISE 7.1.4 COMPLETED SUCCESSFULLY -->
require_once "../Auth.php";
//  Start the session or resume existing, helps $_SESSION get value
session_start();
var_dump($_SESSION);

if (($_SESSION['logged_in_user']) != 'guest') {
	header('Location: http://codeup.dev/login.php');
	exit();
} 
?>

<!DOCTYPE html>
<html>
<head>
    <title>authorized.php</title>

    <style type="text/css">
body {
	text-align: center;
}
</style>

</head>
<body>
	<div>
		<h1>Authorized</h1>
		<h2><?php echo ($_SESSION['logged_in_user']) ?></h2>
		<a href="/logout.php">Logout</a>
		    
    </div>
</body>
</html>