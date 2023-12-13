<?php
//penerapan abstract
abstract class LibraryItem {
    protected $title;
    protected $id;

    public function __construct($title, $id) {
        $this->title = $title;
        $this->id = $id;
    }

    abstract public function displayItemInfo();
}
?>
