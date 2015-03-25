
<?php
// <!-- EXERCISE 7.1.4 COMPLETED SUCCESSFULLY -->
// <!-- EXERCISE 7.2   - ADDING REQUIRE FILE WITH FUNCTIONS.PHP -->
// <!-- EXERCISE 7.3.3 STATIC METHODS -->
//  Start the session or resume existing, helps $_SESSION get value
session_start();

require_once '../Auth.php';

//  use "require" to make more modular flexible code
require 'functions.php';

// NTS: Remember to use strings in the isset function. The variable is a string.
// Next two lines are ternary functions

$username = escape(inputGet('username'));
// $username = isset($_POST['username']) ? $_POST['username'] : '';
$password = escape(inputGet('password'));
// $password = isset($_POST['password']) ? $_POST['password'] : '';

$message = 'Please login.';

if (AUTH::ATTEMPT($username, $password)) {
    $_SESSION['logged_in_user'] = $username;
    header('Location: http://codeup.dev/authorized.php');
}

if (isset($_SESSION['logged_in_user'])) 
    if ($_SESSION['logged_in_user'] == 'guest') {
        //assign session variable to $username
        

	   header('Location: http://codeup.dev/authorized.php');
       var_dump("Was sent to authorized");

} else if ($username != 'guest' || $password != 'password') {
    $message = '';
    $message = ($username == '' && $password == '') ? "Please login." : "Login failed.";
} 

var_dump($_POST) . PHP_EOL;

?>

<!DOCTYPE html>
<html>
<head>
    <title>login.php</title>
    <style type="text/css">
    body {
    text-align: center:
    }
    </style>

</head>
<body>
	<h1><?= $message?></h1>

    <form method="POST" action="/login.php">
    	<label for="username" >Username</label>
        <input id="username" name="username" type="text"><br>
     
        <label for="password">Password</label>
        <input id="password" name="password" type="password"><br>
        
        <input type="submit">
    </form>
</body>
</html>