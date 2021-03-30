<?php

class Truck implements Transport {

    /**
     * Truck delivery.
     */
    public function deliver()
    {
        echo "Delivered by truck.\n";
    }
}