<?php
$fruits = array("Apple","Banana", "Mango");

echo $fruits[0]; // Apple
echo $fruits[1]; // Banana

$student = array{
    "name" => "Michael";
    "age"  => 21
    "course"  => "IT"
};

//Associative Array

echo "Name: " . $student["name"]. "<br>";
echo "Age: " . $student["age"]. "<br>";
echo "Course: " . $student["course"]. "<br>";

$students = array(
    array("name" => "Michael" , "age" => 21, "course" = "IT"),
    array("name" => "Anna" , "age" => 20, "course" = "CS"),
    array("name" => "John" , "age" => 22, "course" = "Math"),
);

// Multi dimentisnal array

echo $students[0]["name"] . "<br>";
echo $students[1]["course"] . "<br>";
echo $students[2]["age"] . "<br>";

$text = "apple,banana,orange";

$fruits1 = explode(",", $text);
print_r($fruits1);
echo"<br> <br>";

$fruits2 = ["apple","banana","orange"];

$text = implode("-" $fruits2);

echo $text;
?>

