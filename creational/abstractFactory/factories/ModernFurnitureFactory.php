<?php

/**
 * Modern furniture factory.
 */
class ModernFurnitureFactory implements FurnitureFactory {

    /**
     * Create a modern bed.
     */
    public function createBed(): Bed
    {
        return new ModernBed();
    }

    /**
     * Create a modern chair.
     */
    public function createChair(): Chair
    {
        return new ModernChair();
    }

}