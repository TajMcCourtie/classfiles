<?php
$file= fopen("vegetables.txt", "r");
echo "All of vegetables in the file <br>";

while(! feof($file))
{
    echo fgets($file). "<br>";
}

fclose($file);

echo "<br>";

$file1 = fopen("fruits.txt", "r");
echo "All of the fruits file <br>";

while (!feof($file1))
{
    $fruit= fgets($file1);
}
$fruits = explode(" ", $fruit);

foreach($fruits as $fruit)
{
    echo $fruit. "<br>";
}
 fclose($file1);


$fhandle = fopen("fruits.txt", "a");
echo "<b>Adding apricot and blueberry to the fruits.txt file </br>";
fwrite ($fhandle, "\n");
fwrite($fhandle, "apricot");
fwrite($fhandle, "\n");
fwrite($fhandle, "blueberry");
fclose($fhandle);

$fhandle =fopen("fruits.txt", "r");
while(!feof($fhandle))
{
    $file1 = fgets($fhandle);
    echo $file1."<br>";
}

fclose($fhandle);




?>
