<?php
/**
 * Comparator by ID.
 */
class ById implements Comparator
{
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}