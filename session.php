<?php
session_start();
echo "welcome, " .$_SESSION['username'];
echo "<br> Your favourite category is: " . $_SESSION["category"];  
echo "<br>";
?>