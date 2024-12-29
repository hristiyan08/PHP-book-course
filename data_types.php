<?php

//Integer
$num1 = 5;
$num2 = 10;
$num2 = 3;
echo $num1 + $num2 . "\n";
echo $num1 - $num2 . "\n";

//String
$text1 = "Hello";
$text2 = "Peter";
$symbol = "!";
echo "$text1 $text2$symbol" . "\n";

//Difference between quotation marks
$textExample = 'Hello $text2!';    // All content is string
$textExample2 = "Hello $text2!";   // Give access to variables in the current string

//Double
$doubleNum1 = 16.2;
$doubleNum2 = 2;
echo $doubleNum1 / $doubleNum2 ."\n";

//Arrays
$ints = [1,2,3,4,5,6,7,8,9];
echo $ints[1] * $ints[2] . "\n";

$strings = ["PHP", "Java", "Python"];
echo $strings[0] . "\n";


//Constants
define('num1', 3);
echo num1 . "\n";

define('text3', "Hello World!");
echo text3 . "\n";


//Destroy a variable
$countOfPages = 5;
unset($countOfPages);

//Set values of variables

$a = 5;
$a = "Five";
echo "------------------- \n";
echo $a . "\n";

echo "==================== \n";

echo ".....................  \n";
$b = "String";
echo $b . "\n";

//Basic operations with integers
echo "\n";
echo "\n";
//Addition (+)
echo "....... Addition .........  \n";
$num1ToSum = 5;
$num2ToSum = 10;
echo $num1ToSum + $num2ToSum . "\n";

//Subtraction
echo "....... Subtraction .........  \n";
$num1ToDiff = 19.5;
$num2ToDiff = 9.5;
echo $num1ToDiff - $num2ToDiff . "\n";

//Multiplication
echo "....... Subtraction .........  \n";
$num1ToMultiply = 2;
$num2ToMultiply = 4;
echo $num1ToMultiply * $num2ToMultiply . "\n";

//Division
echo "....... Division .........  \n";
$num1ToDivision = 12;
$num2ToDivision = 4;
echo $num1ToDivision / $num2ToDivision . "\n";

//Modal division
echo "....... Modal division .........  \n";
$num1ToModalDivision = 13;
$num2ToModalDivision = 2;
echo $num1ToModalDivision % $num2ToModalDivision . "\n";

//Advanced operations
echo "....... Advanced operations .........  \n";
echo (2 + 3) * 2 . "\n";
echo 2 + 3 * 2 . "\n";

//Increment
echo "....... Increment .........  \n";
$num1 = 5;
$num1++;
echo $num1 . "\n";

//Decrement
echo "....... Decrement .........  \n";
$num3 = 2;
$num3--;
echo $num3 . "\n";

