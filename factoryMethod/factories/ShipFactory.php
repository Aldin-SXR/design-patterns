<?php

class ShipFactory extends TransportFactory 
{
    /**
     * Create a new Ship.
     */
    public function createTransport(): Transport
    {
        return new Ship();
    }
}