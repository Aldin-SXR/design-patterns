<?php

/**
 * A Product.
 * The simplest, non-breakable component.
 * Also known as the "leaf".
 */
class Product implements Container
{
    private float $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    /**
     * The leaf component should execute the work,
     * since they have no other components to delegate to.
     */
    public function totalWeight(): float
    {
        return $this->weight;
    }
}