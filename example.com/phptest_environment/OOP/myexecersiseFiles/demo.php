<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 9-10-16
 * Time: 12:36
 */

/**
 * define autoloader to load classfiles automatically instead of require everything
 * @param $class_name
 */
function __autoload($class_name){
    include 'class.'.$class_name.'.inc';
}
echo '<h2> Instantiating Adress</h2>';
$address = new Address;

echo '<tt><pre>'. var_export($address , TRUE). '</pre></tt>';

echo '<h2>Setting Properties</h2>';
$address->street_adress_1 = 'Hanenburglaan 393';
$address->postal_code = '2563GP';
$address->city_name = 'Den Haag';
$address->subdivision_name = 'Zuid-Holland';
$address->country_name = 'Nederland';
// calling an protected
$address->address_type_id = 1;
echo '<tt><pre>'. var_export($address, TRUE) . '</pre></tt>';

echo '<h2> Display adress</h2>';
echo $address->display();

echo "<h2>Display protected access</h2>";

echo "<h2>Testing magic __get and __set</h2>";
//overloading means to create a property dynamically that hassn`t been declared
unset($address->postal_code);
echo $address->display();

echo "<h2>Testing Adress __construct with an array</h2>";
$construct_addres = new Address(array(
    'street_address_1'=> 'Nicolaas tulpstraat',
    'postal_code' => '2563XM',
    'country_name'=>'Netherlands'));
echo $construct_addres->display();

echo "<h2>To string</h2>";
echo $construct_addres;

echo "<h2>Static property</h2>";
echo '<pre>'.var_export($construct_addres::$valid_adress_types,true).'</pre>';

echo "<h2>Constanten</h2>";
for($id=0;$id< count($construct_addres::$valid_adress_types);$id++) {
    echo "<div>$id:";
    echo Address::isValidAddressTypeId($id) ? 'valid' : 'invalid';
    echo "</div>";
}

