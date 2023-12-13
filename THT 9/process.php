<?php
require_once 'member.php';
require_once 'book.php';

class Loan {
    private $borrower;
    private $item;
    private $date;

    public function __construct($borrower, $item, $date) {
        $this->borrower = $borrower;
        $this->item = $item;
        $this->date = $date;
    }

    public function displayLoanInfo() {
        return "Information Process <br><br>
        Borrower : {$this->borrower->getName()} <br>
        {$this->item->displayItemInfo()} <br>
        Date: $this->date";
    }
}
?>
