<?php
echo "Connected to database stage Started <br>";

/* Ways to connect to MySql 
1. MySQLi EXTENSION
2. PDO
*/

// Connecting to database
$servername = "localhost";
$username = "root";
$password = "";
// $database = "database";

// Create Connection

$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successfull

if (!$conn){
die("Connection failed: ". mysqli_connect_error());
}
else{
    echo "Connected successfully";
}

?>