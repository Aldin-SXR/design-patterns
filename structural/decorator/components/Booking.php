<?php

/**
 * A common Booking interface.
 * All bookings should have these features.
 */
interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}