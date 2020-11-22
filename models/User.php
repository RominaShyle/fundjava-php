

<?php

class User{


public $first_name = 'emri 1';

public $last_name;

private $age = '';

public function setName($first_name){


    $this->first_name = $first_name;
}


public function getName(){

    return $this->first_name;
}


public function setAge($age){


    $this->age = $age;
}





}













?>