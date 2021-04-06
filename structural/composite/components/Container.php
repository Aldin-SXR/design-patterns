<?php
/**
 * All components in the hierarchy are a 
 * type of Container. (Product < Box < Crate)
 */
interface Container
{
    /**
     * Return the weight of a container of items.
     */
    public function totalWeight(): float;
}