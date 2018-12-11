<?php

class User {
    var $first_name;
    var $last_name;
    var $username;

    function full_name(){
        return $this->first_name . " " . $this->last_name;
    }
}

class Customer extends User {
    var $city;
    var $first_name='sarfraj';
}

$u=new User;
$u->first_name='sarfraj';
$u->last_name='alam';
$u->username='breezysafu';

$c=new Customer;
//$c->first_name='arshal';
$c->last_name='ansari';
$c->username='arshu';
$c->city='pokhara';

echo $u->full_name();
echo $c->full_name();
echo $c->city;

echo get_parent_class($u);
echo get_parent_class($c);

if(is_subclass_of($c,'User')){
    echo "instance is a subclass of user";
}