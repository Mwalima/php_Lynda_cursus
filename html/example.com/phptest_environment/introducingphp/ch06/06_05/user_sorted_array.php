<?php
/**
 * Created by PhpStorm.
 * User: stplus
 * Date: 20/09/16
 * Time: 11:38
 */
$friends = [
    ['first' => 'Amanda', 'last' => 'White'],
    ['first' => 'Jack', 'last' => 'Black'],
    ['first' => 'Jim', 'last' => 'White'],
    ['first' => 'Jane', 'last' => 'White'],
    ['first' => 'Hilary', 'last' => 'Brown'],
    ['first' => 'Harry', 'last' => 'Brown'],
    ['first' => 'Paul', 'last' => 'Green'],
    ['first' => 'Amanda', 'last' => 'Green'],
    ['first' => 'John', 'last' => 'Black'],
    ['first' => 'Diana', 'last' => 'Black']

];
//usort sorts a array on basis of user defined rules with an anonymous function in this function you can make a comparison of the elements in the array
//and compare them with the spaceship operator ( <=> this means less then, equal to of greather then the other element)
usort($friends, function($a , $b){
    return [$a['last'],$a['first']]<=> [$b['last'], $b['first']];
});
?>

<html>
<head>
    <title>User Sorted Array</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>User-Defined Sort</h1>
<ul>
<?php
foreach($friends as $friend){
    echo "<li>".implode(' ', $friend)."</li>";
}
?>
</ul>
</body>
</html>