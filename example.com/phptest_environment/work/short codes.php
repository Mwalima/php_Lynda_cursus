<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: stplus
 * Date: 03/10/16
 * Time: 16:00
 */


//condition ? first_expression : second_expression;

//The condition must evaluate to true or false. If condition is true, first_expression is evaluated and becomes the result.
// If condition is false, second_expression is evaluated and becomes the result. Only one of the two expressions is evaluated.
//Either the type of first_expression and second_expression must be the same, or an implicit conversion must exist from one type to the other.
//You can express calculations that might otherwise require an if-else construction more concisely by using the conditional operator. For example, the following code uses first an if statement and then a conditional operator to classify an integer as positive or negative.

function test(int $i) : string {
    return 'ja: '.$i;
}

test('jdj');

if(true){
    echo '1';
    $truevar = '1';
}else {
    $truevar = false;

}
if($truevar){
    $truevar = '2';
}else{
    $truevar ='3';
}

$var = (true ? '1' : false) ? '2' : '3';

echo $var;