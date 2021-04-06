<?php

require_once 'components/Booking.php';
require_once 'components/DoubleRoomBooking.php';

require_once 'decorators/BookingDecorator.php';
require_once 'decorators/ExtraBed.php';
require_once 'decorators/WiFi.php';
require_once 'decorators/RoomService.php';

/* Book a double room with an extra bed and WiFi. */
$booking = new DoubleRoomBooking();
$booking = new ExtraBed($booking);
$booking = new WiFi($booking);

echo $booking->getDescription() . "\n";
echo "Price: " . $booking->calculatePrice() . "\n";

echo "======\n";

/* Book a double room with WiFi and room service */
$booking2 = new DoubleRoomBooking();
$booking2 = new WiFi($booking2);
$booking2 = new RoomService($booking2);

echo $booking2->getDescription() . "\n";
echo "Price: " . $booking2->calculatePrice() . "\n";