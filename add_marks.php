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

    <style>
        /* Style the dropdown container */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style the dropdown button */
        .dropdown select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            cursor: pointer;
        }

        /* Style the dropdown options */
        .dropdown select option {
            padding: 5px;
        }

        /* Style the dropdown arrow icon */
        .dropdown::after {
            content: '\25BC'; /* Unicode character for a downward-pointing triangle */
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }
    </style>

    <br/>
    <?php
    $id=$_GET["id"];
    $course_id=$_GET["course_id"];

    ?>
    <form action="insert_marks.php?id=<?php echo $id?>" method="post" onsubmit="return validateForm()">

   
    <div class="form-group">
            <label for="exampleInputNumber">Subject: </label>
            <?php
           include "connection.php";
            $sql = "SELECT * FROM subject where $course_id=course_id";
            $result = mysqli_query($conn, $sql);
            ?>
            <select name="subject_id" id="exampleInputNumber">
            <?php if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {?>
            <option value=<?php echo $row["id"]?>><?php echo $row["name"]?></option>
            <?php }}?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Marks</label>
            <input type="text" name="marks" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter your marks" required style="width: 20%;">
        </div>
       
        <!-- <a href="insert_marks.php?id=<?php echo $id?>"> <button type="button" class="btn btn-danger">Submit</button></a> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        function validateForm() {
            var marks = document.getElementById("exampleInputname").value;
            
            if(marks<0 || marks>100){
                alert("Please enter valid marks");
                return false;
            }
         
            return true; // Form will be submitted if both validations pass
        }
    </script>
</body>

</html>