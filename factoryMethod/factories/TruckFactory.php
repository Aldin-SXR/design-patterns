<?php

class TruckFactory implements TransportFactory 
{
    /**
     * Create a new Truck.
     */
    public function createTransport(): Transport
    {
        return new Truck();
    }
}