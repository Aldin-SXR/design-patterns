<?php

/**
 * A Box.
 */
class Box implements Container
{
    /** @var Container */
    private array $elements;

    /**
     * Add a new Container inside this Container.
     */
    public function add(Container $element)
    {
        $this->elements[] = $element;
    } 

    public function totalWeight(): float
    {
        $weight = 0;

        foreach ($this->elements as $element) {
            $weight += $element->totalWeight();
        }

        return $weight;
    }
}