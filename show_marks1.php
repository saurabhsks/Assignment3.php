


 <?php
    $id=$_GET["id"];
    $course_id=$_GET["course_id"];
?>


  
  <?php 
   include "connection.php";
//    $sql = "SELECT * FROM student where $id=id";
$sql = "SELECT s.*, c.course_name
        FROM student s
        INNER JOIN course c ON s.course_id = c.id
        WHERE s.id = $id";
        $result = mysqli_query($conn, $sql);
        $ans="";
 
   if (mysqli_num_rows($result) > 0) {
       $ans='<table class="table" style="width: 40%; text-align: center; display: flex;justify-content: center; align-items: center;" >
       <thead>
         <tr>
           
           <th scope="col" style="width: 40%; text-align: center;">Name -</th></tr>
           <tr> <th scope="col" style="width: 40%; text-align: center;">Mobile -</th></tr>
           <tr> <th scope="col" style="width: 40%; text-align: center;">Course Name -</th></tr> </thead>' ;
       

        while ($row = mysqli_fetch_assoc($result)) {
         $ans.="<tr><td> {$row["firstname"]}</td> </tr>
         <tr><td>{$row["mobile"]}</td> </tr>
         <tr> <td>{$row["course_name"]}</td></tr>
       
        <tbody>";
    

     } 
     $ans.='</table>';

     mysqli_close($conn);

       echo $ans;
    }
    else{
        echo "<h2>Empty Data</h2>";
    }
    ?>

    <?php 
    include "connection.php";
        

        // $sql="SELECT * FROM subject where $course_id=course_id";
        $sql = "SELECT s.*, m.marks
        FROM marks m
        INNER JOIN subject s ON s.id = m.subject_id
        WHERE  m.student_id=$id";


        $result = mysqli_query($conn, $sql);
        
        print_r($row);

        $ans1="";
        if (mysqli_num_rows($result) > 0) {
       $ans1='<table class="table" style="width: 40%; text-align: center;">
       <hr style="border: 1px solid black; margin: 10px 0; width: 40%;">
         <thead>
           <tr>
             
             <th scope="col" style="width: 40%; text-align: center;">Subject</th>
             <th scope="col" style="width: 40%; text-align: center;">Marks</th>
             
         
           </tr>
         </thead>';
        while ($row=mysqli_fetch_assoc($result)) {
            print_r($row);
         $ans1.="<body><tr><td>{$row['name']}</td>
                <td>{$row['marks']}</td></tr></body>";
      
     }
     $ans1.='</table>';

     
     mysqli_close($conn);
     echo $ans1;
     
     } 
     else{
        echo "<h2>No marks available</h2>";
     }

     ?>
   
 




 