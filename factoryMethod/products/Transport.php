<?php

interface Transport {

    /**
     * Common method for all transports.
     */
    public function deliver();
}