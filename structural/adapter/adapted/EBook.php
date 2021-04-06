<?php

/**
 * An EBook.
 * This kind of object is NOT compatible
 * with a standard Book (e.g. PaperBook).
 */
interface EBook
{
    public function unlock();

    public function presNext();

    /**
     * This method returns the current page and the
     * total number of pages, e.g. [10, 100]
     */
    public function getPage(): array;
}