<?php

/**
 * Our Context class that chooses a different strategy.
 * In this example, it's used to sort an array.
 */
class SortContext
{
    private Comparator $comparator;
    
    public function __construct(Comparator $comparator = null)
    {
        $this->comparator = $comparator;
    }

    /**
     * Manually set or change a strategy.
     */
    public function setStrategy(Comparator $comparator) {
        $this->comparator = $comparator;
    }

    /**
     * Execute the strategy.
     */
    public function sort(array $elements): array
    {
        uasort($elements, [$this->comparator, 'compare']);
        
        return $elements;
    }
}