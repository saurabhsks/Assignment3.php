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
<?php
include "connection.php";
$id=$_GET["id"];

$sql = "SELECT * FROM student WHERE id=$id";
$result = mysqli_query($conn, $sql); 

$arrdata=mysqli_fetch_assoc($result);

mysqli_close($conn);
?>
    <br/>
    <form action="update_std_query.php?id=<?php echo $id ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter your name" value="<?php echo $arrdata["firstname"]?>" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="exampleInputmodile1" placeholder="Enter your mobile number" value="<?php echo $arrdata["mobile"]?>" required>
        </div>
        <div class="form-group">
            <label for="exampleInputNumber">Course: </label>

            <?php
// Assuming you have established a database connection earlier
include "connection.php";
$sql = "SELECT * FROM course";
$result = mysqli_query($conn, $sql);

// Get the currently selected course for the user (replace with your actual query)
$selectedCourseId = $arrdata["course_id"];

?>
<select name="course_id" id="exampleInputNumber">
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $courseId = $row["id"];
            $courseName = $row["course_name"];
            $selected = ($courseId == $selectedCourseId) ? 'selected' : '';
    ?>
            <option value="<?php echo $courseId; ?>" <?php echo $selected; ?>><?php echo $courseName; ?></option>
    <?php
        }
    }
    ?>
</select>

           
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputPassword1">course id</label>
            <input type="password" name="course_id" class="form-control" id="exampleInputcourse1" placeholder="Enter your course id" required>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>




  <!-- <?php
          include "connection.php";
          $sql = "SELECT * FROM course";
          $result = mysqli_query($conn, $sql);
          ?>
          <select name="id" id="exampleInputNumber" value="<?php echo $arrdata["course_name"]?>">
          <?php if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {?>
          <option value=<?php echo $row["id"]?>><?php echo $row["course_name"]?></option>
         
          <?php }}?>  -->
          <!-- </select>  -->