<?php
require_once 'item.php';
//penerapan inheritance dan encapsulation
class Book extends LibraryItem {
    private $author;

    public function __construct($title, $id, $author) {
        parent::__construct($title, $id);
        $this->author = $author;
    }

    public function displayItemInfo() {
        return 
        "Book Title : $this->title<br> 
        ID : $this->id<br>
        Author : $this->author";
    }
}
?>
