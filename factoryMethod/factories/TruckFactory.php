<?php

class TruckFactory extends TransportFactory 
{
    /**
     * Create a new Truck.
     */
    public function createTransport(): Transport
    {
        return new Truck();
    }
}