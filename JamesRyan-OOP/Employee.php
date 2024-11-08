<?php

abstract class Employee extends EmployeeInfo {
    private $companyName;

    public function __construct($name, $address, $age, $companyName) {
        parent::__construct($name, $address, $age);
        $this->companyName = $companyName;
    }

    public function getCompanyName() {
        return $this->companyName;
    }

    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
    }

    public function toString() {
        return parent::toString() . "\nCompany: $this->companyName";
    }

    public function getDetails() {
 
        return $this->toString();
    }

    public abstract function earnings();
}

echo "\n";
?>
