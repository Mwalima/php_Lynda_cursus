<?php
/**
 * Define autoloader
 * @param type $class_name
 */
function __autoload($class_name){
    include './class.'.$class_name.'.inc.php';
}


echo '<h2>Instantiating AddressResidence</h2>';
$address_residence = new AddressResidence();

echo '<h2>Setting properties...</h2>';
$address_residence->street_address_1 = '555 Fake Street';
$address_residence->city_name = 'Townsville';
$address_residence->subdivision_name = 'State';
$address_residence->country_name = 'United States of America';
echo $address_residence;

echo "<tt><pre>".var_export($address_residence, TRUE)."</pre></tt>";

echo '<h2>Testing Address __construct with an array</h2>';
$address_business = new AddressBusiness(array(
  'street_address_1' => '123 Phony Ave',
  'city_name' => 'Villageland',
  'subdivision_name' => 'Region',
  'country_name' => 'Canada',
));
//echo $address_business;
//echo "<tt><pre>".var_export($address_business, TRUE)."</pre></tt>";
//
echo "<h2> Instantiating AddressPark</h2>";
$address_park = new AddressPark(array(
    'street_address_1'=>'2562XM',
    'street_address_2'=>'suite 2',
    'city_name'=>'Den Haag',
    'country_name'=>'Australia'
));
//
echo $address_park;
//echo "<tt><pre>".var_export($address_park, TRUE)."</pre></tt>";
//
echo "<h2> clone AddressPark</h2>";
$clone_addres_park = clone $address_park;
echo "<tt><pre>".var_export($clone_addres_park, TRUE)."</pre></tt>";
echo '$clone_addres_park is'.($address_park == $clone_addres_park ?
        ' ': ' not ').'a copy of $address_park';
//
//referencing an object to save memory usage
//echo '<h2>Copying AddressBusiness reference</h2>';
//$address_business_copy = &$address_business;
//echo '$address_business_copy is ' . ($address_business === $address_business_copy ?
//  '' : 'not ') . ' a copy of $address_business.';
//
//echo '<h2>Setting address_business_copy as a new AddressPark</h2>';
//$address_business = new AddressPark();
//echo '$address_business_copy is ' . ($address_business === $address_business_copy ?
//  '' : 'not ') . ' a copy of $address_business.';
//
//echo '<br/>$address_business is class ' . get_class($address_business) . '.';
//echo '<br/>$address_business_copy is ' . ($address_business_copy instanceof
//AddressBusiness ? '' : 'not ') . ' an AddressBusiness.';

echo "<h2>Typecating to an object</h2>";
$test_object = (object)12345;
echo "<tt><pre>".var_export($test_object, TRUE)."</pre></tt>";

echo $test_object->scalar;

try {
    echo "<h2>fetch an object from database</h2>";
$db_object = Address::load(1);
echo "<tt><pre>".var_export($db_object, TRUE)."</pre></tt>";
    
} catch (ExceptionAddress $ex) {
    
    echo $ex;
}
