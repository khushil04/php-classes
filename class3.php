<?php
$x= 25;
$z ="25";
var_dump($x==$z);
echo "<br>";
var_dump($x===$z);
echo "<br>";
// concatenate
echo ("hello world"."this is php class");
echo "<br>";

//concatenate 
$s1="khushil";
$s2="world";
echo $s1.=$s2;
echo "<br>";
echo $s1;
echo "<br>";
echo $s2;
//
//next class 27-08-24

$i = 1;
while ($i <= 5){
    
    echo "the number is " .$i. "<br>";
    $i++;
    
}
//teritory oprator

   # $x = 1;
   $var = isset($x) ? $x : "not set";
   echo "The value of x is $var";

   //null coalescing
   # $num = 10;
   $val = $num ?? 0;
   echo "The number is $val";

   //foreach loop;
   $colors = array("Red", "green","blue");
   foreach($colors as $value){
    echo $value;
   }

  


$lpu=array("name =>abc" ,"email =>abc@gmail.com", "age=>23");
foreach($lpu as $key => $value){
  echo $key. ":".$value. "<br>";
}


//
for($i=1; $i<=5; $i++){
    echo $i;
    if($i==4)
    {
        break;
    }
}

