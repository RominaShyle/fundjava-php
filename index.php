
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



echo "<h1> $color </h1>";
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

?>
<br>


<?php
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
myFunction("hi");







# FUNKSIONET E ARRAYS

$arr_ = array(); //<--Krijimi i nje array te ri
// arr_keys() --> Nxjerr gjithe keys te nje array
//array_push() -> shton elemente ne fund te nje array
//array_pop()-> heq elementin e fundit te nje array 
//Krijoni nje array ($arr_) me gjithe celesat e $ages
//sizeof() => nxjerr madhesine e array
//count() = > alias i sizeof
//sort()

/*outputi :
 0 => "Peter" 
 1 =>"Anna" 
 2 =>"Lexie"
*/

$ages = array(
    "Peter"=>22,
    "Anna"=>18,
    "Lexie"=>12
);



foreach($ages as $key=>$value){

    array_push($arr_,$key);

}

echo "<pre>";
var_dump($arr_);
echo "</pre>";

array_pop($ages);
echo "<pre>";
var_dump($ages);
echo "</pre>";



//krijoni nje array me numra dhe afishoni shumen e gjithe elementeve 

/* 
psh: [9,10,3,2,6]
Output: Shuma e elementeve eshte : 30
*/



$numrat = [9,10,3,2,6];
$shuma = 0;
$avg = 0;



for($i=0; $i<sizeof($numrat); $i++){


if($i == sizeof($numrat) - 1 ){
    echo "$numrat[$i] = ";

}else
    echo "$numrat[$i] + ";
    $shuma = $shuma + $numrat[$i];

}

echo  $shuma . "<br> " . $shuma/$i;


echo "<br> Prodhimi i numrave eshte: " . array_product($numrat);
sort($numrat);
echo "<pre>";
var_dump($numrat); 
echo "</pre>";




?>

</body>
</html>