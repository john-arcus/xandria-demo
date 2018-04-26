<?php

//Add composer's autoloader
require __DIR__ . '/../vendor/autoload.php';

//Instantiate a class from the Xandria library.
$concreteORMapper = new Xandria\ConcreteDemos\DAccess\ConcreteORMapper();

//Fart out some output.
if( is_array( $concreteORMapper->getMessages() ) ) {
    echo "Seems OK"  . PHP_EOL;
} else {
    //throw error
    echo "Something broke" . PHP_EOL;
    exit(1);
}
exit(0);
