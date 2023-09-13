<?php
include "connection.php";
 $id=$_GET["id"];
$firstname = $_POST["name"];
$mobile = $_POST["mobile"];
$course_id = $_POST["course_id"];

$sql = "UPDATE student SET firstname='$firstname', mobile='$mobile',course_id='$course_id' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

header("location:students_display.php")

?>