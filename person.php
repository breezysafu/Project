<?php
$con = new mysqli('localhost', 'root', 'rusakhatun', 'tutorial');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Form Data In Database</title>
</head>
<body>
<form action="" method="post">
    Name : <input type="text" name="username" required>
    <br/>
    Email : <input type="text" name="email" required>
    <br/>
    <input type="submit" name="submit" value="Insert">
</form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
   // $name =$_POST['username'];
   // $email = $_POST['email'];
    $name=filter_input(INPUT_POST,'username');
    $email=filter_input(INPUT_POST,'email');
    echo $name;
    echo $email;

  $sql = "INSERT INTO person (name,email) VALUES ('$name', '$email')";
  $query = $con->query($sql);

  if ($query) {
       echo "data inserted";
   } else {
        echo "not inserted";
    }
}
?>
