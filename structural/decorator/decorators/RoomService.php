<?php
/**
 * Add room service to the room booking.
 */
class RoomService extends BookingDecorator
{
    const PRICE = 50;

    public function calculatePrice(): int
    {
        /* Invoke the wrapped object's method + the wrapper logic */
        return $this->booking->calculatePrice() + self::PRICE;    
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with room service';
    }
}