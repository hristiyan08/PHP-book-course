<?php

$text1 = "Hello";
$text2 = 'World!';
echo "$text1 $text2" . "\n"; //"" ->  reads variables and special symbols
echo '$text1 $text2' . "\n"; // '' -> doesn't read variables and special symbols

//Concatenation
echo "---- Concatenated strings -----\n";
echo $text1.$text2. "\n";

//Features
$name = "Ivan";
echo "$name, you have been promoted! \n"; //In old php versions '$name,' will get error

//To deal with this problem we should do that:
echo "{$name}, you have been promoted! \n";

// ? => Ternary operator
echo  (5 > 10) ? "Yes" :  "No" . "\n";

// ?? =>  Null coalescing operator
echo "------ Null coalescing operator ------\n";
$isNull1 = 1;
$isNull2 = null;
$isNull = $isNull1 ?? $isNull2; //This operator '??' checks if a variable is not set (never initialized) or has value null
echo $isNull . "\n";
