<?php
require_once("db.php");
//this file just verify the login credentiality.
//this file is kind of like a controller of a login operation.
//here we will retrive the hashed password from the database and
//match it with our given password. 

$user = 'admin';
$password = 'root';

//this is a associative array with username and password from the database.
$arr = fetch($user);

$hash = $arr['password'];

if(password_verify($password,$hash))
{
    echo "Login successful";
}
else
{
    echo "Invalid Credentials";
}

//one thing to make notice of. The password default algorithm used in the hashing takes a space of 60 
//characters so we must at least give 60 lengths in password column.




?>