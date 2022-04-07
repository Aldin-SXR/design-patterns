<?php

/* Import products */
require_once 'products/Transport.php';
require_once 'products/Ship.php';
require_once 'products/Truck.php';
require_once 'products/Airplane.php';
require_once 'products/Train.php';

/* Import factories */
require_once 'factories/TransportFactory.php';
require_once 'factories/ShipFactory.php';
require_once 'factories/TruckFactory.php';
require_once 'factories/AirplaneFactory.php';
require_once 'factories/TrainFactory.php';

/**
 * Environment setup.
 */
$choiceOfDelivery = 'train';

switch ($choiceOfDelivery) {
    case 'truck':
        $deliveryProvider = new TruckFactory();
        break;
    case 'ship':
        $deliveryProvider = new ShipFactory();
        break;
    case 'airplane':
        $deliveryProvider = new AirplaneFactory();
        break;
    case 'train':
        $deliveryProvider = new TrainFactory();
        break;
    default:
        $deliveryProvider = new TruckFactory(); // by default, we use trucks
}

/**
 * Deliver the product to the client.
 * The client treats all the products as abstract Transport.
 */
$deliveryVehicle = $deliveryProvider->createTransport();
$deliveryVehicle->deliver();