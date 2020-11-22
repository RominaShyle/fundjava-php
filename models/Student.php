<?php
class Student {


var $name;
var $last_name;
var $fos;
private $mark;



public function __construct($a, $b,$c){ 

    echo "Objekti u krijua";
    echo "<br>";
    $this->name = $a;
    $this->last_name = $b;
    $this->fos = $c;
   


}

public function setMark($mark){

   $this->mark = $mark;
   
}

public function getMark(){

    return $this->mark;
}

public function greet(){

     echo $this->name. " says Hi";
}



}

echo 123;

?>