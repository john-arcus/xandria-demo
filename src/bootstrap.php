<?php

//Add composer's autoloader
require __DIR__ . '/../vendor/autoload.php';

//Instantiate a class from the Xandria library.
$concreteORMapper = new Xandria\ConcreteDemos\DAccess\ConcreteORMapper();

//Fart out some output.
print_r($concreteORMapper->getMessages());