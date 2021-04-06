<?php

require_once 'subsystems/Bios.php';
require_once 'subsystems/AMIBios.php';
require_once 'subsystems/OperatingSystem.php';
require_once 'subsystems/Linux.php';

require_once 'Power.php';

/**
 * Turn on the PC, then turn it back off.
 */

$ami = new AMIBios();
$linux = new Linux();

$power = new Power($ami, $linux);

$power->turnOn();
echo "======\n";
$power->turnOff();