<?php

class Student{
    var $first_name;
    var $last_name;
    var $country='none';

    function say(){
        return "hey";
    }

    function full_name(){
        return $this->first_name ." ". $this->last_name . "<br />";
    }
}

$student1=new Student;
$student1->first_name='Sarfraz';
$student1->last_name='Alam';
echo $student1->full_name();

$student2=new Student;
$student2->first_name='Naresh';
$student2->last_name='Jirel';
echo $student2->full_name();


echo $student1->first_name . ' ' . $student1->last_name . '<br />';
echo $student2->first_name . ' ' . $student2->last_name . '<br />';

echo $student1->say() . '<br />';
echo $student2->say() . '<br />';

$class_methods=get_class_methods('Student');
echo "Class methods:" . implode(', ', $class_methods). "<br />";;

if(method_exists('Student','say')){
    echo "Method say() exists in Student class.<br />";
}else{
    echo "Method say() doesnt exists in Student class.<br />";

}