<?php
//function is not reausale
//echo phpversion();

//gebruik van de assignment operator
//now it wil be usable allover
$variable = phpversion();

$name = 'MWALIMA';
//echo strtolower($name);
//echo "<br>";
$name = ucfirst(strtolower($name));
echo $name;
//Alternatively, you can assign the return value to a different variable, allowing you to preserve the original value, as well as the amended one