<?php

/**
 * Factory for creating Transport objects.
 */
interface TransportFactory
{

    /**
     * Method to create an Instance of a transport
     */
    public function createTransport(): Transport;
}