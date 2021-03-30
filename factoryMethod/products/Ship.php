<?php

class Ship implements Transport {

    /**
     * Ship delivery.
     */
    public function deliver()
    {
        echo "Delivered by ship.\n";
    }
}