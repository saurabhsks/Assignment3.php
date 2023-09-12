<?php
include "connection.php";



//Inserting data
$student_id=$_GET["id"];

//$student_id =$_POST["student_id"];
$subject_id =$_POST["subject_id"];
$marks = $_POST["marks"];

//$subject_id=$_POST["subject_id"];

$sql = "INSERT INTO marks (student_id,subject_id,marks)
VALUES ('$student_id','$subject_id','$marks')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
}

mysqli_close($conn);

?>