<?php
/**
 * Created by IntelliJ IDEA.
 * User: stplus
 * Date: 4-11-2016
 * Time: 13:05
 */
$value ="0000-00-00";
$php_date_placeholder = "d-m-Y";

//$nlFormat = date($php_date_placeholder, ($value));
//var_dump(strtotime($value));
//echo $nlFormat;

$dtime = new DateTime();
$dtime->createFromFormat($php_date_placeholder,$value);
$timestamp = $dtime->getTimestamp();
$nlFormat = date($php_date_placeholder, ($timestamp));
echo $nlFormat;