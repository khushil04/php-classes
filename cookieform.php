<form action="" method="POST">
<input type="text" name="user">
<input type="submit" name ="set" value="set">
<input type="submit" name ="del" value="del">

</form>

<?php

if(isset($_POST['set']))
{

$cookie1 = $_POST['user'];
setcookie($cookie1, $cookie1, time() + 3600);

?>

<?php
if(isset($_COOKIE[$cookie1])) 
{
     echo "Cookie '" . $cookie1 . "' has been set<br>";
     echo "Value is: " . $_COOKIE[$cookie1];
} 
else 
{
     echo "Cookie '" . $cookie1 . "' is not set";
}
}
?>


<?php

if(isset($_POST['del']))
{

     $cookie1 = $_POST['user'];
     setcookie($cookie1,"kjhhjb", time() + 3600);
     echo $_COOKIE[$cookie1]. " has been deleted";
}

?>




<!-- create cookie -->

<?php
$cookie_name = "user";
$cookie_value = "nav kaur";
setcookie($cookie_name, $cookie_value, time() + 5); // 86400 = 1 day

if(isset($_COOKIE[$cookie_name])) 
{
     echo "Cookie '" . $cookie_name . "' has been set<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
} 
else 
{
     echo "Cookie '" . $cookie_name . "' is not set";
}
?>






<!-- //set cookie -->
<?php
echo "Welcome to the world of cookies<br>";
echo time();
setcookie("category","Books",time()+ 86400,"/");
echo "The cookie is set<br>";

?>



<!-- check cookie -->
<?php
setcookie("test_cookie", "test", time() + 5);
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>


<!-- modifyform.php -->
<?php
$cookie_name = "user";
$cookie_value = "Lalit Verma";
setcookie($cookie_name, $cookie_value, time() + 5);

if(isset($_COOKIE[$cookie_name])) 
{
     echo "Cookie '" . $cookie_name . "' has been set<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
} 
else 
{
     echo "Cookie '" . $cookie_name . "' is not set";
}
?>