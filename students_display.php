<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <title>Document</title>
 </head>

 <body>
    <br/>
 <button onclick="document.location='add_student.php'" class="btn btn-primary">ADD student</button>
 <button onclick="document.location='add_course.php'" class="btn btn-primary">ADD course</button>
 <button onclick="document.location='add_coordinator.php'" class="btn btn-primary">ADD coordinator</button>
 <br/>


<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Course Name</th>
      <th scope="col">Coordinator Name</th>
      <th scope="col">Action</th>
    </th>
    </tr>
  </thead>
  <tbody>
    <?php  include "connection.php";
        //  $sql = "SELECT * FROM student";

        $sql = "SELECT s.id,s.course_id,s.firstname, s.mobile, c.course_name, co.coordinator_name
        FROM student s
        INNER JOIN course c ON s.course_id = c.id
        INNER JOIN coordinator co ON c.coordinator_id = co.id";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <!-- <td><?php echo $row["id"]?></td> -->
      <td><?php echo $row["firstname"]?></td>
      <td><?php echo $row["mobile"]?></td>
      <td><?php echo $row["course_name"]?></td>
      <td><?php echo $row["coordinator_name"]?></td>

      

      

      <td>
    
      <a href="update_student.php?id=<?php echo $row["id"]?>"><button type="button" class="btn btn-light">Update</button>
    </td>
    <!-- <td>
    
    <a href="update_student.php"><button type="button" class="btn btn-light">Update</button>
  </td> -->

      <td>
        
       <a href="delete_display.php?id=<?php echo $row["id"]?>"> <button type="button" class="btn btn-danger">Delete</button></a>
    </td>
    <td>
        
       <a href="add_marks.php?id=<?php echo $row["id"]?> & course_id=<?php echo $row["course_id"]?>"> <button type="button" class="btn btn-success">Add Marks</button></a>
    </td>

    <td>
        
       <a href="show_marks.php?id=<?php echo $row["id"]?> & course_id=<?php echo $row["course_id"]?>"> <button type="button" class="btn btn-success">Show Marks</button></a>

       <button type="button" class="btn btn-warning" id="load-button" onclick="show(<?php echo $row["id"]?>,<?php echo $row["course_id"]?>)">Show Marks</button>

    </td>
    </tr>

    


    <?php }} mysqli_close($conn);?>
    <tbody>
</table>


<div id="table-data">

</div>
<script>

// $(document).ready(function(){
//     $("#load-button").on("click" ,function(e){
//         $ajax({
//             url : "show_marks.php",
//             type: "GET",
//             success: function(data){
//                 $("#table-data").html(data);
//             }
//         })
//     })
// })



function show(id,course_id) {
  
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("table-data").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "show_marks1.php?id="+id + "&course_id="+course_id);
  xhttp.send();   
}
</script>
 </body>

 </html>





















 <!-- <td><?php 
      $course=$row["course_id"];
      $sql="SELECT * FROM course WHERE  course.id=$course";
      $res = mysqli_query($conn, $sql);
      $row1=mysqli_fetch_assoc($res);
      echo $row1["course_name"]
     ?></td> -->

     <!-- <td><?php 
      $coordinator=$row1["coordinator_id"];
      $sql="SELECT * FROM coordinator INNER JOIN course ON $coordinator=coordinator.id";
      $res= mysqli_query($conn, $sql);
      $row2=mysqli_fetch_assoc($res);
      echo $row2["coordinator_name"]
     ?></td> -->