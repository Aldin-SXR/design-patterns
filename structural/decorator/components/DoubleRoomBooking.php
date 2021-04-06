<?php
/**
 * A standard double-room booking.
 */
class DoubleRoomBooking implements Booking
{
    public function calculatePrice(): int
    {
        return 50;
    }

    public function getDescription(): string
    {
        return "Double room";
    }
}