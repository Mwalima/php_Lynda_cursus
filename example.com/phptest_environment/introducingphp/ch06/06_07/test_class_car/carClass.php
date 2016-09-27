<?php
error_reporting(E_ALL);
/**
 * Created by PhpStorm.
 * User: stplus
 * Date: 20/09/16
 * Time: 12:55
 */
class Car
{

    public $color;
    public $make;
    public $mileage;

    public function __construct()
    {
        $this->_color;
        $this->_make;
        $this->_mileage;
    }

    public function getColor()
    {
        return $this->_color;
    }

    public function setColor($insertedColor)
    {
        $this->_color = $insertedColor;
    }

    public function getMake()
    {
        return $this->_make;
    }

    public function setMake($insertedMerk)
    {
        $this->_make = $insertedMerk;
    }

    public function getMileage()
    {
        return $this->_mileage;
    }

    public function setMileage($insertedMileage)
    {
        $this->_mileage = $insertedMileage;
    }

    public function createCar()
    {
        echo "The color of the car is " . $this->getColor();
        echo "<br>";
        echo "The make of the car is " . $this->getMake();
        echo "<br>";
        echo "The mileage of the car is " . $this->getMileage();

    }

    public function searchCarImage()
    {
        //zoek naar de selectie criteria in de map
        $dir = '/var/www/html/php_Lynda_cursus/example.com/phptest_environment/introducingphp/ch06/06_07/test_class_car/pics';
        //scan the directory for the files inside
        $files1 = scandir($dir);
        return $sSeach = $this->getColor().'_'.$this->getMake().'_'.$this->getMileage().'.jpg' ;
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car maker</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1>Car maker class</h1>

<form action="" method="POST">
    <ul>
        Insert color:<br>
        <input type="text" name="color" value="">
        <br>
        make:<br>
        <select name="make">
            <option selected="selected" disabled="disabled">pick a make</option>
            <option value="volvo">Volvo</option>
            <option value="mercedes">BMW</option>
            <option value="audi">Audi</option>
        </select>
        <br>
        mileage:<br>
        <select name="mileage">
        <option selected="selected" disabled="disabled">select mileage</option>
        <option value="old"><100.000</option>
        <option value="new">>100.000</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </ul>
</form>

<p>If you click the "Submit" button, the you`re car will be made".</p>
<?php
if (isset($_POST['color'])) {
    $newCar = new Car();
    $newCar->setColor($_POST['color']);
    $newCar->setMake($_POST['make']);
    $newCar->setMileage($_POST['mileage']);
    $newCar->createCar();
}
?>
<br><br><br>
<img src="http://localhost/php_Lynda_cursus/example.com/phptest_environment/introducingphp/ch06/06_07/test_class_car/pics/<?=$newCar->searchCarImage(); ?>" width="500" height="400" float="left">
</body>
</html>