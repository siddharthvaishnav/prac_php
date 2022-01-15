<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tuttorial</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: rgb(233, 197, 176);
        margin: auto;
        padding: 23px;

        font-color
    }
</style>

<body>
    <div class=container>
        <h1>Learn about PHP</h1>
        <p>Your party status here</p>
        <?php
        $age=19;
         
        
        if ($age>18) {
            echo "You can go to the party";
        }
        else {
            echo "Sir sorry you can't go to the party";
        }
        $lang = array("Python ","c++","java","nodeJS");
        echo " :",$lang[0];
        $a=0;
        while ($a <= 10) {
            echo "<br>the value is :",$a;
            $a++;
        }
        $a=0;
        while ($a < count($lang)) {
            echo "<br> The languages are: ",$lang[$a];
            $a++;
        }
        foreach ($lang as  $value) {
            echo "<br> langues :",$value;
        }
    ?>


    </div>

</body>

</html>