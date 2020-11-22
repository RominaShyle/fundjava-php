<?php 



require_once "models/User.php";


$user = new User;


echo "<pre>";
var_dump($user);

echo "</pre>";

echo $user->first_name;


echo "<br>";

$user2 = new User;



$user->setName('Ana');
$user->setAge(22);

echo $user->first_name;

echo "<pre>";
var_dump($user);

echo "</pre>";

?> 