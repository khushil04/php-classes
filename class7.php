<?php
$courses=array("php","laravel","node js","html","sql","1");
print_r(array_chunk($courses,2,));
echo"<br>";
echo"<br>";
?>
<!-- array chunk split the  -->

<?php
$courses=array("a"=>"php","b"=>"laravel","c"=>"node js","d"=>"html","e"=>"sql","f"=>"1");
print_r(array_chunk($courses,2,true));
echo"<br>";
echo"<br>";
?>

<?php
$a1=array("a"=>"php","b"=>"laravel","c"=>"node js");
$a2=array("d"=>"html","e"=>"sql","f"=>"1");
print_r(array_diff($a1,$a2));
echo"<br>";
echo"<br>";
?>

<?php
$courses=array("a"=>"php","b"=>"laravel","c"=>"node js","d"=>"html","e"=>"sql","f"=>"1");
$flippedValues=(array_flip($courses));
print_r($flippedValues);
echo"<br>";
echo"<br>";

?>


<?php
$a=array("a"=>"volvo","b"=>"bmw","c"=>"audi");
$a3=array("a"=>1,"b"=>"2","c"=>"4");
print_r(array_reverse($a));
print_r(array_search("red",$a3));
print_r(array_search(1,$a3,true));
echo"<br>";
print_r(array_slice($a,1,2));
echo"<br>";
echo"<br>";
?>

?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
