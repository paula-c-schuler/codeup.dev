<?php
// <!-- *** EXERCISE 7.1.4 COMPLETED SUCCESSFULLY -->
// *** EXERCISE 7.3.3 COMPLETED -- STATIC PHP AUTHORIZATION WRAPPER  *** 
require_once "../Auth.php";
//  Start the session or resume existing, helps $_SESSION get value
session_start();

Auth::logout ();

?>
