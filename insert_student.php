<?php
include "connection.php";



//Inserting data
$firstname = $_POST["name"];
$mobile =$_POST["mobile"];
$course_name=$_POST["course_name"];
$course_id=$_POST["id"];

$sql = "INSERT INTO student (firstname, mobile,course_id)
VALUES ('$firstname','$mobile','$course_id')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
}

mysqli_close($conn);
header("location:students_display.php");
?>