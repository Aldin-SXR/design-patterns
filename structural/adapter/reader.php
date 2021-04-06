<?php

require_once 'original/Book.php';
require_once 'original/PaperBook.php';

require_once 'adapted/EBook.php';
require_once 'adapted/Kindle.php';

require_once 'EBookAdapter.php';

/**
 * Our Reader works only with regular Books.
 * So, we have to make our EBooks compatible 
 * throuh an adapter.
 */
function readBook(Book $book) 
{
    $book->open();
    $book->turnPage();
    $book->turnPage();
    $book->turnPage();
    echo "Page: " . $book->getPage() . "\n";
}

/* Read a paper book */
$paperBook = new PaperBook();
readBook($paperBook);
echo "\n";

/* Read on a Kindle */
$kindle = new Kindle();
$adaptedBook = new EBookAdapter($kindle);
readBook($adaptedBook);