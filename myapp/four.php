<?php
function bestwishes()
{
    echo'say hello to functions!!';
}
function mul($a,$b)
{
    return $a*$b;
}

function findthemax($n,$n1,$n2)
{
    if($n>$n1&&$n>$n2)
{
    echo 'max'.$n;
}
else if($n1>$n2)
{
    echo 'max'.$n1;
}
else
{
    echo 'max'.$n2;
}
}
echo "findthemax<br>";
findthemax(37,35,12);
bestwishes();
$mul=mul(55,40);
echo "<br>mul two number".$mul;

?>

