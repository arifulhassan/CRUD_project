<?php

    $roll = $_GET['ROLL']; 
   
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender']; 
    $gpa = $_POST['gpa'];
    $city = $_POST['city'];
    $adress = $_POST['adress'];
    $mobile = $_POST['mobile'];


   

    $conn = mysqli_connect('localhost','root','','college');
$sql = "UPDATE student_details SET roll='$roll',name='$name',age='$age',gender='$gender',gpa='$gpa',city='$city',adress='$adress',mobile='$mobile' WHERE ROLL=$roll ";
if(mysqli_query($conn,$sql)) {
// echo "Insert Sucessfully";
   header("Location: show.php?ROLL=". $roll);

}else{
    echo "Not Inserted";
}


?>