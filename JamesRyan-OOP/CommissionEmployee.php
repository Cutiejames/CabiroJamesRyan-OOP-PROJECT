<?php
require_once 'Employee.php';

class CommissionEmployee extends Employee {
    private $regularSalary;
    private $itemsSold;
    private $commissionRate;

    public function __construct($name, $address, $age, $companyName, $regularSalary, $itemsSold, $commissionRate) {
        parent::__construct($name, $address, $age, $companyName);
        $this->regularSalary = $regularSalary;
        $this->itemsSold = $itemsSold;
        $this->commissionRate = $commissionRate;
    }

    public function setRegularSalary($salary) {
        $this->regularSalary = $salary;
    }

    public function setItemsSold($itemsSold) {
        $this->itemsSold = $itemsSold;
    }

    public function setCommissionRate($commissionRate) {
        $this->commissionRate = $commissionRate;
    }

    public function earnings() {
        return $this->regularSalary + ($this->itemsSold * $this->commissionRate);
    }

    public function toString() {
        return parent::toString() . "\nRegular Salary: $this->regularSalary\nItems Sold: $this->itemsSold\nCommission Rate: $this->commissionRate\nTotal Earnings: " . $this->earnings();
    }
}
echo "\n";
?>
