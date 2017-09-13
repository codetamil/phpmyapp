<?php

$a=90;
$b=89;

$car='Volvo';

echo 'Welcome to php programming language class 1'.$car."<br>";

$a=$a+$b;

$names=array("jack", "Henry", "Raj");

//echo $names[0].$names[1].$names[2];

$arraylength=count($names);

for($x = 0; $x < $arraylength; $x++) {
    echo $names[$x];
    echo "<br>";
}

//echo $a;

?>


