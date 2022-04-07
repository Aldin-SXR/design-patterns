<?php

class TrainFactory implements TransportFactory 
{
    /**
     * Create a new Train.
     */
    public function createTransport(): Transport
    {
        return new Train();
    }
}