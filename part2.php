<?php
//Functions
function meet($name) {
    return "Hello, $name!";
}
echo greet("viewers");

//Array
$fruits = ["Apple", "Banana", "Mango"];   //Indexed Array
echo $fruits[0]; // Output: Apple

$age = ["Ali" => 35, "Ahmed" => 30];  //Associate Array
echo $age["Ali"]; // Output: 35

$students = [        //Multi Dimensional Array
    ["Ali", 25],
    ["Ahmed", 30]
];
echo $students[0][0]; // Output: Ali
?>