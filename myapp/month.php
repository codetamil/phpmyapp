<?php


function selectMonth($m)

{

switch($m)
{

case 1:
echo "January days 31";
break;

case 2:
echo "February days 28";
break;

case 3:
echo "March days 31";
break;

case 4:
echo "April days 30";
break;

case 5:
echo "May days 31";
break;

case 6:
echo "June days 30";
break;

case 7:
echo "July days 31";
break;

case 8:
echo "August days 31";
break;

case 9:
echo "September days 30";
break;

case 10:
echo "October days 31";
break;

case 11:
echo "November days 30";
break;

case 12:
echo "December days 31";
break;

default:
echo "Try again";
break;
}



}
selectMonth(5);

?>