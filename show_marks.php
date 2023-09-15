

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

 <body >
 <?php
    $id=$_GET["id"];
    $course_id=$_GET["course_id"];
?>

<table class="table" style="width: 40%; text-align: center; display: flex;justify-content: center; align-items: center;" >
  <thead>
    <tr>
      
      <th scope="col" style="width: 40%; text-align: center;">Name -</th></tr>
      <tr> <th scope="col" style="width: 40%; text-align: center;">Mobile -</th></tr>
      <tr> <th scope="col" style="width: 40%; text-align: center;">Course Name -</th></tr>
      
    
    
  </thead>
 
  <tbody>
  
  <?php 
   include "connection.php";
    

//    $sql = "SELECT * FROM student where $id=id";
$sql = "SELECT s.*, c.course_name
        FROM student s
        INNER JOIN course c ON s.course_id = c.id
        WHERE s.id = $id";
        $result = mysqli_query($conn, $sql);

 
   if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

       ?>

    <tr>
    
      <td><?php echo $row["firstname"]?></td> </tr>
      <tr><td><?php echo $row["mobile"]?></td> </tr>
      <tr> <td><?php echo $row["course_name"]?></td>
      
    </tr>

    <?php }} mysqli_close($conn);?>

       

    <tbody>
</table>


<table class="table" style="width: 40%; text-align: center;">
<hr style="border: 1px solid black; margin: 10px 0; width: 40%;">
  <thead>
    <tr>
      
      <th scope="col" style="width: 40%; text-align: center;">Subject</th>
      <th scope="col" style="width: 40%; text-align: center;">Marks</th>
      
  
    </tr>
  </thead>
  <tbody>
    <?php  
    include "connection.php";
        

        // $sql="SELECT * FROM subject where $course_id=course_id";
        $sql = "SELECT s.*, m.marks
        FROM subject s
        INNER JOIN marks m ON s.id = m.subject_id
        WHERE s.course_id='$course_id' AND m.student_id=$id";


        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {


    

?>
    <tr>
      
      <td><?php echo $row["name"]?></td>
      <td><?php echo $row["marks"]?></td>
      

      
    <?php }} mysqli_close($conn);?>
    <tbody>
</table>
 </body>

 </html>




 