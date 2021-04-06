<?php

/**
 * A paper Book.
 */
class PaperBook implements Book {

    private int $page;

    public function open()
    {
        echo "Reading a paper book...\n";
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}