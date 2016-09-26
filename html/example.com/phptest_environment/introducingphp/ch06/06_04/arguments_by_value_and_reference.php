<?php
/**
 * Created by PhpStorm.
 * User: stplus
 * Date: 20/09/16
 * Time: 08:16
 */
$number = 2;

//pass by number veranderd de waarde van de functie
function doubleIt($num){

    return $num *= 2;

}


//pass by reference veranderd de waarde van de variabele zelf. Je hoeft dus geen return waarde te definieeren
//function doubleItReference(&$num){
//    $num *= 2;
//}

$double = doubleIt($number);

//$doubleRef = doubleItReference($number);


echo '$doubled is '.$double.'<br>';
echo '$number is ' . $number . '<br>';

var_dump($double);
//echo '$doubleRef reference is ' . $doubleRef . "<br>";
//echo '$number reference is ' . $number . "<br>";