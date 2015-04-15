<?php 
// Don't require model.php here because it is already required in user.php
// require_once 'model.php';
require_once 'user.php';

// "User extends Model class, so Isaac said we don't need to declare an instance of Model again here."

$user = new User;
$user->id = 3;
$user->email = 'xyz@abc.com';
$user->name = 'Marilyn Mush';
$user->save();

// find
// Until writng for User class extension of Model, had to have Model::
// After adding User extension, replace Model:: with User::
User::find('1');

// all
// User::all();
$all = User::all();
// var_dump($all);

 ?>