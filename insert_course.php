<?php
include "connection.php";



//Inserting data
$course = $_POST["course_name"];
$coordinator_id=$_POST["coordinator_id"];

$sql = "INSERT INTO course (course_name,coordinator_id)
VALUES ('$course','$coordinator_id')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
}

mysqli_close($conn);

?>