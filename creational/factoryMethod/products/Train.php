<?php

class Train implements Transport {

    /**
     * Ship delivery.
     */
    public function deliver()
    {
        echo "Delivered by train.\n";
    }
}