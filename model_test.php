<?php 
// Don't require model.php here because it is already required in user.php
// require_once 'model.php';
require_once 'user.php';


$user = new User;
$user->email = '123@abc.com';
$user->name = 'Misty Miller';
$user->save();


// Until writng for User class extension of Model, had to have Model::
// After adding User extension, replace Model:: with User::

// find
// User::find('1');

// all
// User::all();
$all = User::all();
// var_dump($all);

 ?>