<?php
function greetings()
{
    echo 'Say Hi to Functions!!!!';
}

function add($a,$b)
{
    return  $a+$b;
}

function findEvenOrOdd($n)
{
    if($n%2==0)
    {
        echo 'Even';
    }
    else
    {
        echo 'Odd';
    }
}
greetings();
$addition=add(23,45);

echo "<br>Adding two numbers ".$addition."<br>";

echo "Finding even or odd <br>";
findEvenOrOdd(13);

?>