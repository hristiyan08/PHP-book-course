<?php

//For loop
for ($i = 1; $i <= 10; $i++) {  // $i -> control variable in loop. The loop will stop his iteration when condition gives false.

    //Body
    echo $i . "\n"; //from 1 to 10 (inc)
}

for ($i = 1; $i < 10; $i++) { //from 1 to 9 (not to 10)
    echo $i . "\n";
}

for ($i = 1, $j = 1; $i < 10; $i++, $j++) { // for loop with multiple control variables
    echo $j . "\n";
}
