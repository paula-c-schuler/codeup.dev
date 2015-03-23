<!-- EXERCISE 7.1.4 COMPLETED SUCCESSFULLY -->
<?php
var_dump($_POST);

// NTS: Remember to use strings in the isset function. The variable is a string.
// Next two lines are ternary functions
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
// echo $username;
// echo $password;

$message = '';
if ($username == 'guest' && $password == 'password') {
	header('Location: http://codeup.dev/authorized.php');
} else if ($username != 'guest' && $password != 'password') {
	$message = "Login failed. Try again. ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
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