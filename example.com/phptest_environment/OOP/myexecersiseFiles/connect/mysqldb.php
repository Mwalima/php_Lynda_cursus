<?php
class DBConnect {
	static $db;
	private $dbh;

	private function DBConnect() {
		try {
			$this->dbh = new PDO('mysql:host=localhost;dbname=OOP', 'root', '');
                         echo "Connected to MyGuest<p>";
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


		} catch (PDOException $e) {
			echo "Unable to connect: " . $e->getMessage() . "<p>";
		}
	}
	public static function getInstance() {
		if (!isset(DBConnect::$db)) {
            DBConnect::$db = new DBConnect();
          echo "db connection established!";
		}
		return DBConnect::$db->dbh;
    }

}
//$db_handle = DBConnectClass::getInstance();
//$servername = "localhost";
//$username = "root";
//$password = "m=191976";
//$dbname = "leerphp";
//
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//
//
//    $sql = "SELECT * FROM  MyGuests";
//
//    // Prepare statement
//    $stmt = $conn->prepare($sql);
//
//    // execute the query
//    $stmt->execute();
//
//    // echo a message to say the UPDATE succeeded
//    echo $stmt->rowCount() . " records SELECTED successfully";
//}
//catch(PDOException $e)
//{
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;

?>