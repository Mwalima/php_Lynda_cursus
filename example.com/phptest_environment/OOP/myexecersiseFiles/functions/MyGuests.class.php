<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 19-10-16
 * Time: 19:18
 */
class MyGuests{

    public $dbh;

    public function __construct($dbHandle)
    {
        $this->dbh=$dbHandle;
    }

    public function myGuests_selectRows(){

        $sql = ('Select * From MyGuests');
        $result = $this->dbh->query($sql);
        foreach ($result as $row) {

            $table= $row['firstname'].", ".$row['lastname']." ,".$row['email'].",".$row['reg_date']."<br>";
            return $table;
        }

    }
}