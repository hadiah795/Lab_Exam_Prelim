<?php 

class employee{
    private $employeeId;
    private $name;
    private $department;
    private $position;
    private $basicSalary;
    
    public function displayEmployeeInfo(){
        echo "Employee ID: $this->employeeId \n";
        echo "Name: $this->name \n";
        echo "Department: $this->department \n";
        echo "Position: $this->position \n";
        echo "Basic Salary: $this->basicSalary \n";
    }
    public function calculateAnnualSalary(){
        $annualSalary = $this->basicSalary * 12;
        echo "Annual Salary: $annualSalary \n";
    }
    public function __construct($employeeId, $name, $department, $position, $basicSalary){
        $this->employeeId = $employeeId;
        $this->name = $name;
        $this->department = $department;
        $this->position = $position;
        $this->basicSalary = $basicSalary;
    }
    
    public function getEmployeeId(){
        return $this->employeeId;
    }
    public function getName(){
        return $this->name;
    }
    public function getDepartment(){
        return $this->department;
    }
    public function getPosition(){
        return $this->position;
    }
    public function setBasicSalary($basicSalary){
        $this->basicSalary = $basicSalary;
    }
    
}

$employee1 = new employee("UDD001", "Blaire Roosevelt", "Hotel & Hospitality Management", "Instructor",30000);
$employee1->setBasicSalary(35000);
$employee1->displayEmployeeInfo();
$employee1->calculateAnnualSalary();
echo "\n";
$employee2 = new employee("UDD002", "Kurt Cobain", "Information Technology", "Head of Department",35000);
$employee2->setBasicSalary(40000);
$employee2->displayEmployeeInfo();
$employee2->calculateAnnualSalary();
echo "\n";
$employee3 = new employee("UDD003", "Samantha Smith", "Engineering", "Intern",25000);
$employee3->setBasicSalary(30000);
$employee3->displayEmployeeInfo();
$employee3->calculateAnnualSalary();

?>