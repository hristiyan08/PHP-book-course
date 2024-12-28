<?php

//if statement
$num1 = 5;
if ($num1 >= 10) {
    echo "$num1 is greater than 10 \n" ;
}

// if-else statement

$num2 = 5.5213;
if ($num2 >= 10) {
    echo "$num2 is greater than 10 \n";
}
else{
    echo "$num2 is less than 10 \n";
}

// elseif statement
$num3 = 0;

if ($num3 % 2 === 0 && $num3 != 0){
    echo "num3 is even number \n";
}
else if ($num3 % 2 === 1){
    echo "num3 is odd number \n";
}
else{
    echo "num3 is 0 \n";
}

//Logical operators
