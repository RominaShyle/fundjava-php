<?php 

#SUPER GLOBALS jane !!!ARRAYS!!!!!

$x = 12;
$y = 20;

function shuma(){

    $GLOBALS['z'] = $GLOBALS['y'] + $GLOBALS['x'];
}
shuma();
echo $z; 




// $_REQUEST

//$_GET
//$_POST

// echo "<pre>";
// var_dump($_REQUEST);
// echo "</pre>";

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";






?>