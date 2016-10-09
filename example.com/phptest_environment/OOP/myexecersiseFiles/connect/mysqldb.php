<?php
class DBConnect {
	static $db;
	private $dbh;

	private function DBConnect() {
		try {
			$this->dbh = new PDO('mysql:host=localhost;dbname=leerphp', 'root', 'm=191976');
                         echo "Connected to MyGuest.leerphp<p>";
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                        
                        
		} catch (PDOException $e) {
			echo "Unable to connect: " . $e->getMessage() . "<p>";
		}
	}
	public static function getInstance() { 
		if (!isset(DBConnect::$db)) { 
			DBConnect::$db = new DBConnect();
                        //echo "db connection established!";
		} 
		return DBConnect::$db->dbh;                
    }   
    
}
$db_handle = DBConnect::getInstance();

?>