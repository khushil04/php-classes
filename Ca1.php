
Question 1


<?php
echo "<br>";
 $arr = [5,2,8,3,1];
 $result = max($arr);
 echo "Largest no is ".$result;

 ?>




<?php
$arr = [5, 2, 8, 3, 1];
sort($arr); 
echo "<br>"; 

echo "<pre>";
print_r($arr);
echo "</pre>";

?>


Question 2
<?php
echo "<br>";

 for($i = 1; $i <= 5; $i++) {
     for($j = 1; $j <= $i; $j++) {
         echo $j." ";
     }
     echo "<br>";
    
 }
 echo "<br>";
 ?>


