<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 8-10-16
 * Time: 15:10
 */
class Mysql
{
    public $dbh;

    public function __construct($db_handle)
    {
        $this->dbh = $db_handle;
    }

    public function insertPerson($first_name, $last_name, $email)
    {
        $sql = ("INSERT INTO MyGuest (first_name, last_name, email) VALUES (?, ?, ?)");
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(1, $first_name);
        $stmt->bindParam(2, $last_name);
        $stmt->bindParam(3, $email);
        $stmt->execute();
        //$result = $stmt->fetch(PDO::FETCH_OBJ);

        if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset ($_POST['email'])) {
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $stmt->execute();


            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            echo "Welcome " . $firstname . ", " . $lastname . " !" . "<br>";


        }
    }
}