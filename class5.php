<?php
$sub = array("PHP","HTML","WEB tECH");
echo "<br>";
print_r($sub);
?>

<?php
$emp = array("hello","Mudit","shrey");
echo "<pre>";
print_r($emp);
echo "</pre>";

$subject= array(89,85,96,85,74);
for($x=0; $x<=4; $x++)
{
    echo $subject[$x]."<br>";
}
echo "<br>";

$courses = array("PHP","travel","Node js");
$courselength = count($courses);
for($x=0; $x<$courselength ; $x++)
{
    echo $courses[$x];
}
echo "<br>";
echo "<br>";




$university = array(array("A","Lpu","45") ,
    array("b","ims","50"),
    array("c","Lpu","60")
);
print_r($university);
echo "<br>";
echo "<br>";

$sub1 = array("PHP","HTML","WEB tECH");
echo "<br>";
print_r (var_dump($sub1));
?>
