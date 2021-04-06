<?php

/**
 * A Kindle e-book.
 * This is the adapted class.
 */
class Kindle implements EBook
{
    private int $page = 1;
    private int $totalPages = 100;

    public function presNext()
    {
        $this->page++;
    }

    public function unlock()
    {
        echo "Reading a Kindle...\n";
        echo "Unlocked.\n";
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}