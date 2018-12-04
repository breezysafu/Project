<?php

class Bicycle{
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;

    function name(){
        return $this->brand . $this->model . "released in the year ". $this->year . "<br />";
    }

    function weight_lbs(){
        return "Its total weight in pound is : " . ($this->weight_kg)*2.2046226218 . " lbs "." <br />";
    }

    function set_weight_lbs($value){
        $this->weight_kg=floatval($value)/2.2046226218;
    }
}

$bicycle=new Bicycle;
$bicycle->brand='Hero';
$bicycle->model=3.0;
$bicycle->year=2018;
$bicycle->description="Its a awesome bicycle";
$bicycle->weight_kg=4.67;

echo $bicycle->name();
echo $bicycle->weight_lbs();

$bicycle->set_weight_lbs(2);
echo $bicycle->weight_kg . "<br />";
echo $bicycle->weight_lbs() . "<br />";