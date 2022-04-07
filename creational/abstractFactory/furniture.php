<?php

/**
 * Improt products and factories.
 */
require_once 'products/Bed.php';
require_once 'products/ModernBed.php';
require_once 'products/TraditionalBed.php';

require_once 'products/Chair.php';
require_once 'products/ModernChair.php';
require_once 'products/TraditionalChair.php';

require_once 'factories/FurnitureFactory.php';
require_once 'factories/ModernFurnitureFactory.php';
require_once 'factories/TraditionalFurnitureFactory.php';

/**
 * 
 */
function getFurniture(FurnitureFactory $factory): void
{
    /**
     * Create and use a chair
     */
    $chair = $factory->createChair();
    $chair->sitOn();

    /**
     * Create and use a bed.
     */
    $bed = $factory->createBed();
    $bed->sleepOn();
}

/**
 * Choice of factory (based on the environment configuration or client needs).
 */
$client_preference = 'traditional';

switch ($client_preference) {
    case 'modern':
        $factory = new ModernFurnitureFactory();
        break;
    case 'traditional':
        $factory = new TraditionalFurnitureFactory();
        break;
    default:
        $factory = new TraditionalFurnitureFactory(); // traditional furniture by default
}

getFurniture($factory);