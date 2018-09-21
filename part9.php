<?php
ini_set('display_errors', 1);     // Show errors for debugging

echo "<h1>Hello World</h1>"
?>

$firstName = "Jane";                    // String type variable 
$lastName = "Doe";                      // String type variable
$age = 35;                              // Integer type variable 
$married = true;                        // Boolean type variable
$childrenNames = array("Alice", "Bob");            // Array type variable

$fullName = $firstName . " " . $lastName;                // Concatenation operator
$dogYears = $age/7;                           // Arithmetic operator
$isAdult = $dogYears > 4;                      // Comparison operator
$isSettled = $isAdult and $married;             // Integer type variable

function getFullName($firstName, $lastName)  {   // Function name
    return $firstName . " " . $lastName;         // Returned value

$fullName = getFullName($firstName, $lastName);   // Using variables
$fullName = getFullName("Alice" , "Doe");         // Using values

function getIsSettled($age, $married) {           // Function name
    $dogYears = $age/7;
    $isAdult = $dogYears > 4; 
    $isSettled = $isAdult and $marrried;
    return $isSettled;                             // Returned value
}  

$isSettled = getisSettled($age, $married);          // Using variables
$isSettled = getisSettled(5, false);                // Using values 

