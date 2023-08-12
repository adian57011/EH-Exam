
<?php
// i am making a php script that will connect with database.
//changing the database config here will be enough to run these code on any machine.
$hostname = "127.0.0.1";
$user = "root";
$password="";
$table = "test";

//this is a utility function that connects me with the database named test.
function connection()
{
    global $hostname;
    global $user;
    global $password;
    global $table;
    $con = mysqli_connect($hostname,$user,$password,$table);
    return $con;
}

function register($user,$password)
{
    $con = connection();

    $sql = "INSERT INTO user(username,password) VALUES ('$user','$password')";

    $query = mysqli_query($con,$sql);
    if($query)
    {
        return true;
    }
    return false;
}

function fetch($user)
{
    $con = connection();

    $sql = "SELECT password from user
            where username = '$user'";

    $query = mysqli_query($con,$sql);
    if($query)
    {
        $row = mysqli_fetch_assoc($query);
        return $row;
    }
    return false;
    
}

?>