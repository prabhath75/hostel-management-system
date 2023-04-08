<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="student_details";
@$connection=new mysqli($serverName,$userName,$password,$dbName);

// if($connection){
//     echo"Database conected !";
// }else{
//     echo"Database not conected !";
// }


$sql="select * from student";
$q=mysqli_query($connection,$sql);



?>

<!-- dddd -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <style>
        /* td{padding: 25px;} */
        
    </style>
  </head>
  <body>
    <h1>Report Generating</h1>
    
<form class="form-group"action="process.php"method="POST">
  
<table class="table"border="">
    <tr>
        <td><label class="form-label" for="name">Name</label></td>
        <td>
            <select  name="n"class="form-control" id="name">
                <?php
               while($row=mysqli_fetch_array($q)){
               ?>
                <option value="<?php echo $row['index_no']; ?>"><?php echo $row['name'];  ?></option>
                <?php } ?>

                  
                
            </select>
        </td>
        <td><label class="form-label" for="year">Year</label></td>
        <td>
            <select class="form-control" name="y" id="year">
                
            </select>
        </td>
        <td><input type="submit"class="btn btn-info" name="btn-r" id="rep"></td>
    </tr>
</table>
</form>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>