<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>

    <h1>PHP Basics Cheatsheet</h1>

    <h2>Variables and DataTypes</h2>

    <!-- php code is written within a demlimiter aka php tag  -->
    <?php 
        $name = "John";
        $age = 52;
        $isRetired = true;

        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Is retired?: " . ($isRetired ? "Retired" : "Not Retired") . "<br>";

    ?> 

    <h2>Strings and String Interpolation</h2>

    <?php

        $message = "Hello, ";
        $name = "Samantha";

        $value1 = 2;
        $value2 = 3;
        $sum = $value1 + $value2;

        echo $message . $name . ". Nice to meet you!" . "<br>";
        echo "The sum of " . $value1 . " and " . $value2 . " is " . $sum . "<br>";

        echo "Length of message variable using 'strlen': " . strlen($message) . "<br>";
        echo "Uppercase of message variable using 'strtoupper': " . strtoupper($name) . "<br>";
        echo "Substring 'substr(\$message, 0, 4)' creates a substring starting at 0 and ending at 4: This is " . substr($message, 0, 4) . "<br>";

    ?>

    <h2>Arrays</h2>

    <?php 

        $fruit = array('apple', 'banana', 'orange');
        $fruit[] = "papaya";
        echo "The first fruit of the '\$fruit' array is: " . $fruit[0] . "<br>";

        echo "<br>";

        //looping through an array
        for($i = 0; $i < count($fruit); $i++){
            $oneFruit = $fruit[$i];
            echo "The #" . ($i + 1) . " element in the array is: " . $oneFruit . "<br>";
        };

        echo "<br>";

        for($j = count($fruit) - 1; $j >= 0; $j--){
            $aFruit = $fruit[$j];
            echo "The #" . ($j + 1) . " element in the array is: " . $aFruit . "<br>";
        };

        //loop through the array and only print the even number        
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8 , 9, 10);
        $evenNumbers = array();
        $oddNumbers = array();

        for($x = 0; $x < count($numbers); $x++){
            if($numbers[$x] % 2 == 0){
                $evenNumbers[] = $numbers[$x];
            }else{
                $oddNumbers[]= $numbers[$x];
            };
        };

        echo "<br>";
        echo "The even numbers in the array are: " . "<br>";
        for($e = 0; $e < count($evenNumbers); $e++){
            $anEven = $evenNumbers[$e];
            echo $anEven . "<br>";
        }

    ?>


    
</body>
</html>