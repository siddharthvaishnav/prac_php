

<?php 
if (isset($_POST['name'])) {
    
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
if (!$con) {
    die("Connection failed". mysqli_connect_error());

}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$desc=$_POST['desc'];
$sql="INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `phone`, `email`, `other`) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$desc');";

if ($con->query($sql)==TRUE) {
    //echo "Successfully inserted";
    $insert=true;
}
else {
    echo "error:$sql <br> $con->error";

}
$con->close();}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;400&display=swap" rel="stylesheet">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="AMC">
    <div class="container">
        <h1>Welcome to AMC Trip Booking form</h1>
        <p>Enter Your details for participation to confirm your position
        </p>
      
     
        <?php   if($insert==true){
            echo "<p class='submsg'>Thanks for Submitting the form ,we are happy that you joined </p> " ;}
           ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your text"></textarea>
            <button class="btn">Submit</button>


        </form>

    </div>
    <script src="index.js"></script>
</body>

</html>