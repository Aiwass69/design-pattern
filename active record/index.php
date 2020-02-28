<?php

include 'Model/Person.php';

$connection= new PDO("mysql:host=localhost;dbname=design_patterns;", 'root', '');

$query= 'SELECT * FROM  User';

$result= $connection->query($query);
$row= $result->fetch(PDO::FETCH_ASSOC);

$user = new Person();

$user->first_name = $row['first_name'];
$user->last_name = $row['last_name'];
$user->age = $row['age'];
$user->genre = $row['genre'];
$user->email = $row['email'];

echo "<pre>";
//echo $user;
print_r($user);