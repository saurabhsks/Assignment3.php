<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "test";

//Creating a connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else{
//     echo "Connection was successful";
// }

?>
