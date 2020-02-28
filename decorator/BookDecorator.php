<?php

include "Book.php";

class BookTitleDecorator extends Book {
    protected $book;
    protected $title;
    public function __construct(Book $book_in) {
        $this->book = $book_in;
        $this->resetTitle();
    }
    //doing this so original object is not altered
    function resetTitle() {
        $this->title = $this->book->getTitle();
    }
    function showTitle() {
        return $this->title;
    }
}

class BookTitleExclaimDecorator extends BookTitleDecorator {
    private $btd;
    public function __construct(BookTitleDecorator $btd_in) {
        $this->btd = $btd_in;
    }
    function exclaimTitle() {
        $this->btd->title = "!" . $this->btd->title . "!";
    }
}

class BookTitleStarDecorator extends BookTitleDecorator {
    private $btd;
    public function __construct(BookTitleDecorator $btd_in) {
        $this->btd = $btd_in;
    }
    function starTitle() {
        $this->btd->title = Str_replace(" ","*",$this->btd->title);
    }
}