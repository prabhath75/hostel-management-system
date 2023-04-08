<?php
// db cnnection
$serverName="localhost";
$userName="root";
$password="";
$dbName="hms";
@$connection=new mysqli($serverName,$userName,$password,$dbName);

if($connection){
    echo"Database conected !";
}else{
    echo"Database not conected !";
}

?>

<?php

  if(isset($_POST["btn-r"])){
    $selected=$_POST['n'];
    echo "selected value is ".$selected;
  echo "<br>";
  @  $selected2=$_POST['y'];
    echo "selected value is ".$selected2;
  }

?>