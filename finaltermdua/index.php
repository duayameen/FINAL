
<?php

class Person {
    protected $id;
    protected $name;
    protected $age;

    public function __construct($id, $name, $age) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    
    public function displayInfo() {
        echo "ID: {$this->id}<br>";
        echo "Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
    }
}


class Student extends Person {
    protected $courseEnrolledFor;

    public function __construct($id, $name, $age, $courseEnrolledFor) {
        parent::__construct($id, $name, $age);
        $this->courseEnrolledFor = $courseEnrolledFor;
    }

    
    public function displayInfo() {
        parent::displayInfo();
        echo "Course Enrolled For: {$this->courseEnrolledFor}<br>";
    }
}

class Professor extends Person {
   
    protected $courseTeach;

    
    public function __construct($id, $name, $age, $courseTeach) {
        parent::__construct($id, $name, $age);
        $this->courseTeach = $courseTeach;
    }

    
    public function displayInfo() {
        parent::displayInfo();
        echo "Course Teach: {$this->courseTeach}<br>";
    }
}

$student = new Student(1, "Dua", 19, "Computer Science");
$professor = new Professor(2, "Hamza Aslam", 27, "Data Science");

echo "Student Information:<br>";
$student->displayInfo();
echo "<br>";

echo "Professor Information:<br>";
$professor->displayInfo();



?>