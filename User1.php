<?php  
// EXERCISE 9.2.5     Late Static Binding



require_once 'Model.php'; 

class User extends Model
{
	protected static $table = 'users';
}

echo User::getTableName();




