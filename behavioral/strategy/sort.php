<?php

require_once 'strategies/Comparator.php';
require_once 'strategies/ByDate.php';
require_once 'strategies/ById.php';

require_once 'SortContext.php';

/**
 * Define data to be sorted.
 */
$students = [
    [ 'id' => 5, 'name' => "Aldin Kovačević", 'date' => '1997-09-08' ],
    [ 'id' => 2, 'name' => "Christie Philokrates", 'date' => '1987-11-02' ],
    [ 'id' => 17, 'name' => "Laurencia Alvin", 'date' => '2001-04-01' ],
    [ 'id' => 13, 'name' => "Marianus Carlyn", 'date' => '2001-06-30' ]
];

/**
 * Define a strategey for sorting.
 */
$sorting = new SortContext(new ById());
$sortedStudents = $sorting->sort($students);
print_r($sortedStudents);

echo "======\n";

/**
 * Change the strategy.
 */
$sorting->setStrategy(new ByDate());
$sortedStudents = $sorting->sort($students);
print_r($sortedStudents);