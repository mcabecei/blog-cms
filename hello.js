alert("Hello World");

document.write("<h1>Hello World</h1>") 

var firstName = "Jane";                     // String type variable
var lastName = "Doe";                       // String type variable
var age = 35;                               // Number type variable
var married = true;                         // Boolean type variable
var childrenNames = ["Alice", "Bob"];       // Array type variable
var husband = { firstName: "John", lastName: "Doe", age: 35 }    
                                            // Object type variable

 var fullName = firstName + " " + lastName;        // Concatenation operator
 var dogYears = age/7;                             // Arithmetic Operator
 var isAdult = dogYears > 4;                       // Comparison operator
 var isSettled = isAdult && married;               // Integer type variable

 function getFullName(firstName, lastName) {     // Function name
    return  firstName + " " + lastName;         // Returned value
}

function getIsSettled($age, $married) {         // Function name 
    $dogYears = $age/7;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married;
    return $isSettled;                          // Returned value 
}

$isSettled = getIsSettled($age, $married);      // Using variables 
$isSettled = getIsSettled(5, false);            // Using values 

if (isSettled) {
    document.write(fullName + " is settled.");
} else {
    document.write(fullName + " is not settled.");
}

childrenNames.forEach(function(childName) {
    document.write("<li>" + childName + " 
   li>");
});