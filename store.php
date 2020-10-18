<?php

    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender']; 
    $gpa = $_POST['gpa'];
    $city = $_POST['city'];
    $date_of_birth = $_POST['date_of_birth'];
    $adress = $_POST['adress'];
    $mobile = $_POST['mobile'];


   

    $conn = mysqli_connect('localhost','root','','college');
$sql = "INSERT INTO student_details VALUES('$roll','$name','$age','$gender','$gpa','$city','$date_of_birth','$adress','$mobile');";
if(mysqli_query($conn,$sql)) {
// echo "Insert Sucessfully";
   header("Location: index.php");

}else{
    echo "Not Inserted";
}


?>