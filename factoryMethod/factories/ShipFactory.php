<?php

class ShipFactory implements TransportFactory 
{
    /**
     * Create a new Ship.
     */
    public function createTransport(): Transport
    {
        return new Ship();
    }
}