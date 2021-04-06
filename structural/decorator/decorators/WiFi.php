<?php
/**
 * Add WiFI service to the room booking.
 */
class WiFi extends BookingDecorator
{
    const PRICE = 10;

    public function calculatePrice(): int
    {
        /* Invoke the wrapped object's method + the wrapper logic */
        return $this->booking->calculatePrice() + self::PRICE;    
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with WiFi';
    }
}