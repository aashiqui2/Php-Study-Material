<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first php website
    <?php
    define('PI3', 3.14);
        echo "Hello world and this is printed using php";
        // Single line comment
        /*
            This
            is 
            a
            multi
            line
            comment
        */
    $variable1 = 5;
    $variable2 = 2;
    echo $variable1;
    echo $variable2;
    Echo $variable1 + $variable2;

// Operators in PHP

//1.Null Coalescing operator (??) --> This operator returns its first operand if it is set and not NULL. Otherwise it will return its second operand.

$firstName = "Manu";
$lastName = "Manjunatha";
//$fullName = $firstName ?? "Manu" . " " . $lastName ?? "Manjunatha"; --> This is wrong
$fullName =  ($firstName ?? "aashiqui") . " " . ($lastName ?? "bhai");
echo $fullName;
echo "<br>";
$mango;
$banana = "Banana";
$fruit = $mango ?? $banana ?? 'Apple';
echo $fruit; 

// 2.Spaceship Operator (<=>) -->This operator will return -1, 0 or 1 if the first expression is less than, equal to, or greater than the second expression.  

echo (10 <=> 10); // 0
echo (15 <=> 16); // -1

echo (18 <=> 11); // 1

// 3.Execution Operator (``) -->PHP backticks (``) execution operator is used to run shell commands.
$output = `dir`;
echo "<pre>$output</pre>";

// 4.Incrementing (++) and Decrementing (--) Operators 

    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;

// 5.String Operators (. and .=) 

$a = "Hello ";
$b = $a . "World!";
echo $a."</br>";
$x = "Hello ";
$x .= "World!";
echo $x;

// 6.Object and Class Operators 
// 7.Assignment Operator 

 $newVar = $variable1;
 // $newVar += 1;
 // $newVar -= 1;
 // $newVar *= 2;
 $newVar /= 2;
 echo "The value of new variable is ";
 echo $newVar;
 echo "<br>";

// 8.Arithmetic Operators 
  echo "<br>";
  echo "The value of varible1 + variable2 is ";
  echo $variable1 + $variable2;
  echo "<br>";
  echo "The value of varible1 - variable2 is ";
  echo $variable1 - $variable2;
  echo "<br>";
  echo "The value of varible1 * variable2 is ";
  echo $variable1 * $variable2;
  echo "<br>";
  echo "The value of varible1 / variable2 is ";
  echo $variable1 / $variable2;
  echo "<br>";
// 9.Comparison Operators 

    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

// 10.Logical Operators (&&/AND and ||/OR) 
// 11.Conditional Operators  (?) 
// 12.Bitwise Operators 
// 13.instanceof (type operator) 
?>
    <?php
        // Data types in php  
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array 
        // 6. Object
        echo "<br>Data types <br>";
        $var = "This is a string";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 67.1;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";
        echo PI3;
    ?>
    </div>
</body>
</html>
