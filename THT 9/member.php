<?php
class LibraryMember {
    protected $memberId;
    protected $name;

    public function __construct($memberId, $name) {
        $this->memberId = $memberId;
        $this->name = $name;
    }

    public function registerMember() {
        return "Member registered: ID: $this->memberId, Name: $this->name";
    }

    public function getMemberId() {
        return $this->memberId;
    }

    public function getName() {
        return $this->name;
    }
}
?>
