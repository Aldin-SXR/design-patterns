<?php

/* Import products */
require_once 'products/Transport.php';
require_once 'products/Ship.php';
require_once 'products/Truck.php';

/* Import factories */
require_once 'factories/TransportFactory.php';
require_once 'factories/ShipFactory.php';
require_once 'factories/TruckFactory.php';

/**
 * Environment setup.
 */
$choiceOfDelivery = 'truck';

switch ($choiceOfDelivery) {
    case 'truck':
        $deliveryProvider = new TruckFactory();
        break;
    case 'ship':
        $deliveryProvider = new ShipFactory();
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