<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 25-9-16
 * Time: 20:04
 */
//$xmas2016= strtotime('dec 25 2016');
//echo date('l, F, j, Y',$xmas2016);

$dateTime1 = new DateTime();
$dateTime2 = new DateTime();

$denHaag = new DateTimeZone('Pacific/Aruba');
$dateTime1->setTimestamp($denHaag);

echo $dateTime2->format('g:ia, l, F, j, Y').' <br>';
echo $dateTime1->format('g:ia, l, F, j, Y').' <br>';