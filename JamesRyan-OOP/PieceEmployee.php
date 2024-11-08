<?php
require_once 'Employee.php';

class PieceEmployee extends Employee {
    private $ratePerItem;
    private $itemsProduced;

    public function __construct($name, $address, $age, $companyName, $ratePerItem, $itemsProduced) {
        parent::__construct($name, $address, $age, $companyName);
        $this->ratePerItem = $ratePerItem;
        $this->itemsProduced = $itemsProduced;
    }

    public function setRatePerItem($ratePerItem) {
        $this->ratePerItem = $ratePerItem;
    }

    public function setItemsProduced($itemsProduced) {
        $this->itemsProduced = $itemsProduced;
    }

    public function earnings() {
        return $this->ratePerItem * $this->itemsProduced;
    }

    public function toString() {
        return parent::toString() . "\nRate Per Item: $this->ratePerItem\nItems Produced: $this->itemsProduced\nTotal Earnings: " . $this->earnings();
    }
}
echo "\n";
?>
