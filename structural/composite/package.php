<?php

require_once 'components/Container.php';
require_once 'components/Product.php';
require_once 'components/Box.php';
require_once 'components/Crate.php';

/* Create three different products */
$p1 = new Product(1.5);
$p2 = new Product(2.5);
$p3 = new Product(5);

/**
 * Arrange the products into boxes, and boxes into crates.
 * Sometimes, larger products might go directly into crates.
 * In the end, everything is packed into a single, large crate.
 */

$box1 = new Box();
$box1->add($p1);
$box1->add($p1);
$box1->add($p1);

$box2 = new Box();
$box2->add($p1);
$box2->add($p2);

$crate1 = new Crate();
$crate2 = new Crate();

$crate1->add($box1);
$crate1->add($box2);

$crate2->add($p3);
$crate2->add($p3);

$crate3 = new Crate();
$crate3->add($crate1);
$crate3->add($crate2);

/* Calculate the final weight of the shipment (crate3) */
echo "Total weight: " . $crate3->totalWeight() . "\n";