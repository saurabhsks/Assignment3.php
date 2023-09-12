<?php
include 'connection.php';
 $id = $_GET["id"];

 $deletequery=" DELETE FROM student where id=$id ";
 $query=mysqli_query($conn,$deletequery);

 if($query){
    ?>
    <script>
        alert("Deleted successfully");
        </script>
        <?php
 }else
 {
    ?>
    <script>
        alert(" Not Deleted");
        </script>
        <?php 
 }
 header("location:students_display.php");
?>