<?php
/**
 * Created by PhpStorm.
 * User: stplus
 * Date: 19/09/16
 * Time: 13:38
 */

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->add('Acme\\Test\\', __DIR__);



$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');


//namspacing
//\<NamespaceName>(\<SubNamespaceNames>)*\<ClassName>
//\Acme\Log\Writer\File_Writer

$geefNaam = new Foo("Mwalima");
$geefNaam->setName("mwalima");
echo $geefNaam->getName();