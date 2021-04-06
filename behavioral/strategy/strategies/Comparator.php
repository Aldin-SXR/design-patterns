<?php

/**
 * The Comparator strategy.
 * Comparing items based on different criteria.
 */
interface Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     */
    public function compare($a, $b): int;
}