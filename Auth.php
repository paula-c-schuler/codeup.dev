<?php 
// 	*** EXERCISE 7.3.3 COMPLETE - STATIC PHP METHODS/AUTHENTICATION WRAPPER ***

require_once 'Log.php';

class Auth 
{
	
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

// Auth::attempt
	public static function attempt($username, $password) 
	{
		if ($username == 'guest') 
		{
			if (password_verify($password, self::$password)) 
			{
		    	$_SESSION['logged_in_user'] = $username;
		    	$message = "User $username logged in.";
		    	$newLog = new Log;
		    	$newLog->info($message);
		    	return true; 
			} elseif ($username != 'guest' || $password != self::$password) 
			{
				$message = "User $username failed to login.";
				$newLog = new Log;
				$newLog->info($message);
				return false; 
			}
		}
	}
	
// Auth::check() check if user is logged in or not
	public static function check() 
	{
		if (isset($_SESSION['logged_in_user'])) {
			return true;
		} 
	}

// Auth::user() to eturn name of session logged in user
	public static function user($username)
	{
	$username = ($_SESSION['logged_in_user']);
	return $username;

	}

// Auth::logout() to end the session.
	public static function logout()
	{
	// picks up the session's data
	$_SESSION = array();

	// Destroy data including cookies.
		if (ini_get("session.use_cookies")) 
		{
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

}
?>