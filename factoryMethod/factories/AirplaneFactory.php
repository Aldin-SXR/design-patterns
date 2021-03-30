<?php

class AirplaneFactory implements TransportFactory 
{
    /**
     * Create a new Airplane.
     */
    public function createTransport(): Transport
    {
        return new Airplane();
    }
}