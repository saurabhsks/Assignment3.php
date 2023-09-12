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
    <form action="insert_coordinator.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Coordinator Name</label>
            <input type="text" name="coordinator_name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter coordinator name" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>