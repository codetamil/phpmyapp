 <?php
 $a=23;
 $b=52;
 $car='vinoth';
 echo 'welcome to php'.$car."<br>";
 $a=$a/$b;
 echo $a;
  $names=array("ramya","Sarany","kavitha");
  //echo $names[0].$names[1].$names[2];
  $arraylenth=count($names);
     for($x=0;$x<$arraylenth;$x++){
         echo $names[$x];
         echo"<br>";
         } 
   ?>