<?php

/**
 * Abstract furniture factory.
 * Lists creation methods for all products that are part of the product family.
 */
interface FurnitureFactory
{
    /**
     * Create Chairs.
     */
    public function createChair(): Chair;

    /**
     * Create Beds.
     */
    public function createBed(): Bed;
}