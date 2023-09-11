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
 <button onclick="document.location='student_add.php'" class="btn btn-primary">ADD student</button>
 <br/>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">course id</th>
      <th scope="col">Action</th>
    </th>
    </tr>
  </thead>
  <tbody>
    <?php  include "connection.php";
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {


    

?>
    <tr>
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["firstname"]?></td>
      <td><?php echo $row["mobile"]?></td>
      <td><?php echo $row["course_id"]?></td>
      <!-- <td>
    
      <a href="Update_user.php?id=<?php echo $row["id"]?>"><button type="button" class="btn btn-danger">Update</button></td>
      <td>
        
       <a href="Delete.php?id=<?php echo $row["id"]?>"> <button type="button" class="btn btn-danger">Delete</button></a>
    </td> -->
    <td>
        
       <a href="add_marks.php?id=<?php echo $row["id"]?>"> <button type="button" class="btn btn-danger">Add Marks</button></a>
    </td>
    </tr>

    


    <?php }} mysqli_close($conn);?>
    <tbody>
</table>

 </body>

 </html>