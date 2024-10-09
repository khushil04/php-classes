<?php
session_start();

// Store session variables
$_SESSION['username'] = "khushil";
$_SESSION['category'] = "php";
echo "Your session has been started.<br>";

// Display the session variable
echo "Username: " . $_SESSION['username'] . "<br>";

// Unset a specific session variable
unset($_SESSION['username']);
echo "Session 'username' unset successfully.<br>";

// Destroy the session
session_destroy();
echo "Session destroyed successfully.<br>";

// Restart the session to set a new session variable
session_start();
$_SESSION["email"] = "tarunchoudhary@gmail.com";
echo "Email: " . $_SESSION["email"];
?>
