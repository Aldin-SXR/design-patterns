<?php

/**
 * Traditional furniture factory.
 */
class TraditionalFurnitureFactory implements FurnitureFactory {

    /**
     * Create a traditional bed.
     */
    public function createBed(): Bed
    {
        return new TraditionalBed();
    }

    /**
     * Create a traditional chair.
     */
    public function createChair(): Chair
    {
        return new TraditionalChair();
    }

}