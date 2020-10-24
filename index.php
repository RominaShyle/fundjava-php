
<?php echo 123;
define("MY_TITLE", "Hyrje ne php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php echo MY_TITLE; ?></title>
</head>


<style>

<?php
/*
$ngjyra = "red";
echo "
h1{
    color:$ngjyra
}";
*/
?>

</style>

<body>

<?php


$color = "#a5724e";
$numer = null;
$numer_1 = 1234.5555;
$COLOR = "E kuqe";



echo "<h1 > $color </h1>";
echo "<hr> The sky is ". $color .'.';
//echo gettype($color);


//$arr = [2,3,5,7];
//indexed array
$arr = array(12,24,36,5);

for($i=0;$i<sizeof($arr);$i++){
    echo "<br>";
    echo $arr[$i].  " eshte ne indeksin $i";
}
echo "jemi ketu";
foreach($arr as $key=>$item){
    
    echo "<br>";
    echo "$item eshte ne indeksin $key";
   

}



echo "<pre>";
var_dump($arr);
echo "</pre>";

//ASSOCIATIVE ARRAYS

$ages = array(
    "Peter"=>22,
    "Anna"=>18,
    "Lexie"=>12
);
echo "<pre>";
var_dump($ages);
echo "</pre>";


$colors = array(
    "red"=>"#ff0000",
    "blue"=>"#0000ff",
    "green"=>"#00ff00",
    
);

echo "<br>";

foreach($colors as $key=>$item){
    if($key == "red")
     echo "<h1 style='color:$item'> $key </h1>";
    else if($key== 'blue' || $key== 'green')
    echo "<h1 style='color:$key'> $item </h1>";
     else
     echo "<h1> $key </h1>";
}




function myFunction($var){

    echo "<script> alert('$var')</script>";
}
myFunction();
?>



    


</body>
</html>