<?php

print_r($_POST);

echo "<br>";

print_r($_GET);

echo "<br>";

print_r($_REQUEST);
echo "<br>";
if(isset($_POST['gender'])){
    $gender= $_POST['gender'];
}
else{
    $gender= " ";
}


echo "This is the user's gender:".$gender;
unset($_POST['gender']);

print_r($_POST);
