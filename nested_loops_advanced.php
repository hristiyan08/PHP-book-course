<?php

echo "-------- Nested Loops Advanced -------- \n";
//Multiply table
for($i = 1; $i <= 10; $i++){
    for($j = 1; $j <= 10; $j++){
        $result = $i * $j;
        echo "$i * $j = $result\n";
    }
}