<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php</title>
</head>
<body>
<div class='container'>
    PHP DOC
    <div>
<?php
 $v=25;
 $v2=26;
 echo "sum: exp=",$v+$v2;
 echo "<br>";
 echo "mul : expr=",$v * $v2;
 echo "<h3>comparision Operators</h3>";
 echo "Is 1==4 :",var_dump(1==4);
 echo "<br>";
 echo "Is 1!=4 :",var_dump(1!=4);
 echo "<br>";
 echo "original=",$variable=5;
 echo "<br>";
 echo "post increment=",$variable++;
 echo "<br>";
 echo "post decrement=",$variable--;
 echo "<br>";
 echo "pre increment=",++$variable;
 echo "<br>";
 echo "pre decrement=",--$variable;
 echo "<br>";
 echo "<h3>Logical opearator</h3>";
 echo "Types are:<br>AND,OR,XOR,NOT<br> ";
 echo "<br>AND   op for true and true :",var_dump(true and true);
 echo "<br>AND op for true and false :",var_dump(true and false);
 echo "<br>OR op for true or false :",var_dump(true or false);
 echo "<br>OR op for false or false :",var_dump(false or false);
 echo "<br>XOR op for true xor false :",var_dump(true xor false);

 ?>
 <?php
 echo "<h2>Data Types</h2>";
 echo "<br>same as other languae and var_dump can be used to chek types  <br>";
 
 ?>
</body>
</html>