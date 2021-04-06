<?php

/**
 * The common interface for all Books.
 */

interface Book
{
    public function turnPage();

    public function open();

    /**
     * Return a single page from a book.
     */
    public function getPage(): int;
}