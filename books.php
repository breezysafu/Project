<?php

$con=new mysqli('localhost','root','rusakhatun','books');

//if($con->connect_errno){
  //  echo "failed to conenct with server" . $con->connect_error();
    //exit();
//}

$sql="insert into book_detail(book_name,book_author_name,book_price) VALUES ('demo book', 'binod', 230.5)";
$query=$con->query($sql);
if($query){
    echo "data inserted";
}else {
    echo "not inserted";
}

$con->close();