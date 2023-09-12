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
    <form action="insert_course.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Course</label>
            <input type="text" name="course_name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
            <label for="exampleInputNumber">Coordinator: </label>
            <?php
            include "connection.php";
            $sql = "SELECT * FROM coordinator";
            $result = mysqli_query($conn, $sql);
            ?>
            <select name="coordinator_id" id="exampleInputNumber">
            <?php if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {?>
            <option value=<?php echo $row["id"]?>><?php echo $row["coordinator_name"]?></option>
            <?php }}?>
            </select>
        </div>
        <!-- <div class="dropdown">
        <label for="subject">Course:</label>
        <select id="subject" name="course">
            <option value="math">MBA</option>
            <option value="science">B.Tech</option>
            <option value="history">MCA</option>
            <option value="english">BCA</option>
            <option value="english">BBA</option>
        </select>
    </div> -->
      
        <!-- <div class="form-group">
            <label for="exampleInputPassword1">Coordinator id</label>
            <input type="password" name="coordinator_id" class="form-control" id="exampleInputcourse1" placeholder="Enter your course id" required>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>