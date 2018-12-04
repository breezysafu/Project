<?php

$con=new mysqli("localhost","root","rusakhatun","mydb");
if($con) {
    echo 'connected succesfully';
}
    $sql="insert into mytable1(username,password,email) VALUES ('breezysafu',12345,'breezy.safu@gmail.com')";
    $query=$con->query($sql);
    if($query === true) {
        echo 'data inserted';
    }
?>