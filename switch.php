<?php
$today ="wednesday";

switch($today){
    case "sunday":
        echo "pray for us sinners.";
        break;
        
    case "wednesday":
        echo "ladies night, take her out for dinner";
        break;
        
    case "saturday":
        echo "take care as you go out tonight";
        break;
        
    default:
        echo "have a nice day at work";
        break;
}

echo "<br>";

function ifexample($first_number, $second_number)
{
    
    if($first_number > $second_number)
    {
        echo "$first_number is greater than $second_number";
        
    }
    
    else if ($first_number == $second_number)
    {
        echo "$first_number is equal to $second_number";
    }
    else
    {
        echo "$second_number is greater than $first_number";
    }
    
}

$first = 7;

$second = 7;

ifexample($first, $second);

echo "<br>";

for($i=0; $i<10; $i++)
{
    $product = 10* $i;
    echo "The product of 10 * $i is $product <br>";
    
}

echo "<br>";

$animal_list = array("lion", "tiger", "zebra", "gazelle");

foreach($animal_list as $array_values)
{
    echo $array_values . "<br>";
}

echo "<br>";
//Associative Array
$persons = array("Mary" => "Female", "John"=> "Male", "Mirriam" => "Female");

foreach($persons as $key => $value)
{
    echo "key is $value"."<br>";
}

?>
