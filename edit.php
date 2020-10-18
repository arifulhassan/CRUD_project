<?php
    $roll =  $_GET['ROLL'];

   $conn = mysqli_connect('localhost','root','','college');

   $sql = "SELECT * FROM student_details WHERE ROLL = $roll";
   $result = mysqli_query($conn,$sql);

   $std = mysqli_fetch_assoc($result);
  //  var_dump($std);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<br><br><br>  
  
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <a class= "btn btn-info" href="index.php">Student List</a>

            </div>
            <div class="col-md-9">
            <h2>Edit Student</h2>
              <hr>  
             
              <form action="update.php?ROLL=<?php echo $roll ?>" method="POST">

    <div class="form-group">
    <label for="ROLL">Roll : </label>
    <input type="text" required placeholder="Enter your roll" class="form-control" name="roll" value="<?php echo $std['ROLL'] ?>">

 </div>
  <div class="form-group">
    <label for="NAME">Name : </label>
    <input type="text"  required placeholder="Enter your name" class="form-control" name="name" value="<?php echo $std['NAME'] ?>">
 </div>
 
 <div class="form-group">
    <label for="Age">Age : </label>
    <input type="text" required placeholder="Enter your age" class="form-control" name="age" value="<?php echo $std['Age'] ?>">
 </div>

 
 <div class="form-group">
    <label for="GENDER">Gender : </label>
    <input type="text" required placeholder="Enter your gender" class="form-control" name="gender" value="<?php echo $std['GENDER'] ?>">
 </div>

 <div class="form-group">
    <label for="GPA">GPA : </label>
    <input type="text" required placeholder="Enter your GPA" class="form-control" name="gpa" value="<?php echo $std['GPA'] ?>">
 </div>

 <div class="form-group">
    <label for="CITY">City : </label>
    <input type="text" placeholder="Enter your city" class="form-control" name="city" value="<?php echo $std['CITY'] ?>">
 </div>

 <div class="form-group">
    <label for="Date_Of_Birth">Birth : </label>
    <input type="text" required placeholder="Enter your city" class="form-control" name="date_of_birth" value="<?php echo $std['Date_Of_Birth'] ?>">
 </div>

 <div class="form-group">
    <label for="Adress">Adress : </label>
    <input type="text" placeholder="Enter your adress" class="form-control" name="adress" value="<?php echo $std['Adress'] ?>">
 </div>

 <div class="form-group">
    <label for="Mobile">Mobile : </label>
    <input type="text" required placeholder="Enter your mobile" class="form-control" name="mobile" value="<?php echo $std['Mobile'] ?>">
 </div> 


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>