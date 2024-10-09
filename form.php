<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <?php
    if(isset($_GET["name"])){
        echo "<p>HI, ".$_POST["name"] ."</p>";
    }
    ?>
    <h2>Login Form</h2>
    <form action="login.php" method="">
        <label for="username">Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html> -->



<!-- Write a PHP program where each section has details such as a name, score, and status, you need to ensure that the formatting includes appropriate indentation for each section.

$sections is an associative array where each key represents a section (e.g., "Section A") and each value is an array containing details for that section (e.g., name, score, and status). -->


<?php
// Define sections as an associative array
$sections = [
    "Section A" => ["name" => "John", "score" => 85, "status" => "Passed"],
    "Section B" => ["name" => "Jane", "score" => 72, "status" => "Passed"],
    "Section C" => ["name" => "Bob", "score" => 60, "status" => "Passed"],
    "Section D" => ["name" => "Alice", "score" => 48, "status" => "Failed"]
];

// Print section details
foreach ($sections as $section => $details) {
    // echo "$section:\n";
    echo "  Name: " . $details['name'] ;
     echo "<br>";
    
    echo "  Score: " . $details['score'];
    echo "<br>";

    echo "  Status: " . $details['status'] ;
    echo "<br>";
    echo "<br>";
}
?>



<!-- Task 2:

Write a PHP Program where each section includes a course name and its associated details (name and copies), you can use an associative array to store the data and then iterate over it to print each section in the required format.

●$courses is an associative array where each key represents a course name (e.g., "C++", "PHP", "Laravel").
●Each key maps to another associative array containing "name" and "copies" for that course.
