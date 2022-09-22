<?php
$insert = false;
if(isset($_POST['name'])){
  
    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "success connecting to the db";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    $sql = "INSERT INTO 'trip'.'trip' ('name', 'age', 'gender', 'email', 'phone', 'other', 'dt') VALUES ('$name', '$age', '$gender', '$email', $phone', '$desc', ' current_timestamp());";
    //echo $sql;

    if($con->query($sql) == true){
        //echo "successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        $not_insert = true;
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="background.jpg" alt="" class="mit meerut">
    <div class="container">
       <h1>welcome to mit meerut us trip form </h1> 
       <p>Enter your details and submit this form to confirm your participation in the trip </p>
       <?php
       if($insert == true)
       echo "<p class="submitmsg">thanks for submitting your form. we are happy to see you joining us for the us trip</p>" 
       }
       ?>
       <form action="index.php" method="post">
           <input type="text" name="name" id=="name" placeholder="Enter your name">
           <input type="text" name="age" id=="age" placeholder="Enter your age">
           <input type="text" name="gender" id=="gender" placeholder="gender">
           <input type="email" name="" id="email"placeholder="enter your email">
           <input type="phone" class="phone"placeholder="enter your phone">
           <textarea name="desc" id="desc" cols="30" rows="10" class="name"placeholder="Enter your other information here......""></textarea>
           <button class="btn">submit></button>
         

        </form>

          

    </div>
   <script src="index.js"></script>

</body>
</html>






