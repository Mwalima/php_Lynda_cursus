<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 23-10-16
 * Time: 16:15
 */
class Database{
    private $_connection;

    private static $_instance;

    /**
     * get an instance of the database
     * @return Database
     *
     */
    public static function getInstance(){
        if(!self::$_instance){
            self::$_instance = new self();
        }
        return self::getInstance();
    }

    /**
     * constructor
     */
    public function __construct()
    {        
        try {
    $this->_connection = new PDO('mysql:host=localhost;dbname=leerphp', 'root', 'm=191976');
        echo "Connected to MyGuest<p>";
        //error handling
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    }
    /*
     * Empty clone magic method to prevent application
     */
    private function __clone() {}
    
    /**
     * Get the PDO connection
     */
    public function getConnection(){
        return $this->_connection;
    }
}
