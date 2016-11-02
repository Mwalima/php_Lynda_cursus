<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 19-10-16
 * Time: 19:18
 */
class OOP{

    public $dbh;

    public function __construct($dbHandle)
    {
        $this->dbh=$dbHandle;
    }

    public function OOP_select_rows(){

        $sql = ('Select * From OOP');
        $result = $this->dbh->query($sql);
        foreach ($result as $row) {

            $table= $row['street_address_1'].", ".$row['city_name']." ,".$row['postal_code'].",".$row['time_created']."<br>";
            return $table;
        }

    }
}