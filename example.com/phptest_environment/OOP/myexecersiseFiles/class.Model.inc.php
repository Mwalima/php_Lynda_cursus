<?php
/**
 * shared interface
 */
interface Model{
/*
* load Model
* @param int $address_id
*/
static function load($address_id);

/**
 * Save a Model
 */
function save();
    
}
