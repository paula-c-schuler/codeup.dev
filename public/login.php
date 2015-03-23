<!-- EXERCISE 7.1.4 COMPLETED SUCCESSFULLY -->
<?php
//  Start the session or resume existing, helps $_SESSION get value
session_start();


// NTS: Remember to use strings in the isset function. The variable is a string.
// Next two lines are ternary functions
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
// echo $username;
// echo $password;



// if ($username == 'guest' && $password == 'password') {
// above line needs restructuring. We never pass passwords as strings.
// Improved below.
if (isset($_SESSION['LOGGED_IN_USER'])) && ($_SESSION['LOGGED_IN_USER'] == 'guest') {
    //assign session variable to $username
    $_SESSION['logged_in_user'] = $username;

	header('Location: http://codeup.dev/authorized.php');

} else if ($username != 'guest' || $password != 'password') {
    $message = '';
    $message = ($username == '' && $password == '') ? "Please login." : "Login failed.";
	// $message = "Login failed. ";
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