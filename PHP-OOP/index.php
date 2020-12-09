<?php 
class student {
  public $id;
  public $name;
  public $email;
  public $phoneNumber;
  function __construct( $id, $name, $email, $phoneNumber) {
    $this->id          = $id;
    $this->name        = $name; 
    $this->eamil       = $email; 
    $this->phoneNumber = $phoneNumber;
 }
    function get_name($id) {
      return $this->name;
    }
    function get_phoneNumber($id) {
      return $this->phoneNumber;
    }
}
class Teacher extends student {
  public $salary;
  public $subjects = array();
  function __construct($id, $name, $email, $phoneNumber ,$salary, $subjects) {
    $this->id          = $id;
    $this->name        = $name; 
    $this->eamil       = $email; 
    $this->phoneNumber = $phoneNumber;
    $this->salary      = $salary;
    $this->subjects    = $subjects; 
  }
    function get_salary($id) {
      return $this->salary;
    }
    function get_subjects($id) {
      return $this->subjects;
    }
 }
 $student1 = new student( 123443, "Sara", "sara@orange.com" ,962777777777);
 $Teacher1 = new Teacher( 96432, 'Sadi', 'Sadi@orange.com',  962777788888 , 800, array('English', 'Arabic', 'Math', 'science'));
echo $student1 -> get_name(123443);
echo "<br>";
echo $student1 -> get_phoneNumber(123443);
echo "<br>";
echo $Teacher1 -> get_salary(96432);
echo "<br>";
print_r($Teacher1 -> get_subjects(96432)) ;
?>