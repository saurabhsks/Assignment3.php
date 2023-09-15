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
    <form action="insert_coordinator.php" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="exampleInputEmail1">Coordinator Name</label>
            <input type="text" name="coordinator_name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter coordinator name" required style="width: 20%;">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
        function validateForm() {
            var name = document.getElementById("exampleInputname").value;
           
            var namePattern = /^[A-Za-z\s]+$/;

            

            if (!namePattern.test(name)) {
                alert("Name should contain only alphabets.");
                return false;
            }
            return true; 
        }
    </script>
</body>

</html>