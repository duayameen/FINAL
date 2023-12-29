


<?php
$connection = mysqli_connect('localhost', 'root', '', 'oop');

class Person {
    
    public $id;
    public $name;
    public $age;
    
    function __construct($id, $name, $age){
        
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    function displayInfo(){
        // echo "<h4>Person Information</h4>";
        echo "ID : ".$this->id ."<br>";
        echo "Name : ".$this->name ."<br>";
        echo "Age : ".$this->age ."";
    }
}

class Student extends Person {
    public $courseEnrolledFor;

    function __construct($id, $name, $age, $courseEnrolledFor){
        parent::__construct($id, $name, $age);
        $this->courseEnrolledFor = $courseEnrolledFor;
    }
    
    function displayInfo(){
        parent::displayInfo();
        echo "<br>Course Enrolled For : ". $this -> courseEnrolledFor;
    }
}

class Professor extends Person {
    public $courseTeach;
    
    function __construct($id, $name, $age, $courseTeach){
        parent::__construct($id, $name, $age);
        $this->courseTeach = $courseTeach;
    }

    function displayInfo(){
        parent::displayInfo();
        echo "<br>Course They Teach : ". $this -> courseTeach;
    }
}


 



$query = "SELECT * FROM student";
$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)){

    $courseEnrolledFor = $row['courserEnrolledfor'];
}
$query = "SELECT * FROM professor";
$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)){
    $courseteach = $row['courseteach'];
}
$query = "SELECT * FROM person";
$result = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $age = $row['age'];
   

echo "<h4>Student Information</h4>";
$info = new student ( $id, $name, $age , $courseEnrolledFor );
$info->displayInfo();
}



echo "<h4>Professor Information</h4>";
$info = new professor ( $id, $name, $age , $courseteach );
$info->displayInfo();


?>