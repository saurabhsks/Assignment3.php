<?php

//Connecting to database
$servername="localhost";
$username="root";
$password="";

//Creating a connection
$conn=mysqli_connect($servername,$username,$password);

//creating a db
$sql="CREATE DATABASE db";
$result=mysqli_query($conn,$sql);

if($result){
    echo "The db was created  successfully! <br>";
}else{
    echo "The db was created  successfully because of the error :".mysqli_error($conn);
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

?>


?>

