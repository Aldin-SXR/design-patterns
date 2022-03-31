<?php

class Author {
    private $name;

    /**
     * @var BookPrototype[]
     */
    private $books = [];

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function addToBooks(BookPrototype $book): void {
        $this->books[] = $book;
    }

    /**
     * @return BookPrototype[]
     */
    public function getBooks() {
        return $this->books;
    }
}
