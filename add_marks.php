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
    <form action="insert_marks.php" method="post">


    <div class="dropdown">
        <label for="subject">Subject:</label>
        <select id="subject" name="subject">
            <option value="math">Physics</option>
            <option value="science">Chemistry</option>
            <option value="history">Maths</option>
            <option value="english">Computer Science</option>
            <option value="english">English</option>
        </select>
    </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Marks</label>
            <input type="text" name="marks" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter your marks" required>
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputPassword1">student id</label>
            <input type="text" name="student_id" class="form-control" id="exampleInputmodile1" placeholder="Enter student id" required>
        </div> -->
        <div class="form-group">
            <label for="exampleInputPassword1">subject id</label>
            <input type="text" name="subject_id" class="form-control" id="exampleInputcourse1" placeholder="Enter subject id" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>