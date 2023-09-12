<?php
include "connection.php";



//Inserting data
$coordinator = $_POST["coordinator_name"];


$sql = "INSERT INTO coordinator (coordinator_name)
VALUES ('$coordinator')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
}

mysqli_close($conn);

?>

<!-- INSERT INTO `coordinator` (`id`, `name`) VALUES (NULL, 'sks'); -->