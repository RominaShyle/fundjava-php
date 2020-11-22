<?php


require_once "models/Student.php";
$student = new Student('John', 'Doe', 'Biology', 10);


echo "<pre>";
var_dump($student);

echo "</pre>";

$student->name = 'John';
$student->last_name = 'Doe';
$student->fos = 'Maths';

$student->setMark(10);
echo "nota e studentit $student->name eshte: ". $student->getMark();


echo "<pre>";
var_dump($student);

echo "</pre>";

$student->greet(); 
//$st2 = new Student();
//echo $st2->name;


//echo "nota e studentit $st2->name eshte: ". $st2->getMark();

?>