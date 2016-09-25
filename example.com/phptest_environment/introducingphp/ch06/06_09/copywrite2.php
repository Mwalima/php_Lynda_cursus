<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 25-9-16
 * Time: 20:39
 */


echo getCopywright(2000);

function getCopywright($startYear)
{
    //create date and sting
    $year = Date('Y');
    if($startYear < $year){
        $year = Date('Y');
        return "&copy; $startYear&ndash;$year";

    }else {
        return "&copy; $startYear";
    }
}