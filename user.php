<?php  
// EXERCISE 9.2.6       Build a Model

require_once 'Model.php'; 

// max length of user input string
$maxLength = '50';

class User extends Model {


    protected static $table = 'users';

}



