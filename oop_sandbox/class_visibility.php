<?php

class Student{
    public $first_name;
    public $last_name;
    public $country='none';
    protected $registration;
    private $tuition=0.00;

    public function hello_world(){
        return "hey world";
    }

    protected function hello_family(){
        return "hey family";
    }

    private function hello_me(){
        return "hey me";
    }

    public  function full_name(){
        return $this->first_name ." ". $this->last_name . "<br />";
    }
}

class PartStudent extends Student{
    public function hello_parent() {
        return $this->hello_family();
    }
}

$student1=new Student;
$st=new PartStudent;
$student1->first_name='Sarfraz';
$student1->last_name='Alam';
echo $student1->full_name();
echo $st->hello_parent();
echo $student1->first_name . ' ' . $student1->last_name . '<br />';
echo $student1->hello_world() . '<br />';
