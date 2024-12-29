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

/*Logical operators*/
echo "-------- Logical operators -------- \n";
// === -> is equal
if (3 === (2 + 1)){
    echo "3 is equal to 3 \n";
}

// != -> is not equal

if (3 != (1 + 1)){
    echo "3 is not equal to 2 \n";
}

// < -> less than

if (3 < 5) {
    echo "3 is less than 5 \n";
}

// > -> greater than

if (3 > 2){
    echo "3 is greater than 5 \n";
}

// >= -> greater than or equal to

if (4 >= 4){
    echo "4 is equal to 4\n";
}

if (4 >= 3){
    echo "4 is greater than 3 \n";
}

// <= -> less than or equal to

if (3 <= 3){
    echo "3 is equal to 3\n";
}

if (2 <= 3){
    echo "2 is less than 3 \n";
}

