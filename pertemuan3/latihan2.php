<?php

class Book {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getDetails(): string {
        return "Title: {$this->title}, Author: {$this->author}";
    }
}

$book = new Book("PHP for Beginners", "John Doe");
echo $book->getDetails();
?>