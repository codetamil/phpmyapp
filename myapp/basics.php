<!DOCTYPE html>
<html>
<body>

<?php

$a=10;
$cars=array("toyota","BMW","Land Rover","Cruise");

$length=count($cars);
echo "My first PHP script!".$a." <br> ";

//echo $cars[0]." <br> ".$cars[1]." <br> ".$cars[2];


for ($x = 0; $x < $length; $x++) {
    echo "  ".$cars[$x];
	echo " <br> 	";
}


$roombooking=array('2 nights',50,'3 days','1 more day');

$total=array_sum($roombooking);
print "total=$total";


?>

</body>
</html>