<?php
echo "<h2> Math Functions </h2>" ;

// 1. abs() - return absolute value;
$number = -10;
echo "abs($number) = " . round($number) ."<br>";

// 2. round() - rounds a number;
$number = 4.6;
echo "round($number) = " . round($number)."<br>";

// 3. ceil() - rounds up;
$number = 4.2;
echo "ceil($number) = " . round($number)."<br>";

// 4. floor() - rounds dowm;
$number = -10;
echo "floor($number) = " . round($number)."<br>";


// 5.  pow() - power of a number;
$base = 2
$exp = 3;
echo "pow($base, $exp) = " . pow($base, $exp)."<br>";

// 6. sqrt() - square root;
$number =  16;
echo "sqrt($number) = " . sqrt($number)."<br>";

// 7. max() / min() - finds larget/smallest;
echo "max(1,5,3) = " . max(1,5,3) ."<br>";
echo "min(1,5,3) = " . min(1,5,3) ."<br>";

// 8. rand() - random number;
echo "rand(1,100) = " . rand(1,100)."<br>";


/////////////////////////////////////////////////////////////////////////////////
//String Functions

echo "<h2> String Fucntions </h2>"

//1. strlen() - get string length
$str = "Hello World";
echo "strlen($str) =" . strlen($str). "<br>";

//2. strtoupper() - convert to uppercase
echo "strtoupper($str) =" . strtoupper($str). "<br>";

//3. strtolower() - convert to lowercase
$str = "Hello World";
echo "strtolower($str) =" . strtolower($str). "<br>";

//4. explode() - split string to array
$str3 = "apple,banana,orange";
$fruits = explode("," , str3);
echo "explode($str) =";
print_r($fruits);
echo "<br>";

//5. implode() - joined array into string
$joined = implode("-", $fruits);
echo "implode("-", $fruits) =" .$joined "<br>";

//6. strrev() - reverse a string
echo "strrev($str) =" . strrev($str). "<br>";

?>