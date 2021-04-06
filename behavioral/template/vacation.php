<?php

require_once 'template/Journey.php';
require_once 'BeachJourney.php';
require_once 'CityJourney.php';

/**
 * Take a beach vacation.
 */
$beachVacation = new BeachJourney();
echo $beachVacation->takeATrip() . "\n";

echo "======\n";

/**
 * Now, go to the city.
 */
$cityVacation = new CityJourney();
echo $cityVacation->takeATrip() . "\n";