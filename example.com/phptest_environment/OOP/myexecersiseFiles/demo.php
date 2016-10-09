<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 9-10-16
 * Time: 12:36
 */
require 'class.Adress.inc.php';


echo '<h2> Instantiating Adress</h2>';
$address = new Address;

echo '<tt><pre>'. var_export($address , TRUE). '</pre></tt>';

echo '<h2>Setting Properties</h2>';
$address->street_adress_1 = 'Hanenburglaan 393';
$address->postal_code = '2563GP';
$address->city_name = 'Den Haag';
$address->subdivision_name = 'Zuid-Holland';
$address->country_name = 'Nederland';
echo '<tt><pre>'. var_export($address, TRUE) . '</pre></tt>';

echo '<h2> Display adress</h2>';
echo $address->display();

echo "<h2>Display protected access</h2>";

echo "<h2>Testing magic __get and __set</h2>";
unset($address->postal_code);
echo $address->display();