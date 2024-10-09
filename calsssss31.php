<!-- Write a PHP Program where each section includes a course name and its associated details (name and copies), you can use an associative array to store the data and then iterate over it to print each section in the required format.

●$courses is an associative array where each key represents a course name (e.g., "C++", "PHP", "Laravel").
●Each key maps to another associative array containing "name" and "copies" for that course. -->

<!-- <?php
$section = [
    "Section A" => ["courseName" => "Php" ,"Name" => "begining with php", "copies" => 8],
    "Section B" => ["courseName" => "c++", "Name" => "begining with c++" ,"copies" =>  8 ] ,
    "Section C" => ["courseName" => "laravel" , "Name" => "beginig with laravel" , "copies" => 8]
];
foreach($section as $section => $details){
    echo "CourseName: " .$details["courseName"];
    echo "<br>";

    echo "Name: " .$details["Name"];
    echo "<br>";

    echo "Copies: " .$details["copies"];
    echo "<br>";
    echo "<br>";
}
?> -->

<!-- <?php
$courses = [
    "PHP" => ["name" => "Beginning with PHP", "copies" => 8],
    "C++" => ["name" => "Beginning with C++", "copies" => 10],
    "Laravel" => ["name" => "Beginning with Laravel", "copies" => 5]
];

foreach($courses as $courseName => $details){
    echo "Course: " . $courseName . "<br>";
    echo "Book Name: " . $details["name"] . "<br>";
    echo "Copies: " . $details["copies"] . "<br>";
    echo "<br>";
}
?> -->


<?php

// $n = 5; 
// for($i = 1; $i <= 5; $i++) {
//     for($j = 1; $j <= $i; $j++) {
//         echo "A ";
//     }
//     echo "<br>";
// }
?>


<?php
$rows = 5;  // Define the number of rows

for($i = 1; $i <= $rows; $i++) {
    $letter = '1';  // Initialize the starting letter
    for($j = 1; $j <= $i; $j++) {
         echo $letter . " ";  // Print the current letter
        $letter++;  // Move to the next letter
    }
    echo "<br>";  // Move to the next line after each row
}
?>


<?php
// Define the associative array
$superhero = [
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
];

// Use foreach loop to iterate over the associative array and print key-value pairs
foreach($superhero as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
?>



<?php
$n =[1,2,3,4,5,8,9];
$a = strlength($n);
echo $a;

?>



<?php
function printFibonacci($n) {
    // Initialize the first two numbers in the Fibonacci series
    $a = 0;
    $b = 1;
    
    // Print the first Fibonacci number
    echo $a;
    // If the number of terms is greater than 1, print the rest of the series
    if ($n > 1) {
        echo " " . $b;
        
        // Loop to print the rest of the Fibonacci series
        for ($i = 3; $i <= $n; $i++) {
            $next = $a + $b; // Calculate the next Fibonacci number
            echo " " . $next; // Print the next Fibonacci number
            $a = $b; // Update $a to the previous $b
            $b = $next; // Update $b to the next Fibonacci number
        }
    }
    echo "<br>"; // New line after printing the series
}

// Example usage
printFibonacci(10); // Prints the first 10 terms of the Fibonacci series



?>



<?php
function factorialIterative($n) {
    // Initialize the result to 1
    $result = 1;
    
    // Loop to multiply result by each number from 1 to $n
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    
    // Return the computed factorial
    return $result;
}

// Example usage
$n = 5;
echo "The factorial of $n is: " . factorialIterative($n);
?>




<?php
// Define the associative array with names as keys and ages as values
$people = [
    "Alice" => 30,
    "Bob" => 25,
    "Charlie" => 35,
    "Diana" => 28
];

// Print the HTML structure
echo "<h1>List of People and Their Ages</h1>";
echo "<ul>";

// Loop through the associative array
foreach ($people as $name => $age) {
    echo "<li>$name is $age years old</li>";
}



// Close the unordered list
echo "</ul>";
?>
<?php
// Define an array where each element is a string representing a line of the pattern
$lines = [
    "Line 1: *****",
    "Line 2: ***",
    "Line 3: **",
    "Line 4: ****",
    "Line 5: *"
];

// Iterate over each element in the $lines array
foreach ($lines as $line) {
    // Print each line followed by an HTML line break
    echo $line . "<br>";
}
?>
