<?php
require_once 'Employee.php';

class HourlyEmployee extends Employee {
    private $hourlyRate;
    private $hoursWorked;

    public function __construct($name, $address, $age, $companyName, $hourlyRate, $hoursWorked) {
        parent::__construct($name, $address, $age, $companyName);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function setHourlyRate($hourlyRate) {
        $this->hourlyRate = $hourlyRate;
    }

    public function setHoursWorked($hoursWorked) {
        $this->hoursWorked = $hoursWorked;
    }

    public function earnings() {
        if ($this->hoursWorked > 40) {
            $regularPay = 40 * $this->hourlyRate;
            $overtimeHours = $this->hoursWorked - 40;
            $overtimePay = $overtimeHours * 1.5 * $this->hourlyRate;
            return $regularPay + $overtimePay;
        } else {
            return $this->hoursWorked * $this->hourlyRate;
        }
    }

    public function toString() {
        return parent::toString() . "\nHourly Rate: $this->hourlyRate\nHours Worked: $this->hoursWorked\nTotal Earnings: " . $this->earnings() . "\n";
    }
}
echo "\n";
?>
