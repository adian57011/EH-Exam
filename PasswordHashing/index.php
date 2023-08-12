<?php 
require_once("db.php");

//as the main problem is for hashing and storing the password. i am taking a dummy data here.
//in general this data will come from a html form or an api.
$user = 'admin';
$password = 'root';

//this is a built in hashing method of php. Which obviously requires a password and a hashing algorithm.
//luckily php have built in hashing algorithms such as password_default, password_bycrpt and all.
//for simplicilty i am taking the password_default method. It generates about a 60 characters hashed model.

//now my password is hashed and stored in $hash.
$hash = password_hash($password,PASSWORD_DEFAULT);

//checked if password hashing worked!. 
//echo $hash;

//time to store it in my db
//i have made a function in db.php that handles this operaton.

$status = register($user,$hash);
if($status)
{
    echo "Data entered successfully";
}
else
{
    echo "Failed operation";
}



?>