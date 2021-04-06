<?php
/**
 * Add an extra bed to the room booking.
 */
class ExtraBed extends BookingDecorator
{
    const PRICE = 30;

    public function calculatePrice(): int
    {
        /* Invoke the wrapped object's method + the wrapper logic */
        return $this->booking->calculatePrice() + self::PRICE;    
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with extra bed';
    }
}