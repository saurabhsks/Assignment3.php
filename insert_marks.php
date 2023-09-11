<?php
include "connection.php";



//Inserting data
$marks = $_POST["marks"];
$student_id =$_POST["student_id"];
$subject_id=$_POST["subject_id"];

$sql = "INSERT INTO marks (marks, student_id, subject_id)
VALUES ('$marks','$student_id','$subject_id')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
}

mysqli_close($conn);

?>