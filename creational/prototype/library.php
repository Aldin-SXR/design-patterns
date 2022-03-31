<?php

require_once 'BookPrototype.php';
require_once 'Author.php';
require_once 'PHPBook.php';
require_once 'SQLBook.php';

$author = new Author("Aldin Kovačević");

// Create a book
$phpBook1 = new PHPBook();
$phpBook1->setTitle('PHP Essentials');
$phpBook1->setAuthor($author);
echo "Book 1 topic: " . $phpBook1->getTopic() . "\n";
echo "Book 1 title: " . $phpBook1->getTitle() . "\n\n";

// Clone it
$phpBook2 = clone $phpBook1;
echo "Book 2 topic: " . $phpBook2->getTopic() . "\n";
echo "Book 2 title: " . $phpBook2->getTitle() . "\n\n";

echo "Books by: " . $author->getName() . ":\n";
foreach ($author->getBooks() as $book) {
    echo $book->getTitle() . "\n";
}
