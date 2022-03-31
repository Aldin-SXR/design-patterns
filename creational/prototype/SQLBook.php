<?php

class SQLBook extends BookPrototype {

    function __construct() {
        $this->topic = 'SQL';
    }

    function __clone() { 
        $this->title = "Copy of " . $this->title;
        $this->author->addToBooks($this);

        // you can implement additional cloning logic here.
    }
}