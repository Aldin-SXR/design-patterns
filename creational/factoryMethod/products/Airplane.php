<?php

class Airplane implements Transport {

    /**
     * Airplane delivery.
     */
    public function deliver()
    {
        echo "Delivered by airplane.\n";
    }
}