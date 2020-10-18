<?php
    $roll =  $_GET['ROLL'];

   $conn = mysqli_connect('localhost','root','','college');

   $sql = "DELETE FROM student_details WHERE ROLL = $roll";
   if(mysqli_query($conn,$sql)){
       header("Location : index.php");
   } else{
       echo "No Deleted";
   }

  

?>
