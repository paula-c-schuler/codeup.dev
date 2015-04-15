<?php 

require_once `model.php`;
require_once `user.php`;

$model = new Model();

$user = new User;




$model = new Model();

// IF ONE ADDS THIS WAY TO THE MODEL CLASS, THEN WHERE DOES THE DATA GO? WHICH TABLE? 
// set
$model->name = 'Paula';
$model->email = 'abc@abc.com';

// get
echo $model->email . PHP_EOL;

// save
// var_dump($users);

// find
Model::find('1');

// all
// Model::all();
$all = Model::all();
// var_dump($all);

 ?>