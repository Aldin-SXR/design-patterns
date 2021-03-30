<?php

/**
 * Factory for creating Transport objects.
 */
abstract class TransportFactory
{

    /**
     * Method to create an Instance of a transport
     */
    public abstract function createTransport(): Transport;
}