<?php

require_once 'products/PC.php';
require_once 'products/Laptop.php';
require_once 'products/Desktop.php';

require_once 'builders/LaptopBuilder.php';
require_once 'builders/DesktopBuilder.php';
require_once 'builders/PCDirector.php';

/**
 * Build and turn on a new laptop.
 */
$laptopBuilder = new LaptopBuilder();

$laptop = $laptopBuilder
            ->addMotherboard()
            ->addPowerSupply()
            ->addGPU()
            ->addDiskSpace(250)
            ->addRAM(16)
            ->addKeyboard()
            ->addTouchpad()
            ->addScreen()
            ->build();

$laptop->turnOn();

/**
 * Build and turn on a new desktop computer.
 */
$desktopBuilder = new DesktopBuilder();

$desktop = $desktopBuilder
            ->addMotherboard()
            ->addPowerSupply()
            ->addGPU()
            ->addMonitor()
            ->addDiskSpace(512)
            ->addRAM(32)
            ->addKeyboard()
            ->addMouse()
            ->build();

$desktop->turnOn();

/**
 * Use the Director to create a laptop.
 */

 $director = new PCDirector();
 $laptopBuilder->reset();
 $laptop2 = $director->makeLaptop($laptopBuilder);

 $laptop2->turnOn();
