<?php

/* Old way to get data*/
//$username1 = $_GET['username']; //if we use get method in html form
//$username2 = $_POST['username']; //if we use post method in html form
$username3= $_REQUEST['username']; //if we don't know which method (works for get and post)
echo $username3 . "<br>";


/* New way to get data */

$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW); // Get the password
$password = password_hash($password, PASSWORD_DEFAULT);  //hash the password
echo $password;

if (isset($_REQUEST['save-data'])){
    setcookie('isLogged', 'Yes', time() + 3600, '/');
}




