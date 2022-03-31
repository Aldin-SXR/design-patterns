<?php

abstract class BookPrototype {
    protected $title;
    protected $topic;
    /**
     * @var Author
     */
    protected $author;

    /**
     * The abstract class/interface requires a clone() method.
     */
    abstract function __clone();
    
    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
        $this->author->addToBooks($this);
    }

    public function getTopic() {
        return $this->topic;
    }
}
