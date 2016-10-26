<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * define autoloader to load class files automatically instead of require everything
 * @param $class_name
 */
function __autoload($class_name){
    include 'class.'.$class_name.'.inc';
}
echo '<h2> Instantiating Adress</h2>';
//$address = new Address;

echo '<tt><pre>'. var_export($address , TRUE). '</pre></tt>';

echo '<h2>Setting Properties</h2>';
$address->street_adress_1 = 'Hanenburglaan 393';
$address->postal_code = '2563GP';
$address->city_name = 'Den Haag';
$address->subdivision_name = 'Zuid-Holland';
$address->country_name = 'Nederland';
// calling an protected methode
$address->address_type_id = 1;
echo '<tt><pre>'. var_export($address, TRUE) . '</pre></tt>';

echo '<h2> Display adress</h2>';
echo $address->display();

echo "<h2>Display protected access</h2>";
unset ($address->postal_code);
echo $address;

echo "<h2>Testing magic __get and __set</h2>";
//overloading means to create a property dynamically that hassn`t been declared
unset($address->postal_code);
echo $address->display();

echo "<h2>Testing Adress __construct with an array</h2>";
//$construct_addres = new Address(array('street_address_1'=> 'Nicolaas tulpstraat','postal_code' => '2563XM',
//    'country_name'=>'Netherlands'));
echo $construct_addres->display();

echo "<h2>To string</h2>";
echo $construct_addres;

echo "<h2>Static property</h2>";

//echo '<pre><tt>'.var_export(Address::$valid_adress_types,TRUE).'</pre></tt>';
echo '<pre>'.var_export($construct_addres::$valid_adress_types,true).'</pre>';

echo "<h2>Testing valid type id trough static function with constant key</h2>";
$number_of_items = count(Address::$valid_address_types);
for($id=0;$id< $number_of_items;$id++) {
    echo "<div>$id:";
    echo Address::isValidAddressTypeId($id) ? 'valid' : 'invalid';
    echo "</div>";
}

require_once 'connect/mysqldb.php';
require 'functions/MyGuests.class.php';

$db_handle = DBConnect::getInstance();

$show_table = new MyGuests($db_handle);
echo $show_table->myGuests_selectRows();