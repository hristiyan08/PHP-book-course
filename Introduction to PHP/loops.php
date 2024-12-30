<?php

/* For loop - minimum iterations -> 0 */

echo "--- Numbers from 1 to 10 --- \n";
for ($i = 1; $i <= 10; $i++) {  // $i -> control variable in loop. The loop will stop his iteration when condition gives false.

    //Body

    echo $i . "\n"; //from 1 to 10 (inc)
}

echo "--- Numbers from 1 to 9 --- \n";
for ($i = 1; $i < 10; $i++) {
    echo $i . "\n";//from 1 to 9 (not to 10)
}

echo "--- For loop with multiple control variables --- \n";
for ($i = 1, $j = 1; $i < 10; $i++, $j++) { // for loop with multiple control variables
    echo $j . "\n";
}

//echo "--- Infinite loop --- \n";
//for ($i = 1;;$i++){  //infinite loop. The loop will stop his iteration when exceed the time of execution
//     echo $i . "\n";
//}


/* While loop - minimum iterations -> 0*/
echo "--- Numbers from 1 to 10 (while loop) --- \n";
$k = 1;
while ($k <= 10){ //The loop will stop his iteration when condition gives false.

    //Body

    echo $k . "\n";
    $k++;
}

/*Do while loop - Minimum iterations -> 1. */

echo "--- Numbers from 1 to 10 (do while loop) --- \n";
$m = 1;
do{
    echo $m . "\n";
    $m++;
}
while ($m <= 10);//The loop will stop his iteration when condition gives false.


//Operator break  - exit from loop

echo "--- Numbers from 1 to 4 (break operator) --- \n";
$z = 1;
while ($z <= 10){
    if ($z == 5){
        break;
    }
    echo $z . "\n";
    $z++;
}

//Continue operator - new iteration

//Task -> print whole even integer numbers [1;100]
echo "--- Even Numbers from 1 to 100 (continue operator) --- \n";
$r = 1; // Start from 1 to handle odd condition properly
while ($r <= 100) {
    $r++; // Increment $r first to ensure we don't skip even numbers
    if ($r % 2 === 1) {
        continue;
    }
    echo $r . "\n";
}
