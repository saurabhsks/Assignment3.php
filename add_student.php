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
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your existing head content -->
</head>

<body>
    
    <br/>
    <form action="insert_student.php" method="post" onsubmit="return validateForm()">
        <div class="form-group" >
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter your name" required  style="width: 20%;">
        </div>
        <div class="form-group" >
            <label for="exampleInputPassword1">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="exampleInputmobile1" placeholder="Enter your mobile number" required  style="width: 20%;">
               </div>
        <div class="form-group" >
            <label for="exampleInputNumber">Course: </label>
            <?php
           include "connection.php";
            $sql = "SELECT * FROM course";
            $result = mysqli_query($conn, $sql);
            ?>
            <select name="id" id="exampleInputNumber">
            <?php if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {?>
            <option value=<?php echo $row["id"]?>><?php echo $row["course_name"]?></option>
            <?php }}?>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script>
        function validateForm() {
            var name = document.getElementById("exampleInputname").value;
            var mobile = document.getElementById("exampleInputmobile1").value;
         
            // expression to check if the name contains only alphabets
            var namePattern = /^[A-Za-z\s]+$/;

            //  expression to check if the mobile number contains only digits and is 10 characters long
            var mobilePattern = /^\d{10}$/;
            
            if (!namePattern.test(name)) {
                alert("Name should contain only alphabets.");
                return false;
            }
            if (namePattern.test(mobile)) {
                alert("number should contain only digits.");
                return false;
            }

            if (!mobilePattern.test(mobile)) {
                alert("Mobile number should contain only 10 digits.");
                return false;
            }

            return true; // Form will be submitted if both validations pass
        }
    </script>
</body>

</html>