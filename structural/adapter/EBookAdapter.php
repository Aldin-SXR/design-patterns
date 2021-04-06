<?php

/**
 * The EBook-to-Book adapter.
 * It implements the Book interface, and "translates" 
 * an EBook into a Book.
 */
class EBookAdapter implements Book
{
    protected EBook $eBook;

    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * The following methods translate (ADAPT) 
     * EBook methods into Book methods.
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->presNext();
    }

    /**
     * Notice how we only return one integer, the current page,
     * in order to match the Book interface.
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}