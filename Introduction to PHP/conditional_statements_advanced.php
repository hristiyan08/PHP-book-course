<?php
//Switch-case construction
echo "-------- Switch-case construction -------- \n";
$year = 2024;
switch ($year) {
    case 2024: echo "It's 2024 \n"; break;
    case 2025: echo "It's 2025 \n"; break;
    case 2026: echo "It's 2026 \n"; break;
    default: echo "Unknown year \n"; break;
}

//Nested conditional statements

$age = 30;
$gender = "male";

if ($age < 18) {
    if ($gender == "male") {
        echo "Boy \n";
    }
    else {
        echo "Girl \n";
    }
}
else {
    if ($gender == "male") {
        echo "Man \n";
    }
    else {
        echo "Women \n";
    }
}