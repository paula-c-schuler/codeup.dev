<!-- *** EXERCISE 7.1.4 COMPLETED SUCCESSFULLY -->
<?php
//  Start the session or resume existing, helps $_SESSION get value
session_start();

function endSession () {
	// picks up the session's data
	$_SESSION = array();

	// copied from the PHP documents
	if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 15000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    // Finally, destroy the session.
    session_destroy();
    header("Location: http://codeup.dev/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>logout.php</title>
</head>
<body>
	<div>
		<h1>You are logged out. Bye Bye!</h1>
	
		    
    </div>
</body>
</html>